<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Result Found</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	
	<style>
	.result
		{
			margin-left: 10%;
			margin-right: 25%;
			margin-top: 12px;
		}
	
	
	</style>
</head>

<body>
	
	<div class="container-fluid">
		<?php
			
		
			$search=$_GET["id"];
			
			$mysqli = new mysqli('localhost','root','','search');
		
			$sql="select * from website where site_key like '%$search%'";
			$rs = mysqli_query($mysqli,$sql);
			
			while($row=mysqli_fetch_array($rs))
			{
				echo "<a href='img/$row[5]' download><img src='img/$row[5]' height='200px' style='margin-top:15px'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				
			}
		
		?>
	
	
	</div>

		
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	
		
</body>
</html>