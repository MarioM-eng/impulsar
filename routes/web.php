<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\GaleryController;
use App\Http\Livewire\Home;
use App\Http\Livewire\Galery\Galery;
use App\Http\Livewire\Health;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Logout;
use App\Http\Livewire\User\User;
use App\Http\Livewire\MyData\MyData;

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

Route::get('/', Home::class)->name('home');

Route::get('/contactUs', function () {
    return view('contactus');
})->name('contactUs');

//Route::prefix('health')->group(function (){
//    Route::get('/',[HealthController::class, 'index'])->name('health');
//    Route::get('/list',[HealthController::class, 'listOfElements'])->name('listHealth');
//    Route::get('/search',[HealthController::class, 'search'])->name('searchHealth');
//    Route::get('/create',[HealthController::class, 'create'])->name('createHealth');
//    Route::post('/add',[HealthController::class, 'store'])->name('addHealth');
//    Route::get('/show/{id}',[HealthController::class, 'show'])->name('showHealth');
//    Route::get('/edit/{id}',[HealthController::class, 'edit'])->name('editHealth');
//    Route::put('/update/{id}',[HealthController::class, 'update'])->name('updateHealth');
//    Route::delete('/delete/{id}',[HealthController::class, 'destroy'])->name('deleteHealth');
//});

//Route::get('/galery', [GaleryController::class, 'index'])->name('galery');

Route::get('/login', Login::class)->name('login')->middleware('loged');
Route::get('/logout', [Logout::class,'logout'])->name('logout');

Route::prefix('authenticated')->group(function (){

    Route::get('/health', Health::class)->name('health')->middleware('auth');
    Route::get('/galery', Galery::class)->name('galery')->middleware('auth');
    Route::get('/user', User::class)->name('user')->middleware('auth');
    Route::get('/my-data', MyData::class)->name('myData')->middleware('auth');
    //Route::view('/', 'home.home',['gallery' => \App\Models\Galery::all()])->name('home_admin');

});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
