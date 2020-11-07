<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			body 		{background: #2B6C91;} 		

			form 		{width: 500px; margin: 100px auto;}

			legend 		{font-family: Arial; font-size: 40px; font-weight: bold; text-align: center;}

			img 		{height: 20px;}

			button 		{margin-left: 220px;}

			h2 			{font-family: Arial; font-size: 17px; font-weight: bold; margin-top: 20px; text-align: center;}
		</style>
	</head>
	<body>
		<form action="" method="POST" role="form">
			<legend>Caro</legend>
		
			<div class="form-group">
				<input type="text" class="form-control" id="" placeholder="Input field" name="n" required="require">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<h2>
				<?php 

					$n = filter_input(INPUT_POST, 'n');

					$color = 1;

					$result = "";

					for ($i = 1; $i <= $n; $i++) 
						{ 
							for ($j = 1; $j <= $n; $j++) 
								 {
									if(($i + $j) % 2 == 0)
										{
											$result = $result."<img src='img/black.png' >";
										}
									else
										{
											$result = $result."<img src='img/white.png' >";
										}
								 }
							$result .= "<br >";
						}
					echo $result;
				 ?>
			</h2>
		</form>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>

 		 


		 