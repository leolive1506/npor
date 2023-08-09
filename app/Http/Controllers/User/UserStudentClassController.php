<?php

namespace App\Http\Controllers\User;

use App\Actions\User\UserStudentClassAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserStudentClassRequest;
use App\Models\StudentClass;
use App\Models\UserStudentClass;
use App\Support\Constants\Position;
use Illuminate\Http\Request;
use Image;

class UserStudentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user.user-student-class.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreUserStudentClassRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserStudentClassRequest $request)
    {
        $photo = $request->file('photo');
        $code_class_id = hash('md5', now()->toDateTimeString());
        $filepath = '';

        if ($photo) {
            $filepath = $photo->store('student-class');

            $publicPath = public_path($filepath);
            $imageObject = Image::make($publicPath);
            $with = null;
            $height = 400;
            $quality = 80;

            $imageObject->resize($with, $height, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($publicPath, $quality);
        }

        $studentClassData = [
            'name' => strtoupper($request->name),
            'description' => ucfirst($request->description),
            'code_class_id' => $code_class_id,
            'photo' => $filepath
        ];

        $studentClass = StudentClass::create($studentClassData);

        UserStudentClassAction::execute(auth()->user()->id, $studentClass->id, Position::SHERIFF);

        return redirect()->route('dashboard.index')->with('success', 'Pelotão criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
