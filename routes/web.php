<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', [ProductController::class, 'index'], function () {
    return view('index');
})->name('index');

Route::get('/post', function () {
    return view('main.post');
})->name('post');

Route::get('/products/{any?}', function () {
    return view('main.products');
})->name('products');

Route::get('/iletisim', function () {
    return view('main.iletisim');
})->name('iletisim');

//Route::get('/product', [ProductController::class, 'index']);

/*Route::get('/{any}', function () {
    return view('index');
})->where('any', '.*');

------ urL'ye  tanımlı olmayan path girdiğinde  return ettiğin yere döner --------
*/


Auth::routes();
Route::get('/panel', [HomeController::class, 'index'])->name('panel');

Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin'], function () {
    Route::resource('cards', CardController::class);
});

Route::get('category/{slug}/data', [CategoryController::class, 'index']);
