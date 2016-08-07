<?php
	$hostname="localhost";
	$username="root";
	$password="123";
	$dbname="census";


//connect to the database
 $conn = mysqli_connect($hostname,$username,$password,$dbname) or die("Error " . mysqli_error($connection));

	 
	$sql="select dist, count(*) as count from basic_info group by dist";
	
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
	
//}
?>



