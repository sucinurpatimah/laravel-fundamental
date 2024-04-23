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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list-menu/get-all-data', function () {
    $menus = [
        [
            "menu" => "Soto Mie",
            "harga" => 15000
        ],

        [
            "menu" => "Bakso Malang",
            "harga" => 12000
        ],

        [
            "menu" => "Ketoprak",
            "harga" => 10000
        ]
    ];

    $response = [
        "info" => "Data Berhasil Didapatkan",
        "data" => $menus
    ];

    return response()->json($response, 200, [], JSON_PRETTY_PRINT);
});

Route::get('/list-menu', function () {
    $menus = [
        "Soto Mie",
        "Bakso Malang",
        "Ketoprak"
    ];

    $menuList = implode("<br>- ", $menus);

    return "Ini adalah halaman yang menambilkan semua menu yang ada di Cafe Amandemy:<br>- " . $menuList;
});

Route::get('/list-menu/bakso/8000', function () {
    return "Anda memilih makanan bakso dengan harga 8000";
});
