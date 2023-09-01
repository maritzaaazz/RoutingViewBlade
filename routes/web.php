<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/profile', function () {
    return view('profile',[
        "name" => "Maritza Angel",
        "email" => "maritzaangel@email.com",
        "address" => "Blimbingsari, YK",
        "no" => "081392722285",
        "name2" => "Amelia Johnson",
        "email2" => "amelia123@email.com",
        "address2" => "Kotabaru, YK",
        "no2" => "08761283891",
        "name3" => "Ethan Ramirez",
        "email3" => "ramirezzzz@email.com",
        "address3" => "Pogung, YK",
        "no3" => "08792073267",
        "name4" => "Mia Patel",
        "email4" => "msmiapatel@email.com",
        "address4" => "Kaliurang, YK",
        "no4" => "0813838235",
        "name5" => "Liam Mitchell",
        "email5" => "liammitchell@email.com",
        "address5" => "Kulon Progo, YK",
        "no5" => "085629201882",
        "name6" => "Olivia Clark",
        "email6" => "clarklarklak@email.com",
        "address6" => "Sendowo, YK",
        "no6" => "081392930929"
    ]);
});
