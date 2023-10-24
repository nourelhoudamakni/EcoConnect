<?php

use App\Http\Controllers\ProjetEnvController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ActeVolontaireController;
use App\Http\Controllers\ProfilesettingsController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AdminProjetController;

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

Route::get('/listUsers', function () {
    return view('backOffice/listUsers');
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

Route::get('/My-Market-Place', function () {
    return view('frontOffice/MarketPlace/MyMarketPlace');
});
Route::get('/AddProduct', function () {
    return view('frontOffice/MarketPlace/AddNewProduct');
});

Route::get('/Mes-actes-Volontaires', function () {
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
Route::get('/My-Projets-Environnementales',  [ProjetEnvController::class, 'showMyproject'])->name('MyprojetEnv');
Route::get('/Projets-Environnementales/AddProjetEnvironnementales', function () {return view('frontOffice/projetEnv/formAddProject');})->name('addProjetEnv');
Route::get('/projects/{project}/tasks/create',  [TaskController::class, 'create'])->name('tasks.create');
Route::post('/project/{project}/task', [TaskController::class,'store'])->name('tasks.store');
Route::delete('/tasks/{taskId}', [TaskController::class, 'deleteTask'])->name('tasks.delete');
Route::get('/projets/{id}', [ProjetEnvController::class, 'showDetails'])->name('projet.details');
Route::get('/projets-environnementaux/{id}/modifier', [ProjetEnvController::class, 'modifierProjet'])->name('modifierProjetEnv');
Route::Delete('/projets-environnementaux/{id}', [ProjetEnvController::class, 'supprimerProjet'])->name('supprimerProjet');
Route::post('/projets-environnementaux/{id}/modifier', [ProjetEnvController::class, 'sauvegarderModificationProjet'])->name('sauvegarderModificationProjet');
Route::put('/tasks/{taskId}', [TaskController::class, 'updateTask'])->name('tasks.update');
////////////////////////route education env
Route::get('/tasks/{taskId}/edit', [TaskController::class, 'editTask'])->name('tasks.edit');
Route::get('/Apprentissage', [EducationController::class, 'showAllContenu'])->name('contenu.index');
Route::get('/Apprentissage/Ajout-formulaire', [EducationController::class, 'formContenuEducative'])->name('contenu.Add');
Route::post('/Apprentissage/Ajout', [EducationController::class, 'store'])->name('Ajout.contenu');
Route::get('/Apprentissage/Details/{id}', [EducationController::class, 'showContenu'])->name('details.contenu');
Route::get('/Apprentissage/Edit/{id}', [EducationController::class, 'editContenu'])->name('edit.contenu');
Route::put('/Apprentissage/update/{id}', [EducationController::class, 'updateContenu'])->name('contenu.update');
Route::delete('/Apprentissage/destroy/{id}', [EducationController::class, 'destroyContenu'])->name('contenu.destroy');


////////////////////////////routes post
Route::get('/profile', [PostController::class, 'profile'])->name('user.profile');
Route::get('/PostCreate', [PostController::class, 'create'])->name('Posts.create');
Route::post('/newPost', [PostController::class, 'store'])->name('Posts.store');
Route::get('/Edit/{id}', [PostController::class, 'edit'])->name('Posts.edit');
Route::put('/update/{id}', [PostController::class, 'update'])->name('Posts.update');
Route::delete('/destroy/{id}', [PostController::class, 'destroy'])->name('Posts.destroy');


////////////////////////route actes volontaires
Route::get('/Acteadmin-create', [ActeVolontaireController::class, 'createAdActe'])->name('Acte.Admin.create');
Route::get('/AllActes',  [ActeVolontaireController::class, 'index'])->name('Acte.index');
Route::get('/Mes-Actes',  [ActeVolontaireController::class, 'showMesActes'])->name('MesActe.show');
Route::get('/Actes',  [ActeVolontaireController::class, 'show'])->name('Acte.show');
Route::get('/Acte-create', [ActeVolontaireController::class, 'create'])->name('Acte.create');
Route::post('/newActe', [ActeVolontaireController::class, 'store'])->name('Acte.store');
Route::get('/acteVolontaire/{acteVolontaire}/edit', [ActeVolontaireController::class, 'edit'])->name('Acte.edit');
Route::put('/acteVolontaire/{acteVolontaire}', [ActeVolontaireController::class, 'update'])->name('Acte.update');
Route::delete('/acteVolontaire/{acteVolontaire}', [ActeVolontaireController::class, 'destroy'])->name('Acte.destroy');
Route::get('/acteVolontaire/Details/{id}',  [ActeVolontaireController::class, 'detailsActe'])->name('Acte.details');

Route::post('/acteParticipate/{id}', [ActeVolontaireController::class,'participate'])->name('Acte.participate');

Route::get('/Acte/searchByCategorie', [ActeVolontaireController::class, 'searchByCategorie'])->name('Acte.searchByCategorie');;
Route::get('/Acte/searchByLocation', [ActeVolontaireController::class, 'searchByLieu'])->name('Acte.searchByLocation');
Route::get('/acte-volontaire/search', [ActeVolontaireController::class, 'search'])->name('acte-volontaire.search');

Route::put('/Acte/validate/{acte}', [ActeVolontaireController::class, 'validateActe'])->name('validateActe');
Route::get('/dashboardAdmin/Listactes', [ActeVolontaireController::class, 'showAllActesAdmin'])->name('showActes');
Route::resource('acte-volontaires', ActeVolontaireController::class);

////////////////////////route Don
Route::get('/Don/new', [DonController::class, 'create'])->name('Don.show');
Route::post('/Don/create/{idActe}', [DonController::class, 'storeDon'])->name('Don.store');
Route::delete('/Don/{don}', [DonController::class, 'destroy'])->name('Don.destroy');
Route::get('/Don/{don}/edit', [DonController::class, 'edit'])->name('Don.edit');
Route::put('/don/update/{don}', [DonController::class ,'updateDon'])->name('Don.updateDon');


////////////////////////route produits
Route::get('/Produit-create', [ProductController::class, 'create'])->name('Produit.create');
Route::post('/newProduit', [ProductController::class, 'AddProduct'])->name('Produit.store');
Route::get('/Produit-update/{Product}/edit', [ProductController::class, 'edit'])->name('Produit.edit');
Route::put('/UpdateProduit/{Product}', [ProductController::class, 'update'])->name('products.update');
Route::get('/Produits',  [ProductController::class, 'showProducts'])->name('products');
Route::delete('/deleteProduit/{Product}',  [ProductController::class, 'destroy'])->name('destroyProduct');

Route::get('/collaborateurs/create', 'CollaborateurController@create')->name('collaborateurs.create');
Route::post('/collaborateurs', 'CollaborateurController@store')->name('collaborateurs.store');

///////////////////////////////AdminProjetEnv
Route::get('/admin/projetEnvironnemental', [AdminProjetController::class, 'showAllProject'])->name('Admin.show.ProjetEnv');
Route::delete('/Adminprojects/{project}', [AdminProjetController::class, 'destroy'])->name('Admin.projects.destroy');
Route::get('/AdminProjet/{id}', [AdminProjetController::class, 'showDetails'])->name('Admin.projet.details');
Route::post('/projets/search', [AdminProjetController::class, 'search'])->name('Admin.projets.search');



