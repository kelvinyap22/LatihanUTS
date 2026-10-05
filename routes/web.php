<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/test-routes', function () {
    return 'Test routes';
});
Route::get('/daftar-barang', [BarangController::class, 'tampil']);
Route::get('/ubah-barang/{barang}', [BarangController::class, 'ubah']);
Route::get('/tambah-barang', [BarangController::class, 'create']);

Route::post('/simpan-barang', [BarangController::class, 'simpan']);
Route::put('/update-barang/{barang}', [BarangController::class, 'update']);
Route::get('/hapus-barang/{barang}', [BarangController::class, 'konfirmasiHapus']);

Route::delete('/hapus-barang/{barang}', [BarangController::class, 'hapus']);