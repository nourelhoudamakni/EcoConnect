<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Collaborateur; 

class ProductController extends Controller
{

    public function create()
{
    $collaborateurs = Collaborateur::all(); // Retrieve all collaborators
    return view('frontOffice.MarketPlace.AddNewProduct', compact('collaborateurs'));
}

public function AddProduct(Request $request)
{
    $request->validate([
        'titre' => 'required|string',
        'prix' => 'required',
        'description' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ], [
        'titre.required' => 'Titre obligatoire',
        'description.required' => 'Description est obligatoire',
        'prix.required' => 'Prix est obligatoire',
        'image.required' => 'Image est obligatoire',
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        
        // Define the storage path (you can customize this as needed)
        $storagePath = 'public/images';
    
        // Generate a unique filename for the uploaded image
        $imageName = time() . rand(1, 99) . '.' . $image->getClientOriginalExtension();
    
        // Move the uploaded image to the specified storage path with the unique filename
        $image->move($storagePath, $imageName);
    
        // Save the image's filename (or full path, depending on your needs) in your data array
        
    } else {
        // Handle the case where no file was uploaded
    }

    $newProduct = new Product([
        'titre' => $request->input('titre'),
        'prix' => $request->input('prix'),
        'description' => $request->input('description'),
        'image' => $imageName,
    ]);

    // Set the user_id to the ID of the currently logged-in user
    $newProduct->user_id = auth()->id();

    // Check if a collaborateur is selected
    if ($request->filled('collaborateur_id')) {
        // Get the selected collaborateur from the form
        $collaborateur = Collaborateur::find($request->input('collaborateur_id'));

        if ($collaborateur) {
            // Associate the product with the collaborateur
            $collaborateur->products()->save($newProduct);
        } else {
            // Handle the case where the collaborateur doesn't exist
        }
    } else {
        // If no collaborateur is selected, save the product without associating it with any collaborateur
        $newProduct->save();
    }

    return back()->with('success', 'Ajout avec succès');
}







public function edit(Product $Product)
{
    $collaborateurs = Collaborateur::all(); // Fetch the collaborateurs
    return view('frontOffice.MarketPlace.UpdateProduct', compact('Product', 'collaborateurs'));
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
        'prix.required' => 'Prix est obligatoire',
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

    // Get the selected collaborateur_id from the form
    $collaborateurId = $request->input('collaborateur_id');

    if (!empty($collaborateurId)) {
        // Find the collaborateur by the selected collaborateur_id
        $collaborateur = Collaborateur::find($collaborateurId);

        if ($collaborateur) {
            // Associate the product with the selected collaborateur
            $Product->collaborateur()->associate($collaborateur);
        } else {
            // Handle the case where the collaborateur doesn't exist
        }
    } else {
        // If "None" is selected, disassociate the product from any collaborateur
        $Product->collaborateur()->dissociate();
    }

    // Update all fields in the Product model
    $Product->update($data);

    return back()->with('success', 'Mise à jour avec succès');
}



//show products
public function showProducts()
{
    // Get the currently authenticated user
    $user = Auth::user();

    // Fetch products that are validated and not belonging to the current user
    $products = Product::where('user_id', '!=', $user->id)
                       ->where('validated', true)
                       ->get();

    return view('frontOffice/MarketPlace/MyMarketPlace', ['products' => $products]);
}




public function destroy(Product $Product)
{
    $Product->delete();

    return back()->with('success', 'Suppression avec succès');
}


public function showMyProducts()
{
    // Get the currently authenticated user
    $user = Auth::user();

    // Retrieve the products associated with the user
    $products = $user->products;
    $products1 = Product::where('user_id', '!=', $user->id)->get();
    // $randomProduct = $products1->random();

    return view('frontOffice/MarketPlace/marketPlace', ['products' => $products]);
}



public function detailsProd($id)
    {
        $prod = Product::find($id);
        return view('frontOffice/MarketPlace/ProduitDetails', ['prod' => $prod]);
    }





    public function showProductsAdmin()
    {
        // Fetch all products
        $products = Product::all();
    
        return view('backOffice/ListProduits', ['products' => $products]);
    }


    public function like(Product $product)
{
    $product->increment('likes');
    $product->save();

    return back()->with('success', 'Product liked successfully!');
}

public function validateProduct(Product $product)
{
    // Set the product as validated
    $product->update(['validated' => true]);
    return back()->with('success', 'Produit validé avec succée');
}


public function showAllProductsAdmin()
{
    // Fetch unvalidated products
    $unvalidatedProducts = Product::where('validated', false)->get();

    // Fetch validated products
    $validatedProducts = Product::where('validated', true)->get();

    return view('backOffice.ListProduits', compact('unvalidatedProducts', 'validatedProducts'));
}



}
