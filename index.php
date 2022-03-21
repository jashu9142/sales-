
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  
        <style>
       *{
            background-color: #fff;
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

       
     
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                      
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="margin-left:-95px;">
                   All  Estimate
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->


             <div class="col-lg-12" >
                        <h2 style="margin-left:-110px;">List of Records</h2> <a href="add.php?action=add" type="button" style="margin-left:-105px; margin-top:30px;" class="btn btn-xs btn-info" >Add New</a>
                                <br>
                             
                        <div class="table-responsive">
                            <table  class="table table-bordered table-hover table-striped" style="margin-left:-105px; position:absolute;" >
                                <thead>
                                    <tr>
                                        <th>estimate_no</th>
                                        <th>reference_no</th>
                                        <th>customer_name</th>
                                        <th>status</th>
                                        <th>amount</th>
                                        <th>date</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                    $query = 'SELECT * FROM people';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['estimate_no'].'</td>';
                            echo '<td>'. $row['reference_no'].'</td>';
                            echo '<td>'. $row['customer_name'].'</td>';
                            echo '<td>'. $row['status'].'</td>';
                            echo '<td>'. $row['amount'].'</td>';
                            echo '<td>'. $row['date'].'</td>';
                            echo '<td> <a type="button" class="btn btn-xs btn-info" href="searchfrm.php?action=edit & id='.$row['id'] . '" > SEARCH </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & id='.$row['id'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="del.php?type=people&delete & id=' . $row['id'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
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
