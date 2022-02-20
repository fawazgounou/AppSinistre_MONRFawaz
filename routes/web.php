<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinistréController;
use App\Http\Controllers\SinistresController;
use App\Http\Livewire\InfosinistreComponent;
use App\Http\Livewire\InfosinistreeComponent;
use App\Http\Livewire\VoirinfoComponent;
use App\Http\Livewire\PageadminComponent;
use App\Http\Livewire\ConsulterSinComponent;
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

 Route::get('/tableaubord', function () {
    return view('tableaubord');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Infosinistres', InfosinistreComponent::class)->name('Infosinistres');

Route::get('/Infosinistré', InfosinistreeComponent::class)->name('Infosinistré');
Route::get('/voirinfo', VoirinfoComponent::class)->name('voirinfo');
Route::get('/admin', PageadminComponent::class)->name('admin');
Route::get('/consulte/{user_id}', ConsulterSinComponent::class)->name('consulte');



