<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $films = Film::all();
        return view('films.index', ['films' => $films]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('films.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $films = $request->all();
        Film::create($films);
        return redirect('films');
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('films.show', ['film' => $film]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('films.edit', ['film' => $film]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $films = $request->all();
        $film->update($films);
        return redirect('films');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        //
    }
}
