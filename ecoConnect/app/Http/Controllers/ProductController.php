<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function create()
    {
        return view('frontOffice.MarketPlace.AddNewProduct.create');
    }

    public function AddProduct(Request $request)
    {
    $request->validate([
        'titre' => 'required|string',
        'prix' => 'required',
        'description' => 'required|string|max:255',
        'images' => 'required|array',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Make sure 'images' is an array
    ]
    ,[
        'titre.required' => 'Titre obligatoire',

        'description.required' => 'Description est obligatoire',

        'images.required' => 'Image est obligatoire',

    ]);


    $data = $request->all(); // Get all form data

    $images = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imageName = time() . rand(1, 99) . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $images[] = $imageName;
        }
    }

    $data['images'] = json_encode($images);
    // Create the model with all the data
    $newProduct = Product::create($data);

    return back()->with('success', 'Ajout avec succès');
}
}
