<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\participantController;
use App\Http\Controllers\visiteurController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\IntervenantController;
use App\Http\Controllers\ParevenementController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SessionController;

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

Route::get('/organisateursetcomites', function () {
    return view('static_views.organisateursetcomites');
});
Route::get('/progpdf', function () {
    return view('static_views.pdf');
});


Route::get('/presentation', function () {
    return view('static_views.presentation');
});
Route::get('/datesclesetlieux', function () {
    return view('static_views.datesclesetlieux');
});
Route::get('/Expositions et performances', function () {
    return view('static_views.Expositions et performances');
});
Route::get('/conferenciersinvites', function () {
    return view('static_views.conferenciersinvites');
});
Route::get('/participants', function () {
    return view('static_views.participants');
});
Route::get('/hebergement', function () {
    return view('static_views.hebergement');
});
Route::get('/soireemusicales', function () {
    return view('static_views.soireemusicales');
});
Route::get('/foiredulisvre', function () {
    return view('static_views.foiredulisvre');
});
Route::get('/decouvrir', function () {
    return view('static_views.decouvrir');
});
Route::get('/presentation2', function () {
    return view('static_views.presentation2');
});
Route::get('/infosp', function () {
    return view('static_views.infosp');
});
Route::get('/infospratique', function () {
    return view('static_views.infospratique');
});
Route::get('/Festival du Films', function () {
    return view('static_views.Festival du Films');
});
Route::get('/Rencontres thématiques', function () {
    return view('static_views.Rencontres thématiques');
});

Route::get('/galerie', function () {
    return view('static_views.galerie');
});
Route::get('/exposition', function () {
    return view('static_views.exposition');
});
Route::get('/ceremoniedouverture', function () {
    return view('static_views.ceremoniedouverture');
});
Route::get('/partenaires', function () {
    return view('static_views.partenaires');
});
Route::get('/Evènementsscientifiques', function () {
    return view('static_views.Evènementsscientifiques');
});
Route::get('/Événements Satellites', function () {
    return view('static_views.Événements Satellites');
});

Route::get('/w', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('adminp');
});
Route::get('/registration/{lang}', function ($lang) {
    if($lang=="en"){
        App::setLocale('en');
    }
    else{
        App::setLocale('fr');
    }

     return view('registration',['lang'=>$lang]);
 });

//Updates
Route::get('/conference/{id}',[ConferenceController::class, 'show']) ;

//dash
Route::get('/dashboard_visiteur', [DashboardController::class, 'showvisiteur'])->middleware(auth::class); ;

 Route::get('/dashboard', [DashboardController::class, 'show'])->middleware(auth::class); ;
 Route::get('/dashboard_add', [DashboardController::class, 'showadd']) ->middleware(auth::class);
 Route::get('/dashboard/delete/{id}', [DashboardController::class, 'delete']) ->middleware(auth::class);
  Route::post('/dashboard/create', [DashboardController::class, 'store']) ->middleware(auth::class);;

  Route::get('/dashboard/edit/{id}',[DashboardController::class, 'editconf'])->middleware(auth::class); 
  Route::get('/dashboard_addinter', [DashboardController::class, 'showInter'])->middleware(auth::class); 
  Route::get('/dashboard/deleteInter/{id}', [DashboardController::class, 'deleteInter'])->middleware(auth::class);  

  Route::post('/dashboard/createinter', [DashboardController::class,'storeInter'])->name('intervenant.create')->middleware(auth::class);;
  Route::post('/dashboard/update', [DashboardController::class,'updateConf'])->name('intervenant.update')->middleware(auth::class);;



Route::get('/adminv', [visiteurController::class, 'show'])->middleware(auth::class);
Route::get('/adminp', [participantController::class, 'show'])->middleware(auth::class);
Route::get('/home', [participantController::class, 'show'])->middleware(auth::class);

Route::post('/vcreate', [visiteurController::class, 'create']);
Route::post('/pcreate/{lang}', [participantController::class, 'create']);
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->middleware(auth::class);
Route::get('/update/{id}', [participantController::class, 'confirmation'])->middleware(auth::class);


Route::get('/listadmin', [AdminController::class, 'showAllAdmin'])->middleware(auth::class);
Route::get('/deladmin/{id}', [AdminController::class, 'deleteAdmin'])->middleware(auth::class);

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->middleware(auth::class);


Auth::routes();

Route::get('/{lang}', function ($lang) {
    App::setLocale($lang);
    return view('static_views.index');
});Route::get('/', function () {
   return redirect('/fr');
   /* App::setLocale('fr');
    return view('static_views.index');*/
});

Route::any('{query}', function() { return view('errors.1'); })->where('query', '.*');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/home', )
