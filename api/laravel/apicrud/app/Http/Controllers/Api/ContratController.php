<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contrat;
use App\Http\Resources\ContratResource;
use App\Http\Requests\StoreContratRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Contrats = Contrat::all();
        return $Contrats;
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
        Contrat::create($request->all());

        // return new ContratResource($contrats);
        // DB::table('contrats')->insert([
        //     "nom_contrat"=> $request->nom_contrat,
        //     "dateDebut"=> $request->dateDebut,
        //     "dateFin"=> $request->dateFin,
        //     "client_id"=> $request->client_id

        // ]);
        return json_encode("ooooook contrat store");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function show(int $contrat)
    {
        $contratdetail = Contrat::find($contrat);
        return $contratdetail;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function edit(Contrat $contrat)
    {
        $contratedit = contrat::find($contrat);
        return $contratedit;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contrat $contrat)
    {
        Contrat::where('id', $contrat)->update($request->all());
        return redirect('contrats');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $contrat)
    {
        DB::table('contrats')->where('id',  $contrat)->delete();
        return json_encode("Contrat supprimé avec succès");
    }
}
