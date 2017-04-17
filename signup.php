<?php
session_start();
?>
<html>
<head>
	<title>caguitarlessons</title>
		<div class="signup">
			<a href="signup.php"> SignUp</a>
			<a href="
				<?php
					if(isset($_SESSION["auth_user"])){
						echo "logout.php";
					}
					else{
						echo "login.php";
					}
				?>
				"
			> 
			<?php
				if(isset($_SESSION["auth_user"])){
					echo "Logout";
				}
				else{
					echo "Login";
				}
			?></a>
		</div>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link href="index.css" rel="stylesheet" type="text/css">
	<link href="slick/slick-theme.css" rel="stylesheet" type="text/css">
</head>

<body>
	<img id="mainlogo" src="logo.png"/>
	<div id="nav">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="videolessons.php">Video Lessons</a></li>
			<li><a href="lessonmaterials.php">Lesson Materials</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>

	<div id="sign_up">
		<div id="form">
			<form id="text_input" method="POST" action="signup_handler.php" border="0">
				<label>First Name:</label> <input name="first_name" type="text" 
				value="<?php 
				if(isset($_SESSION["first_name"])){ 
					echo $_SESSION["first_name"];
					unset($_SESSION["first_name"]);
				}
				?>">
				<div id="first_name_error">
					<p id="first_name_error_text">
						<?php
						if(isset($_SESSION["errorFirstName"])){
							echo $_SESSION["errorFirstName"];
							unset($_SESSION["errorFirstName"]);
						}
						?>
					</p>
				</div>
				<label>Last Name:</label> <input name="last_name" type="text" 
				value="<?php 
				if(isset($_SESSION["last_name"])){ 
					echo $_SESSION["last_name"];
					unset($_SESSION["last_name"]);
				}
				?>">
				<div id="last_name_error">
					<p id="last_name_error_text">
						<?php
						if(isset($_SESSION["errorLastName"])){
							echo $_SESSION["errorLastName"];
							unset($_SESSION["errorLastName"]);
						}
						?>
					</p>
				</div>
				<label>Email Address:</label> <input name="email" type="text"
				value="<?php 
				if(isset($_SESSION["email"])){ 
					echo $_SESSION["email"];
					unset($_SESSION["email"]);
				}
				?>">
				<div id="email_error">
					<p id="email_error_text">
						<?php
						if(isset($_SESSION["errorEmail"])){
							echo $_SESSION["errorEmail"];
							unset($_SESSION["errorEmail"]);
						}
						?>
					</p>
				</div>
				<label>Password:</label> <input name ="password" type="password"
				value="<?php 
				if(isset($_SESSION["password"])){ 
					echo $_SESSION["password"];
					unset($_SESSION["password"]);
				}
				?>">
				<div id="pwd_error">
					<p id="password_error_text">
						<?php
						if(isset($_SESSION["errorPassword"])){
							echo $_SESSION["errorPassword"];
							unset($_SESSION["errorPassword"]);
						}
						if(isset($_SESSION["errorPasswordNumber"])){
							echo $_SESSION["errorPasswordNumber"];
							unset($_SESSION["errorPasswordNumber"]);
						}
						?>
					</p>
				</div>
				<!-- <input id="submit" type="submit" value="Submit"> -->
				<button id="submit">Submit</button>
			</form>
		</div>
	</div>

	<div class="clear"></div>
	<div id="footer">Copyright &copy; 2017 Chad Alton
	</div>
</body>
</html>