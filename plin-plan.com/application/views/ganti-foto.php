

	<div class="content">
		<div class="container">
			<div class="col-md-1"></div>
			<div class="col-md-10" style="background-color:white">
				<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                   <?php 
                        $a = $this->session->userdata['isLogin']['name'];
                        echo anchor(site_url('profile'),"Hallo, $a")
                    ?>
                </li>
                <li>
                   <?php 
                        echo anchor(site_url('profile'),'Edit Profil');
                    ?>
                </li>
                <li>
                   <?php
                        echo anchor(site_url('profile/gantiPassword'),'Ganti Password');
                    ?>
                </li>
                <li>
                   <?php
                        echo anchor(site_url('profile/gantiFoto'),'Ganti Foto','class="sidebar-active"');
                    ?>
                </li>
                <li>
                   <?php 
                        echo anchor(site_url('login/logout'),'Log Out');
                    ?>
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
                            <td><input class="control-innput" type="file" name="foto" value="load dari database"/></td>
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