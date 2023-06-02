<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Middleware\CheckAdminMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\BooksController;

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

//Route::get('/login', function () {
//    return view('auth.login');
//});

//Route::match(['get','post'],'/login',[AuthController::class,'login']);
//Route::get('/logout',[AuthController::class,'logout']);
//
//
//Route::prefix('/admin')->namespace('AdminController')->group(function (){
////    Route::match(['get','post'],'login',[AdminController::class,'login']);
//    Route::group(['middleware'=>['admin']],function (){
//        Route::get('/dashboard',[AdminController::class,'dashboard']);
////        Route::get('/logout',[AdminController::class,'logout']);
//
//        Route::get('/new-user',[AdminController::class,'register_page']);
//        Route::post('/register-user',[AdminController::class,'register_user']);
//        Route::get('/show-users',[AdminController::class,'show_users']);
//        Route::get('/edit-user/{id}',[AdminController::class,'edit_user']);
//        Route::post('/update-user',[AdminController::class,'update_user']);
//        Route::get('/delete-user/{id}',[AdminController::class,'delete_user']);
//
//        Route::get('/new-book',[BooksController::class,'register_book_page']);
//        Route::post('/register-book',[BooksController::class,'register_book']);
//        Route::get('/show-books',[BooksController::class,'show_books']);
//        Route::get('/edit-book/{id}',[BooksController::class,'edit_book']);
//        Route::post('/update-book',[BooksController::class,'update_book']);
//        Route::get('/delete-book/{id}',[BooksController::class,'delete_book']);
//    });
//});
//Route::prefix('/user')->namespace('UserController')->group(function (){
////    Route::match(['get','post'],'login',[UserController::class,'login']);
//    Route::group(['middleware'=>['user']],function (){
//        Route::get('/dashboard',[UserController::class,'dashboard']);
////        Route::get('/logout',[UserController::class,'logout']);
//
//        Route::get('book-desc/{id}',[UserController::class,'book_desc']);
//    });
//});


// Authentication Routes
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::middleware(['auth:user', CheckAdminMiddleware::class])->group(function () {
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/announcement',[AdminController::class,'announcement']);
        Route::get('/new-user',[AdminController::class,'register_page']);
        Route::post('/register-user',[AdminController::class,'register_user']);
        Route::get('/show-users',[AdminController::class,'show_users']);
        Route::get('/edit-user/{id}',[AdminController::class,'edit_user']);
        Route::post('/update-user',[AdminController::class,'update_user']);
        Route::get('/delete-user/{id}',[AdminController::class,'delete_user']);
        Route::get('/settings',[AdminController::class,'settings']);
        Route::post('/update-password',[AdminController::class,'update_pw']);

        Route::get('/new-book',[BooksController::class,'register_book_page']);
        Route::post('/register-book',[BooksController::class,'register_book']);
        Route::get('/show-books',[BooksController::class,'show_books']);
        Route::get('/edit-book/{id}',[BooksController::class,'edit_book']);
        Route::post('/update-book',[BooksController::class,'update_book']);
        Route::get('/delete-book/{id}',[BooksController::class,'delete_book']);

        Route::get('/chat',[ChatController::class,'show_chat_admin']);
        Route::get('/chat-box/{id}',[ChatController::class,'chat_box_admin']);
        Route::post('/send-msg/{id}',[ChatController::class,'admin_send_msg']);
    });
    Route::view('login', 'login');
});

// User Routes
Route::prefix('user')->group(function () {
    Route::middleware('auth:user')->group(function () {
        Route::get('dashboard', [UserController::class, 'dashboard']);
        Route::get('book-desc/{id}', [UserController::class, 'book_desc']);
        Route::get('/chat',[ChatController::class,'show_chat_user']);
        Route::get('/chat-box/{id}',[ChatController::class,'chat_box_user']);
        Route::post('/send-msg/{id}',[ChatController::class,'user_send_msg']);
    });
});

// Default Route
Route::redirect('/', 'login');
