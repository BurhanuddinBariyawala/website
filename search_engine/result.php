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
		
			<form action="result.php" method="get">
				<div class="row" style="background: hsla(0,0%,96%,1.00)">
					<div class="col-sm-1">
					
							<a href="search.php"><img src="img/bbmpsearch.jpg" height="120px"></a>
					
					</div>
				
					<div class="col-sm-6" style="margin-left: 75px">
					
							<div class="input-group" style="margin-top: 70px">
								<input type="text" class="bbmpsearch" name="bbmpsearch" style="width:80%">
								<span class="input-group-btn">
									<input class="btn btn-secondary" type="submit" name="search_button" value="GO!">
								
								</span>
						
						
							</div>
					
					</div>					
				</div>
		
		
		</form>
	
	</div>
	
	<div class="result">  
	
	<table>
	
	<tr>
		
		<?php
		
		$mysqli = new mysqli('localhost','root','','search');
		
		if(isset($_GET['search_button']))
		{
			
			$search=$_GET['bbmpsearch'];
			
			if($search=="")
			{
				
				echo"<center> <b> please write something in search box! </h> </center>";
					exit();
			}
			
			$sql="select * from website where site_key like '%$search%' limit 0,5";
			$rs = mysqli_query($mysqli,$sql);
			if(mysqli_num_rows($rs)<1)
			{
				echo"<center> <h4> <b> oops!! sorry, there is no result found to related the word.</b> </h4> </center>";
				exit();
			}
			echo "<font size='+1' color='#0000000'> Images of $search </font>";
			
			while($row = mysqli_fetch_array($rs))
			{
				
				echo "<td>
					<table style='margin-top: 10px'>
					
					<tr>
					
					
					
					<td>
					
					<a target='_blank' href='images.php?id=$search'><img src='img/$row[5]' height='100px'></a>
					
					</td>
					</tr>
					
					
					
					</table>
				
					</td>";
			}
				
		}
		
		?>
		
		
		
	
	</tr>
	
	</table>
		
		
		<?php
		
		echo "<a target='_blank' href='images.php?id=$search'><font size='+1' color='#0000000'> More Images For $search </font></a>";
		
		
			echo "<hr>";
			
			$sql1="select * from website where site_key like '%$search%'";
			$rs1 = mysqli_query($mysqli,$sql1);
		
			while($row1=mysqli_fetch_array($rs1))
			{
				echo"<a href='$row1[2]'><font size='4' color='#0000cc'><b> $row1[1]</b> </font></a><br>";
				echo"<font size='3' color='#006400'> $row1[2] </font><br>";
				echo"<font size='3' color='#666666'> $row1[4] </font><br><br>";
				
				
			}
		?>
		
		
		
		
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	
</body>
</html>