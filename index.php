<?PHP
	session_start();
	
	require("showandinsert.php");
	
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
	
		<header style="z-index: 99999999999999;">
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
							<label for="UName">Enter Your Username: <input type="text" name="UName" id="UName"></label>
							<label for="Pwd">Enter Your Password: <input type="password" name="Pwd" id="Pwd"></label>
							<label for="password">Confirm Password: <input type="password"></label><br><br>
							<label for="type">Sign up as--  Company: <input type="checkbox" name="type" value="company"> User: <input type="checkbox" name="type" value="user"></label><br><br>
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
				  <div class="modal-body" id="updatemod">
					<form name="formt42" action="login.php" method="POST">
						<fieldset><legend>Fill the details to sign in</legend>
							<label for="UName">Enter Your Username: <input type="text" name="UName" id="UName"></label>
							<label for="Pwd">Enter Your Password: <input type="password" name="Pwd" id="Pwd"></label>
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
			
			<div class="modal" id="truckviewmod">
				  <div class="modal-dialog">
					<div class="modal-content">

					  <!-- Modal Header -->
					  <div class="modal-header">
						<h4 class="modal-title">Book Truck</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					  </div>

					  <!-- Modal body -->
					  <div class="modal-body">
						<form name="" action="update.php" method="POST">
							<fieldset><legend>Update Truck Info</legend>
								<input type="hidden" id="hidden" name="hidden">
								<label>Truck Brand: <select name="mTBrand" id="mTBrand"><option value="VOLVO">VOLVO<option value="DHONI">DHONI<option value="PANTHER">PANTHER<option value="WATSON">WATSON</select>
								<label>Truck Wheels: <select name="mTWheels" id="mTWheels"><option value="4">4<option value="8">8<option value="16">16<option value="32">32</select>
								<label>Truck Engine: <select name="mTEngine" id="mTEngine"><option value="NORMAL">NORMAL<option value="SUPER">SUPER<option value="MEGA">MEGA<option value="ULTRA">ULTRA</select>
								<label>Truck Storage: <select name="mTStorage" id="mTStorage"><option value="SMALL">SMALL<option value="MEDIUM">MEDIUM<option value="LARGE">LARGE<option value="XL">XL</select>
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
			
			<div class="modal" id="warn" style="z-index:9999999999999999">
			  <div class="modal-dialog">
				<div class="modal-content">

				  <!-- Modal Header -->
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				  </div>

				  <!-- Modal body -->
				  <div class="modal-body">
					<h4 class="modal-title">Please Log in or Sign Up First!</h4>
				  </div>

				  <!-- Modal footer -->
				  <div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				  </div>

				</div>
			   </div>
			</div>
			
			<div class="modal" id="book">
			  <div class="modal-dialog">
				<div class="modal-content">

				  <!-- Modal Header -->
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				  </div>

				  <!-- Modal body -->
				  <div class="modal-body">
					<h4 class="modal-title">Book This Truck?</h4>
					<form method="POST" action="booktruck.php">
						<div id="bookmodal">
						</div>
						<input type="hidden" id="hidcname" name="hidcname">
						<input type="hidden" id="hidtid" name="hidtid">
						<label>Truck Wanted On: <input type="date" name="wantdate"></label>
						<input type="submit" class="btn btn-success" value="YES"></input>
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
			
				if(isset($_SESSION["UName"]) && $_SESSION["Type"]=="company"){
					
					echo'<nav class="nav justify-content-center nav-pills flex-column flex-md-row" style="font-family: \'Patrick Hand\', cursive; font-size: 26px;">
						<a class="nav-link m-3 bg-danger text-white w-25" href="#tabn1" data-toggle="tab" id="1stbutton">Add A New Truck </a>
						<a class="nav-link m-3 bg-danger text-white w-25" href="#tabn2" data-toggle="tab" id="2ndtton">View Trucks added by you</a>
						<a class="nav-link m-3 bg-danger text-white w-25" href="#tabn3" data-toggle="tab" id="3rdtton">View Booked Trucks</a>
					</nav>';
					
				}elseif(isset($_SESSION["UName"]) && $_SESSION["Type"]=="user"){
					//view all trucks with book now option
					//book now option will add truck to booked trucks table
					//when user clicks booknow open modal and say truck booked
					
					echo '<div class="container"><br><h2 class=display-5">All available Trucks</h2><br><div class="row">';
							$obj= new DB_FUNCTIONS;
							$rd=$obj->showalltrucks();
							 echo '<table class="table table-light"><thead class="thead-dark"><tr><th>ID</th><th>UName</th><th>TBrand</th><th>TWheels</th><th>TEngine</th><th>TStorage</th><th></th><thead></tr>';
							 foreach($rd as $re){
								 echo '<tr>';
								foreach($re as $a){
									echo '<td>'.$a.'</td>';
								}echo '<td><button class="btn btn-danger" data-toggle="modal" data-target="#book" onClick=openmodal("'.$re["ID"].'","'.$re["UName"].'")>BOOK NOW!</button></td></tr>';
							 }echo '</table>';
					echo '</div>';
				
				}else{
					echo '<div class="container text-muted"><br><h2 class="display-5"> Brands Offered By Us </h2><br>
							<div class="row">
								<div class="col-md-6 col-lg-3">
									<div class="card">
									  <img class="card-img-top img-fluid" src="images/volvo.jpg" alt="Card image" style="height: 100px; width: 135px;">
									  <div class="card-header">VOLVO</div>
									  <div class="card-footer"><a href="#" class="btn btn-lg btn-success stretched-link" data-toggle="modal" data-target="#warn">BOOK NOW!</a></div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3">
									<div class="card">
									  <img class="card-img-top img-fluid" src="images/panther.jpg" alt="Card image" style="height: 100px; width: 135px;">
									  <div class="card-header">PANTHER</div>
									  <div class="card-footer"><a href="#" class="btn btn-lg btn-success stretched-link" data-toggle="modal" data-target="#warn">BOOK NOW!</a></div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3">
									<div class="card">
									  <img class="card-img-top img-fluid" src="images/dhoni.png" alt="Card image" style="height: 100px; width: 135px;">
									  <div class="card-header">DHONI</div>
									  <div class="card-footer"><a href="#" class="btn btn-lg btn-success stretched-link" data-toggle="modal" data-target="#warn">BOOK NOW!</a></div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3">
									<div class="card">
									  <img class="card-img-top img-fluid" src="images/watson.jpg" alt="Card image" style="height: 100px; width: 135px;">
									  <div class="card-header">WATSON</div>
									  <div class="card-footer"><a href="#" class="btn btn-lg btn-success stretched-link" data-toggle="modal" data-target="#warn">BOOK NOW!</a></div>
									</div>
								</div>
							</div>
							
							<br><h2 class=display-5">All available Trucks</h2><br>';
							
							$obj= new DB_FUNCTIONS;
							$rd=$obj->showalltrucks();
							 echo '<table class="table table-light"><thead class="thead-dark"><tr><th>ID</th><th>UName</th><th>TBrand</th><th>TWheels</th><th>TEngine</th><th>TStorage</th><th></th><thead></tr>';
							 foreach($rd as $re){
								 echo '<tr>';
								foreach($re as $a){
									echo '<td>'.$a.'</td>';
								}echo '<td><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#warn">BOOK NOW!</a></td></tr>';
							 }echo '</table>';
						echo '</div>';
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
							<input type="submit" class="btn btn-success" style="font-size:28px;" value="submit"></input>
						</div>
					</form>
				</div>	
				<div class="tab-pane fade" id="tabn2">
					<?php
						if(isset($_SESSION["UName"])){
							 $object= new DB_FUNCTIONS;
							 $rd=$object->showtruckdata($_SESSION['UName']);
							 echo '<table class="table table-light"><thead class="thead-dark"><tr><th>ID</th><th>UName</th><th>TBrand</th><th>TWheels</th><th>TEngine</th><th>TStorage</th><th></th><thead></tr>';
							 foreach($rd as $re){
								$ID  = $re["ID"];
								$UName  = $re["UName"];
								$TBrand  = $re["TBrand"];
								$TWheels  = $re["TWheels"];
								$TEngine  = $re["TEngine"];
								$TStorage  = $re["TStorage"];
								echo '<tr>';//best practice for looping
								echo '<td>'.$ID.'</td>';
								echo '<td>'.$UName.'</td>';
								echo '<td>'.$TBrand.'</td>';
								echo '<td>'.$TWheels.'</td>';
								echo '<td>'.$TEngine.'</td>';
								echo '<td>'.$TStorage.'</td>';
								echo '<td><button style="text-decoration: none; font-family:  \'Patrick Hand\', cursive; font-size: 22px; background-color: lightsalmon;" data-toggle="modal" data-target="#truckviewmod" onClick="update('.$ID.')">[Click to Update]</button></td></tr>';
							 }echo '</table>';
						}
					?>
				</div>
				<div class="tab-pane fade" id="tabn3">
					<?php
						$ra=$object->showbookeddata($_SESSION["UName"]);
						if(sizeof($ra)>0){
							echo '<table class="table table-light"><thead class="thead-dark"><tr><th>BID</th><th>TID</th><th>CName</th><th>BookedBy</th><th>BookedOn</th><th>BookedFor</th><th></th><thead></tr>';
								foreach($ra as $da){
									echo '<tr>';
									echo '<td>'.$da["BID"].'</td>';
									echo '<td>'.$da["TID"].'</td>';
									echo '<td>'.$da["CName"].'</td>';
									echo '<td>'.$da["BookedBy"].'</td>';
									echo '<td>'.$da["BookedOn"].'</td>';
									echo '<td>'.$da["BookedFor"].'</td>';
									echo '</tr>';
									}echo '</table>';
						}else { echo '<h2 class="display-5">No Data Found</h3>';}
					?>
						
				
				</div>
			</div>
			
		</main>
		
		
		<script type="text/javascript">
			function update(id){
					document.getElementById('hidden').value=id;
			}
			
			function openmodal(tid,cname){
					document.getElementById('hidtid').value=tid;
					document.getElementById('hidcname').value=cname;
					xmlhttp= new XMLHttpRequest();
					xmlhttp.onreadystatechange=function(){
						if(this.readyState==4 && this.status==200){
							document.getElementById('bookmodal').innerHTML=this.responseText;
						}
					};
					 xmlhttp.open("GET","showbooktruck.php?q="+tid,true);
					 xmlhttp.send();
			}
		</script>
	
	</body>
</html>