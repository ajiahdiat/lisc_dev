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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function(){
	return View::make('pages.coming');
});
Route::get('home', function(){
	return view('pages.home');
});
Route::get('daycare', function(){
	return View::make('pages.daycare');
});
Route::get('gallery', function(){
	return View::make('pages.gallery');
});
Route::get('join', function(){
	return View::make('pages.join');
});
Route::get('kindergarten', function(){
	return View::make('pages.kindergarten');
});
Route::get('news', function(){
	return View::make('pages.news');
});
Route::get('playgroups', function(){
	return View::make('pages.playgroups');
});
Route::get('programs_kids', function(){
	return View::make('pages.programsk');
});
Route::get('programs_parents', function(){
	return View::make('pages.programsp');
});
Route::get('visi_misi', function(){
	return View::make('pages.vissionmission');
});