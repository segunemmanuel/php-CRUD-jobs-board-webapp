<?php include './includes/admin_head.php';?>
<div>
<?php include './includes/admin_nav.php';?>
<?php ob_start();?>

          <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Jobs Portal
                            <small>Add  or delete</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>








                    <?php


if(isset($_GET['source'])){
    
$source=$_GET['source'];
}
else{

    $source='';
}
switch($source){
    case 'add_jobs';
    include "includes/add_jobs.php";

    break;

    case 'edit_jobs';
    include "includes/edit_jobs.php";
    
    break;
    
    default:
    include "includes/view_jobs.php";



 
}
?>







                    
                </div>
                <!-- /.row -->

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

</body>

</html>
