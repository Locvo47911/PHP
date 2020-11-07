<?php 
	$a = filter_input(INPUT_POST, 'a');
	$b = filter_input(INPUT_POST, 'b');
	$x = filter_input(INPUT_POST, 'x');
	$result = "";
	if($a != 0)
	{
		$x = -$b/$a;
		$result = "$x";

	}
	elseif($b == 0)
	{
		$result = "Phương trình có vô số nghiệm.";
	}
	else
	{
		$result = "phương trình vô nghiệm !";
	}
?>
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
			body 	{background: #919378;}

			form 	{width: 600px; margin: 100px auto;}

			legend 	{text-align: center; font-size: 40px;}

			button 	{margin-left: 260px}

			h2 		{text-align: center;}
		</style>
</head>
<body>
	<form action="" method="POST" role="form">
		<legend>Tính phương trình bậc nhất 1 ẩn</legend>

		<div class="form-group">
			<input type = "text", class="form-control" id="" name = "a", placeholder = "Hệ số a", value = "<?php echo "$a" ?>" required="require">
		</div>

		<div class="form-group">
			<input type="text", class="form-control" id="" name="b", placeholder="Hệ số b", value="<?php echo "$b" ?>" required="require">
		</div>

		<button type="submit" class="btn btn-primary">Solution</button>
		<br>
		<h2> <?php echo $result; ?> </h2>
	</form>
 <!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>