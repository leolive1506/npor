<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserStudentClassRequest;
use App\Models\StudentClass;
use App\Models\UserStudentClass;
use App\Support\Constants\Position;
use Illuminate\Http\Request;

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
        /* TODO: UPLOAD PHOTO */
        $studentClassData = array_merge($request->only(['name', 'description']), ['code_class_id' => hash('md5', now()->toDateTimeString())]);
        $studentClass = StudentClass::create($studentClassData);

        $userStudentClass = UserStudentClass::create([
            'user_id' => auth()->user()->id,
            'student_class_id' => $studentClass->id,
            'position_id' => Position::SHERIFF
        ]);

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
