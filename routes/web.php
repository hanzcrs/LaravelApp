<?php

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
ruta que se crea en primera instancia con laravel se comenta ya que no la necesitaremos:
Route::get('/', function () {
    return view('welcome');
});
*/
// orden de la ruta siempre es importante ojo
                                                                    // este nombre se puede cambiar posts
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('posts');

Auth::routes();


