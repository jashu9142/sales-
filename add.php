
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
        input{
            margin-left:-65px;
            margin-top: 30px;
        }
        button{
          color:black;
        }
        
}
        </style>
<body>

    <div id="wrapper">

       
     
          
         
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                       
                    </div>
                </div>
                <!-- /.row -->


             <div class="col-lg-12">
                  <h2 style="margin-left:-50px";>New Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="transac.php?action=add">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="estimate_no" name="estimate_no" required>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="reference_no" name="reference_no" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="customer_name" name="customer_name" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="status" name="status" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="amount" name="amount" required>
                            </div> 
                           
                            <div class="form-group">
                             
                             <input class="form-control" type="varchar"  placeholder="Date" id="date" name="date" required> 
                            
                            </div>  
                            <button type="submit" style="margin-left:-65px; color:black" class="btn btn-default ">Save Record</button>
                            <button type="reset" class="btn btn-default"style="color:black">Clear Entry</button>


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

