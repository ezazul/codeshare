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

$(document).ready(function(){
	var i = 0;
	var dragging = false;
	$('#dragbar').mousedown(function(e){
	   e.preventDefault();
	   dragging = true;
	   var main = $('#f_editor_wrapper');
	   
		$(document).mousemove(function(e){
		  var percentage = (e.pageX / window.innerWidth) * 100;
		  var mainPercentage = 100-percentage;
		
		  $('#u_editor_wrapper').css("width",percentage + "%");
		  $('#f_editor_wrapper').css("width",mainPercentage + "%");
	   });
	   
	});

	$(document).mouseup(function(e){
	   if (dragging) 
	   {
		   $(document).unbind('mousemove');
		   dragging = false;
	   }
	});
});

