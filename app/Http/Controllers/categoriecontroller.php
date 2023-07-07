<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;

class categoriecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = categorie::all();

        dd($kategori);
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
        $kategori = categorie::create([
            'name' => 'BathRoom',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categorie $categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(categorie $categorie)
    {
        //
    }
}
