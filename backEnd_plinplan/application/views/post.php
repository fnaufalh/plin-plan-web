      
            
                  
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
