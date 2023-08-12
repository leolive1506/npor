<?php

namespace App\Http\Controllers\GroupParticipant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FragmentValueController extends Controller
{
    public function create()
    {
        return view('pages.group-participant.fragment-value');
    }

    public function store()
    {
        $isAllParticipants = request('is_all_participants');

        if ($isAllParticipants) {
            dd('all');
        }

        dd('no all');

        return dd(request()->all());
    }
}
