
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>   
<body>

    <div id="wrapper">

       

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           AUSWEG 
                       
                    </div>
                </div>
                <!-- /.row -->


             <div class="col-lg-12">
                <?php
						$estimate_no= $_POST['estimate_no'];
					    $reference_no = $_POST['reference_no'];
						$customer_name = $_POST['customer_name'];
						$status = $_POST['status'];
						$amount = $_POST['amount'];
						$date = $_POST['date'];
				        
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO people
								(id,estimate_no,reference_no,customer_name,status,amount,date)
								VALUES ('Null','".$estimate_no."','".$reference_no."','".$customer_name."','".$status."','$amount','".$date."')";
								mysqli_query($db,$query)or die ('Error in updating Database');
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "index.php";
		</script>
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

