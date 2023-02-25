<?php

namespace App\Http\Controllers;

use App\Models\Biere;


use App\Models\Notation;
use App\Models\Register;
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
    public function storeUser(Request $req )
    {
        $req->validate([
            "nom"=>"required",
            "email"=>"required",
            "password"=> "required"
        ]);
        $user= new Register([
            "nom"=>$req->get("nom"),
            "email"=>$req->get("email"),
            "password"=>$req->get("password"),

        ]);
        $user->save();
        return redirect("/accueil")->with("success","User Ajouter Avec Success");

    }
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
        //formulaire de modification
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //action de modification
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //suppression de bierres delete() + redirection
    }
    public function Auth( )
    {

        echo "<pre>";

        $id = $_POST["email"];
        $user = Register::find($id);
        print_r($user);
        /*if($user)
        {
            return redirect("/accueil")->with("message","Bienvenu".$id->nom);
        }
        else
        {
            return redirect("/login")->with("message","Email ou mot de passe incorrect ") ;
        }*/
    }
}
