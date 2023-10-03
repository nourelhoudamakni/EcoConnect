<?php
use App\Http\Controllers\ProjetEnvController;
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

Route::get('/Acte-Volontaire', function () {
    return view('frontOffice/acteVolontaire');
});

Route::post('/addProjetsEnvironnementales', [ProjetEnvController::class, 'store'])->name('projets.store');

Route::get('/Projets-Environnementales',  [ProjetEnvController::class, 'showProjects'])->name('projetEnv');

Route::get('/Projets-Environnementales/AddProjetEnvironnementales', function () {
    return view('frontOffice/projetEnv/formAddProject');
})->name('addProjetEnv');

Route::get('/projets-environnementaux/{id}/modifier', [ProjetEnvController::class, 'modifierProjet'])->name('modifierProjetEnv');

Route::Delete('/projets-environnementaux/{id}', [ProjetEnvController::class, 'supprimerProjet'])->name('supprimerProjet');



Route::get('/Produit-Details', function () {
    return view('frontOffice/produitDetails');
});

Route::get('/menu', function () {
    return view('frontOffice/menu');
});

Route::post('/projets-environnementaux/{id}/modifier', [ProjetEnvController::class, 'sauvegarderModificationProjet'])->name('sauvegarderModificationProjet');

Route::get('/Account-information', function () {
    return view('frontOffice/accountInformation');
});
Route::get('/Mes-Actes-Volontaires', function () {
    return view('frontOffice/mesActesVolontaires');
});

