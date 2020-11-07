<?php
 	$result = "";

	if(isset($_POST['action']))
		{
		 $day = filter_input(INPUT_POST, 'day');

	     $month = filter_input(INPUT_POST, 'month');

	     $year = filter_input(INPUT_POST, 'year');

	     if(checkdate($month, $day, $year))
		     {
		     	$date = mktime(0, 0, 0, $month, $day, $year);
		     	//Tạo này được nhập từ form
		     	$parts = getdate($date);
		     	if($parts['wday'] == 0 || $parts['wday'] == 6)
		     	{
		     		$result = "Đây là ngày cuối tuần: ".$parts['wday'];
		     	}
		     	else
		     	{
		     		$result = "Đây không phải ngày cuối tuần: ".$parts['wday'];
		     	}
		     }
 	else 
	     {
	     	$result ="Ngày nhập không hợp lệ !";
	     }
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
			body 	{background: #F986A1;}

			form 	{width: 500px; margin: 100px auto;}

			legend 	{text-align: center; font-size: 40px;}

			button 	{margin-left: 220px}

			h2 		{text-align: center;}
		</style>
</head>
<body>
	<form action="" method="POST" role="form">
		<legend>Date/Month/Year</legend>
	
		<div class="form-group">
			<input type="text" class="form-control" id="" placeholder="Day: " required="required" name="day">
		</div>

		<div class="form-group">
			<input type="text" class="form-control" id="" placeholder="Month: " required="required" name="month"">
		</div>

		<div class="form-group">
			<input type="text" class="form-control" id="" placeholder="Year: " required="required" name="year">
		</div>

		<button type="submit" class="btn btn-primary" name="action" value="submit">Click</button>
	<br>
		<h2><?php echo $result; ?></h2>
	</form>
<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>