<!doctype html>
<html lang="en">
  <head>
  	<title>Admin--AKUN</title>
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
<div class="row">
    <!-- left column -->
    
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="box box-dark">
        <div class="box-header with-border">
          <h3 class="box-title">Data Akun</h3>
        </div>
        <table>
        <form role="form" method="post" enctype="multipart/form-data" action="/addAccount">
        @php echo csrf_field() @endphp
        <div class="form-group">
                        <label>Kode Akun</label>
                        <input type="text" class="form-control" name="account_code" id="account_code" placeholder="Masukkan Kode Akun">

                        @if ($errors->has('account_code'))
                        <span><p style="color: red">{{ $errors->first('account_code') }}</p></span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>Nama Akun</label>
                        <input type="text" class="form-control" name="account_name" id="account_name" placeholder="Masukkan Nama Akun">

                        @if ($errors->has('account_name'))
                        <span><p style="color: red">{{ $errors->first('account_name') }}</p></span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>Saldo Akun</label>
                        <input type="text" class="form-control" name="saldo_account" id="saldo_account" placeholder="Masukkan Saldo Akun">

                        @if ($errors->has('saldo_account'))
                        <span><p style="color: red">{{ $errors->first('saldo_account') }}</p></span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>Jenis</label>
                        <select class="form-control" name="account_jenis_name" id="account_jenis_name">
                            <option value="" selected>Pilih Jenis Akun</option>
                            
                            @foreach($account_jenis as $jenis)
                            
                            <option value="{{ $jenis->account_jenis_name }}">{{ $jenis->account_jenis_name }}</option>

                            @endforeach

                        </select>

                        @if ($errors->has('account_jenis_name'))
                        <span><p style="color: red">{{ $errors->first('account_jenis_name') }}</p></span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>Klasifikasi</label>
                        <select class="form-control" name="account_type_name" id="account_type_name">
                            <option value="" selected>Pilih Tipe Akun</option>

                            @foreach($account_type as $type)
                            
                            <option value="{{ $type->account_type_name }}">{{ $type->account_type_name }}</option>

                            @endforeach
                            
                        </select>

                        @if ($errors->has('account_type_name'))
                        <span><p style="color: red">{{ $errors->first('account_type_name') }}</p></span>
                        @endif

                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
        </form>
        </table>
        
      </div>
      <!-- /.box -->
    </div>
    
    <!--/.col (left) -->
    <div class="col-md-6">
    <table class="table table-bordered table-stripped data">
                            <thead style="text-align: center">
                                <th style="text-align: center">#</th>
                                <th>Kode Akun</th>
                                <th>Nama Akun</th>
                                <th>Saldo</th>
                                <th>Jenis</th>
                                <th>Klasifikasi</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @forelse ($account as $indexKey => $akun)
                                    <tr>
                                        <td style="text-align: center">{{ $indexKey+1 }}</td>
                                        <td>{{ $akun->account_code }}</td>
                                        <td>{{ $akun->account_name }}</td>
                                        <td>{{ $akun->saldo_account }}</td>
                                        <td>{{ $akun->account_jenis_name }}</td>
                                        <td>{{ $akun->account_type_name }}</td>
                                        <td>
                                        <a href="/account-delete{{$jenis->id}}" class="btn btn-secondary btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">No records found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
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
      