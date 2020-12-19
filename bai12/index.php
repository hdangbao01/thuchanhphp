<?php
	include("connect.php");
	include("template/functions.php");
	include("template/view-products.php");
	include("template/list-products.php");

	if(isset($_GET['id'])){
		$id=$_GET['id'];
		// UPDATE RATING
		if(isset($_POST['rate_submit'])){
			if(isset($_POST['rate'])){
				$rate = $_POST['rate'];
				setRatingInfo($id, $rate);
			}
		}

		$html = getProduct($id);
		}else{
		$html = listProduct();
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rating</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			background: #ecf0f1;
		}
		a:link, a:visited{
			color: #2980b9;
			text-decoration: none;
		}
		a:hover, a:active{
			text-decoration: underline;
			color: #e74c3c;
		}

		#container{
			width: 400px;
			margin: 20px auto;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #7f8c8d;
			background: #fff;
		}
		#product-img{
			float: left;
			width: 70%;
		}
		#product-img img{
			width: 100px;
			height: 150px;
		}
		#rating-info{
			float: left;
			width: 30%;
			padding: 0;
			list-style-type: none;
		}
		.clear-fx{
			clear: both;
		}
		.product-info{
			border-bottom: 1px solid #bdc3c7;
			margin-bottom: 10px;
		}
		#submit-button{
			padding: 5px 20px;
			margin-top: 10px;
		}
		h1{
			background: #3498db;
			padding: 10px 0;
		}
		h1 a:link, h1 a:visited{
			color: #fff;
		}
	</style>
</head>
<body>
	<div id="container">
		<header>
			<h1><a href="index.php">COMPUTER ABC</a></h1>
		</header>
		
		<div id="main-wrapper">
			<div id="product-info">
				<?php echo $html ?>
			</div>
			<div id="rating">
				<form action="" method="POST">
					<h3>Đánh giá</h3>
					<input type="radio" name="rate" value="5" checked> 5
					<input type="radio" name="rate" value="4"> 4
					<input type="radio" name="rate" value="3"> 3
					<input type="radio" name="rate" value="2"> 2
					<input type="radio" name="rate" value="1"> 1<br />
					<input type="submit" name="rate_submit" value="Rate" id="submit-button">
				</form>
			</div>
		</div>

		<footer>
		</footer>
	</div>
</body>
</html>
