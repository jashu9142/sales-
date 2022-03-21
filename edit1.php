<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AUSWEG</title>
</head>
<body>
<?php
			$zz = $_POST['id'];
			$estimate_no = $_POST['estimate_no'];
		    $reference_no = $_POST['reference_no'];
			$customer_name = $_POST['customer_name'];
			$status= $_POST['status'];
			$amount = $_POST['amount'];
			$date = $_POST['date'];
			
	   include('connection.php');
		
	 			$query = 'UPDATE people set estimate_no ="'.$estimate_no.'",
				 reference_no="'.$reference_no.'",customer_name="'.$customer_name.'",
				 status="'.$status.'",amount='.$amount.'", 
				 date="'.$date.'" WHERE
					id ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>
 </body>
</html>