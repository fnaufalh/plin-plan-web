<?php echo doctype('html5');?>
<!DOCTYPE html>
<head>
	<title>SIASSM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/fa/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/index.css">
</head>
<body>
    <div class="head row yellow darken-2">
    	<div class="col s4 m4">
      <a href="#" class=""><img src="<?php echo base_url();?>/assets/images/icon-logo.png" class="logo"></a>
  </div>
  <div class="col s8 m8">
      <p class="right">LOGGED IN BY <span style="color:black"><?php echo $this->session->logged_in['username'];?></span>
      <?php echo anchor('login/empty_login', 'Logout', 'class="btn-logout waves-effect waves-light btn blue lighten-3"');?></p>
    </div>
</div>