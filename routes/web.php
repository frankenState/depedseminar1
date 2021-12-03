<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
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

Route::prefix('pages')->group(function(){
    Route::get('/', [PagesController::class, 'welcome'])->name('pages.main');

    Route::get('/contacts', [PagesController::class, 'contacts'])->name('pages.contacts');

    Route::get('/about-us', [PagesController::class, 'aboutUs'])->name('pages.aboutus');
    // route('pages.aboutus')
});

Route::prefix('posts')->group(function(){
    Route::get('/', [PostController::class, 'index'])
    ->name('posts.main');

    Route::get('/show/{id}', [PostController::class, 'show'])->name('posts.show');

    Route::get('/test-db', [PostController::class, 'testDB']);

});


// Route::get('/', function () {
//     return view('welcome', [
//         'message' => 'This is a text from the web.php',
//         'names' => [
//             'James Gosling',
//             'Tim Berners Lee',
//             'Brendan Eich',
//             'Taylor Otwell'
//         ],
//         'age' => 20
//     ]);
// })->name('app.main');



// Route::get('/greet', function () {
//     return "HELLO WORLD";
// })->name('welcome.greeting');

// Route::get('/user/{id?}', function($id = 0) {
//     $returnvar = "User id = $id";
//     $returnvar .= "<br/>" . route('app.main');
//     $returnvar .= "<br/>" . route('welcome.greeting');
//     $returnvar .= "<br/>" . route('user.id');
//     $returnvar .= "<br/>" . route('user.id', [ 'id' => 14]);
//     return $returnvar;
// })->name('user.id');

// Route::prefix('admin')->group(function () {

//     Route::get('/users', function() {
//         return "in admin/users";
//     })->name('admin.users');

//     Route::get('/profile', function() {
//         return "in admin/profile";
//     })->name('admin.profile');

// });

// Route::prefix('post')->group(function() {

//     Route::get('/view', function(){

//     });

//     Route::get('/new', function(){

//     })
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
