<!DOCTYPE html>
<head>
    <title>
        Login
    </title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" type="text/css">
</head>
<body>
    <div class="container" id="contain">
<!--        <form class="form-signin" action="c/cekstatus.php" method="post">-->
        <?php 
            $attributes = array('class' => 'form-signin');
            echo form_open('login/validate',$attributes); 
        ?>
            <h2 class="form-signin-heading">Introduce Yourself Sir</h2>
            <label for="inputCode" class="sr-only">Email address</label>
            <input type="text" id="inputCode" class="form-control" placeholder="Username" name="username" required>
            <br>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="passwd" required>
            <br>
            <!--input class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Sign In"-->
            <?php echo form_submit('login', 'Sign In', 'class="btn btn-lg btn-primary btn-block"');?>
        <?php 
            echo form_close();
        ?>
<!--        </form>-->
    </div>
</body>