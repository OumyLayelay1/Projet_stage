<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\RestoController;
use App\Http\Controllers\ContacteController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\LogerController;
use App\Http\Controllers\DivertirController;
use App\Http\Controllers\BougerController;
use App\Http\Controllers\CadeauController;
use App\Http\Controllers\GalleriImageController;
use App\Http\Controllers\HoraireController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/accueil', [FrontendController::class, 'index'])->name('accueil');
Route::get('/', [FrontendController::class, 'index'])->name('accueil');
Route::get('/pays', [FrontendController::class, 'pays'])->name('pays');
Route::get('/localisation-resto', [FrontendController::class, 'resto'])->name('localisation-resto');
Route::get('/destination', [FrontendController::class, 'destination'])->name('destination');
Route::get('/localisation-marche', [FrontendController::class, 'marche'])->name('localisation-marche');
Route::get('/reserve', [FrontendController::class, 'reserve'])->name('reserve');
Route::get('/langue', [FrontendController::class, 'langue'])->name('langue');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontendController::class, 'contactSend'])->name('contact');
Route::get('/countries',[CountryController::class, 'view']);

Route::group(['middleware' => 'auth'], function(){
    Route::resource('/restos', RestoController::class);

    Route::resource('/contactes', ContacteController::class);

    Route::resource('/sliders', SliderController::class);
    
    Route::resource('/countries', CountryController::class);
    
    Route::resource('/logers', LogerController::class);
    
    Route::resource('/divertirs', DivertirController::class);
    
    Route::resource('/bougers', BougerController::class);
    
    Route::resource('/cadeaus', CadeauController::class);
    
    Route::resource('/galleri_images', GalleriImageController::class);

    Route::resource('/horaires', HoraireController::class);

});
