<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit; // Import your model

class DashboardController extends Controller
{
    public function index()
    {
        // Retrieve actual data from the 'produits' table
        $products = Produit::all();

        return Inertia::render('dashboard', ['products' => $products]);
    }
}
