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
			body 	{background: #3E7309;}

			form 	{width: 500px; margin: 100px auto;}

			legend 	{text-align: center; font-size: 40px;}

			button 	{margin-left: 220px}

			h2 		{text-align: center;}
	</style>
</head>
<body>
	<form action="" method="POST" role="form">
		<legend> Hoán đổi vị trí hai số </legend>
	
		<div class="form-group">
			<input type="text" class="form-control" id="" name="a" placeholder="Nhập vào a" required="require">
		</div>

		<div class="form-group">
			<input type="text" class="form-control" id="" name="b" placeholder="Nhập vào b: " required="require">
		</div>

		<button type="submit" class="btn btn-primary">Click</button>
		<br>
		<h2>
			<?php  

				$a = filter_input(INPUT_POST, 'a', FILTER_VALIDATE_INT);

				$b = filter_input(INPUT_POST, 'b', FILTER_VALIDATE_INT);

				if(!empty($a) && !empty($b) && is_numeric($a) && is_numeric($b))
				{
					echo "Trước khi hoán đổi: a = $a, b = $b.<br><br>";

					$c = $a;

					$a = $b;

					$b = $c;

					echo "Sau khi hoán đổi: a = $a, b = $b.";
				}
				else
				{
					// echo "Nhập vào để thực hiện.";
				}

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