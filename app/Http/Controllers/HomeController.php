<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {

        // Initialize the query builder for the Product model
        $query = Product::with('variations'); // Eager load the variations relationship

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('name', 'like', "%{$searchTerm}%");
        }

        $data = [
            'products' => $query->get(),            
        ];

        // dd($data);
        return view('frontend/home', $data);
    }
}
