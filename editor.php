<!DOCTYPE html>
<html>
	<head>
		<title>Code Share | Editor</title>
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
				<div id="editor_wrapper">
					<div id="u_editor_wrapper">
						<center><h2 id="my_space" class="user_space">My Space</h2></center>
						<div id="u_editor" class="editor"> 
							<div id="editor_header_wrapper">
								<span id="editor_header">ID : 12345678</span>
							</div>
							
							<div id="editor_tab_wrapper">
								<div id="tab_list">
									<div class="tab">index.html</div>
									<div class="tab">New Tab</div>
								</div>
								
							</div>
							<div id="text_area_wrapper">
								<div id="mid">
									<div class="file_type">
										<span id="file_type_icon" class="far fa-file-code"></span>
										<br />
										<span id="file_type_label">Upload file</span>
										<input type="file" name="file_code" id="file_code" />
									</div>
									
									<div class="file_type">
										<span id="file_type_icon" class="fas fa-plus"></span>
										<br />
										<span id="file_type_label">Blank file</span>
									</div>
								</div>
								<textarea id="text_area" placeholder="Write or paste your code here"></textarea>
							</div>
						</div>
						<div id="dragbar">
							
						</div>
					</div>
					
					<div id="f_editor_wrapper" >
						
						<center><h2 id="friend_space" class="user_space">Friend's Space</h2></center>
						<div id="f_editor" class="editor">
							<div id="editor_header_wrapper">
								<span id="editor_header">ID : 12345678</span>
							</div>
							
							<div id="editor_tab_wrapper">
								<div id="tab_list">
									<div class="tab">index.html</div>
									<div class="tab">New Tab</div>
								</div>
								
							</div>
							<div id="text_area_wrapper">
								<div id="mid">
									<div id="connection_form_wrapper">
										<input type="text" name="f_id" placeholder="Partner's Id" id="f_id" /><button name="connect_btn" id="connect_btn" onclick="connect_btn(this)"><span class="far fa-paper-plane"></span></button>
									</div>
									<div id="connection_status">
										<img src="images/ezgif.com-gif-maker.gif"  id="conn_status_gif"/>
										<!--
										<span id="w" class="keyword">w</span><span id="wh" class="keyword">h</span><span id="whi" class="keyword">i</span><span id="whil" class="keyword">l</span><span id="while" class="keyword">e</span><span id="firstopenbrace" class="bracket">( </span>
										<span id="c" class="parameter">c</span><span id="co" class="parameter">o</span><span id="con" class="parameter">n</span><span id="conn" class="parameter">n</span><span id="conne" class="parameter">e</span><span  id="connec"class="parameter">c</span><span id="connect" class="parameter">t</span><span id="connecti" class="parameter">i</span><span id="connectin" class="parameter">n</span><span id="connecting" class="parameter">g </span><span id="firstclosebrace" class="bracket">) <br /></span>
										<span id="firstopencurlybrace" class="bracket">{ <br /></span>
										<span class="hidden_underscore">___</span><span id="ft" class="function">t</span><span id="fa" class="function">a</span><span id="fk" class="function">k</span><span id="fe" class="function">e</span><span id="secondopenbrace" class="bracket">( </span>
										<span id="C" class="parameter">C</span><span id="Ch" class="parameter">h</span><span id="Chi" class="parameter">i</span><span id="Chil" class="parameter">l</span><span  id="Chill" class="parameter">l</span><span id="P" class="parameter">P</span><span id="Pi" class="parameter">i</span><span id="Pil" class="parameter">l</span><span id="Pill" class="parameter">l</span>
										<span id="secondclosebrace" class="bracket">)</span><span id="semicolon" class="semi_colon">; <br /></span>
										<span id="firstclosecurlybrace" class="bracket">} <br /></span>
										-->
										
									</div>
								</div>
								<textarea id="text_area" placeholder="Write or paste your code here"></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<footer>
		
		</footer>
	</body>
</html>



















