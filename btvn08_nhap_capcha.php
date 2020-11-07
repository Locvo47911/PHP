<?php 

	$password_length = 6; //Độ dài capcha

	$symbols = '2ieh37g3r87tygy2swh2bcebwh';

	$symbols_count = strlen($symbols); // Số kí tự

	$index = random_int(0, $symbols_count - 1); // Sinh ra chỉ số để lấy kí tự

	$password = substr($symbols, $index, 1); // Lấy 1 kí tự ngẫu nhiên trong symbols

	while (strlen($password) < $password_length) 
		{
			$password .= substr($symbols, random_int(0, $symbols_count - 1), 1);
		}

	$password = str_shuffle($password);

	$capcha = filter_input(INPUT_POST, 'capcha');

	$pass_char = filter_input(INPUT_POST, 'pass_char');

	if(!empty($capcha) && $capcha == $pass_char)
		{
			header("location: btvn8_nhap_capcha_next.php");
		}
	else 
		{
			
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
			body 	{background: #80617A;}

			form 	{width: 500px; margin: 100px auto;}

			legend 	{text-align: center; font-size: 40px;}

			button 	{margin-left: 220px}

			h2 		{text-align: center;}
		</style>
 </head>
 <body>
 	<form action="" method="POST" role="form">
 		<legend>Làm việc với Capcha</legend>

 		<div class="form-group">
 			<input type="text" name="capcha" placeholder="Enter capcha: " required="required" class="form-control" id="">
 		</div>

 		<div class="form-group">
 			<input type="text" name="pass_char" value="<?php echo $password ?>" pattern="" title="" readonly class="form-control" id="">
 		</div>
 		<button type="submit" class="btn btn-primary">Click</button>
 	</form>
<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>