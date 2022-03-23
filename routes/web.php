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

Route::get('/', function () {
    return view('./dashboard/homepage');
});
Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\BlogController::class, 'create'])->name('./blogs.create');
Route::post('/create', [App\Http\Controllers\BlogController::class, 'store'])->name('blogs.store');

Route::get('/pagination', [App\Http\Controllers\AnnouncementController::class, 'index'])->name('pagination');

Route::get('/users/{id}', [App\Http\Controllers\UserDetailController::class, 'show'])->name('user.details.show');
Route::get('/blogs/{id}', [App\Http\Controllers\BlogController::class, 'show'])->name('blogs.show');
Route::post('/comments', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');

Route::get('/enter', function(){
    dd('상식이 여행지도');
})->middleware('checkage');

Route::get('/board', [App\Http\Controllers\BoardController::class, 'index'])->name('users.index');
Route::get('/board/update/{user}', [App\Http\Controllers\BoardController::class, 'show'])->name('users.update');
Route::get('/board/delete/{user}', [App\Http\Controllers\BoardController::class, 'deleteView'])->name('users.delete');

Route::post('/board', [App\Http\Controllers\BoardController::class, 'create'])->name('board.create');

Route::put('/board/update/{board}', [App\Http\Controllers\BoardController::class, 'update']);
Route::post('/board/delete/{user}', [App\Http\Controllers\BoardController::class, 'delete']);

Route::get('/role/{user}', [App\Http\Controllers\UserController::class, 'checkRole'])
    ->name('users.role')
    ->middleware('role:user');

Route::get('/send-email/{user}', [App\Http\Controllers\MailController::class, 'sendEmail'])->name('send-email');
Route::get('/confirmAuth/{id}', [App\Http\Controllers\MailController::class, 'moveConfirm']);
Route::put('/confirmAuth/{email}', [App\Http\Controllers\MailController::class, 'statusUpdate']);

Route::get('/casts', [App\Http\Controllers\CastsTestController::class, 'index']);
Route::post('/casts', [App\Http\Controllers\CastsTestController::class, 'create'])->name('casts.create');