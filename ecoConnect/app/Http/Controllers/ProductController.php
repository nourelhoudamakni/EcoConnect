<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function create()
    {
        return view('frontOffice.MarketPlace.AddNewProduct');
    }

    public function AddProduct(Request $request)
    {
    $request->validate([
        'titre' => 'required|string',
        'prix' => 'required',
        'description' => 'required|string|max:255',
        'image' => 'required',
        'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Make sure 'images' is an array
    ]
    ,[
        'titre.required' => 'Titre obligatoire',

        'description.required' => 'Description est obligatoire',

        'prix.required' => 'prix est obligatoire',

        'image.required' => 'Image est obligatoire',

    ]);


    $data = $request->all(); // Get all form data

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        
        // Define the storage path (you can customize this as needed)
        $storagePath = 'public/images';
    
        // Generate a unique filename for the uploaded image
        $imageName = time() . rand(1, 99) . '.' . $image->getClientOriginalExtension();
    
        // Move the uploaded image to the specified storage path with the unique filename
        $image->move($storagePath, $imageName);
    
        // Save the image's filename (or full path, depending on your needs) in your data array
        $data['image'] = $imageName;
    } else {
        // Handle the case where no file was uploaded
    }
    // Create the model with all the data
    $newProduct = Product::create($data);

    return back()->with('success', 'Ajout avec succès');
}

public function edit(Product $Product)
{
    return view('frontOffice.MarketPlace.UpdateProduct', compact('Product'));
}

public function update(Request $request, Product $Product)
{
    $request->validate([
        'titre' => 'required|string',
        'description' => 'required|string|max:255',
        'prix' => 'required',
    ], [
        'titre.required' => 'Titre obligatoire',
        'description.required' => 'Description est obligatoire',
        'prix' => 'required',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        
        // Define the storage path (you can customize this as needed)
        $storagePath = 'public/images';
    
        // Generate a unique filename for the uploaded image
        $imageName = time() . rand(1, 99) . '.' . $image->getClientOriginalExtension();
    
        // Move the uploaded image to the specified storage path with the unique filename
        $image->move($storagePath, $imageName);
    
        // Save the image's filename (or full path, depending on your needs) in your data array
        $data['image'] = $imageName;
    } else {
        // Handle the case where no file was uploaded
    }
    

    $Product->update($data);

    return back()->with('success', 'Mise à jour avec succès');
}


//show products
public function showProducts()
{
    $products = Product::all();
    return view('frontOffice/MarketPlace/marketPlace', ['products' => $products]);
}

public function destroy(Product $Product)
{
    $Product->delete();

    return back()->with('success', 'Suppression avec succès');
}

}
