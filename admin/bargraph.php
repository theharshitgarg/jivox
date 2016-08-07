<!DOCTYPE html>
<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php'); ?>
    <div class="container">
    <div class="margin-top">
			<div class="row">	
			<div class="span12">		
                        <div class="container"> 
<html>
	<head>
		<title>ChartJS - BarGraph</title>
		<style type="text/css">
			#chart-container {
				width: 640px;
				height: auto;
			}
		</style>
	</head>
	<body>
		<div id="chart-container">
			<canvas id="mycanvas">
				
			</canvas>
		</div>
	
		<!-- javascript -->
		<script  src="js/jquery-3.1.0.min.js"></script>
		<script  src="js/Chart.min.js"></script>
		<script  src="js/app.js"></script>
	</body>
</html>
