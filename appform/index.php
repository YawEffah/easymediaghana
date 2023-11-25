<!DOCTYPE html>
<html>
<head>
	<link rel="fa icon" type="short icon" href="Media/logo.png">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
	<script type="text/javascript" src="Js/script.js"></script>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>EasyMedia || Application Portal</title>
	
</head>
<body>

	<header>
		<a href="../index.php">
			<img src="../Media/logo.png" class="logo">
		</a>
		<h3>EASY MEDIA INSTITUTE</h3>
		<a href="" class="logout-btn" title="Logout">
			<i class="fa fa-lock"></i>
		</a>
	</header>
	<div class="container">
		<div class="side-bar">
			<div>
				<div class="user-img">
					<img src="Media/user.jpeg">
				</div>
				
				<ul>
					<h2>Basic Details</h2>
					<a href="#Personal-data"><i class="fa fa-user" ></i><li>  Personal Data</li></a>
					<a href="#Educational-background"><i class="fa fa-graduation-cap"></i> <li> Edu. Background</li></a>
					<a href=""><i class="fa fa-edit"></i><li>  Review & Submit</li></a>
					<a href=""><i class="fa fa-dashboard"></i><li>  Status</li></a>
					<a href=""><i class="fa fa-lock"></i><li>  Logout</li></a>
				</ul>
			</div>
		</div>
		<main>
			<form>
				<fieldset id="Personal-data">
					<legend>Personal Data</legend>
					<label>Username</label>
					<span class="form-control">
						<span class="icons"><i class="fa fa-user"></i></span>
						<input type="text" placeholder="Full Name" name="username" class="text-box" required="">
					</span><br>
					<label>Email</label>
					<span class="form-control">
						<span class="icons"><i class="fa fa-envelope"></i></span>
						<input type="email" placeholder="Email" name="useremail" class="text-box" required="">
					</span><br>
					<label>Phone Number</label>
					<span class="form-control">
						<span class="icons"><i class="fa fa-phone"></i></span>
						<input type="Number" placeholder="Telephone" name="usertel" class="text-box" required="">
					</span><br>
					<span>
						<label>Gender</label><br>
						<select class="text-box" name="usergender" required="">
							<option>...Gender....</option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</span><br><br>
					<label>Upload Picture</label>
					<span class="form-control">
						<input type="file" name="userimg" required="" class="text-box">
					</span><br>
					<label>Date of Birth</label>
					<span class="form-control">
						<span class="icons"><i class="fa fa-calendar"></i></span>
						<input type="date" name="userdob" class="text-box" required="">
					</span><br>

					<label>Residential Address</label>
					<span class="form-control">
						<span class="icons"><i class="fa fa-map-marker"></i></span>
						<input type="text" placeholder="House No./ GPS Address" name="" class="text-box">
					</span><br>

					<label>Postal Address</label>
					<span class="form-control">
						<span class="icons"><i class="fa fa-map-pin"></i></span>
						<input type="text" placeholder="Postal Address" name="" class="text-box">
					</span><br>
					
					<span class="btn-wrap">
						
						<a href="#Educational-background" class="save-btn btn" style="background: darkgreen; color: white;">
							Save
						</a>
					</span>
				</fieldset>

				<fieldset id="Educational-background">
					<legend>Education Background</legend>
					<label>Institution Attended</label>
					<span class="form-control">
						<span class="icons"><i class="fa fa-graduation-cap"></i></span>
						<input type="text" placeholder="Name of School" name="userschool" class="text-box" required="">
					</span><br>
					<label>Qualification</label>
					<span class="form-control">
						<span class="icons"><i class="fa fa-certificate"></i></span>
						<input type="email" placeholder="Qualification" name="userqaulification" class="text-box" required="">
					</span><br>
					<label>Date Completed</label>
					<span class="form-control">
						<span class="icons"><i class="fa fa-calendar"></i></span>
						<input type="date" name="" class="text-box" required="">
					</span><br>
					<span>
						<label>Results</label><br>
						<select class="text-box" name="userresults" required="">
							<option>...Select....</option>
							<option>Pass</option>
							<option>Failed</option>
						</select>
					</span><br><br>
					<span>
						<label>Level</label><br>
						<select class="text-box">
							<option>...Select....</option>
							<option>Senior High</option>
							<option>Tertiary</option>
						</select>
					</span><br><br>
					<label>Field of Study</label>
					<span class="form-control">
						<span class="icons"><i class="fa fa-graduation-cap"></i></span>
						<input type="text" placeholder="Field of Study" name="" class="text-box">
					</span><br>
					
					<span class="btn-wrap">
						<a href="#Personal-data" class="edit-btn btn">
							Edit
						</a>
						<input type="submit" value="Submit" name="submit-btn" class="submit-btn btn" style="background: darkgreen; color: white;" title="Submit Application">
					</span>
				</fieldset>
				<!--<input type="submit" value="Submit" name="" class="submit-btn">-->
			</form>
		</main>
	</div>
</body>
</html>