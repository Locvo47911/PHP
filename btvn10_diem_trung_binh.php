<?php 
	$diem_toan = filter_input(INPUT_POST, 'diem_toan');
	$diem_ly = filter_input(INPUT_POST, 'diem_ly');
	$diem_hoa = filter_input(INPUT_POST, 'diem_hoa');
	$hoc_luc = "";
	$dtb = "";
	$result = "";
	
		if(is_numeric($diem_toan) && is_numeric($diem_ly) && is_numeric($diem_hoa) && $diem_toan >= 0 && $diem_toan <= 10 && $diem_ly >= 0 && $diem_ly <= 10 && $diem_hoa >= 0 && $diem_hoa <= 10)
		{
			$dtb = number_format(($diem_toan + $diem_ly + $diem_hoa)/3,2);
				if($dtb >= 8.0)
				{
					$hoc_luc = "Giỏi";
					$result = "Điểm Toán: $diem_toan, Điểm Lý: $diem_ly, Điểm Hóa: $diem_hoa, Điểm Trung Bình: $dtb, Học lực: $hoc_luc"; 	 
				}
				elseif($dtb >= 6.5)
				{ 
					$hoc_luc = "Khá";
					$result = "Điểm Toán: $diem_toan, Điểm Lý: $diem_ly, Điểm Hóa: $diem_hoa, Điểm Trung Bình: $dtb, Học lực: $hoc_luc"; 
				}
				elseif($dtb >= 5)
				{	 
					$hoc_luc = "Trung bình";
					$result = "Điểm Toán: $diem_toan, Điểm Lý: $diem_ly, Điểm Hóa: $diem_hoa, Điểm Trung Bình: $dtb, Học lực: $hoc_luc"; 
				}
				elseif($dtb < 5)
				{
					$hoc_luc = "Yếu";
					$result = "Điểm Toán: $diem_toan, Điểm Lý: $diem_ly, Điểm Hóa: $diem_hoa, Điểm Trung Bình: $dtb, Học lực: $hoc_luc"; 
				}
		}
		else
		{
			$result = "Điểm không hợp lệ";
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
			body 	{background: #6A9781;}

			form 	{width: 650px; margin: 100px auto;}

			legend 	{text-align: center; font-size: 40px;}

			button 	{margin-left: 280px}

			h2 		{text-align: center;}
		</style>
</head>
<body>
	<div id="const">
		<form class="form" action="" method="post">
			<legend>Tính Điểm Trung Bình Toán Lý Hóa</legend>
			<input type = "text", placeholder = "Điểm Toán", value = "<?php echo "$diem_toan" ?>" name="diem_toan" required="require" class="form-control" id="">
			<br>
			<input type="text", placeholder="Điểm Lý", value="<?php echo "$diem_ly" ?>" name="diem_ly" required="require" class="form-control" id="">
			<br>
			<input type="text", placeholder="Điểm Hóa", value="<?php echo "$diem_hoa" ?>" name="diem_hoa" required="require" class="form-control" id="">
			<br>
			<button type="submit" class="btn btn-primary">Tính dtb</button>
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