$(document).ready(function(){
	// alert("a");``
  var vide_ar = new Array("./static/video2.mp4","./static/video3.mp4","./static/video4.mp4")
  // alert(randomItem(vide_ar));
  var video = document.getElementById("myVideo");
  video.src = randomItem(vide_ar);
  video.load();
  video.play();
  $(".section2_item").click(function(){
      var href = $(this).attr("data-href");
      location.href=href;
  });
  $(".menu_div > i").click(function(){
    $(".menu_modal").fadeIn();
  });

  	$("#fullpage").fullpage({
				navigation:true,
				verticalCentered:false,
				afterLoad: function(origin,index){
					// alert(index.index);
					if(index.index == 0){
						video.src = randomItem(vide_ar);
  video.load();
  video.play();
						$(".section1 .anim").show();
						$(".section2 .anim").hide();
						$(".section3 .anim").hide();
						$(".section4 .anim").hide();
					}else if(index.index == 1){
						$(".section1 .anim").hide();
						$(".section2 .anim").show();
						$(".section3 .anim").hide();
						$(".section4 .anim").hide();
					}else if(index.index == 2){
						$(".section1 .anim").hide();
						$(".section2 .anim").hide();
						$(".section3 .anim").show();
						$(".section4 .anim").hide();
					}else if(index.index == 3){
						$(".section1 .anim").hide();
						$(".section2 .anim").hide();
						$(".section3 .anim").hide();
						$(".section4 .anim").show();
					}
				}
			});
  	
    $(".gove").click(function(){
      // alert("a");
        // alert($(".head_url").text());
        location.href=$(".head_url").text()+"support/government";
    });
     $(".fest").click(function(){
        location.href=$(".head_url").text()+"support/competition";
    });
      $(".qna").click(function(){
        location.href=$(".head_url").text()+"support/qna";
    });
    // $(".not_login").click(function(){
    //     $.sweetModal({
    //           content:"로그인 해주세요.",
    //           icon: $.sweetModal.ICON_ERROR
    //         });
    //         return false;
    // });
    $(".smart_btns").click(function(){
        // alert("a");
       $(".matching_modal").stop().fadeIn(); 
    });
    $(".matching_close_div").click(function(){
      $(".matching_modal").stop().fadeOut(); 
    });
    $(".job_go").click(function(){
        location.href= $(".head_url").text()+"matching/job";
    });
    $(".project_go").click(function(){
        location.href= $(".head_url").text()+"matching/project";
    });
    $("#url").keydown(function(key){
      if(key.keyCode == 13){
        // alert("엔터키를 눌러ㅛㅆ십느");
        var keyward = $(this).val();
        location.href=$(".head_url").text()+"search?keyward="+keyward;
      }
    });
  	// $(document).on("click",".enterper",function(){
  	// 	// alert("a");
  	// 	$(".section3 > img").fadeOut();
  		
  	// 	setTimeout(function(){
  	// 		$(".section3 > img").attr("src","./static/images/company.jpg");
  	// 		$(".section3 > img").fadeIn();
  	// 	},50);
  	// 	$(".circle").removeClass("enterper");
  	// 	$(".circle").removeClass("head");
  	// 	$(".circle").removeClass("project");

  	// 	$(".first_circle").addClass("project");
  	// 	$(".thred_circle").addClass("head");
  	// 	$(".second_circle").addClass("enterper");


  	// 	$(".section3_top > h1").text("Enterprise");
  	// 	$(".second_circle > p").text("Enterprise");
  	// 	$(".first_circle > p").text("Project");
  	// 	$(".thred_circle > p" ).text("Head Hunter");
  	// });

  	// $(document).on("click",".head",function(){
  	// 	$(".section3 > img").fadeOut();
  	// 	setTimeout(function(){
  	// 		$(".section3 > img").attr("src","./static/images/headhunter.png");
  	// 		$(".section3 > img").fadeIn();
  	// 	},50);
  	// 	$(".circle").removeClass("enterper");
  	// 	$(".circle").removeClass("head");
  	// 	$(".circle").removeClass("project");

  	// 	$(".thred_circle").addClass("project");
  	// 	$(".second_circle").addClass("head");
  	// 	$(".first_circle").addClass("enterper");

  	// 	$(".section3_top > h1").text("Head Hunter");
  	// 	$(".second_circle > p").text("Head Hunter");
  	// 	$(".first_circle > p").text("Enterprise");
  	// 	$(".thred_circle > p" ).text("Project");
  	// });
  	// $(document).on("click",".project",function(){
  	// 	$(".section3 > img").fadeOut();
  	// 	setTimeout(function(){
  	// 		$(".section3 > img").attr("src","./static/images/project.jpg");
  	// 		$(".section3 > img").fadeIn();
  	// 	},50);
  	// 	$(".circle").removeClass("enterper");
  	// 	$(".circle").removeClass("head");
  	// 	$(".circle").removeClass("project");

  	// 	$(".thred_circle").addClass("enterper");
  	// 	$(".second_circle").addClass("project");
  	// 	$(".first_circle").addClass("head");

  	// 	$(".section3_top > h1").text("Project");
  	// 	$(".second_circle > p").text("Project");
  	// 	$(".first_circle > p").text("Head Hunter");
  	// 	$(".thred_circle > p" ).text("Enterprise");
  	// });

  	$(".portfolio_more").click(function(){
  		// alert("a");
  		location.href="portfoilo";
  	});
});
function randomItem(a) {
  return a[Math.floor(Math.random() * a.length)];
}