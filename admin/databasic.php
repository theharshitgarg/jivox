<?php
include('dbcon.php');

if (isset($_POST['submit'])){
       $name=$_POST['name'];
        
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $marital=$_POST['mar'];
        $bgroup=$_POST['bg'];  
         $religion=$_POST['rel'];
          $sc_st=$_POST['scst'];
            $state=$_POST['state'];
           $dist=$_POST['dist'];
            $address=$_POST['addr'];
             $mlang=$_POST['mlang'];    

	mysql_query("INSERT INTO basic_info (name, age,sex, marital, bgroup, religion, sc_st, state, dist, address, mlang ) VALUES ('$name','$age','$gender', '$marital', '$bgroup', '$religion', '$sc_st', '$state', '$dist', '$address',  '$mlang')");
    header('Location:dashboard.php');
}
	
	
	

?>
