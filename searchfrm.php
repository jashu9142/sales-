
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  
        <style>
       *{
            background-color:#fff;
            color:black;
        }
        .side-nav{
            background-color:#fff;
        }
        .navbar-inverse{
            background-color:#fff;
        }
        .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
    color: #fff;
    background-color: #fff;
}
        </style>
<body>

    <div id="wrapper">

       
            
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        <h2 style="margin-left:-110px;">Search Records</h2> <a href="add.php?action=add" type="button" style="margin-left:-105px; margin-top:30px;" ></a>
                         
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
<?php 
$query = 'SELECT * FROM people
              WHERE
             id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['id'];
                $i= $row['estimate_no'];
                $a=$row['reference_no'];
                $b=$row['customer_name'];
                $c=$row['status'];
                $d=$row['amount'];
                $e=$row['date'];
             
              }
              
              $id = $_GET['id'];
         
?>

             <div class="col-lg-12">
                  <h2>Detailed Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="index.php">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="estimate no" name="estimate no" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="reference no" name="reference no" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="customer name" name="customer name" value="<?php echo $b; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="status" name="status" value="<?php echo $c; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="amount" name="amount" value="<?php echo $d; ?>">
                            </div> 
                            
                            <div class="form-group">
                             <input class="form-control" type="varchar"  placeholder="Date" id="date" name="date" required> 
                            </div>  
                            <button type="submit" class="btn btn-default" style="color:black">Return to main menu</button>
                         


                      </form>  
                    </div>
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

</body>

</html>

