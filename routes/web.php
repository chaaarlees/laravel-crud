<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::view('/','welcome')->name('home');
Route::view('/contacto','contacto')->name('contact');
Route::get('/blog',function(){
    $posts=[
        ['title'=>'First post'],
        ['title'=>'Second post'],
        ['title'=>'Third post'],
        ['title'=>'Fourth post'],
    ];
    return view('blog',['posts'=>$posts]);
})->name('blog');
Route::view('/about','about')->name('about');



Route::get('/product',[ProductController::class,'index'])->name('product.index');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product',[ProductController::class,'store'])->name('product.store');
