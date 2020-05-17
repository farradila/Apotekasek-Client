<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

	<title>@yield('title')</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="/apotekasek/public/home"><b><strong>Apotekasek</strong></a>
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
	<br><br>
	<h2 style="text-align:center"><strong>SELAMAT DATANG DI APOTEKASEK</strong></h2>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-35">
					
						<img src="{{ ('/apotekasek/img/apotek.jpg ') }}" width="165%" height="80%" style="display: block; margin: auto;">
					
				
			</div>
		</div>
	</div>
</body>
</html>