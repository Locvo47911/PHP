<?php 
	$investment = filter_input(INPUT_POST, 'investment', FILTER_VALIDATE_FLOAT);
	$interest_rate = filter_input(INPUT_POST, 'interest_rate', FILTER_VALIDATE_FLOAT);
	$month = filter_input(INPUT_POST, 'month', FILTER_VALIDATE_INT);

	$future_value = $investment;
	$interest = 0;
	$detail_investment = "";
	for($i = 1; $i <=$month; $i++)
	{
		$future_value = $future_value + $future_value*$interest_rate*0.01/12;
		$interest = $interest + $future_value*$interest_rate*0.01/12;
		$detail_investment .= "month $i :".$future_value."<br>";
	}
	$future_value = number_format($future_value, 2);
	$interest = number_format($interest, 2);
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
			body 	{background: #8D85A2;}

			form 	{width: 500px; margin: 100px auto;}

			legend 	{text-align: center; font-size: 40px;}

			button 	{margin-left: 220px}

			h2 		{text-align: center;}
		</style>
</head>
<body>
	<form action="" method="POST" role="form">
		<legend> Tính lãi suất </legend>
	
		<div class="form-group">
			<input type="text" class="form-control" id="" name="investment", value="<?php ?>" placeholder="Investment" required="require">
		</div>

		<div class="form-group">
			<input type="text" class="form-control" id="" name="interest_rate", value="<?php ?>" placeholder="Interest Rate" required="require">
		</div>

		<div class="form-group">
			<input type="text" class="form-control" id="" name="month", value="<?php ?>" placeholder="Month" required="require">
		</div>

		<button type="submit" class="btn btn-primary">Tính</button>
	<br>
		<h2> <?php echo $detail_investment; ?></h2>
<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>