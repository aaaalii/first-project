<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function () {
//     return view('home');
// });

// Route::view('/hello', 'home');

// Route::get('/hello/{name?}/comment/{comment?}', function ($name = null, $comm = null) {
//     if($name){
//         return "<h1>Hello, $name </h1><br> $comm";
//     }else{
//         return "<h1>No name</h1>";
//     }
// })->whereAlpha('name', 'comment');

// Route::get('/hello/{name?}/comment/{comment?}', function ($name = null, $comm = null) {
//     if($name){
//         return "<h1>Hello, $name </h1><br> $comm";
//     }else{
//         return "<h1>No name</h1>";
//     }
// })->whereIn('name', ['ali', 10]);

// Route::get('/hello/{name?}/comment/{comment?}', function ($name = null, $comm = null) {
//     if($name){
//         return "<h1>Hello, $name </h1><br> $comm";
//     }else{
//         return "<h1>No name</h1>";
//     }
// })->where('name', '[0-9]+')->whereAlpha('comment'); // create Regex for whatever you want to be accepted in the URL

// Named Routes
Route::get('/hello', function(){
   return 'home'; 
})->name('hello'); // if we have called this route in an anchor tag at some page, then we can use route('hello'), to make a call to this route/ URL