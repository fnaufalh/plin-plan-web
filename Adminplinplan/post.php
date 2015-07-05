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
                            Post
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
                $kategori  = "SELECT * FROM kategori";
                $pdo_kategori    = $connect->prepare($kategori);
                $pdo_kategori->execute();

                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Create Post</h2>
                    </div>
                
            <form class="form-inline" action="" method="post" enctype="multipart/form-data">
               <div class="form-group col-lg-12">
                   <table class="plinplanTable">
                       <tr>
                           <td>
                               <label for="exampleInputEmail1">ID User</label>
                           </td>
                           <td>
                               <input type="email"  readonly class="form-control" id="exampleInputEmail1" placeholder="ID" 
                               value="<?php  echo $_SESSION['id'];?>" >
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <label for="exampleInputKategori">Kategori</label>
                           </td>
                           <td>
                               <select name="Kategori" id="">
                                   <?php
                                            while($result_kategori = $pdo_kategori->fetch(PDO::FETCH_ASSOC)){
                                                echo '<option value="';
                                                echo $result_kategori['id'].'">';
                                                echo $result_kategori['nama_kategori'];
                                                echo '</option>'; 
                                            }
                                    ?>
                                </select>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <label for="gambar1">Gambar 1</label>
                           </td>
                           <td>
                               <input type="file" name="foto" id="gambar1" required>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <label for="gambar2">Gambar 2</label>
                           </td>
                           <td>
                               <input type="file" name="foto2" id="gambar2" required>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <label for="caption">Caption</label>
                           </td>
                           <td>
                               <input type="text" name="caption" id="caption" required>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <label for="caption">Judul Post</label>
                           </td>
                           <td>
                               <input type="text" name="judul" id="judul" required>
                           </td>
                       </tr>
                   </table>
                   <button type="submit" class="btn" name="submit">Submit</button>
              </div>
            </form>
<?php
if(isset($_POST['submit'])){
    
    $date = new DateTime();
    $mydate = date_format($date, 'Y-m-d H:i:s');
    $id_user = $_SESSION['id'];
    $id_kategori = $_POST['Kategori'];
    $caption = $_POST['caption'];
    $judul = $_POST['judul'];
    $gambar1 = $_FILES ['foto']['name'];
    $gambar2 = $_FILES ['foto2']['name'];
    
    $target_path = 'uploads/';
    $target_path1=$target_path.basename($_FILES ['foto']['name']);
    
    $target_path2=$target_path.basename($_FILES ['foto2']['name']);
    
    $insert = "INSERT INTO post
            (id,kategori_id,user_plinplan_id,Judul,Caption,gambar_1,lokasi_gambar_1,gambar_2,lokasi_gambar_2,tanggal_post) 
            VALUES(NULL,'$id_kategori','$id_user','$judul','$caption','$gambar1','$target_path1', '$gambar2','$target_path2','$mydate')";
    
    $pdo_insert = $connect->prepare($insert);
    if($pdo_insert->execute()){
        echo "berhasil"."</br>";
    }
    else{
        echo "gagal "."<br>";
        echo "sql ".$insert;

    }
    
  move_uploaded_file($_FILES ['foto']['tmp_name'], $target_path1); 
  move_uploaded_file($_FILES ['foto2']['tmp_name'], $target_path2);

}
?>
                </div>
                
<!---------------------------------delete--------------------------- -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Delete Post</h2>
                    </div>
                    
                    
                    
<form class="form-inline" action="" method="post" enctype="multipart/form-data">
 
  <div class="form-group col-lg-12">
    <label for="exampleInputEmail1">ID Post</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="ID" name="id_del">
  </div>
 
  <div class="form-group col-lg-12">
    <button type="submit" class="btn btn-primary btn-md btn-block" name="delete">Submit</button>
</div>
 
</form>
        <?php
        if(isset($_POST['delete'])){
            $id_delete = $_POST['id_del'];

            $delete = "delete from post where id='$id_delete'";

            $pdo_delete = $connect->prepare($delete);
            if($pdo_delete->execute()){
                echo "berhasil"."</br>";
            }
            else{
                echo "gagal";

            }
        }
        ?>
                </div>
                
<!---------------------------------ALL POST--------------------------- -->
        <?php

        $select = "SELECT b.id,`nama_depan`,`lokasi_gambar_1`,`lokasi_gambar_2`,`tanggal_post`,`nama_kategori`,Caption,Judul FROM user_plinplan a join 
                   post b on a.id = b.user_plinplan_id join kategori c on b.kategori_id = c.id";
        $pdo_select = $connect->prepare($select);
            if($pdo_select->execute()){
                echo "berhasilaaa"."</br>";
            }
            else{
                echo "gagal";
            }
  
            ?>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">All Post</h2>
            </div>
                            
            <table class="table table-striped table-bordered">
                <tr class="info">
                    <th>ID Post</th>
                    <th>Username</th>
                    <th>Gambar 1</th>
                    <th>Gambar 2</th>
                    <th>Kategori</th>
                    <th>Tanggal Post</th>
                    <th>Caption</th>
                    <th>Judul</th>
                    <img src="" alt="" width="">
                </tr>
                <?php
                while($result_select = $pdo_select->fetch(PDO::FETCH_ASSOC)){
                    echo "<tr>";
                    echo "<td>".$result_select['id']."</td>";
                    echo "<td>".$result_select['nama_depan']."</td>";
                    echo '<td><img src = "'.$result_select['lokasi_gambar_1'].'" width="200px" height="200px">';
                    echo '<td><img src = "'.$result_select['lokasi_gambar_2'].'" width="200px" height="200px">';
                    echo "<td>".$result_select['nama_kategori']."</td>";
                    echo "<td>".$result_select['tanggal_post']."</td>";
                    echo "<td>".$result_select['Caption']."</td>";
                    echo "<td>".$result_select['Judul']."</td>";
                    echo "</tr>";
                }
                ?>
            </table> 
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
