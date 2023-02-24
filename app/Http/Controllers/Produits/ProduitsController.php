<?php

namespace App\Http\Controllers\Produits;

use App\Http\Controllers\Controller;

class ProduitsController extends Controller
{
    //
    public function index()
    {
        return view("Components.Produits.index");
    }
}
