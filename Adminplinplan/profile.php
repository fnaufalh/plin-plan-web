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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                    <li class="active">
                        <a href="post.php"><i class="fa fa-fw fa-newspaper-o"></i>Post</a>
                    </li>
                    <li>
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
                            Profile
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-newspaper-o"></i>Post
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Flot Charts -->

                <!-- /.row -->
<!--------------------------------------------------------- START-------------------------------------------------->
              
               <?php
                include_once('/m/connect.php');
                

                ?>
                
<!---------------------------------ALL POST--------------------------- -->
        <?php

        $select = "select id,level_user_id,username,password,email,foto,nama_depan,nama_belakang,tgl_lahir,status_online,status_active from user_plinplan";
        $pdo_select = $connect->prepare($select);
            if($pdo_select->execute()){
                echo "berhasilaaa"."</br>";
            }
            else{
                echo "gagal";
            }
        $result_select = $pdo_select->fetch(PDO::FETCH_ASSOC)

            ?>
            
               <div class="form-group col-lg-12">
                   <table class="plinplanTable">
                       <tr>
                           <td>
                               <label for="exampleInputEmail1">ID User</label>
                           </td>
                           <td>
                               <?php echo $result_select['id'];?>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <label for="exampleInputEmail1">Level User</label>
                           </td>
                           <td>
                               <?php echo $result_select['level_user_id'];?>
                           </td>
                       </tr>

                       <tr>
                           <td>
                               <label for="exampleInputEmail1">Username</label>
                           </td>
                           <td>
                               <?php echo $result_select['username'];?>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <label for="exampleInputEmail1">Password</label>
                           </td>
                           <td>
                               <?php echo $result_select['password'];?>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <label for="exampleInputEmail1">Email</label>
                           </td>
                           <td>
                               <?php echo $result_select['email'];?>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <label for="exampleInputEmail1">Foto</label>
                           </td>
                           <td>
                               <?php echo $result_select['foto'];?>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <label for="exampleInputEmail1">Nama Depan</label>
                           </td>
                           <td>
                               <?php echo $result_select['nama_depan'];?>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <label for="exampleInputEmail1">Nama Belakang</label>
                           </td>
                           <td>
                               <?php echo $result_select['nama_belakang'];?>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <label for="exampleInputEmail1">Tanggal Lahir</label>
                           </td>
                           <td>
                               <?php echo $result_select['tgl_lahir'];?>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <label for="exampleInputEmail1">Status Online</label>
                           </td>
                           <td>
                               <?php echo $result_select['status_online'];?>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <label for="exampleInputEmail1">Status Active</label>
                           </td>
                           <td>
                               <?php echo $result_select['status_active'];?>
                           </td>
                       </tr>

                   </table>
                   <button type="submit" class="btn" name="submit">Submit</button>
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
    <script src="js/plinplan.js"></script>

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
