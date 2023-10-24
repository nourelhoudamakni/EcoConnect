<?php

use App\Http\Controllers\AdminBlogFeedbackController;
use App\Http\Controllers\ProjetEnvController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DonController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CollaborateurController;
use App\Http\Controllers\ActeVolontaireController;
use App\Http\Controllers\FeedbackController;
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
    Route::get('admin/login', [AdminController::class, 'loginForm'])->name('admin.login.form');
    Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login');
});

///////////route après le login admin
Route::middleware([
    'auth.admin:sanctum,admin',
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
Route::get('/Apprentissage', [EducationController::class, 'showAllBlogs'])->name('AllBlogs');
Route::get('/MesApprentissage', [EducationController::class, 'showMyBlogs'])->name('MyBlogs');
Route::get('/Apprentissage/form', [EducationController::class, 'createBlog'])->name('Blog.Form');
Route::post('/Apprentissage/Add', [EducationController::class, 'storeBlog'])->name('store.blog');
Route::get('/Apprentissage/Details/{id}', [EducationController::class, 'showBlog'])->name('details.blog');
Route::get('/Apprentissage/Edit/{id}', [EducationController::class, 'editForm'])->name('edit.blog');
Route::put('/Apprentissage/update/{id}', [EducationController::class, 'updateBlog'])->name('blog.update');
Route::delete('/Apprentissage/destroy/{id}', [EducationController::class, 'destroyBlog'])->name('Blog.destroy');
Route::get('/blog/searchByCategorie', [EducationController::class, 'searchByCategorie'])->name('blog.searchByCategorie');;

//////////////////////////////////routes commentaires
Route::post('/feedback/Add/{idBlog}', [FeedbackController::class, 'storeFeedback'])->name('store.feedBack');
Route::get('/get-feedback/{id}', [FeedbackController::class, 'getFeedback']);
Route::post('/update-feedback/{id}', [FeedbackController::class, 'update'])->name('feedback.update');
Route::delete('/delete/destroy/{id}', [FeedbackController::class, 'destroyFeedback'])->name('feedback.destroy');
//////////////////////////////////////routes dashboard admin
Route::get('/List-Articles', [AdminBlogFeedbackController::class, 'showAllBlogsAdmin'])->name('AllBlogsAdmin');
Route::post('/validate-blog/{blogId}', [AdminBlogFeedbackController::class, 'validateBlog'])->name('validate.blog');
Route::post('/nonvalidate-blog/{blogId}', [AdminBlogFeedbackController::class, 'nonValidateBlog'])->name('nonvalidate.blog');
Route::delete('/destroy/{blogId}', [AdminBlogFeedbackController::class, 'destroyBlogbyAdmin'])->name('destroy.blog.admin');
Route::get('/details/article/{blogId}', [AdminBlogFeedbackController::class, 'detailsArticleAdmin'])->name('details.blog.admin');
Route::delete('/destroy/feedback/admin/{feedbackId}', [AdminBlogFeedbackController::class, 'destroyFeedbackadmin'])->name('destroy.feedback.admin');
Route::delete('/get-feedback-admin/{feedbackId}', [AdminBlogFeedbackController::class, 'getFeedbackAdmin'])->name('get.feedback.admin');
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
Route::get('/MesProduits',  [ProductController::class, 'showMyProducts'])->name('MesProduits');
Route::get('/Produit/Details/{id}',  [ProductController::class, 'detailsProd'])->name('Prod.details');
Route::delete('/deleteProduit/{Product}',  [ProductController::class, 'destroy'])->name('destroyProduct');
Route::put('/products/{product}/like', [ProductController::class, 'like'])->name('products.like');



///////////routes collaborateurs
Route::get('/collaborateurs/create', 'CollaborateurController@create')->name('collaborateurs.create');
Route::post('/collaborateurs', 'CollaborateurController@store')->name('collaborateurs.store');
Route::get('/collaborateurs-create', [CollaborateurController::class, 'create'])->name('collaborateurs.create');
Route::get('/NewCollaborateur', [CollaborateurController::class, 'createCollab'])->name('collaborateurs.createCollab');

Route::post('/collaborateurs', [CollaborateurController::class, 'store'])->name('collaborateurs.store');

Route::get('/collaborateurs',  [CollaborateurController::class, 'showCollaborateurs'])->name('collaborateurs');
Route::get('/Collaborateur-update/{Collaborateur}/edit', [CollaborateurController::class, 'edit'])->name('Collaborateur.edit');
Route::put('/UpdateCollaborateur/{Collaborateur}', [CollaborateurController::class, 'update'])->name('collaborateurs.update');
Route::delete('/deleteCollaborateur/{Collaborateur}',  [CollaborateurController::class, 'destroy'])->name('destroyCollaborateur');
Route::post('/products/search', [ProductController::class, 'search'])->name('products.search');

////////////////////////////////admin-hamza
Route::get('/dashboardAdmin/ListProduits', [ProductController::class, 'showAllProductsAdmin'])->name('showProducts');
Route::get('/dashboardAdmin/ListCollaborateurs', [CollaborateurController::class, 'showAllCollaborateurs'])->name('showAllCollaborateurs');
Route::put('/dashboardAdmin/validate/{product}', [ProductController::class, 'validateProduct'])->name('validateProduct');
Route::get('/dashboardAdmin/createCollabAdmin', [CollaborateurController::class, 'createCollabAdmin'])->name('createCollabAdmin');


///////////////////////////////AdminProjetEnv
Route::get('/admin/projetEnvironnemental', [AdminProjetController::class, 'showAllProject'])->name('Admin.show.ProjetEnv');
Route::delete('/Adminprojects/{project}', [AdminProjetController::class, 'destroy'])->name('Admin.projects.destroy');
Route::get('/AdminProjet/{id}', [AdminProjetController::class, 'showDetails'])->name('Admin.projet.details');
Route::post('/projets/search', [AdminProjetController::class, 'search'])->name('Admin.projets.search');
