<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Checkout | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

  <?php include 'header.php'; ?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form action="shipping-details.php" method="post">
									<input type="text" placeholder="Email*" name="email">
									<input type="text" placeholder="Name *" name="name">
									<input type="text" placeholder="Address" name="address">
									<input type="text" placeholder="Zip / Postal Code *" name="pin_code">
									<select>
										<option>-- State / Province / Region --</option>
										<option>Region I</option>
										<option>Region II</option>
										<option>Region III</option>
										<option>Region IV</option>
										<option>Region V</option>
										<option>Region VI</option>
										<option>Region VII</option>
										<option>Region VIII</option>
										<option>Region IX</option>
										<option>Region X</option>
										<option>Region XI</option>
										<option>Region XII</option>
										<option>BARMM</option>
									</select>
									<input type="text" placeholder="Mobile Phone" name="mobile">
									<input type="submit" name="submit" value="Confirm Order">
								</form>
							</div> 
							</a>	
						</div>
					</div>
				</div>
			</div>
	</section> <!--/#cart_items-->


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<!--/<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Checkout</title>
</head>
<body>
<div style="  text-align: center;
    position: absolute;
    inset-block-start: 50%;
    inset-inline-start: 50%;
    transform: translate(-50%,-50%);">
<p>CONGRATULATIONS THE ITEM HAS BEEN SHIP</p>
<p><a  href="index.php" >Click here</a> to shop more</p>
</div>
</body>
</html>-->