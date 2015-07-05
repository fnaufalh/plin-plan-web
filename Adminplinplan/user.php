<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
        session_start();
        if($_SESSION["status"] != true){
            header("location:login.php");
        }
?>
           <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['nama']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="post.php"><i class="fa fa-fw fa-newspaper-o"></i>Post</a>
                    </li>
                    <li class="active">
                        <a href="user.php"><i class="fa fa-fw fa-user"></i>User</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.php"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.php"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <!-- end navigation-->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Charts
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-user"></i> User
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Flot Charts -->

                <!-- /.row -->
<!--------------------------------------------------------- START-------------------------------------------------->
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="header">Create User</h2>
                    </div>
                    
                    <div class="col-lg-6">
                        <h2 class="header">Banned User</h2>
                    </div>
                    
                    <form class="form-inline" action="" method="post">
                        <div class="form-group col-lg-6">
                            <table class="plinplanTable">
                                <tr>
                                    <td>
                                        <label for="inputLevel">
                                            Level User
                                        </label>
                                    </td>
                                    <td>
                                        <input type="number" id="inputLevel" name="level">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="inputUsername">
                                            Username
                                        </label>
                                    </td>
                                    <td>
                                        <input type="text" id="inputUsername" name="username">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="inputPassword">
                                            Password
                                        </label>        
                                    </td>
                                    <td>
                                        <input type="text" id="inputPassword" name="password">            
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="inputEmail">
                                            E-mail
                                        </label>
                                    </td>
                                    <td>
                                        <input type="email" id="inputEmail" name="email">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="inputNamaDepan">
                                            Firstname
                                        </label>
                                    </td>
                                    <td>
                                        <input type="text" id="inputNamaDepan" name="namadepan">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="inputNamaBelakang">
                                            Lastname
                                        </label>
                                    </td>
                                    <td>
                                        <input type="text" id="inputNamaBelakang" name="namabelakang">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="tglLahir">
                                            Birthdate
                                        </label>
                                    </td>
                                    <td>
                                        <input type="date" id="tglLahir" name="tglLahir">
                                    </td>
                                </tr>                                
                            </table>
                            <button class="btn" type="submit" name="submit">Submit</button>
                        </div>
                        <div class="form-group col-lg-6">
                            <table class="plinplanTable">
                                <tr>
                                    <td>
                                        <label for="inputUsername1">
                                            Username
                                        </label>
                                    </td>
                                    <td>
                                        <input type="text" name="username1" id="inputusername1">
                                    </td>
                                </tr>
                            </table>
                            <button class="btn" type="submit" name="submit1">Submit</button>
                        </div>
                    </form>
<?php
    include('/m/connect.php');
    if(isset($_POST['submit'])){
        $level          =   $_POST['level'];
        $username       =   $_POST['username'];
        $password       =   $_POST['password'];
        $email          =   $_POST['email'];
        $namadepan      =   $_POST['namadepan'];
        $namabelakang   =   $_POST['namabelakang'];
        $tglLahir       =   $_POST['tglLahir'];
        $query1         =   "INSERT INTO `dewa`(`username`, `password`, `nama`, `level_user`) VALUES ('$username', '$password','$namadepan','$level')";
        $pdo1           =   $connect->exec($query1);
        $query2         =   "INSERT INTO `user_plinplan`(`level_user_id`, `username`, `password`, `email`, `nama_depan`, `nama_belakang`, `tgl_lahir`) VALUES ('$level','$username','$password','$email','$namadepan','$namabelakang','$tglLahir')";
        $pdo2           =   $connect->exec($query2);
    }
    if(isset($_POST['submit1'])){
        $username1      =   $_POST['username1'];
        $query3         =   "UPDATE `user_plinplan` SET status_active = 0 WHERE nama_depan = '$username1'";
        $pdo3           =   $connect->exec($query3);
    }
?>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/flot-data.js"></script>

</body>

</html>
