<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;


use App\Models\Resume;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resume = Resume::all();

        return view('AdminPages.ResumePages.index')->with('resume', $resume);
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
        $resume = new Resume();

        if($request->hasFile("resume"))
        {
            $resume->resume = $request->resume->store('images','public');
            $resume->resumeHash = $request->file('resume')->hashName();
        }

        $resume->save();
        return redirect(route('resume.index'));
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
        $resume = Resume::find($id);

        if($request->hasFile("resume"))
        {
            $resume->resume = $request->resume->store('images','public');
            $resume->resumeHash = $request->file('resume')->hashName();
        }

        $resume->save();
        return redirect(route('resume.index'));
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

    public function getDownload($filename)
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/storage/images/" . $filename;

        $headers = array(
            'Content-Type: application/*',
        );

        $extension = \File::extension($filename);

	 // take file, the name of file to download with this name, headers 
        return Response::download($file, "Abdelrahman Amr" . "." . $extension , $headers);
       
    }


}
