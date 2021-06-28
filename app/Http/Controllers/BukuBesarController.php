<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Journals;

class BukuBesarController extends Controller
{
    public function index()
    {
        $daftar_akun = Account::all();
        return view('laporanBukuBesar', compact('daftar_akun'));
    }

    public function kas()
    {
        $kas = Journals::where('debit_account','Kas')->get();

         $debit = Journals::where('debit_account', 'Kas')->sum('debit');
         $kredit = Journals::where('debit_account', 'Kas')->sum('kredit');
         return view('detailkas', compact('kas', 'debit', 'kredit'));
    }

    public function bank()
    {
        $bank = Journals::where('debit_account','Bank')->get();

        $debit = Journals::where('debit_account', 'Bank')->sum('debit');
        $kredit = Journals::where('debit_account', 'Bank')->sum('kredit');
        return view('detail-bank', compact('bank', 'debit', 'kredit'));
    }

    public function piutangUsaha()
    {
        $piutang_usaha = Journals::where('debit_account','Piutang Usaha')->get();

        $debit = Journals::where('debit_account', 'Piutang Usaha')->sum('debit');
        $kredit = Journals::where('debit_account', 'Piutang Usaha')->sum('kredit');
        return view('detail-piutang-usaha', compact('piutang_usaha', 'debit', 'kredit'));
    }
    
    public function depositSupplier()
    {
        $deposit_supplier = Journals::where('debit_account','Deposit Supplier')->get();

        $debit = Journals::where('debit_account', 'Deposit Supplier')->sum('debit');
        $kredit = Journals::where('debit_account', 'Deposit Supplier')->sum('kredit');
        return view('detail-deposit-supplier', compact('deposit_supplier', 'debit', 'kredit'));
    }

    public function piutangNonUsaha()
    {
        $piutang_non_usaha = Journals::where('debit_account','Piutang Non Usaha')->get();

        $debit = Journals::where('debit_account', 'Piutang Non Usaha')->sum('debit');
        $kredit = Journals::where('debit_account', 'Piutang Non Usaha')->sum('kredit');
        return view('detail-piutang-non-usaha', compact('piutang_non_usaha', 'debit', 'kredit'));
    }

    public function persediaanBahanDagang()
    {
        $persediaan_bahan_dagang = Journals::where('debit_account','Persediaan Bahan Dagang')->get();

        $debit = Journals::where('debit_account', 'Persediaan Bahan Dagang')->sum('debit');
        $kredit = Journals::where('debit_account', 'Persediaan Bahan Dagang')->sum('kredit');
        return view('detail-persediaan-bahan-dagang', compact('persediaan_bahan_dagang', 'debit', 'kredit'));
    }

    public function asuransiDibayarDimuka()
    {
        $asuransi_dibayar_dimuka = Journals::where('debit_account','Asuransi Dibayar Dimuka')->get();

        $debit = Journals::where('debit_account', 'Asuransi Dibayar Dimuka')->sum('debit');
        $kredit = Journals::where('debit_account', 'Asuransi Dibayar Dimuka')->sum('kredit');
        return view('detail-asuransi-dibayar-dimuka', compact('asuransi_dibayar_dimuka', 'debit', 'kredit'));
    }

    public function investasiSaham()
    {
        $investasi_saham = Journals::where('debit_account','Investasi Saham')->get();

        $debit = Journals::where('debit_account', 'Investasi Saham')->sum('debit');
        $kredit = Journals::where('debit_account', 'Investasi Saham')->sum('kredit');
        return view('detail-deposit-supplier', compact('investasi_saham', 'debit', 'kredit'));
    }

    public function tanah()
    {
        $tanah = Journals::where('debit_account','Tanah')->get();

        $debit = Journals::where('debit_account', 'Tanah')->sum('debit');
        $kredit = Journals::where('debit_account', 'Tanah')->sum('kredit');
        return view('detail-tanah', compact('tanah', 'debit', 'kredit'));
    }

    public function hutangUsaha()
    {
        $hutang_usaha = Journals::where('debit_account','Hutang Usaha')->get();

        $debit = Journals::where('debit_account', 'Hutang Usaha')->sum('debit');
        $kredit = Journals::where('debit_account', 'Hutang Usaha')->sum('kredit');
        return view('detail-hutang-usaha', compact('hutang_usaha', 'debit', 'kredit'));
    }

    public function hutangNonUsaha()
    {
        $hutang_non_usaha = Journals::where('debit_account','Hutang Non Usaha')->get();

        $debit = Journals::where('debit_account', 'Hutang Non Usaha')->sum('debit');
        $kredit = Journals::where('debit_account', 'Hutang Non Usaha')->sum('kredit');
        return view('detail-hutang-non-usaha', compact('hutang_non_usaha', 'debit', 'kredit'));
    }

    public function penjualan()
    {
        $penjualan = Journals::where('debit_account','Penjualan')->get();

        $debit = Journals::where('debit_account', 'Penjualan')->sum('debit');
        $kredit = Journals::where('debit_account', 'Penjualan')->sum('kredit');
        return view('detail-penjualan', compact('penjualan', 'debit', 'kredit'));
    }

    public function returPenjualan()
    {
        $retur_penjualan = Journals::where('debit_account','Retur Penjualan')->get();

        $debit = Journals::where('debit_account', 'Retur Penjualan')->sum('debit');
        $kredit = Journals::where('debit_account', 'Retur Penjualan')->sum('kredit');
        return view('detail-retur-penjualan', compact('retur_penjualan', 'debit', 'kredit'));
    }

    public function hargaPokokPenjualan()
    {
        $harga_pokok_penjualan = Journals::where('debit_account','Harga Pokok Penjualan')->get();

        $debit = Journals::where('debit_account', 'Harga Pokok Penjualan')->sum('debit');
        $kredit = Journals::where('debit_account', 'Harga Pokok Penjualan')->sum('kredit');
        return view('detail-harga-pokok-penjualan', compact('harga_pokok_penjualan', 'debit', 'kredit'));
    }

    public function gaji()
    {
        $gaji = Journals::where('debit_account','Gaji')->get();

        $debit = Journals::where('debit_account', 'Gaji')->sum('debit');
        $kredit = Journals::where('debit_account', 'Gaji')->sum('kredit');
        return view('detail-gaji', compact('gaji', 'debit', 'kredit'));
    }

    public function beban()
    {
        $beban = Journals::where('debit_account','Listrik, Air, Telepon dan Internet')->get();

        $debit = Journals::where('debit_account', 'Listrik, Air, Telepon dan Internet')->sum('debit');
        $kredit = Journals::where('debit_account', 'Listrik, Air, Telepon dan Internet')->sum('kredit');
        return view('detail-beban', compact('beban', 'debit', 'kredit'));
    }

    public function biayaBunga()
    {
        $biaya_bunga = Journals::where('debit_account','Biaya Bunga')->get();

        $debit = Journals::where('debit_account', 'Biaya Bunga')->sum('debit');
        $kredit = Journals::where('debit_account', 'Biaya Bunga')->sum('kredit');
        return view('detail-biaya-bunga', compact('biaya_bunga', 'debit', 'kredit'));
    }

    public function jasBank()
    {
        $jasa_bank = Journals::where('debit_account','Jasa Bank')->get();

        $debit = Journals::where('debit_account', 'Jasa Bank')->sum('debit');
        $kredit = Journals::where('debit_account', 'Jasa Bank')->sum('kredit');
        return view('detail-jasa-bank', compact('jasa_bank', 'debit', 'kredit'));
    }
}
