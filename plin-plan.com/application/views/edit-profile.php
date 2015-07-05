<?php 


?>

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
                        echo anchor(site_url('profile'),'Edit Profil','class="sidebar-active"');
                    ?>
                </li>
                <li>
                   <?php
                        echo anchor(site_url('profile/gantiPassword'),'Ganti Password');
                    ?>
                </li>
                <li>
                   <?php
                        echo anchor(site_url('profile/gantiFoto'),'Ganti Foto');
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
                        
    
<!--                <form class="profile" action="" method="">-->
                <?php 
                    $attributes =  array('class' => 'profile');
                    echo form_open('profile/edit',$attributes);
                ?>
                <legend>
                	<h1 style="color:#2D6588;">Edit Profil</h1>
                </legend>
                    <table class="general">
                        
                        <tr>
                            <td><strong>Nama Depan</strong></td>
                            <td>
                                <input class="control-innput" name="nama_depan" value="<?php print $edit['nama_depan'];?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Nama Belakang</strong></td>
                            <td>
                                <input class="control-innput" name="nama_belakang" value="<?php print $edit['nama_belakang'];?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>E-mail</strong></td>
                            <td><input class="control-innput" name="email" value="<?php print $edit['email'];?>"/></td>
                        </tr>
                        <tr>
                            <td><strong>No Handphone</strong></td>
                            <td><input class="control-innput" name="noTelp" value="<?php print $edit['noTelp'];?>"/></td>
                        </tr>
                        <tr>
                            <td><strong>Tanggal Lahir</strong></td>
                            <td><input class="control-innput" name="tgl_lahir" value="<?php print $edit['tgl_lahir'];?>"/></td>
                        </tr>
                        <tr>
                            <td><strong>Biodata</strong></td>
                            <td><textarea class="control-text" name="biodata"><?php print $edit['biodata']; ?></textarea></td>
                        </tr>
                    </table>
                    <p class="form-action">
                        <?php 
                            echo form_submit('submit','Simpan','class="submit btn btn-primary"');
                        ?>
                    </p>
                <?php 
                    echo form_close();
                ?>
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