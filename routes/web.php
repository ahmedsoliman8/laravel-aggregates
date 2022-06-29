<?php

use App\Models\Article;
use App\Models\User;
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

Route::get('/users/{user}', function (User $user) {
   /* $user->loadCount([
        'articles' => fn($query) => $query->published(),
        'comments',
        'comments as comments_deleted_count' => fn($query) => $query->onlyTrashed(),
    ])
        ->loadSum('articles as articles_vote_count', 'votes');

    $user = User::withCount([
        'articles' => fn($query) => $query->published(),
        'comments',
        'comments as comments_deleted_count'=>fn($query) => $query->onlyTrashed(),
    ])
        ->withSum('articles as articles_vote_count','votes')
        ->find(1);
*/
  //  dd($user);

    return view('welcome', compact('user'));
});
