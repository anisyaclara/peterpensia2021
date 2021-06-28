<!doctype html>
<html lang="en">
  <head>
  	<title>Admin--DAFTAR AKUN BUKU BESAR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="index.html" class="logo">Admin</a></h1>
				<ul class="list-unstyled components mb-5">
				<li>
                    <a href="#akun" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Akun</a>
                    <ul class="collapse list-unstyled" id="akun">
                    <li>
                        <a href="/account">Akun</a>
                    </li>
                    <li>
                        <a href="/account-jenis">Jenis Akun</a>
                    </li>
                    <li>
                        <a href="/account-tipe">Klasifikasi Akun</a>
                    </li>
                    </ul>
                </li>
                <li>
                    <a href="#transaksi" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Transaksi</a>
                    <ul class="collapse list-unstyled" id="transaksi">
                    <li>
                        <a href="/admin-order">Transaksi Order</a>
                    </li>
                    <li>
                        <a href="/admin-buy">Transaksi Buy</a>
                    </li>
                    </ul>
                </li>
                <li>
                    <a href="#jurnalUmum" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Jurnal Umum</a>
                    <ul class="collapse list-unstyled" id="jurnalUmum">
                    <li>
                        <a href="/journal">Jurnal Umum Manual</a>
                    </li>
                    <li>
                        <a href="/ledger">Jurnal Umum</a>
                    </li>
                    </ul>
                </li>
                <li>
                    <a href="#bukuBesar" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Buku Besar</a>
                    <ul class="collapse list-unstyled" id="bukuBesar">
                    <li>
                        <a href="/buku-besar">Buku Besar</a>
                    </li>
                    </ul>
                </li>
                <li>
                    <a href="#labarRugi" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Laba Rugi</a>
                    <ul class="collapse list-unstyled" id="labarRugi">
                    <li>
                        <a href="/laporanLabaRugi">Laba Rugi</a>
                    </li>
                    </ul>
                </li>
                <li>
					<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">LOG OUT</a>
					<ul class="collapse list-unstyled" id="homeSubmenu">
					<li>
						<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
					</li>
					</ul>
	      </li>
				</ul>
	      </li>

	        <div class="footer">
	        	<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script></p>
	        </div>

	      </div>
    	</nav>
		<div id="content" class="p-4 p-md-5 pt-5">
		
        <div class="mx-5 mt-5">
		<h2>Daftar Akun Buku Besar</h2>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Akun</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Kas</td>
      <td><a href="/lihat-kas" class="btn btn-primary btn-sm">Detail</a></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Bank</td>
      <td><a href="/lihat-bank" class="btn btn-primary btn-sm">Detail</a></td>
      
    </tr>
	<tr>
      <th scope="row">3</th>
      <td>Piutang Usaha</td>
      <td><a href="/lihat-piutang-usaha" class="btn btn-primary btn-sm">Detail</a></td>
    </tr>
	<tr>
      <th scope="row">4</th>
      <td>Deposit Supplier</td>
      <td><a href="/lihat-deposit-supplier" class="btn btn-primary btn-sm">Detail</a></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Piutang Non Usaha</td>
      <td><a href="/lihat-piutang-non-usaha" class="btn btn-primary btn-sm">Detail</a></td>
    </tr>
	<tr>
      <th scope="row">6</th>
      <td>Persediaan Bahan Dagang</td>
      <td><a href="/lihat-persediaan-bahan-dagang" class="btn btn-primary btn-sm">Detail</a></td>
    </tr>
	<tr>
      <th scope="row">7</th>
      <td>Asuransi Dibayar Dimuka</td>
      <td><a href="/lihat-asuransi-dibayar-dimuka" class="btn btn-primary btn-sm">Detail</a></td>
    </tr>
	<tr>
      <th scope="row">8</th>
      <td>Investasi Saham</td>
      <td><a href="/lihat-investasi-saham" class="btn btn-primary btn-sm">Detail</a></td>
    </tr>
	<tr>
      <th scope="row">9</th>
      <td>Tanah</td>
      <td><a href="/lihat-tanah" class="btn btn-primary btn-sm">Detail</a></td>
    </tr>
	<tr>
      <th scope="row">10</th>
      <td>Hutang Usaha</td>
      <td><a href="/lihat-hutang-usaha" class="btn btn-primary btn-sm">Detail</a></td>
    </tr>
	<tr>
      <th scope="row">11</th>
      <td>Hutang Non Usaha</td>
      <td><a href="/lihat-hutang-non-usaha" class="btn btn-primary btn-sm">Detail</a></td>
    </tr>
	<tr>
      <th scope="row">12</th>
      <td>Penjualan</td>
      <td><a href="/lihat-penjualan" class="btn btn-primary btn-sm">Detail</a></td>
    </tr>
	<tr>
      <th scope="row">13</th>
      <td>Retur Penjualan</td>
      <td><a href="/lihat-retur-penjualan" class="btn btn-primary btn-sm">Detail</a></td>
    </tr>
	<tr>
      <th scope="row">14</th>
      <td>Harga Pokok Penjualan</td>
      <td><a href="/lihat-harga-pokok-penjualan" class="btn btn-primary btn-sm">Detail</a></td>
    </tr>
	<tr>
      <th scope="row">15</th>
      <td>Gaji</td>
      <td><a href="/lihat-gaji" class="btn btn-primary btn-sm">Detail</a></td>
    </tr>
	<tr>
      <th scope="row">16</th>
      <td>Listrik, Air, Telepon dan Internet</td>
      <td><a href="/lihat-beban" class="btn btn-primary btn-sm">Detail</a></td>
    </tr>
	<tr>
      <th scope="row">17</th>
      <td>Biaya Bunga</td>
      <td><a href="/lihat-biaya-bunga" class="btn btn-primary btn-sm">Detail</a></td>
    </tr>
	<tr>
      <th scope="row">18</th>
      <td>Jasa Bank</td>
      <td><a href="/lihat-jasa-bank" class="btn btn-primary btn-sm">Detail</a></td>
    </tr>
  </tbody>
</table>
    </div>
    </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
      