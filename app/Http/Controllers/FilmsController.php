<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFilmsRequest;
use App\Http\Requests\UpdateFilmsRequest;
use App\Models\Films;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreFilmsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Films $films)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Films $films)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmsRequest $request, Films $films)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Films $films)
    {
        //
    }
}
