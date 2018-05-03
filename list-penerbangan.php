<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PergiPergi.com Booking Flight</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css/table.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php">PergiPergi</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.php">Home</a></li>
								<li ><a href="#booking">Booking</a></li>
								<li><a href="#colorlib-testimony">Testimony</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<!-- slideimage 1 -->
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Sucesfull Flights</h2>
				   					<h1>Around the World</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
				</li>
				</ul>
			</div>
	</aside>

		<div id="colorlib-reservation">
			<!-- <div class="container"> -->
				<div class="row">
					<div class="search-wrap">
						<div class="container">
<!-- 							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#flight"><i class="flaticon-plane"></i> Flight</a></li>

							</ul> -->
						</div>
						<!-- box pemesanan -->
						<div class="tab-content" id="booking">
							<h1 align="center" style="color:white">Book a Flight Now</h1>
							<div id="flight" class="tab-pane fade in active">
								<form method="post" class="colorlib-form">
				              	<div class="row">
				              	 <div class="col-md-2">
				              	 	<div class="form-group">
				                    <label for="date">From:</label>
				                    <div class="form-field">
				                      <input type="text" id="location" class="form-control" placeholder="Search Location">
				                    </div>
				                  </div>
				              	 </div>
												 <div class="col-md-2">
												 <div class="form-group">
													 <label for="date">To:</label>
													 <div class="form-field">
														 <input type="text" id="location" class="form-control" placeholder="Search Location">
													 </div>
												 </div>
												</div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Depature:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
												<div class="col-md-2">
													<div class="form-group">
														<label for="guests">Seat Class</label>
														<div class="form-field">
															<i class="icon icon-arrow-down3"></i>
															<select name="people" id="people" class="form-control">
																<option value="#" style="font-color= "black";">Economy</option>
																<option value="#">Business</option>
																<option value="#">First Class</option>
																<option value="#">Premium Economy</option>
															</select>
														</div>
													</div>
												</div>


												<div class="col-md-2">
													<div class="form-group">
														<label for="guests">Guest</label>
														<div class="form-field">
															<i class="icon icon-arrow-down3"></i>
															<select name="people" id="people" class="form-control">
																<option value="#" style="font-color= "black";">1</option>
																<option value="#">2</option>
																<option value="#">3</option>
																<option value="#">4</option>
																<option value="#">5+</option>
															</select>
														</div>
													</div>
												</div>

						  <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Find Flights" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
					</div>
				</div>
			</div>
		</div>
			<div class="container">
				<br>
				<br>
				<h2>List of Flights</h2>

				<table class="points_table">
					<thead>
						<tr>
							<th class="col-xs-2">Airlines</th>
							<th class="col-xs-2">Date</th>
							<th class="col-xs-2">From</th>
							<th class="col-xs-2">To</th>
							<th class="col-xs-2">Price</th>
						</tr>
					</thead>

					<tbody class="points_table_scrollbar">
						<?php require('koneksi.php');
									$query = "SELECT * FROM penerbangan_dari ORDER BY airlines ASC";
									$result = mysqli_query($con,$query) or die(mysqli_error());

								if(mysqli_num_rows($result)==0 ){ ?>
									<tr class = "odd">
										<td class="col-xs-3"> <?php echo "Data tidak di temukan!"; ?> </td>
									</tr>

								<?php }
								else{
									while($row = mysqli_fetch_array($result)){

									if ($row[0] %2 != 0){
								?>
										<tr class="odd">
											<td class="col-xs-2"> <?php echo $row[1] ; ?> </td>
											<td class="col-xs-2"> <?php echo $row[2] ; ?> </td>
											<td class="col-xs-2"> <?php echo $row[3],$row[4]; ?> </td>
											<td class="col-xs-2"> <?php echo $row[5],$row[6]; ?></td>
											<td class="col-xs-2"> <?php echo $row[7] ; ?> </td>
											<td class="col-xs-2"><a href=""> Buy Ticket</a> </td>

										</tr>
										<?php
									}

									else
										{ ?>
										<tr class="even">
											<td class="col-xs-2"> <?php echo $row[1] ; ?> </td>
											<td class="col-xs-2"> <?php echo $row[2] ; ?> </td>
											<td class="col-xs-2"> <?php echo $row[3], $row[4]; ?> </td>
											<td class="col-xs-2"> <?php echo $row[5] ,  $row[6]; ?></td>
											<td class="col-xs-2"> <?php echo $row[7] ; ?> </td>
											<td class="col-xs-2"><a href=""> Buy Ticket</a> </td>
										</tr>
									<?php }	}?>
								<?php } ?>
					</tbody>
				</table>
			</div>


		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-6 colorlib-widget">
						<h4>Tour Agency</h4>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-6 col-md-push-1">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><a href="#">yoursite.com</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <!-- | This template is made with <i class="icon-heart2" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib --></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
					 </p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
