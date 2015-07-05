<!doctype html>
<html>
	<head>
		<title>Register Form</title>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url("assets/img/plinplan_symbol.ico")?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/awesome/css/font-awesome.css")?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css")?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css")?>">
        <script src='https://www.google.com/recaptcha/api.js'></script>
		<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js")?>"></script>
		<script type="text/javascript" src="<?php echo base_url("assets/bootstrap/js/bootstrap.js")?>"></script>
	</head>
	<body>
		<!-- Start Header -->

	<nav class="navbar navbar-blue navbar-default navbar-static-top">
  		<div class="container">
  			<div class="col-md-1"></div>
  			<div class="col-md-10">
	    		<img class="header-logo" src="<?php echo base_url("assets/img/plinplan-white.png")?>">
	    		<div class="top-right-menu">
		    		<ul>
				    	<li>
				    		<a class="header-login" data-toggle="modal" href="#myModal" >Masuk</a>
		    			</li>
		    			<li>
				    		<a class="header-about" href="<?php echo site_url('register')?>" >Daftar</a>
				    	</li>
		    		</ul>
	    		</div>
    		</div>
    		<div class="col-md-1"></div>
  		</div>
	</nav>

<!-- End Header -->

<!-- Modal Login -->

<div class="container">
	<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="modal fade centre col-md-5" id="myModal">
	        <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal">x</button>
	    	    <img  class="modal-logo" src="<?php echo base_url("assets/img/plinplan.png");?>">
	    	    
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

<form class="form-horizontal" action='' method="POST">
	<div class="container">
	<div class="col-md-2"></div>
  			<div class="col-md-8">
  <fieldset>
    <div id="legend">
      <legend class="">Daftar</legend>
    </div>

    <div class="control-group">
		<?php echo form_open('register/upload'); ?>
		<?php echo form_label('Username', 'username'); ?>
		<?php echo form_input('username', '', 'id="username" class="control-innput"').'<br />'; ?>
		<hr></hr>
		<?php echo form_label('Password', 'passwowrd'); ?>
		<?php echo form_password('password', '', 'id="password" class="control-innput"').'<br />'; ?>
		<hr></hr>
		<?php echo form_label('Email', '', 'email'); ?>
		<?php echo form_input('email', '', 'id="email" class="control-innput"').'<br />'; ?>
		<hr></hr>
		<?php echo form_label('Nama Depan', 'nama_depan'); ?>
		<?php echo form_input('nama_depan', '', 'id="nama_depan" class="control-innput"').'<br />'; ?>
		<hr></hr>
		<?php echo form_label('Nama Belakang', 'nama_belakang'); ?>
		<?php echo form_input('nama_belakang', '', 'id="nama_belakang" class="control-innput"').'<br />'; ?>
		<hr></hr>
		<?php echo form_label('Tanggal Lahir', 'tgl"'); ?>
		<?php echo form_input('tgl_lahir', '', 'id="tgl" class="control-innput"').'<br />'; ?>
		<hr></hr>
		<div style="background-color:#2D6588; padding: 20px 70px 20px 0px; margin-left: 0px; ">
		<table style="margin-left: 72px; color:#fff; font-weight:small">
			<tr>
				<td rowspan='4'>
					<div class="fa fa-lock" style="font-size: 60px; padding-right:20px;"></div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="fa fa-check-square" style="margin-right:10px;"></div>
				</td>
				<td>
					Harap tidak menginformasikan username dan password Anda kepada siapapun
				</td>
			</tr>
			<tr>
				<td>
					<div class="fa fa-check-square" style="margin-right:10px;"></div>
				</td>
				<td>
					Gunakanlah fitur-fitur yang ada di plinplan dengan baik dan benar						
				</td>
			</tr>
			<tr>
				<td>
					<div class="fa fa-check-square" style="margin-right:10px;"></div>
				</td>
				<td>
					Pastikan link yang anda akses adalah <a class="link-plinplan" href="http://plin-plan.com">http://plin-plan.com</a>
				</td>
			</tr>
			
		</table>
		</div>
		<?php echo form_submit('submit', 'Daftar', 'class="btn btn-daftar btn-primary"'); ?>	
		<?php echo form_close(); ?>
	</div>
	</fieldset>
		</div>
		<div class="col-md-2"></div>
	</div>
</form>

		<footer class="container">
		<div class="col-md-1"></div>
			<div class="col-md-10">
				<img class="footer-logo" src="<?php echo base_url('assets/img/plinplan.png')?>">
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

	</body>
</html>