<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Booking - Santo Beach Hotel</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo_header">
					<div id="logo">
						<a href="index.php"><img src="images/logo.png" alt="LOGO" height="156" width="162"></a>
					</div>
					<a href="booking.php" class="myButton1">BOOK NOW</a>
					<a href="login.php" class="myButton2">LOG IN</a>
				</div>
				<nav id="nav-3">
				  <a class="link-3" href="index.php">ΑΡΧΙΚΗ</a>
				 <!-- <a class="link-3" href="login.php">Login</a>-->
				  <a class="link-3" href="gallery.php">ΦΩΤΟΓΡΑΦΙΕΣ</a>
				  <a class="link-3" href="contact.php">ΕΠΙΚΟΙΝΩΝΙΑ</a>
				  <a class="link-3" href="rooms.php">ΔΩΜΑΤΙΑ</a>
				  <a class="link-3" href="news.php"> ΤΟΠΟΘΕΣΙΑ</a>
				   <!--<a class="link-3" href="logout.php">Logout</a>-->
				</nav>
			</div>
			<div id="contents">
				<div class="box">
					<div>
						<div id="contact" class="body">
							<h1>κρατηση</h1>
							<form method="post" action="krathsh.php" >
								<table>
									<tbody>
										<tr>
											<td>ονομα:</td>
											<td><input type="text" value="" name='username'class="txtfield"></td>
										</tr> 
										<tr>
											<td>Email:</td>
											<td><input type="text" value="" name='email' class="txtfield" required></td>
										</tr> 
										<tr>
											<td>τυποι δωματιου:</td>
											<td>
											
  												<select name="roomtype" required>
    												<option value="studio">Studio</option>
   													<option value="apartment">Διαμέρισμα</option>
    												<option value="suite">Σουίτα</option>
  												</select>
  				
											</td>
										</tr> 
										<tr>
											<td>Ημερ/νία:</td>
											<td><input type="date" name="date" required></td>
										</tr> 
												
  												

										<tr>
											<td class="txtarea">ΜΗΝΥΜΑ:</td>
											<td><textarea></textarea></td>
										</tr>
										 <tr>
											<td></td>
											<td><input type="submit" value="" class="btn" required></td>
										</tr>
									</tbody>
								</table>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<ul class="navigation">
					
				</ul>
				<div id="connect">
					<a href="http://pinterest.com/fwtemplates/" target="_blank" class="pinterest"></a> <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
				</div>
			</div>
			<p>
				© 2019 by SANTO BEACH HOTEL. All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>