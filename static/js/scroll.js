$(document).ready(function(){
	$(window).scroll(function () {
  	 var scrollValue = $(document).scrollTop(); 
  	 // console.log(scrollValue); 
  	 	if(scrollValue < 300){
  	 		$(".header_wrap img").attr("src",$(".head_url").text()+"static/images/footer_logo.png");
  	 		$("header").css("background","rgba(0,0,0,0)");
  	 		$("header .mainmenu > li > a").css("color","white");
  	 		$("header .info_div > i").css("color","white");
  	 	}
  	 	else if(scrollValue > 300){
  	 		// alert("a");
  	 		$(".header_wrap img").attr("src",$(".head_url").text()+"static/images/header_logo.png");
  	 		$("header").css("background","white");
  	 		$("header .mainmenu > li > a").css("color","black");
  	 		$("header .info_div > i").css("color","black");
  	 	}
  	});
});