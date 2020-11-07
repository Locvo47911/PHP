<?php 
	$month = filter_input(INPUT_POST, 'month', FILTER_VALIDATE_INT);
	$year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
	$result = "";
	switch ($month) {
		case 2:
			//Xac dinh nam nhuan hay khong (true/false)
				$is_leap_year = false;
				if($year%4 == 0)
				{
					if($year%100!=0)
					{
						$is_leap_year = true;
					}
					elseif ($year%400==0)
					{
						$is_leap_year = true;
					}
					else
					{
						$is_leap_year = false;
					}
				}
				else{
					$is_leap_year = false;	
				}

			//Sau khi xac dinh kiem tra va xuat so ngay	
			if($is_leap_year){
				$result = "Tháng $month có 29 ngày";
			}
			else{
				$result = "Tháng $month có 28 ngày";
			}	
			
			break;
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 12:
			$result = "Tháng $month có 31 ngày";
			break;
		case 4:
		case 6:
		case 9:
		case 11:
			$result = "Tháng $month có 30 ngày";
			break;
		
		default:
			$result = "";
			break;
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
			body 	{background: #555656;}

			form 	{width: 500px; margin: 100px auto;}

			legend 	{text-align: center; font-size: 40px;}

			button 	{margin-left: 220px}

			h2 		{text-align: center;}
		</style>
</head>
<body>
 	<form action="" method="POST" role="form">
		<legend>Scan month && year</legend>	
	
		<div class="form-group">
			<input type="text" class="form-control" id="" name="month" placeholder="Enter month: " required="require">
		</div>

		<div class="form-group">
			<input type="text" class="form-control" id="" name="year" placeholder="Enter year: " required="require">
		</div>

		<button type="submit" class="btn btn-primary">Click</button>
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