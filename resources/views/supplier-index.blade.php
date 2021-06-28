<!doctype html>
<html lang="en">
  <head>
  	<title>Kasir--BUY SUPPLIER</title>
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
		  		<h1><a href="index.html" class="logo">Kasir</a></h1>
				<ul class="list-unstyled components mb-5">
				<li>
                    <a href="#order" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Order</a>
                    <ul class="collapse list-unstyled" id="order">
                    <li>
                        <a href="/costumer-index">Costumer</a>
                    </li>
                    <li>
                        <a href="/menu-index">Menu</a>
                    </li>
                    <li>
                        <a href="/order-index">Order</a>
                    </li>
                    </ul>
                </li>
                <li>
                    <a href="#buy" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Buy</a>
                    <ul class="collapse list-unstyled" id="buy">
                    <li>
                        <a href="/supplier-index">Supplier</a>
                    </li>
                    <li>
                        <a href="/product-index">Product</a>
                    </li>
                    <li>
                        <a href="/buy-index">Buy</a>
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
          <h3 class="box-title">Data Supplier</h3>
        </div>
        <table>
        <form role="form" method="post" enctype="multipart/form-data" action="/simpan-supplier">
        @php echo csrf_field() @endphp
        <div class="form-group">
            <label>Nama Supplier</label>
            <input class="form-control" type="text" name="nama" placeholder="Ex: Made Rahayu" required>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" required>
                                    <option value="1">Pria</option>
                                    <option value="2">Wanita</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>No Telp</label>
                                <input class="form-control" type="text" name="no_hp" placeholder="Ex:(+62)895xxxxxxxxx">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input class="form-control" type="text" name="alamat" placeholder="Ex:Jalan Bendul Merisi">
                            </div>

                            <div class="form-group bb">
                                <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                            </div>
        </form>
        </table>
        
      </div>
      <!-- /.box -->
    </div>
    
    <!--/.col (left) -->
    <div class="col-md-6">
    <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>No</td>
                            <td>Nama Supplier</td>
                            <td>Jenis Kelamin</td>
                            <td>No Telp</td>
                            <td>Alamat</td>
                            <td>Action</td>
                        </tr>
        
                        @foreach ($suppliers as $key => $c)
                            <tr>
                                <th>{{ $key+1 }}</th>
                                <td>{{ $c->nama }}</td>
                                <td>
                                    @if ($c->jenis_kelamin == '1')
											{!! $jenis_kelamin = 'Pria' !!}
										@else 
											{!! $jenis_kelamin = 'Wanita' !!}
										@endif
                                </td>
                                <td>{{ $c->no_hp }}</td>   
                                <td>{{ $c->alamat }}</td>
                                <td>
                                        <a href="/supplier-delete{{$c->id}}" class="btn btn-secondary btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
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
      