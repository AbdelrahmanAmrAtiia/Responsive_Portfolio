<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SkillDetail;
use App\Models\Skill;

class SkillDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skillDetails = SkillDetail::all();

        return view('AdminPages.skillDetailPages.index')-> with('skillDetails', $skillDetails);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skills = Skill::all();

        return view('AdminPages.skillDetailPages.create')->with('skills', $skills);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skillDetail = new SkillDetail();
        $skillDetail->name = $request->input('name');
        $skillDetail->percentage = $request->input('percentage');
        $skillDetail->skill_id = $request->input('skill_id');
        $skillDetail->save();
        return redirect(route('skillDetail.index'));
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
        $skillDetail = SkillDetail::find($id);
        $skills = Skill::all();

        return view('AdminPages.skillDetailPages.edit')->with('skillDetail', $skillDetail)
        ->with('skills', $skills);
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
        $skillDetail = SkillDetail::find($id);
        $skillDetail->name = $request->input('name');
        $skillDetail->percentage = $request->input('percentage');
        $skillDetail->skill_id = $request->input('skill_id');
        $skillDetail->save();
        return redirect(route('skillDetail.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skillDetail = SkillDetail::find($id);
        $skillDetail->delete();
        return redirect(route('skillDetail.index'));
    }
}
