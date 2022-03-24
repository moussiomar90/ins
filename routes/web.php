<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\participantController;
use App\Http\Controllers\visiteurController;
use App\Http\Controllers\AdminController;
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
Route::get('/organisateursetcomites', function () {
    return view('static_views.organisateursetcomites');
});
Route::get('/', function () {
    return view('static_views.index');
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
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/w', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('adminp');
});







Route::get('/adminv', [visiteurController::class, 'show'])->middleware(auth::class);
Route::get('/adminp', [participantController::class, 'show'])->middleware(auth::class);
Route::get('/del/{id}', [participantController::class, 'confirmation'])->middleware(auth::class);
Route::get('/home', [participantController::class, 'show'])->middleware(auth::class);


Route::get('/listadmin', [AdminController::class, 'showAllAdmin'])->middleware(auth::class);
Route::get('/deladmin/{id}', [AdminController::class, 'deleteAdmin'])->middleware(auth::class);

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->middleware(auth::class);


Auth::routes();

Route::any('{query}', function() { return view('errors.1'); })->where('query', '.*');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/home', )
