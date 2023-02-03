<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PanneauResource;
use App\Http\Requests\StorePanneauRequest;
use App\Models\Panneau;
use Illuminate\Http\Request;

class PanneauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Panneaus = Panneau::all();
        return $Panneaus;
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
    public function store(StorePanneauRequest $request)
    {
        $panneaus = Panneau::create($request->all());
        
        return new PanneauResource($panneaus);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Panneau  $panneau
     * @return \Illuminate\Http\Response
     */
    public function show(Panneau $panneau)
    {
        $panneaudetail = Panneau::find($panneau);
        return $panneaudetail;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Panneau  $panneau
     * @return \Illuminate\Http\Response
     */
    public function edit(Panneau $panneau)
    {
        $panneauedit = Panneau::find($panneau);
        return $panneauedit;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Panneau  $panneau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Panneau $panneau)
    {
        Panneau::where('id', $panneau)->update($request->all());
        return redirect('panneaus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Panneau  $panneau
     * @return \Illuminate\Http\Response
     */
    public function destroy(Panneau $panneau)
    {
        //
    }
}
