<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Support\Constants\PublicImages;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Image;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $photo = $request->file('photo');

        if ($photo) {
            $data['photo'] = $photo->store('user/' . auth()->id());

            $publicPath = public_path($data['photo']);
            $imageObject = Image::make($publicPath);
            $with = null;
            $height = 400;
            $quality = 80;

            $imageObject->resize($with, $height, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($publicPath, $quality);

            if (auth()->user()->photo != PublicImages::DEFAULT_PROFILE) {
                Storage::delete(auth()->user()->photo);
            }
        }

        $request->user()->fill($data);

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('success', 'Salvo com sucesso');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
