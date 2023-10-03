<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});


Route::get('/menuDashboard', function () {
    return view('backOffice/menuDashboard');
});

Route::get('/listUsers', function () {
    return view('backOffice/listUsers');
});

Route::get('/dashboard', function () {
    return view('backOffice/dashboard');
});

Route::get('/Accueil', function () {
    return view('frontOffice/accueil');
});

Route::get('/Profile-User', function () {
    return view('frontOffice/profileUser');
});
Route::get('/Groupes', function () {
    return view('frontOffice/groupes');
});
Route::get('/Market-Place', function () {
    return view('frontOffice/MarketPlace/marketPlace');
});
Route::get('/My-Market-Place', function () {
    return view('frontOffice/MarketPlace/MyMarketPlace');
});
Route::get('/AddProduct', function () {
    return view('frontOffice/MarketPlace/AddNewProduct');
});
Route::get('/Projets-Environnementales', function () {
    return view('frontOffice/projetsEnv');
});
Route::get('/Acte-Volontaire', function () {
    return view('frontOffice/acteVolontaire');
});

Route::get('/Produit-Details', function () {
    return view('frontOffice/produitDetails');
});

Route::get('/menu', function () {
    return view('frontOffice/menu');
});
Route::get('/Account-information', function () {
    return view('frontOffice/accountInformation');
});
Route::get('/Mes-Actes-Volontaires', function () {
    return view('frontOffice/mesActesVolontaires');
});


Route::get('/Produit-create',[ProductController::class,'create'])->name('Produit.create');
Route::post('/newProduit',[ProductController::class,'AddProduct'])->name('Produit.store');

Route::get('/Produit-update/{Product}/edit',[ProductController::class,'edit'])->name('Produit.edit');
Route::put('/UpdateProduit/{Product}',[ProductController::class,'update'])->name('products.update');

Route::get('/Produits',  [ProductController::class, 'showProducts'])->name('products');

Route::delete('/deleteProduit/{Product}',  [ProductController::class, 'destroy'])->name('destroyProduct');



