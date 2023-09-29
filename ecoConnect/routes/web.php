<?php

use Illuminate\Support\Facades\Route;

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
