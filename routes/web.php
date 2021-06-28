<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//KASIR PENJUALAN
//CUSTOMER
Route::get('/costumer-index', 'CostumerController@index');
Route::get('/costumer', 'CostumerController@index')->name('costumer');
Route::get('/costumer-delete{id}', 'CostumerController@delete');
Route::post('/simpan-costumer', 'CostumerController@store');

//MENU
Route::get('/menu-index', 'MenuController@index')->name('menu');
Route::post('/menu-simpan', 'MenuController@store');
Route::get('/menu-delete-{id}', 'MenuController@delete');

//ORDER
Route::get('/order-index', 'OrderController@index')->name('order');
Route::post('/order-store', 'OrderController@store');
Route::get('/order-delete{id}', 'OrderController@delete');

//KASIR PEMBELIAN
//PRODUCT
Route::get('/product-index', 'ProductController@index')->name('product');
Route::post('/product-simpan', 'ProductController@store');
Route::get('/product-delete-{id}', 'ProductController@delete');

//SUPPLIER
Route::get('/supplier-index', 'SupplierController@index');
Route::get('/supplier', 'SupplierController@index')->name('supplier');
Route::get('/supplier-delete{id}', 'SupplierController@delete');
Route::post('/simpan-supplier', 'SupplierController@store');

//BUY
Route::get('/buy-index', 'BuyController@index')->name('buy');
Route::post('/buy-store', 'BuyController@store');
Route::get('/buy-delete{id}', 'BuyController@delete');

//ADMIN
//JURNAL MANUAL
Route::get('/jurnal-manual-index', 'JurnalManualController@index');
Route::post('/jurnal-manual-store', 'JurnalManualController@store');
Route::get('/jurnal-manual-delete{id}', 'JurnalManualController@delete');

//AKUN
Route::get('/account', 'AccountController@index');
Route::post('/addAccount', 'AccountController@store');
Route::post('{id}updateAccount', 'AccountController@update');
Route::get('/account-delete{id}', 'AccountController@destroy');

//JENIS AKUN
Route::get('/account-jenis', 'AccountJenisController@index');
Route::post('/addJenis', 'AccountJenisController@store');
Route::post('{id}/updateJenis', 'AccountJenisController@update');
Route::get('/jenis-delete{id}', 'AccountJenisController@destroy');

//KLASIFIKASI AKUN
Route::get('/account-tipe', 'AccountTypeController@index');
Route::post('/addTipe', 'AccountTypeController@store');
Route::post('{id}/updateType', 'AccountTypeController@update');
Route::get('/tipe-delete{id}', 'AccountTypeController@destroy');

//JENIS ASSET
Route::get('/asset-group', 'AssetsGroupController@index');
Route::post('/addAsset', 'AssetsGroupController@store');
Route::post('{id}/updateAssetGroup', 'AssetsGroupController@update');
Route::get('/asset-delete{id}', 'AssetsGroupController@destroy');

//KLASIFIKASI ASSET
Route::get('/asset-tipe', 'AssetsTypeController@index');
Route::post('/addAssetTipe', 'AssetsTypeController@store');
Route::post('{id}/updateAssetType', 'AssetsTypeController@update');
Route::get('/asset-tipe-delete{id}', 'AssetsTypeController@destroy');

//PAJAK
Route::get('/tax', 'TaxController@index');
Route::post('/addTax', 'TaxController@store');
Route::post('{id}/updateTax', 'TaxController@update');
Route::get('/tax-delete{id}', 'TaxController@destroy');

//KAS
Route::get('/incomeCash', 'CashController@showIncomeCash');
Route::get('/expenseCash', 'CashController@showExpenseCash');
Route::post('/addCash', 'CashController@store');
Route::post('{id}/updateIncomeCash', 'CashController@update');
Route::post('{id}/updateExpenseCash', 'CashController@update');
Route::get('{id}/deleteIncomeCash', 'CashController@destroy');
Route::get('{id}/deleteExpenseCash', 'CashController@destroy');
Route::post('{id}/postingCash', 'CashController@posting');

//JURNAL UMUM MANUAL
Route::get('/journal', 'JournalController@index');
Route::post('/addJournal', 'JournalController@store');
Route::post('{id}/updateJournal', 'JournalController@update');
Route::get('{id}/deleteJournal', 'JournalController@destroy');
Route::get('{id}postingToLedger', 'JournalController@posting');

////JURNAL UMUM
Route::get('/ledger', 'LedgerController@index');

//BUKU BESAR
Route::get('/buku-besar', 'BukuBesarController@index');
Route::get('/lihat-kas', 'BukuBesarController@kas');
Route::get('/lihat-bank', 'BukuBesarController@bank');
Route::get('/lihat-piutang-usaha', 'BukuBesarController@piutangUsaha');
Route::get('/lihat-deposit-supplier', 'BukuBesarController@depositSupplier');
Route::get('/lihat-piutang-non-usaha', 'BukuBesarController@piutangNonUsaha');
Route::get('/lihat-persediaan-bahan-dagang', 'BukuBesarController@persediaanBahanDagang');
Route::get('/lihat-asuransi-dibayar-dimuka', 'BukuBesarController@asuransiDibayarDimuka');
Route::get('/lihat-investasi-saham', 'BukuBesarController@investasiSaham');
Route::get('/lihat-tanah', 'BukuBesarController@tanah');
Route::get('/lihat-hutang-usaha', 'BukuBesarController@hutangUsaha');
Route::get('/lihat-hutang-non-usaha', 'BukuBesarController@hutangNonUsaha');
Route::get('/lihat-penjualan', 'BukuBesarController@penjualan');
Route::get('/lihat-retur-penjualan', 'BukuBesarController@returPenjualan');
Route::get('/lihat-harga-pokok-penjualan', 'BukuBesarController@hargaPokokPenjualan');
Route::get('/lihat-gaji', 'BukuBesarController@gaji');
Route::get('/lihat-beban', 'BukuBesarController@beban');
Route::get('/lihat-biaya-bunga', 'BukuBesarController@biayaBunga');
Route::get('/lihat-jasa-bank', 'BukuBesarController@jasaBank');

//LABA RUGI
Route::get('/laporanLabaRugi', 'LaporansController@viewLabaRugi');

//ADMIN ORDER
Route::get('/admin-order', 'LaporansController@order');
//ADMIN BUY
Route::get('/admin-buy', 'LaporansController@buy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//LOGIN
Route::group(['middleware' => ['auth', 'isAdmin']], function() {
    Route::get('/admin', 'MenuController@admin');
});

Route::group(['middleware' => ['auth', 'isKasir']], function() {
    Route::get('/kasir', 'MenuController@kasir');
});

