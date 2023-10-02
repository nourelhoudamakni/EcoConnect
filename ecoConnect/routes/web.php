<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActeVolontaireController;
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
    return view('frontOffice/marketPlace');
});
Route::get('/Projets-Environnementales', function () {
    return view('frontOffice/projetsEnv');
});
Route::get('/Acte-Volontaire', function () {
    return view('frontOffice/Acte/acteVolontaire');
});
Route::get('/Mes-Actes-Volontaires', function () {
    return view('frontOffice/Acte/mesActesVolontaires');
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
Route::get('/Actes-show',  [ActeVolontaireController::class, 'show'])->name('Acte.show');
Route::get('/Acte-create',[ActeVolontaireController::class,'create'])->name('Acte.create');
Route::post('/newActe',[ActeVolontaireController::class,'store'])->name('Acte.store');


Route::get('/acteVolontaire/{acteVolontaire}/edit', [ActeVolontaireController::class, 'edit'])->name('Acte.edit');
Route::put('/acteVolontaire/{acteVolontaire}', [ActeVolontaireController::class, 'update'])->name('Acte.update');


Route::delete('/acteVolontaire/{acteVolontaire}', [ActeVolontaireController::class, 'destroy'])->name('Acte.destroy');

Route::resource('acte-volontaires', ActeVolontaireController::class);
