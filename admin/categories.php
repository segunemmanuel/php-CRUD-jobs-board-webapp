<?php include './includes/admin_head.php';?>
<div>
<?php include './includes/admin_nav.php';?>
          <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Welcome to Categories
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="../index.php">View Categories  In Homepage</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>



<div class="col-lg-12">
    <div class="col-lg-6">
<form action="" method="post">
    <div class="form-group">
        
<label for="add_cat">Add a New Category</label>
<input type="text" name="category" class="form-control">
</div>
<div class="form-group">
    
<button class="btn btn-primary" name="submit">Add</button>
</div>

</form>
</div>
<div class="col-lg-6">
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
        </tr>
    </tfoot>
</table>
</div>




                    
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
