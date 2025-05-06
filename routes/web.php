<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LemariController;
use App\Http\Controllers\UmurController;
use App\Http\Middleware\UmurMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// menampilkan string pada sebuah halaman.
Route::get('hallo', function(){
    return 'Hallo, saya sedang belajar Laravel';
})->name('hallo-get');

Route::post('hallo', action: function(){
    return 'Hallo, saya sedang belajar Laravel';
})->name('hallo-post');

Route::get('coba', function(){
    return redirect()->route('hallo-get');
});


// menampilkan halaman
Route::get('contoh', function(){
    return view('contoh');
});

// Route parameter
// parameter wajib diinputkan di url.
Route::get('mobil/{merek}', function($param){
    return 'hallo ini mobil saya, mereknya : '.$param;
});

// Parameter dengan optional 
Route::get('motor/{merek?}', function($param = 'Unvailable'){
    return 'hallo ini motor saya, mereknya : '.$param;
});

// untuk menampilkan di halaman.
Route::get('contoh/{merek}', function($param){
    $nilai = $param;
    return view('contoh', compact('nilai'));
})->name('halaman-contoh');


// Routes group
Route::prefix('training')->group(function(){

    Route::get('laravel/{param}', function($param){
        return 'Ini adalah kelas laravel level '.$param;
    })->name('kelas.laravel'); 
    //compact digunakan untuk callback variable yng sudah di didefinisikan agar bisa dibaca oleh halaman.

    Route::get('ccna/{param}', function($param){
        return 'Ini adalah kelas ccna level '.$param;
    })->name('kelas.ccna');

    Route::get('mtcna/{param}', function($param){
        return 'Ini adalah kelas mtcna level '.$param;
    })->name('kelas.mtcna');

});


Route::get('barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('barang/create', [BarangController::class, 'create'])->name('barang.create');


// Route dengan resource
Route::resource('kategori', KategoriController::class); //khusus untuk crud
Route::get('report/kategori', [KategoriController::class, 'report'])->name('kategori.report');

// umur
Route::get('form', [UmurController::class, 'form'])->name('umur.form'); //halaman form

Route::get('sukses', [App\Http\Controllers\UmurController::class, 'sukses'])
->name('sukses.form')->middleware(UmurMiddleware::class); //halaman sukses

Route::post('proses', [UmurController::class, 'proses_umur'])->name('umur.proses'); //memproses input

Route::get('lemari', [LemariController::class, 'index'])->name('lemari.index');


