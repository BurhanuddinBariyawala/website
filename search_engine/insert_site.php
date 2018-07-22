<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Our Search Engine</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	
</head>

<body>
	
	<div class="container">
			<br>
			<center> <h2><b>Insert website</h2></b></center>
		
			<br>
			
			<form action="insert_site.php" method="post" enctype="multipart/form-data">
		
			<div class="form-group">
				
				<div class="row">
				
				  <label class="col-sm-2" for="stitle"> Site Title</label>
					
					<div class="col-sm-10">
					
					  <input type="text" class="form-control" id="stitle" name="s_title" placeholder="Enter Site Title" required>
					
					</div>
				
				</div>
				
				
			  </div>
			
				<div class="form-group">
				
				<div class="row">
				
					<label class="col-sm-2" for="slink"> Site Link</label>
					
					<div class="col-sm-10">
					
						<input type="text" class="form-control" id="slink" name="s_link" placeholder="Enter Site Link" required>
					
					</div>
				
				</div>
				
				
				</div>
			<div class="form-group">
				
				<div class="row">
				
					<label class="col-sm-2" for="skey"> Site Keyword</label>
					
					<div class="col-sm-10">
					
						<input type="text" class="form-control" id="skey" name="s_key" placeholder="Enter Site Keyword" required>
					
					</div>
				
				</div>
				
				
			  </div>
			
		
				<div class="form-group">
				
				<div class="row">
				
					<label class="col-sm-2" for="sdes"> Site Description</label>
					
					<div class="col-sm-10">
					
						<textarea class="form-control" id="sdes" name="s_des" placeholder="Enter Site Description" required></textarea>
					
					</div>
				
				</div>
				
				
				</div>
			
				
			  <div class="form-group">
				
				<div class="row">
				
					<label class="col-sm-2" for="simg"> Site Image</label>
					
					<div class="col-sm-10">
					
						<input type="file" class="form-control" name="simg" required>
					
					</div>
				
				</div>
				
				
				</div>
			
				<div class="form-group">
				
				<center>
					
				  <input type="submit" class="btn btn-outline-success" name="submit" value="Add Website">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="reset" class="btn btn-outline-danger" name="cancel" value="Cancel">
			  </center>
				<div class="row"> </div>
				
				
			</form>
	
	
	
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	
	
</body>
</html>
	
<?php
	
	$mysqli = new mysqli('localhost','root','','search');
	
	if(isset($_POST["submit"]))
	{
		$s_title=$_POST["s_title"];
		$s_link=$_POST["s_link"];
		$s_key=$_POST["s_key"];
		$s_des=$_POST["s_des"];
		$_simg=$_FILES["simg"] ["name"];
		
		if(move_uploaded_file($_FILES["simg"]["tmp_name"],"img/".$_FILES["simg"] ["name"]))
		{
			$sqli="insert into website(site_title,site_link,site_key,site_des,site_img) values('$s_title','$s_link','$s_key','$s_des','$_simg')";
			
			$rs = mysqli_query($mysqli,$sqli);
			
			if($rs)
			{
				echo"<script> alert('site uploaded successfully')</script>";
			}
			
			else
			{
				echo"<script> alert('uploading failed, please try again.')</script>";
			}
		}
	}
?>