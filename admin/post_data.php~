<?php
include('dbcon.php');
	
  if (isset($_POST['submit'])){      
       $hedu=$_POST['edu'];
       $dist=$_POST['dis'];
       $worker=$_POST['worker'];
       $pob=$_POST['pob'];
       $noc=$_POST['noc'];
       $apid=$_POST['apid'];
       $income=$_POST['income'];	
      
 mysql_query("INSERT INTO form2 (hedu, disability, worker, pob, noc, apid, income ) VALUES ('$hedu', '$dist', '$worker', '$pob', '$noc', '$apid', '$income')");
   header('Location:dashboard.php');	
	}
?>
