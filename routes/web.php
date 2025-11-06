<?php

use App\Models\House;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $koleje = House::all();
    $max = House::max('body');

    $bodNaPixel = $max == 0 ? 0 : 200 / $max;

    /*
    $bodNaPixel = 0;

    if($max != 0) {
        $bodNaPixel = 200 / $max;    
    } */   

    return view('welcome', ['colleges' => $koleje, 'konstanta' => $bodNaPixel]);
})->name('index');

Route::view('/information', 'video')->name("videoHarry");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
