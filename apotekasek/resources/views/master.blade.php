<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

	<title>@yield('title')</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="/apotekasek/public/home"><strong>Apotekasek</strong></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="/apotekasek/public/home">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="/apotekasek/public/obat">Obat</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="/apotekasek/public/pelanggan">Pelanggan</a>
	      </li>
	     <li class="nav-item">
	        <a class="nav-link" href="/apotekasek/public/beli">Beli</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<div class="container">
		<div class="row mt-3">
			<div class="col-md-12">
				<div class="card center">
					<div class="card-header text-center">
						<h2>@yield('judul_halaman')</h2>
					</div>
					<div class="card-body">
						@yield('konten')
					</div>
				<div class="card center">
			</div>
		</div>
	</div>

</script>
</body>
</html>