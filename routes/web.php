<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix'=>'tour'], function(){
    Route::get('/home', [\App\Http\Controllers\TourController::class, 'Tour'])->name('tour_home');
    Route::get('/tour', [\App\Http\Controllers\TourController::class, 'TourCategory'])->name('tour_category');
    Route::get('/tour{id}', [\App\Http\Controllers\TourController::class, 'TourCategoryTour'])->name('tour_category_tour');
    Route::get('/social{id}', [\App\Http\Controllers\SocialController::class, 'FacebookRender'])->name('render_social');
});
Route::get('/auth', function(){
    return view('admin/auth');
});
Route::group(['middleware'=>['role:admin'], 'prefix'=>'admin'], function(){
    Route::get('/home', [\App\Http\Controllers\AdminController::class, 'Admin'])->name('admin_home');
    Route::get('/tour', [\App\Http\Controllers\AdminTourController::class, 'AdminTour'])->name('admin_tour');
    Route::post('/tour_add', [\App\Http\Controllers\AdminTourController::class, 'AdminTourAddShow'])->name('admin_tour_add_show');
    Route::post('/tour_add_new', [\App\Http\Controllers\AdminTourController::class, 'AdminTourAdd'])->name('admin_tour_add');
    Route::delete('/tour_delete{id}', [\App\Http\Controllers\AdminTourController::class, 'AdminTourDelete'])->name('admin_tour_delete');
    Route::post('/tour_update{tour_id}', [\App\Http\Controllers\AdminTourController::class, 'AdminTourUpdateShow'])->name('admin_tour_update_show');
    Route::put('/tour_update{tour_id}', [\App\Http\Controllers\AdminTourController::class, 'AdminTourUpdate'])->name('admin_tour_update');
   
    Route::get('/categories', [\App\Http\Controllers\AdminCategoryController::class, 'AdminCategory'])->name('admin_category');
    Route::post('/categories', [\App\Http\Controllers\AdminCategoryController::class, 'AdminCategoryAddShow'])->name('admin_category_add_show');
    Route::post('/categories_new', [\App\Http\Controllers\AdminCategoryController::class, 'AdminCategoryAdd'])->name('admin_category_add');
    Route::delete('/categories_delete{id}', [\App\Http\Controllers\AdminCategoryController::class, 'AdminCategoryDelete'])->name('admin_category_delete');
    Route::post('/categories_update{id}', [\App\Http\Controllers\AdminCategoryController::class, 'AdminCategoryUpdateShow'])->name('admin_category_update_show');
    Route::put('/categories_update{id}', [\App\Http\Controllers\AdminCategoryController::class, 'AdminCategoryUpdate'])->name('admin_category_update');
   
    Route::get('/days', [\App\Http\Controllers\AdminDaysController::class, 'AdminDays'])->name('admin_days');
    Route::post('/days', [\App\Http\Controllers\AdminDaysController::class, 'AdminDaysAddShow'])->name('admin_days_add_show');
    Route::post('/days_new', [\App\Http\Controllers\AdminDaysController::class, 'AdminDaysAdd'])->name('admin_days_add');
    Route::delete('/days_delete{id}', [\App\Http\Controllers\AdminDaysController::class, 'AdminDaysDelete'])->name('admin_days_delete');
    Route::post('/days_update{id}', [\App\Http\Controllers\AdminDaysController::class, 'AdminDaysUpdateShow'])->name('admin_days_update_show');
    Route::put('/days_update{id}', [\App\Http\Controllers\AdminDaysController::class, 'AdminDaysUpdate'])->name('admin_days_update');
    
    Route::get('/photo', [\App\Http\Controllers\TourPhotoController::class, 'TourPhoto'])->name('tour_photo');
    Route::get('/photo{id}', [\App\Http\Controllers\TourPhotoController::class, 'TourPhotoAddShow'])->name('tour_photo_add_show');
    Route::post('/photo{id}', [\App\Http\Controllers\TourPhotoController::class, 'TourPhotoAdd'])->name('tour_photo_add');
    Route::get('/delete{id}', [\App\Http\Controllers\TourPhotoController::class, 'TourPhotoDeleteShow'])->name('tour_photo_delete_show');
    Route::delete('/delete{id}', [\App\Http\Controllers\TourPhotoController::class, 'TourPhotoDelete'])->name('tour_photo_delete');
    Route::put('/days_update{id}', [\App\Http\Controllers\AdminDaysController::class, 'AdminDaysUpdate'])->name('admin_days_update');

    // Route::post('/site{id}')
});

Route::get('/', function () {
    // Log::info('Hello');
    return redirect()->route('tour_home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
