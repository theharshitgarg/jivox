<?php
	$servername = "localhost";
	$username = "root";
	$password = "123";
	$dbname = "census";

       $name=$_POST['name'];
        $bob=$_POST['bob'];
        $age=$_POST['age'];
        $marital=$_POST['mar'];
        $bgroup=$_POST['bg'];  
         $religion=$_POST['rel'];
          $sc_st=$_POST['scst'];
            $state=$_POST['state'];
           $dist=$_POST['dist'];
            $address=$_POST['addr'];
             $mlang=$_POST['mlang'];    

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	else{
	   echo "success";
	   $sql = "INSERT INTO basic_info (name, bob, age, marital, bgroup, religion, sc_st, state, dist, address, mlang ) VALUES ('$name', '$bob', '$age', '$marital', '$bgroup', '$religion', '$sc_st', '$state', '$dist', '$address',  '$mlang')";

	if (mysqli_query($conn, $sql)) {
	    $last_id = mysqli_insert_id($conn);
	    
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	}
	
	
	

?>
