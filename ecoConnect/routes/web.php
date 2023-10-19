<?php
use App\Http\Controllers\ProjetEnvController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
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

///////////route après le login user
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/////route pour le login admin
Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login',[AdminController::class, 'loginForm']);
    Route::post('admin/login',[AdminController::class, 'store'])->name('admin.login');
});

///////////route après le login admin
Route::middleware([
    'auth:sanctum,admin',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware('auth:admin');
});

Route::get('/menuDashboard', function () {
    return view('backOffice/menuDashboard');
});

Route::get('/listUsers', function () {
    return view('backOffice/listUsers');
});

Route::get('/dashboardAdmin', function () {
    return view('backOffice/dashboardAdmin');
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
    return view('frontOffice/acteVolontaire');
});

Route::get('/My-Market-Place', function () {
    return view('frontOffice/MarketPlace/MyMarketPlace');
});
Route::get('/AddProduct', function () {
    return view('frontOffice/MarketPlace/AddNewProduct');
});

Route::get('/Acte-Volontaire', function () {
    return view('frontOffice/Acte/acteVolontaire');
});
Route::get('/Mes-Actes-Volontaires', function () {
    return view('frontOffice/Acte/mesActesVolontaires');
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
Route::get('/Account-information', function () {
    return view('frontOffice/accountInformation');
});
Route::get('/Mes-Actes-Volontaires', function () {
    return view('frontOffice/mesActesVolontaires');
});


Route::get('/Apprentissage', [EducationController::class, 'showAllContenu'])->name('contenu.index');
Route::get('/Apprentissage/Ajout-formulaire',[EducationController::class,'formContenuEducative'])->name('contenu.Add');
Route::post('/Apprentissage/Ajout',[EducationController::class,'store'])->name('Ajout.contenu');
Route::get('/Apprentissage/Details/{id}',[EducationController::class,'showContenu'])->name('details.contenu');
Route::get('/Apprentissage/Edit/{id}',[EducationController::class,'editContenu'])->name('edit.contenu');
Route::put('/Apprentissage/update/{id}', [EducationController::class,'updateContenu'])->name('contenu.update');
Route::delete('/Apprentissage/destroy/{id}', [EducationController::class,'destroyContenu'])->name('contenu.destroy');
// Route::get('/userprofile', [PostController::class,'showProfile']);
Route::get('/ListDesPosts', [PostController::class, 'index'])->name('Posts.index');
Route::get('/PostCreate',[PostController::class,'create'])->name('Posts.create');
Route::post('/newPost', [PostController::class, 'store'])->name('Posts.store');
Route::get('/Edit/{id}',[PostController::class,'edit'])->name('Posts.edit');
Route::put('/update/{id}', [PostController::class,'update'])->name('Posts.update');
Route::delete('/destroy/{id}', [PostController::class,'destroy'])->name('Posts.destroy');

Route::post('/projets-environnementaux/{id}/modifier', [ProjetEnvController::class, 'sauvegarderModificationProjet'])->name('sauvegarderModificationProjet');

Route::get('/Account-information', function () {
    return view('frontOffice/accountInformation');
});
Route::get('/Actes-show',  [ActeVolontaireController::class, 'show'])->name('Acte.show');
Route::get('/Acte-create',[ActeVolontaireController::class,'create'])->name('Acte.create');
Route::post('/newActe',[ActeVolontaireController::class,'store'])->name('Acte.store');


Route::get('/Produit-create',[ProductController::class,'create'])->name('Produit.create');
Route::post('/newProduit',[ProductController::class,'AddProduct'])->name('Produit.store');

Route::get('/Produit-update/{Product}/edit',[ProductController::class,'edit'])->name('Produit.edit');
Route::put('/UpdateProduit/{Product}',[ProductController::class,'update'])->name('products.update');

Route::get('/Produits',  [ProductController::class, 'showProducts'])->name('products');

Route::delete('/deleteProduit/{Product}',  [ProductController::class, 'destroy'])->name('destroyProduct');



Route::get('/acteVolontaire/{acteVolontaire}/edit', [ActeVolontaireController::class, 'edit'])->name('Acte.edit');
Route::put('/acteVolontaire/{acteVolontaire}', [ActeVolontaireController::class, 'update'])->name('Acte.update');


Route::delete('/acteVolontaire/{acteVolontaire}', [ActeVolontaireController::class, 'destroy'])->name('Acte.destroy');

Route::resource('acte-volontaires', ActeVolontaireController::class);
