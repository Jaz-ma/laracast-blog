<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;


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


Illuminate\Support\Facades\DB::listen(function($query){
    logger($query->sql);
});

Route::get('/', function () {
    return view('posts',[
        'posts' =>  Post::latest()->get(),
        'categories'=> Category::all()
    ]);
});

Route::get('post/{post:slug}', function (Post $post) {

    return view('post',[

        'post'=>$post
    ]);


});

Route::get('categories/{category:slug}',function(Category $category){
    return view('posts',[
        'posts'=>$category->posts,
        'categories'=> Category::all(),
        'currentcategory'=> $category
    ]);
});

Route::get('author/{author:userName}',function(User $author){
    return view('posts',[
        'posts'=>$author->posts,
        'categories'=> Category::all()
    ]);
});
