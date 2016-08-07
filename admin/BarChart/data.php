<?php
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="census";


//connect to the database
 $conn = mysqli_connect($hostname,$username,$password,$dbname) or die("Error " . mysqli_error($connection));

//if (isset($_POST['state']))
//{
/*	
	echo "<script>alert(ok);</script>";
	if($_POST['state']=="sex")
	{
		$sql="select state, sex, count(*) from basic_info group by sex";
	}
	if($_POST['state']=="dist")
	{
		$sql="select state, dist, count(*) from basic_info group by dist";
	}
	if($_POST['state']=="caste")
	{
		$sql="select state, sc_st, count(*) from basic_info group by sc_st";
	}
	*/
	$sql="select state, count(*) as count from basic_info group by state";
	
	 //fetch table rows from mysql db
	$result=mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($connection));
	
	//create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
	
	//close connection
	mysqli_close($conn);
	
	//convert data in JSON format
	 echo json_encode($emparray);
	 //header("Location: http://localhost/censusbar/display.php");
	 
	 echo '<div id="chart-container">';
		echo	'<canvas id="mycanvas">';
				
		echo	'</canvas>';
	echo '</div>';
	
	 echo '<script  src="js/jquery-3.1.0.min.js"></script>';
	 echo	'<script  src="js/Chart.min.js"></script>';
     echo	'<script  src="js/app.js"></script>';
	 
//}
?>



