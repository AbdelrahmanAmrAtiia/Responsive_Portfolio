<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Home;
use App\Models\About;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Work;
use App\Models\PortfolioSection;
use App\Models\Contact;
use App\Models\Resume;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = Home::all()->first();
        $about = About::all()->first();
        $skills = Skill::all();
        $educations = Education::all();
        $works = Work::all();
        $ports = PortfolioSection::all();
        $contact = Contact::all()->first();
        $resume = Resume::all()->first();

        return view('EndUserPages.portfolio')
        ->with('home', $home)
        ->with('about', $about)
        ->with('skills', $skills)
        ->with('educations', $educations)
        ->with('works', $works)
        ->with('ports', $ports)
        ->with('contact', $contact)
        ->with('resume', $resume);
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
