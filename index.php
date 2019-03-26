<?PHP
	session_start();
?>
<!doctype html>
<html>
	<head>
	
		<title>BookMyTruck</title>
		
		<link href="https://fonts.googleapis.com/css?family=Noto+Serif|Pacifico|Patrick+Hand" rel="stylesheet">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="style.css">
		
	</head>
	
	<body>
	
		<header>
			<div class="logo">
				<img src="images/logo.jpg" alt="logo">
			</div>
			<div class="links">
			
				<?php 
				
				if(isset($_SESSION['UName'])){
				echo '<ul><li><a href="#" class="btn btn-lg btn-success">'. $_SESSION["UName"].'</a></li><li><a href="logout.php" class="btn btn-lg btn-success">LOGOUT</a></li></ul>';
				}else{
					echo '<ul><li><a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#login">LOG IN</a></li><li><a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#signup">SIGN UP</a></li></ul>';
				}
				?>
			</div>
			BookMyTruck
		</header>
		
		<main>
			<!-- The Modal -->
			<div class="modal" id="signup">
			  <div class="modal-dialog">
				<div class="modal-content">

				  <!-- Modal Header -->
				  <div class="modal-header">
					<h4 class="modal-title">Sign-Up</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				  </div>

				  <!-- Modal body -->
				  <div class="modal-body">
					<form name="formt41" action="signup.php" method="POST">
						<fieldset><legend>Enter the following details</legend>
							<label for="Name">Enter Your Name: <input type="text" name="Name" id="Name"></label>
							<label for="Name">Enter Your Username: <input type="text" name="UName" id="UName"></label>
							<label for="Name">Enter Your Password: <input type="password" name="Pwd" id="Pwd"></label>
							<label for="Name">Confirm Password: <input type="password"></label><br>
							</fieldset>
							<input type="submit" class="btn btn-danger"></input>
					</form>
				  </div>

				  <!-- Modal footer -->
				  <div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				  </div>

				</div>
			   </div>
			</div>
			
			<div class="modal" id="login">
			  <div class="modal-dialog">
				<div class="modal-content">

				  <!-- Modal Header -->
				  <div class="modal-header">
					<h4 class="modal-title">Sign In</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				  </div>

				  <!-- Modal body -->
				  <div class="modal-body">
					<form name="formt42" action="login.php" method="POST">
						<fieldset><legend>Fill the details to sign in</legend>
							<label for="Name">Enter Your Username: <input type="text" name="UName" id="UName"></label>
							<label for="Name">Enter Your Password: <input type="password" name="Pwd" id="Pwd"></label>
						</fieldset>
							<input type="submit" class="btn btn-danger"></input>
					</form>
				  </div>

				  <!-- Modal footer -->
				  <div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				  </div>

				</div>
			   </div>
			</div>
			
			<?php
			
				if(isset($_SESSION["UName"])){
					
					echo'<nav class="nav justify-content-center nav-pills flex-column flex-md-row" style="font-family: \'Patrick Hand\', cursive; font-size: 26px;">
						<a class="nav-link m-3 bg-danger text-white w-25" href="#tabn1" data-toggle="tab" id="1stbutton">Add A New Truck </a>
						<a class="nav-link m-3 bg-danger text-white w-25" href="#tabn2" data-toggle="tab" id="2ndtton">View All Trucks</a>
					</nav>';
					
				}else{
					echo '<h3>Please Login to use the complete features of this website';
				}
			?>

			<div class="tab-content py-5">
				<div class="tab-pane fade" id="tabn1">
					<form name="form43" action="truckadd.php" method="POST" style="font-family: \'Patrick Hand\', cursive; font-size: 30px; margin:3px auto;">
						<fieldset><legend style="font-size: 42px; text-align: center; margin:-top: 7px; margin-bottom: 7px;">Enter Truck Details</legend>
						<div class="form-group text-center justify-content-center">
							<label for="TBrand"> Choose Truck Brand: <select class="form-control" name="TBrand" id="TBrand"><option value="VOLVO">VOLVO<option value="DHONI">DHONI<option value="PANTHER">PANTHER<option value="WATSON">WATSON</select>
						</div>
						<div class="form-group text-center justify-content-center">
							<label for="TBrand"> Choose No. of Truck Wheels: <select class="form-control" name="TWheels" id="TWheels"><option value="4">4<option value="8">8<option value="16">16<option value="32">32</select>
						</div>
						<div class="form-group text-center justify-content-center">
							<label for="TBrand"> Choose Truck Engine: <select class="form-control" name="TEngine" id="TEngine"><option value="NORMAL">NORMAL<option value="SUPER">SUPER<option value="MEGA">MEGA<option value="ULTRA">ULTRA</select>
						</div>
						<div class="form-group text-center justify-content-center">
							<label for="TBrand"> Choose Truck Storage Size: <select class="form-control"name="TStorage" id="TStorage"><option value="SMALL">SMALL<option value="MEDIUM">MEDIUM<option value="LARGE">LARGE<option value="XL">XL</select>
						</div>
						</fieldset>
						<div class="form-group text-center justify-content-center">
							<input type="submit" class="btn btn-success" style="font-size:28px;"></input>
						</div>
					</form>
				</div>	
				<div class="tab-pane fade" id="tabn2">
					<?php
						if(isset($_SESSION["UName"])){
							$conn = mysqli_connect("localhost", "root", "", "formdb");
						  // Check connection
							  if ($conn->connect_error) {
							   die("Connection failed: " . $conn->connect_error);
							  } 
							  echo "<div class='container'><div class='col-md-offset-2'><table class='table table-light'><tr><th>ID></th><th>UName</th><th>TBrand</th><th>TWheels</th><th>TEngine</th><th>TStorage</th></tr>";
							  $U=$_SESSION['UName'];
							  $sql = "SELECT * FROM t4b WHERE UName='$U'";
							  $result = $conn->query($sql);
								while($row = $result->fetch_array())
									  {
									  echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["UName"] . "</td><td>" . $row["TBrand"] . "</td><td>" . $row["TWheels"] . "</td><td>" . $row["TEngine"] . "</td><td>" . $row["TStorage"] .  "</td></tr>";
									  }
									  echo "</table></div></div>";
							$conn->close();
						}else{
							echo "<h3>Please Enter Truck Details First</h3>";
						}
					?>
				</div>
			</div>
			
		</main>
		
		<footer>
		</footer>
	</body>
</html>