<!--	Start Footer	-->
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
						<?php 
                            if($this->session->userdata('isLogin')){
                                $a = $this->session->userdata['isLogin']['name'];;
                                echo '
                                    <li>';
                                echo anchor('profile',$a);
                                echo '</li>';
                            }else{
                        ?>
						<li><a data-toggle="modal" href="#myModal">Masuk</a></li>
						<?php }?>
					</ul>
				</nav>
			</div>
			<div class="col-md-1"></div>
		</footer>
	</div>
	<!--	End Footer	-->