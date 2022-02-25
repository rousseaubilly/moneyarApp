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
 * Settings Routes
 */

Route::group(['middleware' => ['auth'], 'prefix' => 'settings'], function(){

   // Settings Routes for Banks
   Route::get('/banks', [\App\Http\Controllers\Bank\ListingController::class, 'render'])->name('banks.list');
   Route::get('/banks/create', [\App\Http\Controllers\Bank\CreateController::class, 'render'])->name('banks.create');
   Route::post('/banks/create', [\App\Http\Controllers\Bank\CreateController::class, 'store']);
   Route::get('/transactions_categories', [\App\Http\Controllers\TransactionCategory\ListingController::class, 'render'])->name('transactions_categories.list');
   Route::get('/transactions_categories/create', [\App\Http\Controllers\TransactionCategory\CreateController::class, 'render'])->name('transactions_categories.create');
   Route::post('/transactions_categories/create', [\App\Http\Controllers\TransactionCategory\CreateController::class, 'store']);

});

/*
 * Accounts Routes
 */

Route::group(['middleware' => ['auth'], 'prefix' => 'accounts'], function(){
    // Cash Accounts
    Route::get('/list', [\App\Http\Controllers\Account\ListingController::class, 'render'])->name('accounts.list');
    Route::get('/create', [\App\Http\Controllers\Account\CreateController::class, 'render'])->name('accounts.create');
    Route::post('/create', [\App\Http\Controllers\Account\CreateController::class, 'store']);
    // Transactions linked to Cash Accounts
    Route::get('/show/{account_id}', [\App\Http\Controllers\Account\Transaction\ShowController::class, 'render'])->name('accounts.transactions.show');
    Route::get('/transactions/create', [\App\Http\Controllers\Account\Transaction\CreateController::class, 'render'])->name('accounts.transactions.create');
    Route::post('/transactions/create', [\App\Http\Controllers\Account\Transaction\CreateController::class, 'store']);
});
