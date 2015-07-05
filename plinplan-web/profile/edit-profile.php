<!doctype html>
<html>
	<head>
		<title>Edit Profile</title>
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
                    <a href="edit-profil.php" class="sidebar-active">Edit Profil</a>
                </li>
                <li>
                    <a href="ganti-password.php">Ganti Password</a>
                </li>
                <li>
                    <a href="ganti-foto.php">Ganti Foto</a>
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
                	<h1 style="color:#2D6588;">Edit Profil</h1>
                </legend>
                    <table class="general">
                        <tr>
                            <td><strong>Nama</strong></td>
                            <td><input class="control-innput" name="username" value="load dari database"/></td>
                        </tr>
                        <tr>
                            <td><strong>E-mail</strong></td>
                            <td><input class="control-innput" name="email" value="load dari database"/></td>
                        </tr>
                        <tr>
                            <td><strong>No Handphone</strong></td>
                            <td><input class="control-innput" name="nohp" value="load dari database"/></td>
                        </tr>
                        <tr>
                            <td><strong>Kelamin</strong></td>
                            <td>
                            <!--ini juga datanya di load dari database-->
                                <select class="control-select" name="sex">
                                    <option value="">Dirahasiakan</option>
                                    <option value="m">Laki-laki</option>    
                                    <option value="f">Perempuan</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Biodata</strong></td>
                            <td><textarea class="control-text" name="biodata">load dari database</textarea></td>
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