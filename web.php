<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasantriController;

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

//route salam
Route::get('/salam',function(){
    return "Assalammu'alaikum Selamat Pagi Dunia";
});

// route dengan parameter
Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi){
    return "Nama Pegawai : ".$nama."<br/>Departemen : ".$divisi;
});

//route dengan redirect page views
Route::get('/kabar',function(){
    return view ('kondisi');
});

//Route /mahasantri
Route::get('/mahasantri',[MahasantriController::class, 'dataMahasantri']
);


// //Route Hello
// Route::get('/hello',function(){
//     return view('hello',['name' => 'Inaya']);
// });


// //Route Nilai
// Route::get('/nilai', function () {
//     return view('nilai');
// });
    

// //Tambahkan route baru di routes/web.php
// Route::get('/daftarnilai', function () {
//     return view('daftar_nilai');
// });

// //Tambahkan route baru di routes/web.php
// Route::get('/phpframework', function (){ 
//     return view('layouts.index');
// });