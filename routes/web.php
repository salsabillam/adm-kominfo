<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GaleriFotoController;
use App\Http\Controllers\GaleriVideoController;
use App\Http\Controllers\HeaderSlideController;
use App\Http\Controllers\KategoriberitaController;
use App\Http\Controllers\KathalstatisController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\StatisController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SesiController::class, 'index']);
Route::post('/', [SesiController::class, 'login']);
Route::get('/logout', [SesiController::class, 'logout']);
Route::get('/Dashboard', [AdminController::class, 'index']);
Route::get('/Profile', [AdminController::class, 'getProfile'])->name('profile');
Route::put('/Profile', [AdminController::class, 'edit']);

Route::get('/Agenda', [AgendaController::class, 'getAgenda'])->name('agendas.agenda');
Route::get('/tambahAgenda', [AgendaController::class, 'tambahAgenda']);
Route::post('/postAgenda', [AgendaController::class, 'postAgenda']);
Route::get('/editAgenda/{id}', [AgendaController::class, 'getIdAgenda']);
Route::put('/updateAgenda/{id}', [AgendaController::class, 'editAgenda']);
Route::get('/detailAgenda/{id}', [AgendaController::class, 'detailAgenda']);
Route::delete('/deleteAgenda/{id}', [AgendaController::class, 'deleteAgenda']);
Route::get('/pdfAgenda', [AgendaController::class, 'pdfAgenda'])->name('agendas.pdf');

Route::get('/Albumfoto', [AlbumController::class, 'getAlbumfoto'])->name('albumfotos.albumfoto');
Route::get('/tambahAlbumfoto', [AlbumController::class, 'tambahAlbumfoto']);
Route::post('/postAlbumfoto', [AlbumController::class, 'postAlbumfoto']);
Route::get('/editAlbumfoto/{id}', [AlbumController::class, 'getIdAlbumfoto']);
Route::put('/updateAlbumfoto/{id}', [AlbumController::class, 'editAlbumfoto']);
Route::get('/detailAlbumfoto/{id}', [AlbumController::class, 'detailAlbumfoto']);
Route::delete('/deleteAlbumfoto/{id}', [AlbumController::class, 'deleteAlbumfoto']);

Route::get('/Kategoriberita', [KategoriberitaController::class, 'getKategoriberita'])->name('katberitas.katberita');
Route::get('/tambahKategoriberita', [KategoriberitaController::class, 'tambahKategoriberita']);
Route::post('/postKategoriberita', [KategoriberitaController::class, 'postKategoriberita']);
Route::get('/editKategoriberita/{id}', [KategoriberitaController::class, 'getIdKategoriberita']);
Route::put('/updateKategoriberita/{id}', [KategoriberitaController::class, 'editKategoriberita']);
Route::get('/detailKategoriberita/{id}', [KategoriberitaController::class, 'detailKategoriberita']);
Route::delete('/deleteKategoriberita/{id}', [KategoriberitaController::class, 'deleteKategoriberita']);

Route::get('/Kathalstatis', [KathalstatisController::class, 'getKathalstatis'])->name('kathalstatiss.kathalstatis');
Route::get('/tambahKathalstatis', [KathalstatisController::class, 'tambahKathalstatis']);
Route::post('/postKathalstatis', [KathalstatisController::class, 'postKathalstatis']);
Route::get('/editKathalstatis/{id}', [KathalstatisController::class, 'getIdKathalstatis']);
Route::put('/updateKathalstatis/{id}', [KathalstatisController::class, 'editKathalstatis']);
Route::get('/detailKathalstatis/{id}', [KathalstatisController::class, 'detailKathalstatis']);
Route::delete('/deleteKathalstatis/{id}', [KathalstatisController::class, 'deleteKathalstatis']);

Route::get('/Banner', [BannerController::class, 'getBanner'])->name('banners.banner');
Route::get('/tambahBanner', [BannerController::class, 'tambahBanner']);
Route::post('/postBanner', [BannerController::class, 'postBanner']);
Route::get('/editBanner/{id}', [BannerController::class, 'getIdBanner']);
Route::put('/updateBanner/{id}', [BannerController::class, 'editBanner']);
Route::get('/detailBanner/{id}', [BannerController::class, 'detailBanner']);
Route::delete('/deleteBanner/{id}', [BannerController::class, 'deleteBanner']);

Route::get('/Berita', [BeritaController::class, 'getBerita'])->name('beritas.berita');
Route::get('/tambahBerita', [BeritaController::class, 'tambahBerita']);
Route::post('/postBerita', [BeritaController::class, 'postBerita']);
Route::get('/editBerita/{id}', [BeritaController::class, 'getIdBerita']);
Route::put('/updateBerita/{id}', [BeritaController::class, 'editBerita']);
Route::get('/detailBerita/{id}', [BeritaController::class, 'detailBerita']);
Route::delete('/deleteBerita/{id}', [BeritaController::class, 'deleteBerita']);
Route::get('/pdfBerita', [BeritaController::class, 'pdfBerita'])->name('beritas.pdf');

Route::get('/Dokumen', [DokumenController::class, 'getDokumen'])->name('dokumens.dokumen');
Route::get('/tambahDokumen', [DokumenController::class, 'tambahDokumen']);
Route::post('/postDokumen', [DokumenController::class, 'postDokumen']);
Route::get('/editDokumen/{id}', [DokumenController::class, 'getIdDokumen']);
Route::put('/updateDokumen/{id}', [DokumenController::class, 'editDokumen']);
Route::get('/detailDokumen/{id}', [DokumenController::class, 'detailDokumen']);
Route::delete('/deleteDokumen/{id}', [DokumenController::class, 'deleteDokumen']);

Route::get('/Faq', [FaqController::class, 'getFaq'])->name('faqs.faq');
Route::get('/tambahFaq', [FaqController::class, 'tambahFaq']);
Route::post('/postFaq', [FaqController::class, 'postFaq']);
Route::get('/editFaq/{id}', [FaqController::class, 'getIdFaq']);
Route::put('/updateFaq/{id}', [FaqController::class, 'editFaq']);
Route::get('/detailFaq/{id}', [FaqController::class, 'detailFaq']);
Route::delete('/deleteFaq/{id}', [FaqController::class, 'deleteFaq']);

Route::get('/Galerifoto', [GaleriFotoController::class, 'getGalerifoto'])->name('galerifotos.galerifoto');
Route::get('/tambahGalerifoto', [GaleriFotoController::class, 'tambahGalerifoto']);
Route::post('/postGalerifoto', [GaleriFotoController::class, 'postGalerifoto']);
Route::get('/editGalerifoto/{id}', [GaleriFotoController::class, 'getIdGalerifoto']);
Route::put('/updateGalerifoto/{id}', [GaleriFotoController::class, 'editGalerifoto']);
Route::get('/detailGalerifoto/{id}', [GaleriFotoController::class, 'detailGalerifoto']);
Route::delete('/deleteGalerifoto/{id}', [GaleriFotoController::class, 'deleteGalerifoto']);

Route::get('/Galerivideo', [GaleriVideoController::class, 'getGalerivideo'])->name('galerivideos.galerivideo');
Route::get('/tambahGalerivideo', [GaleriVideoController::class, 'tambahGalerivideo']);
Route::post('/postGalerivideo', [GaleriVideoController::class, 'postGalerivideo']);
Route::get('/editGalerivideo/{id}', [GaleriVideoController::class, 'getIdGalerivideo']);
Route::put('/updateGalerivideo/{id}', [GaleriVideoController::class, 'editGalerivideo']);
Route::get('/detailGalerivideo/{id}', [GaleriVideoController::class, 'detailGalerivideo']);
Route::delete('/deleteGalerivideo/{id}', [GaleriVideoController::class, 'deleteGalerivideo']);

Route::get('/Headerslide', [HeaderSlideController::class, 'getHeaderslide'])->name('headerslides.headerslide');
Route::get('/tambahHeaderslide', [HeaderSlideController::class, 'tambahHeaderslide']);
Route::post('/postHeaderslide', [HeaderSlideController::class, 'postHeaderslide']);
Route::get('/editHeaderslide/{id}', [HeaderSlideController::class, 'getIdHeaderslide']);
Route::put('/updateHeaderslide/{id}', [HeaderSlideController::class, 'editHeaderslide']);
Route::get('/detailHeaderslide/{id}', [HeaderSlideController::class, 'detailHeaderslide']);
Route::delete('/deleteHeaderslide/{id}', [HeaderSlideController::class, 'deleteHeaderslide']);

Route::get('/Statis', [StatisController::class, 'getStatis'])->name('halstatiss.halstatis');
Route::get('/tambahStatis', [StatisController::class, 'tambahStatis']);
Route::post('/postStatis', [StatisController::class, 'postStatis']);
Route::get('/editStatis/{id}', [StatisController::class, 'getIdStatis']);
Route::put('/updateStatis/{id}', [StatisController::class, 'editStatis']);
Route::get('/detailStatis/{id}', [StatisController::class, 'detailStatis']);
Route::delete('/deleteStatis/{id}', [StatisController::class, 'deleteStatis']);
Route::get('/pdfStatis', [StatisController::class, 'pdfStatis'])->name('halstatiss.pdf');

Route::get('/Pengguna', [PenggunaController::class, 'getPengguna'])->name('penggunas.pengguna');
Route::get('/tambahPengguna', [PenggunaController::class, 'tambahPengguna']);
Route::post('/postPengguna', [PenggunaController::class, 'postPengguna']);
Route::get('/editPengguna/{id}', [PenggunaController::class, 'getIdPengguna']);
Route::put('/updatePengguna/{id}', [PenggunaController::class, 'editPengguna']);
Route::get('/detailPengguna/{id}', [PenggunaController::class, 'detailPengguna']);
Route::delete('/deletePengguna/{id}', [PenggunaController::class, 'deletePengguna']);
