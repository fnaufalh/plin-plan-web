<!doctype html>
<html>
	<head>
		<title>Ganti Avatar</title>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url("assets/img/plinplan_symbol.ico")?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/awesome/css/font-awesome.css")?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css")?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css")?>">

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

	<div class="content">
		<div class="container">
			<div class="col-md-1"></div>
			<div class="col-md-10" style="background-color:white">
				<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Halo, {nama depan user}
                    </a>
                </li>
                <li>
                    <a href="edit-profil.php" >Edit Profil</a>
                </li>
                <li>
                    <a href="ganti-password.php" >Ganti Password</a>
                </li>
                <li>
                    <a href="ganti-foto.php" class="sidebar-active">Ganti Foto</a>
                </li>
                <li>
                    <a href="#">Log Out</a>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        
    
                <form class="profile" action="" method="">
                <legend>
                	<h1 style="color:#2D6588;">Ganti Avatar</h1>
                </legend>
                    <table class="general">
                        <tr>
                            <td><img src="" alt="preview avatar dari database"></td>
                            <td><input class="control-innput" type="file" name="old-pass" value="load dari database"/></td>
                        </tr>
                        
                    </table>
                    <p class="form-action">
                        <input class="submit btn btn-primary" style="width:100px;" name="submit" type="submit" value="Simpan"/>
                    </p>
                </form>
           
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>

	<div class="bg-footer navbar navbar-static-bottom">
		
		<footer class="container">
		<div class="col-md-1"></div>
			<div class="col-md-10">
				<img class="footer-logo" src="<?php echo base_url("assets/img/plinplan.png");?>">
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

	<!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>
</html>