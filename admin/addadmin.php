<?php session_start() ;

include ("include/header.php");
include("include/sideBar.php");
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add New admin </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
          

            <div class="card card-primary card-outline">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action ="handlers/add_admin.php" method = "post">
                <div class="card-body"> 

                <?php 
                    if (isset($_SESSION['success'])){?>
               <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> Done!  </h5>
                  <?php echo $_SESSION['success']; ?>
                </div>
                   <?php }
                   
              
                    ?>
                    <?php unset($_SESSION['success']); ?>
           
                  <div class="form-group">
                    <label for="name">admin name </label>
                    <input type="text" name ="name" class="form-control" id="name" placeholder="Enter email">
                  </div>
             
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name ="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name ="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                  <label for="cars">type:</label>

                  <select name="type" id="type">
                   <option value="0">admin</option>
                   <option value="1">super admin</option>

                    </select>
                    </div>
                 
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">add admin</button>
                </div>
              </form>
            </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
        
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->



<?php
include("include/footer.php");


?>