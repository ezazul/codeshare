function show_sign_up(){
	$("#registration_section_wrapper").css({"transition" : "transform 1s" , "transform" : "rotateY(180deg)" });
	$("#login_section").fadeOut(500);
	$("#sign_in_section").fadeIn(1000);
}

function show_sign_in(){
	$("#registration_section_wrapper").css({"transition" : "transform 1s" , "transform" : "rotateY(360deg)" });
	$("#sign_in_section").fadeOut(500);
	$("#login_section").fadeIn(1000);
}