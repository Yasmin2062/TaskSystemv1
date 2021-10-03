<?php session_start() ;
include("../handlers/connect.php");
include ("include/header.php");
include("include/sideBar.php");
include("handlers/usersTask.php");
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Show Tasks </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">show tasks</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    <div class="container-fluid">
        <div class="col-lg-12">
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
          

            <div class="card card-primary card-outline">

            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap"> 
             
                   <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr><th rowspan="1" colspan="1">title</th><th rowspan="1" colspan="1">user name</th><th rowspan="1" colspan="1">status</th><th rowspan="1" colspan="1">action</th></tr>
                  </thead>
                  <tbody>
                    <?php
                     while($tasks =mysqli_fetch_assoc($queryGetTasks)){ ?>
                     <tr>
                         <td><?= $tasks['title'];   ?> </td>
                         <td><?=$tasks['name'];   ?> </td>
                         <td>
                             <?php
                             if( $tasks['tstatus'] == 0 ) {
                                 echo "Pendding";
                             }
                             else{
                                 echo "Approved";
                             }
                               ?> </td>
                                  <td>
                              <a href="handlers/delete_task.php?taskid=<?= $tasks['taskid']?>" ><i class="fas fa-trash"></i></a>
                    
                              <a href="handlers/approve_task.php?taskid=<?= $tasks['taskid']?>" ><i class="fas fa-user-check"></i></a>

                              <a href="#"></a> 
                           
                            </td>

                     </tr>
                        
                  <?php   }?>                                 
                   <tr><th rowspan="1" colspan="1">title</th><th rowspan="1" colspan="1">user name</th><th rowspan="1" colspan="1">status</th></tr>

                  </tbody>
                  <tfoot>
                  </tfoot>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
           
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