<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pos\EmployeeController;

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
Route::redirect('/', 'login');



Route::get('/dashboard', function () {
    return view('frontEnd.dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function(){

    Route::get('/admin/profile', [AdminController::class,'adminProfile'])->name('admin.profile');
    Route::post('/admin/profile/update', [AdminController::class,'adminProfileStore'])->name('admin.profile.store');

    Route::controller(EmployeeController::class)->group(function (){
        Route::get('/admin/employee','allEmployee')->name('all.employee');
        
        Route::get('/admin/employee/add','addEmployee')->name('add.employee');


    });



});

