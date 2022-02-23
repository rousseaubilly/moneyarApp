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
*/

// Base Route
Route::get('/', function () {
    return redirect('/dashboard');
});

/*
 * Default Routes for Auth - laravel/breeze
 */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/*
 * Routes who need authentification
 */

Route::group(['middleware' => ['auth'], 'prefix' => 'settings'], function(){

   // Settings Routes for Banks
   Route::get('/banks', [\App\Http\Controllers\Bank\ListingController::class, 'render']);

});
