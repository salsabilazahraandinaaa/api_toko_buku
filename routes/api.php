<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthC;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logC;
use App\Http\Controllers\productsC;
use App\Http\Controllers\transactionC;
use App\Http\Controllers\usersC;

route::get('/', function(){
    return 'Hello World API !';
});
route::get('/products',[productsC::class,'index'])->middleware(['auth:sanctum']);
route::get('/products/{id}',[productsC::class,'detail'])->middleware(['auth:sanctum']);

route::get('/transaction',[transactionC::class,'index'])->middleware(['auth:sanctum']);
route::get('/transaction/{id}',[transactionC::class,'detail'])->middleware(['auth:sanctum']);

route::post('/login',[AuthC::class,'login']);

route::get('/admin',function(){
    return Hash::make('admin');
});

route::get('/log',[logC::class,'index']);
route::get('/log/{id}',[logC::class,'detail']);

route::get('/kasir',function(){
    return Hash::make('kasir');
});

route::get('/owner',function(){
    return Hash::make('owner');
});

route::get('/users',[usersC::class,'index']);
route::get('/users/{id}',[usersC::class,'detail']);
