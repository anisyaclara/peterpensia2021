<!doctype html>
<html lang="en">
  <head>
  	<title>Admin--LABA RUGI</title>
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
        <h1>Laba Rugi</h1>
        <div class="mx-5 mt-5">
        <table class="table table-striped table-bordered">
             <thead>
                <tr>
                    <th colspan="2">Pendapatan</th>
                                                        </tr>
                                                        <tr style="text-align: center">
                                                            <th>Akun</th>
                                                            <th>Jumlah</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($pendapatan as $pendapatans)
                                                        <tr>
                                                            <td>{{ $pendapatans['account_name'] }}</td>
                                                            <td>Rp. {{ number_format($pendapatans->saldo_account, 0, ',', '.') }},-</td>
                                                        </tr>
                                                        @endforeach
                                                        <tr>
                                                        <td colspan="1" style="text-align: right">Total Pendapatan</td>
                                                        <td>Rp. {{ number_format($totalPendapatan, 0, ',', '.') }},-</td>
                                                        </tr>
                                                    </tbody>
                                                    <thead>
                                                        <tr>
                                                            <th colspan="2">Beban</th>
                                                        </tr>
                                                        <tr style="text-align: center">
                                                            <th>Akun</th>
                                                            <th>Jumlah</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($pengeluaran as $pengeluarans)
                                                        <tr>
                                                            <td>{{ $pengeluarans['account_name'] }}</td>
                                                            <td>Rp. {{ number_format($pengeluarans->saldo_account, 0, ',', '.') }},-</td>
                                                        </tr>
                                                        @endforeach
                                                        <tr>
                                                        <td colspan="1" style="text-align: right">Total Pengeluaran</td>
                                                        <td>Rp. {{ number_format($totalPengeluaran, 0, ',', '.') }},-</td>
                                                        </tr>
                                                    </tbody>
                                                    <thead>
                                                        <tr>
                                                            <th colspan="2"></th>
                                                        </tr>
                                                    </thead>
                                                    <thead>
                                                        <tr>
                                                            <th>Laba Kotor</th>
                                                            <th>Rp. {{ number_format($LabaRugi, 0, ',', '.') }},-</th>
                                                        </tr>
                                                    </thead>
                                                </table>


            

        </div>
    </div>
    </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
      