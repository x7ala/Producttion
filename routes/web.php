<?php

use App\Http\Controllers\HaberlerController;
use App\Http\Controllers\HizmetlerimizController;
use App\Http\Controllers\RefsController;
use App\Http\Controllers\SistemlerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Yonet;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\AbtUsController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\SystemsController;
use App\Http\Controllers\Frontend\ReferencesController;
use App\Http\Controllers\Frontend\ContactUsController;

use App\Http\Controllers\AboutController;

// frontend
Route::get('/', [Yonet::class, 'homepage'])->name('homepage');
Route::get('/sanatcilar', [Yonet::class, 'sanatcilar'])->name('sanatcilar');
Route::get('/haberler', [NewsController::class, 'index']);
Route::get('/hakkimizda', [AbtUsController::class, 'index']);
Route::get('/hizmetlerimiz', [ServicesController::class, 'index']);
Route::get('/sistemler', [SystemsController::class, 'index']);
Route::get('/referanslarimiz', [ReferencesController::class, 'index']);
Route::get('/iletisim', [ContactUsController::class, 'index'])->name('contact.index');
Route::post('/iletisim', [ContactUsController::class, 'store'])->name('contact.store');
Route::get('/hizmet/{link}', [ServicesController::class, 'detail']);
Route::get('/sistem/{link}', [SystemsController::class, 'detail']);
Route::get('/haber/{link}', [NewsController::class, 'detail']);

// backend
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin-abouts', [AboutController::class, 'index']);
    Route::get('/admin-abouts/create', [AboutController::class, 'create']);
    Route::get('/admin-abouts/edit/{id}', [AboutController::class, 'edit']);
    Route::post('/post-abouts', [AboutController::class, 'store']);
    Route::post('/update-abouts/{id}', [AboutController::class, 'update']);
    Route::get('/admin-abouts/delete/{id}', [AboutController::class, 'destroy']);


    Route::get('/admin-news', [HaberlerController::class, 'index']);
    Route::get('/admin-news/create', [HaberlerController::class, 'create']);
    Route::get('/admin-news/edit/{id}', [HaberlerController::class, 'edit']);
    Route::post('/post-news', [HaberlerController::class, 'store']);
    Route::post('/update-news/{id}', [HaberlerController::class, 'update']);
    Route::get('/admin-news/delete/{id}', [HaberlerController::class, 'destroy']);


    Route::get('/admin-references', [RefsController::class, 'index']);
    Route::get('/admin-references/create', [RefsController::class, 'create']);
    Route::get('/admin-references/edit/{id}', [RefsController::class, 'edit']);
    Route::post('/post-references', [RefsController::class, 'store']);
    Route::post('/update-references/{id}', [RefsController::class, 'update']);
    Route::get('/admin-references/delete/{id}', [RefsController::class, 'destroy']);


    Route::get('/admin-services', [HizmetlerimizController::class, 'index']);
    Route::get('/admin-services/create', [HizmetlerimizController::class, 'create']);
    Route::get('/admin-services/edit/{id}', [HizmetlerimizController::class, 'edit']);
    Route::post('/post-services', [HizmetlerimizController::class, 'store']);
    Route::post('/update-services/{id}', [HizmetlerimizController::class, 'update']);
    Route::get('/admin-services/delete/{id}', [HizmetlerimizController::class, 'destroy']);


    Route::get('/admin-systems', [SistemlerController::class, 'index']);
    Route::get('/admin-systems/create', [SistemlerController::class, 'create']);
    Route::get('/admin-systems/edit/{id}', [SistemlerController::class, 'edit']);
    Route::post('/post-systems', [SistemlerController::class, 'store']);
    Route::post('/update-systems/{id}', [SistemlerController::class, 'update']);
    Route::get('/admin-systems/delete/{id}', [SistemlerController::class, 'destroy']);


    Route::get('/admin-abouts', [AboutController::class, 'index']);
    Route::get('/admin-abouts/create', [AboutController::class, 'create']);
    Route::get('/admin-abouts/edit/{id}', [AboutController::class, 'edit']);
    Route::post('/post-abouts', [AboutController::class, 'store']);
    Route::post('/update-abouts/{id}', [AboutController::class, 'update']);
    Route::get('/admin-abouts/delete/{id}', [AboutController::class, 'destroy']);

});
