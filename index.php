<!DOCTYPE html>
<html>
	<head>
		<title>Code Share</title>
		<meta name="viewport" content="width=device-width">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/css.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" 
		integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="js/js.js" type="text/javascript"></script>
	</head>
	<body>
		<header>
			<div id="logo_wrapper">
				<img src="logo/lessthan.png" id="lessthan" class="logo_img" />
				<img src="logo/slash.png" id="slash" class="logo_img" />
				<img src="logo/code.png" id="code" class="logo_img" />
				<img src="logo/share.png" id="share" class="logo_img" />
				<img src="logo/greaterthan.png" id="greaterthan" class="logo_img" />
			</div>
		</header>
		
		<div id="main_page_wrapper">
			<div id="main_page">
				<div id="login_logout">
					<img src="corner/corner2.png" id="box_corner" />
					<div id="registration_section_wrapper">
						<div id="login_section" class="registration_section" >
							<center><h2 class="label" >Log In</h2></center>
							<ul>
								<li>
									<span class="fas fa-user fa-fw"></span><input type="text" placeholder="Username/Email" name="email" id="email_input" class="ll_input"/>
								</li>
								<li>
									<span class="fas fa-lock fa-fw"></span><input type="password" placeholder="Password" name="email" id="email_input" class="ll_input"/>
								</li>
							</ul>
							<center id="note">New here? <span id="sign_up_director" class="registration_director" onclick="show_sign_up()">Sign Up</span></center>
							<center><button type="submit" value="Log In" name="login_btn" id="login_btn" class="ll_btn"><span class="fas fa-sign-in-alt fa-fw"></span>Log In</button></center>
						</div>
						
						<div id="sign_in_section" class="registration_section">
							<center><h2 class="label" >Sign Up</h2></center>
							<ul>
								<li>
									<span class="fas fa-user fa-fw"></span><input type="text" placeholder="Username/Email" name="email" id="email_input" class="ll_input"/>
								</li>
								<li>
									<span class="fas fa-lock fa-fw"></span><input type="password" placeholder="Password" name="email" id="email_input" class="ll_input"/>
								</li>
							</ul>
							<center id="note">Already have an account? <span id="sign_in_director" class="registration_director" onclick="show_sign_in()">Sign In</span></center>
							<center><button type="submit" value="Log In" name="sign_up_btn" id="login_btn" class="ll_btn"><span class="fas fa-sign-in-alt fa-fw"></span>Sign Up</button></center>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<footer>
		
		</footer>
	</body>
</html>