<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PortfolioSection;

class PortfolioSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ports = PortfolioSection::all();

        return view('AdminPages.portfolioSectionPages.index')->with('ports', $ports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPages.portfolioSectionPages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $port = new PortfolioSection();

        $port->name = $request->input('name');
        $port->description = $request->input('description');
        $port->link = $request->input('link');

        if($request->hasFile("image"))
        {
            $port->image = $request->image->store('images','public');
        }

        $port->save();

        return redirect(route('port.index'));

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
        $port = PortfolioSection::find($id);

        return view('AdminPages.portfolioSectionPages.edit')->with('port', $port);
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
        $port = PortfolioSection::find($id);

        $port->name = $request->input('name');
        $port->description = $request->input('description');
        $port->link = $request->input('link');

        if($request->hasFile("image"))
        {
            $port->image = $request->image->store('images','public');
        }

        $port->save();

        return redirect(route('port.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $port = PortfolioSection::find($id);

        $port->delete();

        return redirect(route('port.index'));
    }
}
