<?php

namespace App\Http\Controllers;

use App\student_info;
use Illuminate\Http\Request;
use Auth;
use App\SkillQuestion;

class StudentInfoController extends Controller
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
        $skill_questions = SkillQuestion::all();
        return view('personalitytest',compact('skill_questions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $param = $request->all();
        
        $personalitytest['Openness'] = $param['Openness'];
        $personalitytest['Conscientiousness'] = $param['Conscientiousness'];
        $personalitytest['Extraverted'] = $param['Extraverted'];
        $personalitytest['Agreeableness'] = $param['Agreeableness'];
        $personalitytest['Neuroticism'] = $param['Neuroticism'];

        $jsonskill = json_encode($param['skill'], JSON_FORCE_OBJECT);
        
        $personalityscore = json_encode($personalitytest);
        
        


        $student_info = new student_info();
        $student_info->personality  = $personalityscore; 
        $student_info->skill        = $jsonskill; 
        $student_info->cgpa         = $param['cgpa']; 
        $student_info->user_id      = Auth::user()->id;
        $student_info->save();

        dd("yeay");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student_info  $student_info
     * @return \Illuminate\Http\Response
     */
    public function show(student_info $student_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student_info  $student_info
     * @return \Illuminate\Http\Response
     */
    public function edit(student_info $student_info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student_info  $student_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student_info $student_info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student_info  $student_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(student_info $student_info)
    {
        //
    }
}
