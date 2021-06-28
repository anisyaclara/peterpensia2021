<!doctype html>
<html lang="en">
  <head>
  	<title>Kasir--ORDER</title>
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
          <h3 class="box-title">Data Order</h3>
        </div>
        <table>
        <form role="form" method="post" enctype="multipart/form-data" action="/order-store">
        @php echo csrf_field() @endphp
        <div class="form-group">
        <div class="form-group">
                                               <label>Costumer</label>
                                               <select name="costumer_id" id="list" onchange="functionku()" class="form-control" required>
                                                <option>Pilih</option>   
                                                @foreach ($costumers as $c)
                                                        <option value="{{ $c->id }}">{{ $c->nama }}</option>
                                                    @endforeach
                                               </select>
                                           </div>
                                           <div class="form-group">
                                                <label>Menu (Harga)</label>
                                                <select class="form-control" name="menu_id" id="menu" onkeyup="sum();" onFocus=”startCalc();” onBlur=”stopCalc();” >
                                                    <option>Pilih</option>
                                                    @foreach($menus as $m)
                                                     <option value="{{ $m->id }}" data-harga="{{ $m->harga }}">{{ $m->nama_menu }} ({{ $m->harga }})</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Harga</label>
                                                <input class="form-control" type="text" name="harga_menu" id="harga_menu" onkeyup="sum()">
                                            </div>


                                            <div class="form-group">
                                                    <label>Total Menu</label>
                                                    <input class="form-control" type="text" name="total" id="total" onkeyup="sum();" onFocus=”startCalc();” onBlur=”stopCalc();”  required>
                                                </div>

                                            <div class="form-group">
                                                <label>Total Harga</label>
                                                <input type="text" name="total_harga" id="total_harga" onkeysup="sum()" class="form-control" readonly>
                                            </div>    

                                            
                                            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </table>
        
      </div>
      <!-- /.box -->
    </div>
    
    <!--/.col (left) -->
    <div class="col-md-6">
    <table class="table table-bordered">
    <tbody>
                            <tr class="text-center">
                                <td>ID</td>
                                <td>Customer</td>
                                <td>Menu</td>
                                <td>Total Menu</td>
                                <td>Harga</td>
                                <td>Total Pembayaran</td>
                                <td>Action</td>
                            </tr>

                            @foreach ($orders as $key => $o)
                                <tr>
                                    <th class="text-center">{{ $key+1 }}</th>
                                    <td class="text-left">{{ $o->costumer['nama']}}</td>
                                    <td class="text-left">{{ $o->menu['nama_menu'] }}</td>
                                    <td class="text-center">{{ $o->total }}</td>
                                    <td>Rp. {{ $o->menu['harga'] }}</td>
                                    <td>Rp. {{ $o->total*$o->menu['harga'] }}</td>         
                                    
                                    <td class="text-center">
                                        <a href="/order-delete{{ $o->id }}" class="btn btn-danger btn-sm">Batal</a> 	
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
    <script type="text/javascript">

        function functionku(){
          var list = document.getElementById("list");
            document.getElementById("harga_menu").value= list.options[list.selectedIndex].getAttribute('harga_menu');
            document.getElementById("total").value= list.options[list.selectedIndex].getAttribute('menu-total');
        }
      function sum(){
        var text1 = document.getElementById("harga_menu").value;
        var text2 = document.getElementById("total").value;
        var hasil = parseInt(text1)*parseInt(text2);
    
        if(!isNaN(hasil)){
          document.getElementById("total_harga").value=hasil;
        }
      }
        </script>

  </body>
</html>
      