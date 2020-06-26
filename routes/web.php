<?php

use App\Comment;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Blade components cookbook
Route::get('/blade-components-cookbook-ep1', function () {
    return view('welcome');
});

Route::get('/blade-components-cookbook-ep2', function () {
    return view('ep2');
});

Route::get('/blade-components-cookbook-ep3/comments/{comment}/edit', function (Comment $comment) {
    return view('comments.edit', ['comment' => $comment]);
});

Route::patch('/blade-components-cookbook-ep3/comments/{comment}', function (Comment $comment) {
   $comment->update(
       request()->validate(['body' => 'required|string'])
   );

   return redirect("/blade-components-cookbook-ep3/comments/{$comment->id}/edit");
});

Route::delete('/blade-components-cookbook-ep3/comments/{comment}', function (Comment $comment) {
    $comment->delete();

    return redirect('/home');
});

Route::get('/blade-components-cookbook-ep5', function () {
    return view('ep5');
});

Route::get('/blade-components-cookbook-ep6', function () {
    return view('ep6');
});

Route::get('/blade-components-cookbook-ep7', function () {
    return view('ep7');
});

Route::get('/blade-components-cookbook-ep7/home', function () {
    return view('ep7-home');
})->name('home');

Route::get('/blade-components-cookbook-ep7/about', function () {
    return view('ep7-about');
})->name('about');

Route::get('/blade-components-cookbook-ep7/testimonials', function () {
    return view('ep7-test');
})->name('testimonials');

Route::get('/blade-components-cookbook-ep7/contact', function () {
    return view('ep7-contact');
})->name('contact');

Route::get('/blade-components-cookbook-ep8', function () {
    return view('ep8');
});