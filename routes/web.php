<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers;
use App\Http\Controllers\BisnisController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController1;
use App\Http\Controllers\JasaAngkutController;
use App\Http\Controllers\PadiController;
use App\Http\Controllers\PemerintahanController;
// use App\Http\Controllers\JasaAngkutController;
use App\Http\Controllers\PerdaganganController;
use App\Http\Controllers\PembenihanController;
use App\Http\Controllers\PupukController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BudidayaTanamanController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\ProfilController;
use App\Http\Controllers\StukturAnggotaController;
use App\Models\Berita;
use App\Models\Bisnis;
use App\Models\BudidayaTanaman;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/components', function () {
    return view('components.admin');
});

//route Home
// Route::get('/bisnis', [HomeController::class, 'showbisnis']);
Route::get('/profil', [HomeController1::class, 'showprofil']);
Route::get('/user', [HomeController1::class, 'showuser']);
// Route::get('/pemerintah', [HomeController::class, 'showpemerintah']);


//Route Admin
Route::resource('/bisnis', BisnisController::class);
Route::resource('/profil', ProfilController::class);
Route::resource('/user', UserController::class);
Route::resource('/pemerintahan', PemerintahanController::class);
// Route::resource('/stukturanggota', StukturAnggotaController::class);


Route::get('/stukturanggota', [StukturanggotaController::class, 'index']);
Route::get('/stukturanggota/create', [StukturanggotaController::class, 'create']);
Route::post('/stukturanggota', [StukturanggotaController::class, 'store']);
Route::get('/stukturanggota/{stukturanggota}', [StukturanggotaController::class, 'show']);
Route::get('/stukturanggota/{stukturanggota}/edit', [StukturanggotaController::class, 'edit']);
Route::put('/stukturanggota/{stukturanggota}', [StukturanggotaController::class, 'update']);
Route::delete('/stukturanggota/{stukturanggota}', [StukturanggotaController::class, 'destroy']);


Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/create', [BeritaController::class, 'create']);
Route::post('/berita', [BeritaController::class, 'store']);
Route::get('/berita/{berita}', [BeritaController::class, 'show']);
Route::get('/berita/{berita}/edit', [BeritaController::class, 'edit']);
Route::put('/berita/{berita}', [BeritaController::class, 'update']);
Route::delete('/berita/{berita}', [BeritaController::class, 'destroy']);



//route resocuce admin
Route::resource('/pupuk', PupukController::class);
Route::resource('/padi', PadiController::class);
Route::resource('/pembenihan', PembenihanController::class);
Route::resource('/perdagangan', PerdaganganController::class);
Route::resource('/jasaangkut', JasaAngkutController::class);
Route::resource('/budidayatanaman', BudidayaTanamanController::class);
// Route::resource('/berita', BeritaController::class);

//auth login
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);



// Frontend layar depan
// Route::get('frontview/beranda', [HomeController::class, 'beranda']);
// Route::get('frontview/visimisi', [HomeController::class, 'visimisi']);
// Route::get('frontview/struktur', [HomeController::class, 'struktur']);
// Route::get('frontview/bisnis', [HomeController::class, 'bisnis']);

Route::controller(HomeController::class)->group(function () {
    Route::get('beranda', 'beranda');
});
Route::get('/', [ClientController::class, 'VisiMisi']);
Route::get('/frontview/profil/visimisi', [HomeController::class, 'VisiMisi']);
Route::get('/frontview/profil/stukturanggota', [HomeController::class, 'StukturAnggota']);
Route::get('/frontview/profil/tupoksi', [HomeController::class, 'Tupoksi']);
Route::get('/frontview/profil/sejarah', [HomeController::class, 'Sejarah']);

Route::get('/frontview/bisnis/bisnis', [HomeController::class, 'Bisnis']);



Route::get('/frontview/informasi/berita', [HomeController::class, 'Berita']);
// Route::get('/', [ClientController::class, 'VisiMisi']);
// Route::get('/frontview/profil/Direktur Utama', [HomeController::class, 'VisiMisi']);
// Route::get('/frontview/profil/Direktur Teknis', [HomeController::class, 'Struktur']);
// Route::get('/frontview/profil/Direktur Keuangan', [HomeController::class, 'Tupoksi']);
// Route::get('/frontview/profil/Dewan Pengawas', [HomeController::class, 'Sejarah']);
