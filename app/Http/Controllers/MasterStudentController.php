<?php

namespace App\Http\Controllers;

use App\Models\MasterStudent;
use Illuminate\Http\Request;

class MasterStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $data = MasterStudent::where('instructor_id')
        $masterStudent = MasterStudent::all(); 
        return view('dashboard.master_student.student', compact('masterStudent'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MasterStudent  $masterStudent
     * @return \Illuminate\Http\Response
     */
    public function show(MasterStudent $masterStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasterStudent  $masterStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterStudent $masterStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MasterStudent  $masterStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterStudent $masterStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasterStudent  $masterStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterStudent $masterStudent)
    {
        //
    }
}
