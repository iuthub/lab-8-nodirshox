<?php

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
	$posts=DB::table('posts')->get();

    return view('blog.index',compact('posts'));
});

Route::get('/post/{post}', function ($id) {
	$post=DB::table('posts')->find($id);
    return view('blog.post',compact('post'));
});

Route::get('/admin', function () {
	$posts=DB::table('posts')->get();

   return view('admin.index',compact('posts'));
});

Route::get('/admin/create', function () {

    return view('admin.create');
});

Route::get('/admin/edit/{post}', function ($id) {
	$post=DB::table('posts')->find($id);	
	
   return view('admin.edit',compact('post'));
});


Route::get('/about', function () {

    return view('other.about');
});
