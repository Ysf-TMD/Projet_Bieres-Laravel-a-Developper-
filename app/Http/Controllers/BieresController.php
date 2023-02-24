<?php

namespace App\Http\Controllers;

use App\Models\Biere;


use App\Models\Notation;
use Database\Seeders\BieresTableSeeder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BieresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bieres=Biere::all();
        return view("accueil",compact("bieres"));
    }
    public function apropos()
    {
        return view("apropos");
    }
    public function contact()
    {
        return view("contact");
    }

    public function list()
    {
        $bieres=Biere::all();
        return view("liste",compact("bieres"));
    }
    public function login()
    {
        return view("auth.login");
    }
    public function notation($id)
    {
       return view("notation.component",compact("notations"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $biere=Biere::find($id);
        $notations=Notation::all();
        return view ("show",compact("biere" , "notations" ));

    }
    public function register()
    {
        return view('auth.register');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
