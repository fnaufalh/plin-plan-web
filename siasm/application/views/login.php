<?php echo doctype('html5');?>
<html>
	<head>
		<title>Login Form</title>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.min.css"  media="screen,projection"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
		<?php
// 			echo form_open('login/validate');
// 			echo heading('Login Form', 2);
// 			echo form_label('Username', 'username');
// 			echo form_input('_usnm', '', 'id="username"').br(2);
// 			echo form_label('Password', 'password');
// 			echo form_password('_pw', '', 'id="password"').br(2);
// 			echo form_submit('login', 'Login').nbs(5).form_reset('reset', 'Reset');
// 			echo form_close();
		?>
	<div class="head row yellow darken-2">
      <div class="col s4 m4">
      <a href="#"><img src="<?php echo base_url();?>assets/images/icon-logo.png" class="logo"></a>
  </div>
</div>

  <div class="container" style="padding-top:30px;">
  	<div class="row">
        <div class="col s12 m6 offset-m3">
          <div class="card green lighten-5">
            <div class="card-action">
              <span class="black-text card-title">Login Now!</span>
              <div class="row">
    <?php echo form_open('login/validate', 'class="col s12"');?>
      <div class="row">
        <div class="input-field col s12">
          <?php echo form_input('_usnm', '', 'id="username" required');?>
          <?php echo form_label('Username', 'username');?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <?php echo form_password('_pw', '', 'id="password" class="validate"');?>
          <?php echo form_label('Password', 'password');?>
        </div>
      </div>
      <div class="row">
        <center>
      <div class="col s12">
      <?php echo form_submit('login', 'Login', 'class="btn waves-effect waves-light blue lighten-3""');?>
</div>
</center>
</div>
   <?php echo form_close();?>
        </div>
            </div>
          </div>
        </div>
      </div>
  </div>
         <footer class="page-footer blue lighten-3">
          <div class="container">
            <div class="row">
              <div class="col l5 s12">
                <h5 class="white-text">SIASSM</h5>
                <p class="grey-text text-lighten-4">Sistem Informasi Akademik Sekolah Swasta</p>
              </div>
              <div class="col l5 offset-l2 s12">
                <h5 class="white-text">Pemrograman Web - D</h5>
                <ul>
                  <li class="grey-text text-lighten-3">Mohamad Rendiansah 135150400111071</li>
                  <li class="grey-text text-lighten-3">Agung Yudha Berliantara 135150401111121</li>
                  <li class="grey-text text-lighten-3">Adhi Isti Febriandhika 135150401111134</li>
                  <li class="grey-text text-lighten-3">Muhammad Faizal Ismail 135150400111047</li>
                  <li class="grey-text text-lighten-3">Syarif Hidayat 135150</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            SIASSM Dev. Team
            <a class="grey-text text-lighten-4 right" href="#!">SIASSM</a>
            </div>
          </div>
        </footer>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
      <script type="text/javascript">
      $(".button-collapse").sideNav();
      </script>
    </body>
</html>