<?php
use App\Http\Controllers\MyController;
use App\Http\Controllers\AdminPanel\MyController as MyAdminController;
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

Route::get('/', function () {
    return view('welcome');
});
// this is the default index page
Route::get('/', [MyController::class, 'index'])->name('home');


// this is the rout-controller-view
Route::get('/Param/{$p}', [MyController::class, 'test'])->name('test');

// my AdminPanle route

Route::get('/admin', [MyAdminController::class, 'index'])->name('admin');

// my AdminPanle category-list
Route::get('/admin/category', [App\Http\Controllers\AdminPanel\CategoryController::class, 'index'])->name('category');

// my AdminPanle create
Route::get('/admin/category/create', [App\Http\Controllers\AdminPanel\CategoryController::class, 'create'])->name('create');

// my AdminPanle store
Route::post('/admin/category/store', [App\Http\Controllers\AdminPanel\CategoryController::class, 'store'])->name('store');

// my AdminPanle update
Route::get('/admin/update', [App\Http\Controllers\AdminPanel\CategoryController::class, 'update'])->name('update');

// my AdminPanle edit
Route::get('/admin/edit', [App\Http\Controllers\AdminPanel\CategoryController::class, 'edit'])->name('edit');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
