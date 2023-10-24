<?php

use App\Http\Controllers\ProjetEnvController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ActeVolontaireController;
use App\Http\Controllers\ProfilesettingsController;

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
    Route::get('/dashboard', [PostController::class, 'Accueil'])->name('dashboard');
});

/////route pour le login admin
Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login', [AdminController::class, 'loginForm']);
    Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login');
});

///////////route après le login admin
Route::middleware([
    'auth:sanctum,admin',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('backOffice/dashboardAdmin');
    })->name('dashboard')->middleware('auth:admin');
});

///////quelques routes
Route::get('/menuDashboard', function () {
    return view('backOffice/menuDashboard');
});
Route::get('/listPost', function () {
    return view('backOffice.Post.listPosts');
});

Route::get('/dashboardAdmin', function () {
    return view('backOffice/dashboardAdmin');
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
Route::get('/Account-information', function () {
    return view('frontOffice/accountInformation');
});


////////////////////////route settings profile
Route::get('/profile/information', [ProfilesettingsController::class, 'profileInformation'])->name('user.profile.information');
Route::get('/profile/settings', [ProfilesettingsController::class, 'profileSettings'])->name('user.profile.settings');
Route::get('/profile/update/password', [ProfilesettingsController::class, 'updatePassword'])->name('user.update.password');

////////////////////////route projets env
Route::post('/addProjetsEnvironnementales', [ProjetEnvController::class, 'store'])->name('projets.store');
Route::get('/Projets-Environnementales',  [ProjetEnvController::class, 'showProjects'])->name('projetEnv');
Route::get('/Projets-Environnementales/AddProjetEnvironnementales', function () {return view('frontOffice/projetEnv/formAddProject');})->name('addProjetEnv');
Route::get('/projets-environnementaux/{id}/modifier', [ProjetEnvController::class, 'modifierProjet'])->name('modifierProjetEnv');
Route::Delete('/projets-environnementaux/{id}', [ProjetEnvController::class, 'supprimerProjet'])->name('supprimerProjet');
Route::post('/projets-environnementaux/{id}/modifier', [ProjetEnvController::class, 'sauvegarderModificationProjet'])->name('sauvegarderModificationProjet');


////////////////////////route education env
Route::get('/Apprentissage', [EducationController::class, 'showAllContenu'])->name('contenu.index');
Route::get('/Apprentissage/Ajout-formulaire', [EducationController::class, 'formContenuEducative'])->name('contenu.Add');
Route::post('/Apprentissage/Ajout', [EducationController::class, 'store'])->name('Ajout.contenu');
Route::get('/Apprentissage/Details/{id}', [EducationController::class, 'showContenu'])->name('details.contenu');
Route::get('/Apprentissage/Edit/{id}', [EducationController::class, 'editContenu'])->name('edit.contenu');
Route::put('/Apprentissage/update/{id}', [EducationController::class, 'updateContenu'])->name('contenu.update');
Route::delete('/Apprentissage/destroy/{id}', [EducationController::class, 'destroyContenu'])->name('contenu.destroy');


////////////////////////////routes post
Route::get('/profile', [PostController::class, 'profile'])->name('user.profile');
//Route::get('/PostCreate', [PostController::class, 'create'])->name('Posts.create');
Route::post('/newPost', [PostController::class, 'store'])->name('Posts.store');
Route::get('/Edit/{id}', [PostController::class, 'edit'])->name('Posts.edit');
Route::put('/update/{id}', [PostController::class, 'update'])->name('Posts.update');
Route::delete('/destroy/{id}', [PostController::class, 'destroy'])->name('Posts.destroy');
Route::get('/post/{posts_id}', [PostController::class,'singlePost'])->name("single-post");
Route::post('/comment/store/{idPost}', [CommentController::class, 'storeComment'])->name('Comment.store');
Route::delete('/comment/destroy/{id}', [CommentController::class, 'destroy'])->name('Comment.destroy');
Route::put('/comment/update/{id}', [CommentController::class, 'update'])->name('Comment.update');
Route::post('/like/{idPost}', [PostController::class, 'like'])->name('Posts.like');
Route::post('/dislike/{idPost}', [PostController::class, 'dislike'])->name('Posts.dislike');
 // Post backOffice
Route::get('/dash/listPosts', [PostController::class, 'affiche'])->name('Posts.affiche');

Route::delete('/destroy/{id}', [PostController::class, 'destroyPost'])->name('Posts.destroyPost');
Route::get('/detailPost/{posts_id}', [PostController::class,'detailsPost'])->name("detailsPost");
Route::delete('/comment/destroyComment/{id}', [CommentController::class, 'destroyComment'])->name('destroyComment');









////////////////////////route actes volontaires
Route::get('/Actes-show',  [ActeVolontaireController::class, 'show'])->name('Acte.show');
Route::get('/Acte-create', [ActeVolontaireController::class, 'create'])->name('Acte.create');
Route::post('/newActe', [ActeVolontaireController::class, 'store'])->name('Acte.store');
Route::get('/acteVolontaire/{acteVolontaire}/edit', [ActeVolontaireController::class, 'edit'])->name('Acte.edit');
Route::put('/acteVolontaire/{acteVolontaire}', [ActeVolontaireController::class, 'update'])->name('Acte.update');
Route::delete('/acteVolontaire/{acteVolontaire}', [ActeVolontaireController::class, 'destroy'])->name('Acte.destroy');
Route::resource('acte-volontaires', ActeVolontaireController::class);

////////////////////////route produits
Route::get('/Produit-create', [ProductController::class, 'create'])->name('Produit.create');
Route::post('/newProduit', [ProductController::class, 'AddProduct'])->name('Produit.store');
Route::get('/Produit-update/{Product}/edit', [ProductController::class, 'edit'])->name('Produit.edit');
Route::put('/UpdateProduit/{Product}', [ProductController::class, 'update'])->name('products.update');
Route::get('/Produits',  [ProductController::class, 'showProducts'])->name('products');
Route::delete('/deleteProduit/{Product}',  [ProductController::class, 'destroy'])->name('destroyProduct');

Route::get('/collaborateurs/create', 'CollaborateurController@create')->name('collaborateurs.create');
Route::post('/collaborateurs', 'CollaborateurController@store')->name('collaborateurs.store');





