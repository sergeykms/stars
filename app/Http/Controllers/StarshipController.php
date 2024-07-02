<?php

namespace App\Http\Controllers;

use App\Models\Starship;
use Illuminate\Http\Request;

class StarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('starships.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Starship $starship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Starship $starship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Starship $starship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Starship $starship)
    {
        //
    }
}
