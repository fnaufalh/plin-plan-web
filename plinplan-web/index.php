<!DOCTYPE html>
<html>
<head>
	<title>Plinplan</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/plinplan_symbol.ico">
	<link rel="stylesheet" type="text/css" href="assets/awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>

</head>
<body>

<!-- Modal Login -->

<div class="container">
	<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="modal fade centre col-md-5" id="myModal">
	        <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal">x</button>
	    	    <img  class="modal-logo" src="assets/img/plinplan.png">
	    	    
	        </div>
	        <div class="modal-body">
	            <form method="post" action='' name="login_form">
	            	<table class="login">
	            		<tr>
	            			<td>
	            				<input type="text" class="span3" name="email" id="email" placeholder="Alamat e-mail">		
	            			</td>
	            		</tr>
	            		<tr>
	            			<td>
	            				<input type="password" class="span3" name="passwd" placeholder="Kata sandi">
	            			</td>
	            		</tr>
	            	</table>
	           		
	            	<button type="submit" class="submit btn btn-primary">Masuk</button>
	              	<a style="float:right;" href="#">Lupa kata sandi ?</a>
	            </form>
	        </div>
	          <div class="modal-footer">
	            Belum daftar ?
	            <a href="#" class="">Daftar disini</a>
	          </div>
	    </div>
	</div>
	<div class="col-md-3"></div>
    </div>
</div>

<!-- End Modal Login -->

<!-- Start Header -->

	<nav class="navbar navbar-blue navbar-default navbar-static-top">
  		<div class="container">
  			<div class="col-md-1"></div>
  			<div class="col-md-10">
	    		<img class="header-logo" src="assets/img/plinplan-white.png">
	    		<div class="top-right-menu">
		    		<ul>
				    	<li>
				    		<a class="header-login" data-toggle="modal" href="#myModal" >Masuk</a>
		    			</li>
		    			<li>
				    		<a class="header-about" href="#" >Daftar</a>
				    	</li>
		    		</ul>
	    		</div>
    		</div>
    		<div class="col-md-1"></div>
  		</div>
	</nav>

<!-- End Header -->

<!-- Start Content -->
	
	<div class="content container margin-top">
		<div class="col-md-1"></div>
		<div class="margin-top-content col-md-10">
			<div class="col-md-6">
			<img class="phone" src="assets/img/phone.png">
			</div>
			<div class="desc col-md-6">
				<img class="content-logo" src="assets/img/plinplan.png">
				<br/>
				<strong>Bagikan foto-fotomu, lihat perbedaannya.</strong>
				<p style="text-align:justify;">Sebuah media sosial yang gratis, dapat membandingkan dua gambar
				sekaligus untuk melihat perbedaan atau perubahan apa yang ada pada
				gambar tersebut. Bagikan gambar-gambar tersebut dan diskusikan gambar-
				gambar tersebut bersama teman-temanmu diseluruh dunia.</p>
				<img class="store" src="assets/img/app_store.png">
				<img class="store" src="assets/img/play_store.png">
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
	<div class="bg-footer navbar navbar-static-bottom">
		
		<footer class="container">
		<div class="col-md-1"></div>
			<div class="col-md-10">
				<img class="footer-logo" src="assets/img/plinplan.png">
				<nav class="footer-align bold">
					<ul>
						<li><a href="#">Tentang Kami</a></li>
						<li><a href="#">Bantuan</a></li>
						<li><a href="#">Privasi</a></li>
						<li><a href="#">Pengembang</a></li>
						<li><a data-toggle="modal" href="#myModal">Masuk</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-md-1"></div>
		</footer>
		
		
<!-- End Content --> 

	</div>
	
</body>
</html>