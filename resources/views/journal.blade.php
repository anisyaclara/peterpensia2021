<!doctype html>
<html lang="en">
  <head>
  	<title>Admin--JURNAL UMUM</title>
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
          <h3 class="box-title">Jurnal Umum Manual</h3>
        </div>
        <table>
        <form role="form" method="post" enctype="multipart/form-data" action="/addJournal">
        @php echo csrf_field() @endphp
        <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="date form-control" name="trans_date" id="trans_date" placeholder="Masukkan Tanggal Transaksi">
                    
                        @if ($errors->has('trans_date'))
                        <span><p style="color: red">{{ $errors->first('rate') }}</p></span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>No. Referensi</label>
                        <input type="text" class="form-control" name="reference" id="reference" placeholder="Masukkan No. Referensi">
                    
                        @if ($errors->has('reference'))
                        <span><p style="color: red">{{ $errors->first('reference') }}</p></span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" name="description" id="description" placeholder="Masukkan Deskripsi">
                    
                        @if ($errors->has('description'))
                        <span><p style="color: red">{{ $errors->first('description') }}</p></span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>Akun Debit</label>
                        <select class="form-control" name="debit_account" id="debit_account">
                            <option value="" selected>Pilih Akun Debit</option>
                            
                            @foreach($account as $akun)
                            
                            <option value="{{ $akun->account_name }}">{{ $akun->account_name }}</option>

                            @endforeach

                        </select>

                        @if ($errors->has('debit_account'))
                        <span><p style="color: red">{{ $errors->first('debit_account') }}</p></span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>Akun Kredit</label>
                        <select class="form-control" name="kredit_account" id="kredit_account">
                            <option value="" selected>Pilih Akun Kredit</option>
                            
                            @foreach($account as $akun)
                            
                            <option value="{{ $akun->account_name }}">{{ $akun->account_name }}</option>

                            @endforeach

                        </select>

                        @if ($errors->has('kredit_account'))
                        <span><p style="color: red">{{ $errors->first('kredit_account') }}</p></span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>Debit</label>
                        <input type="text" class="form-control" name="debit" id="debit" placeholder="Masukkan Total Debit">
                    
                        @if ($errors->has('debit'))
                        <span><p style="color: red">{{ $errors->first('debit') }}</p></span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>Kredit</label>
                        <input type="text" class="form-control" name="kredit" id="kredit" placeholder="Masukkan Total Kredit">
                    
                        @if ($errors->has('kredit'))
                        <span><p style="color: red">{{ $errors->first('kredit') }}</p></span>
                        @endif

                    </div>
            </div>
            <div class="modal-footer">
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
    
    <table class="table table-bordered table-stripped data">
    <thead style="text-align: center">
                            <th style="text-align: center">#</th>
                            <th>Tanggal</th>
                            <th>No. Referensi</th>
                            <th>Deskripsi</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @forelse ($journal as $indexKey => $journals)
                                <tr>
                                    <td style="text-align: center">{{ $indexKey+1 }}</td>
                                    <td>{{ $journals->trans_date }}</td>
                                    <td>{{ $journals->reference }}</td>
                                    <td>{{ $journals->description }}</td>
                                    <td>Rp. {{ $journals->debit }}</td>
                                    <td style="text-align: center">
                                        @if ($journals['posting'] == 'no')
                                        <a href="/journal-delete{{$journals->id}}" class="btn btn-danger btn-sm">Delete</a>
                                        {{-- @if ($journals['posting'] == 'no') --}}
                                        <a href="{{$journals->id}}postingToLedger" class="btn btn-primary btn-sm">Posting</a>
                                        @endif
                                        

                                        

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
      