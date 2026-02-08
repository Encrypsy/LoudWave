<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/home', function () {
//     return view('home');
// })->name('home');
Route::post('/home', [PostController::class, 'home']);
Route::get('/home', [PostController::class, 'home'])->name('home');

// CATEGORY ROUTES
Route::post('/category', [CategoryController::class, 'category']);
Route::delete('/category/{id}', [CategoryController::class, 'delete'])->name('category.delete');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category', [CategoryController::class, 'category'])->name('category');

// TAG ROUTES
Route::post('/tag', [TagController::class, 'tag']);
Route::delete('/tag/{id}', [TagController::class, 'delete'])->name('tag.delete');
Route::get('/tag/create', [TagController::class, 'create'])->name('tag.create');
Route::post('/tag/store', [TagController::class, 'store'])->name('tag.store');
Route::get('/tag', [TagController::class, 'tag'])->name('tag');

// USER ROUTES
Route::post('/user', [UserController::class, 'user']);
Route::delete('/user/{id}', [UserController::class, 'delete'])->name('user.delete');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user', [UserController::class, 'user'])->name('user');

Route::get('/user/{id}/edit-role', [UserController::class, 'editRole'])->name('user.editRole');
Route::put('/user/{id}/update-role', [UserController::class, 'updateRole'])->name('user.updateRole');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Hanya Admin
Route::middleware(['auth', 'check_role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Route::middleware(['auth', 'check_role:admin,editor'])->group(function () {
//     Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// });

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/', function () {
    return redirect()->route('home');
});

Route::middleware(['auth', 'check_role:admin,editor'])->group(function () {
    Route::resource('posts', PostController::class);
});




