<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Our Search Engine</title>
	 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	
</head>

<body onLoad="ld()">
	
	<script>
		
		function ld()
		{
			document.search_box.bbmpsearch.focus();
		}
		
		
	</script>
	
	
	
	
	<style>
		body
		{
			margin: 12%;
		}
	
	
	
	</style>
	
	<form name="search_box" action="result.php" method="get">
	<center>
		
	<img src="img/bbmpsearch.jpg" class="img-fluid" alt="bbmpsearch">
	<input type = "text" class="form-control" name="bbmpsearch" style="width:60%; margin-top: 20px">
	<input type="submit" class="btn btn-outline-primary" value="Search" name="search_button" style="margin-top: 20px ">
	
	</center>
		
	</form>
	
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	
	
</body>
</html>