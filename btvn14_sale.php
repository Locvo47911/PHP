<?php 
	$mat_hang = filter_input(INPUT_POST, 'mat_hang');
	$so_luong = filter_input(INPUT_POST, 'so_luong');
	$don_gia = filter_input(INPUT_POST, 'don_gia');
	$giam_gia = filter_input(INPUT_POST, 'giam_gia');

	$result = "";
	if(!empty($so_luong) && isset($don_gia) && isset($giam_gia) && is_numeric($so_luong) && is_numeric($don_gia) && is_numeric($giam_gia) && $so_luong>0 && $don_gia>0 && $giam_gia>=0)
	{
		$tinhtien = $so_luong*$don_gia+(1-$giam_gia);
		$result = "Số lượng: $so_luong, Đơn giá: $don_gia, Giảm giá: $giam_gia, Tính tiền: $tinhtien";
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
			body 	{background: #FA7A52;}

			form 	{width: 500px; margin: 100px auto;}

			legend 	{text-align: center; font-size: 40px;}

			button 	{margin-left: 220px}

			h2 		{text-align: center;}
		</style>
</head>
<body>
	<form action="" method="POST" role="form">
		<legend>Tính tiền mùa sale</legend>
	
		<select name="" id="input" class="form-control" required="required">
			<option value="select">Chọn mặt hàng</option>
			<option value="Áo Sơ Mi"> <?php if($mat_hang =='Áo Sơ Mi') echo "select" ?>Áo Sơ Mi</option>
			<option value="Áo Thun"> <?php if($mat_hang =='Áo Thun') echo "select" ?>Áo Thun</option>
			<option value="Quần Tây"> <?php if($mat_hang =='Quần Tây') echo "select" ?>Quần Tây</option>
			<option value="Quần Kaki"> <?php if($mat_hang =='Quần Kaki') echo "select" ?>Quần Kaki</option>
			<option value="Áo lậu"> <?php if($mat_hang =='Áo lậu') echo "select" ?>Áo lậu</option>
			<option value="Quần Jean"> <?php if($mat_hang =='Quần Jean') echo "select" ?>Quần Jean</option>
			<option value="Phụ Kiện"> <?php if($mat_hang =='Phụ Kiện') echo "select" ?>Phụ Kiện</option>
		</select>
	 <br>
		<div class="form-group">
			<input type="text" class="form-control" id="" name = "so_luong", placeholder="Số lượng", value="<?php echo  $so_luong ?>" required="require">
		</div>

		<div class="form-group">
			<input type="text" class="form-control" id="" name = "don_gia", placeholder = "Đơn giá", value="<?php echo  $don_gia ?>" required="require">
		</div>

		<div class="form-group">
			<input type="text" class="form-control" id="" name = "giam_gia", placeholder = "Giảm giá", value="<?php echo  $giam_gia ?>" required="require">
		</div>

		<button type="submit" class="btn btn-primary">Tính Tiền</button>
	<br>
		<h2> <?php echo $result; ?> </h2>
<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>
