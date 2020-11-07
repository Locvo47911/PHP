<?php 
	define('LUONGCB', 500);
	$heso = filter_input(INPUT_POST, 'heso');
	$phucap = filter_input(INPUT_POST, 'phucap');
	$result = "";
	if(!empty($heso) && isset($phucap) && is_numeric($heso) && is_numeric($phucap) && $heso>0 && $phucap>=0)
	{
		$tienluong = $heso*LUONGCB+$phucap;
		$result = "Hệ số: $heso, Phụ cấp: $phucap, Tiền lương: $tienluong";
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
			body 	{background: #9DEBD4;}

			form 	{width: 600px; margin: 100px auto;}

			legend 	{text-align: center; font-size: 40px;}

			button 	{margin-left: 260px}

			h2 		{text-align: center;}
		</style>
</head>
<body>
	<form action="" method="POST" role="form">
		<legend>Tính tiền lương nhân viên</legend>
	
		<div class="form-group">
			<input type="text" class="form-control" id="" name = "heso", placeholder = "Hệ số", value = "<?php echo $heso  ?>" required="require">
		</div>

		<div class="form-group">
			<input type="text" class="form-control" id="" name = "phucap", placeholder = "Phụ cấp", value = " <?php echo $phucap ?>" required="require">
		</div>

		<button type="submit" class="btn btn-primary">So sánh</button>
	<br>
		<h2> <?php echo $result; ?> </h2>
		</form>
	</div>
<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>
