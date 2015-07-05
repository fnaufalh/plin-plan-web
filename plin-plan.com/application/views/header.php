<!DOCTYPE html>
<html>
<head>
	<title>Plinplan</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url("assets/img/plinplan_symbol.ico");?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/awesome/css/font-awesome.css");?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css");?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css");?>">

	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js");?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/json2.js");?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/bootstrap/js/bootstrap.js");?>"></script>
    
</head>
<body>
<script>
	$(document).ready(function(){
	  $("#email").keyup(function(){
		if($("#email").val().length>3){
		$.ajax({
			type: "post",
			url: "http://localhost/plin-plan.com/index.php/login",
			cache: false,				
			data:'email='+$("#email").val(),
			success: function(response){
				$('#finalResult').html("");
				var obj = JSON.parse(response);
				if(obj.length>0){
					try{
						var items=[]; 	
						$.each(obj, function(i,val){											
						    items.push($('<li/>').text(val.nama_depan + " " + val.nama_belakang));
						});	
						$('#finalResult').append.apply($('#finalResult'), items);
					}catch(e) {		
						alert('Exception while request..');
					}		
				}else{
					$('#finalResult').html($('<li/>').text("No Data Found"));		
				}		
				
			},
			error: function(){						
				alert('Error while request..');
			}
		});
		}
		return false;
	  });
	});
    </script>
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
<!--	            <form method="post" action='login/validate' name="login_form">-->
	            <?php 
                    $attributes =  array('name' => 'login_form');
                    echo form_open('login/validate',$attributes);
                ?>
	            	<table class="login">
	            		<tr>
	            			<td>
	            				<input type="text" class="span3" name="email" id="email" placeholder="Alamat e-mail">		
	            				<ul id="finalResult"></ul>
	            			</td>
	            		</tr>
	            		<tr>
	            			<td>
	            				<input type="password" class="span3" name="passwd" placeholder="Kata sandi">
	            			</td>
	            		</tr>
	            	</table>
	           		
<!--	            	<button type="submit" class="submit btn btn-primary" name="login">Masuk</button>-->
                    <?php 
                        echo form_submit('login','Masuk','class="submit btn btn-primary"');
                    ?>
	              	<a style="float:right;" href="#">Lupa kata sandi ?</a>
	            <?php 
                    echo form_close();
                ?>
	        </div>
	          <div class="modal-footer">
	            Belum daftar ?
	            <a href="index.php/Register" class="">Daftar disini</a>
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
	    		<img class="header-logo" src="<?php echo base_url("assets/img/plinplan-white.png");?>">
	    		<div class="top-right-menu">
		    		<ul>
				    	<li>
				    	    <?php
                                if($this->session->userdata('isLogin')){
                                    echo '
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-user"></i> ';
                                    echo    $this->session->userdata['isLogin']['name'];
                                    echo'
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>';
                                    echo    anchor(site_url('profile'),'Profile');
                                    echo    '</li>
                                            <li>';
                                    echo    anchor(site_url('login/logout'),'Log Out');
                                    echo    '</li>
                                        </ul>
                                    </li>';
                                }else{
                                    echo '
                                    <a class="header-login" data-toggle="modal" href="#myModal" >Masuk</a>
		    			</li>
		    			<li>'.anchor(site_url('Register'), 'Daftar', 'class="header-about"').'</li>';

                                }
                            ?>
		    		</ul>
	    		</div>
    		</div>
    		<div class="col-md-1"></div>
  		</div>
	</nav>

<!-- End Header -->

