<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        $produits = Produit::all();

        return view('example.index', ['produits' => $produits]);
    }
}
