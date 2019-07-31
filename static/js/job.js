		$(document).ready(function(){
			$('.job_rank_div_wrap').slick({
		  slidesToShow: 5,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 2000,
		  arrows: true,
		  variableWidth: true,
		     prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
		            nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
		});
		var i = 0;
		var inteval;
		var top_value = 0;
		$(document).on("mouseover",".list_item",function(){
			var slickdiv = $(this).children(".list_item_wrap").children(".list_item_img").children(".list_item_wrap_wrap");
			$(this).children(".list_item_wrap").children(".item_info").stop().fadeOut();
			
			// alert("over");
			// console.log("a");
		});
		$(document).on("mouseenter",".list_item_img",function(){
			var item_height = $(this).children(".list_item_wrap_wrap").height();
			var img_length = $(this).children(".list_item_wrap_wrap").children("img").length;
			var magrin_value = item_height / img_length;
			var this_item = $(this);
			inteval = setInterval(function(){
				if(top_value >= item_height-300){
					top_value = 0;
				}
				this_item.children(".list_item_wrap_wrap").css("marginTop","-"+top_value+"px");
				top_value++;
			},15);
			
	

		});
		$(document).on("mouseleave",".list_item_img",function(){
			clearInterval(inteval);
		});
		$(document).on("mouseleave",".list_item",function(){
			var slickdiv = $(this).children(".list_item_wrap").children(".list_item_img").children(".list_item_wrap_wrap");
			$(this).children(".list_item_wrap").children(".item_info").stop().fadeIn();
			$(this).children(".list_item_wrap").children(".list_item_img").children(".list_item_wrap_wrap").css("marginTop","0px")
			// 
			// removeinterval(inteval);
			// alert("leave");
			top_value = 0;
		});
		$(document).on("click",".list_item,.rank_item",function(){
			var num = $(this).attr("data-num");
			// alert(num);
			location.href=$(".head_url").text()+"company/company_view?num="+num;
		});

		$.ajax({
			type:"POST",
			url:$(".head_url").text()+"matching/job_recom",
			data:{divs:"all"},
			dataType:"json",
			success:function(response){
				// alert(response);
				var div = "";
				$.each(response,function(key,value){
					// alert("a");
					var strarr = value.companyimg.split(",");
					var sectarr = value.companySectors.split(",");
					// alert(strarr[0]);
					div += `
						<div class="list_item" data-num="${value.companynum}">
						<div class="list_item_wrap">
							<div class="list_item_img">
								<div class='list_item_wrap_wrap'>`
								for(var i = 0; i < strarr.length-1; i++){
									div += `<img src="${$(".head_url").text()+strarr[i]}" alt="img">`;
								}
								
							
							div += `</div></div>
							
							<div class="item_info">
								<h1>${value.companyname}</h1>`;
								for(var j = 0; j < sectarr.length-1; j++){
									div += `<span>${sectarr[j]} </span>`;
								}
								
								div += `<p>${value.companystart} - ${value.companyend}</p>
							</div>

							<div class="item_hover">
								<p>자세히 보기</p>
								<div class="itme_hover_circle">
									<i class="fas fa-plus"></i>
								</div>
							</div>
						</div>
					</div>
					`;
					// $(".job_list_main").append(div);
				});
				$(".job_list_main").html(div);
			}
		});
		

		$(".job_search_btn").click(function(){
			var text = $(".job_input").val();
			var select = $(".job_selct option:selected").val();
			if(text == ""){
				$.sweetModal({
							content:"빈칸없이 입력해주세요.",
							icon: $.sweetModal.ICON_ERROR
						});
						return false;
			}else{
				$.ajax({
			type:"POST",
			url:$(".head_url").text()+"matching/job_recom",
			data:{divs:"search",text:text,sects:select},
			dataType:"json",
			success:function(response){
				// alert(response);
				var div = "";
				$.each(response,function(key,value){
					// alert("a");
					var strarr = value.companyimg.split(",");
					var sectarr = value.companySectors.split(",");
					// alert(strarr[0]);
					div += `
						<div class="list_item" data-num="${value.companynum}">
						<div class="list_item_wrap">
							<div class="list_item_img">
								<div class='list_item_wrap_wrap'>`
								for(var i = 0; i < strarr.length-1; i++){
									div += `<img src="${$(".head_url").text()+strarr[i]}" alt="img">`;
								}
								
							
							div += `</div></div>
							
							<div class="item_info">
								<h1>${value.companyname}</h1>`;
								for(var j = 0; j < sectarr.length-1; j++){
									div += `<span>${sectarr[j]} </span>`;
								}
								
								div += `<p>${value.companystart} - ${value.companyend}</p>
							</div>

							<div class="item_hover">
								<p>자세히 보기</p>
								<div class="itme_hover_circle">
									<i class="fas fa-plus"></i>
								</div>
							</div>
						</div>
					</div>
					`;
					// $(".job_list_main").append(div);
				});
				$(".job_list_main").html(div);
				// $(".list_item_wrap_wrap").slick({
				//   slidesToShow: 1,
				//   slidesToScroll: 1,
				//   autoplay: true,
				//   arrows:false,
				//   autoplaySpeed: 2000,
				//   verticalSwiping: true,
				//   vertical: true,
				//   centerMode: true,
				// });
				// slickPause();
			}
		});
			}
		});

		$(".job_input").keydown(function(key) {
            if (key.keyCode == 13) {
                var text = $(this).val();
			var select = $(".job_selct option:selected").val();
			if(text == ""){
				$.sweetModal({
							content:"빈칸없이 입력해주세요.",
							icon: $.sweetModal.ICON_ERROR
						});
						return false;
			}else{
				$.ajax({
			type:"POST",
			url:$(".head_url").text()+"matching/job_recom",
			data:{divs:"search",text:text,sects:select},
			dataType:"json",
			success:function(response){
				// alert(response);
				var div = "";
				$.each(response,function(key,value){
					// alert("a");
					var strarr = value.companyimg.split(",");
					var sectarr = value.companySectors.split(",");
					// alert(strarr[0]);
					div += `
						<div class="list_item" data-num="${value.companynum}">
						<div class="list_item_wrap">
							<div class="list_item_img">
								<div class='list_item_wrap_wrap'>`
								for(var i = 0; i < strarr.length-1; i++){
									div += `<img src="${$(".head_url").text()+strarr[i]}" alt="img">`;
								}
								
							
							div += `</div></div>
							
							<div class="item_info">
								<h1>${value.companyname}</h1>`;
								for(var j = 0; j < sectarr.length-1; j++){
									div += `<span>${sectarr[j]} </span>`;
								}
								
								div += `<p>${value.companystart} - ${value.companyend}</p>
							</div>

							<div class="item_hover">
								<p>자세히 보기</p>
								<div class="itme_hover_circle">
									<i class="fas fa-plus"></i>
								</div>
							</div>
						</div>
					</div>
					`;
					// $(".job_list_main").append(div);
				});
				$(".job_list_main").html(div);
				// $(".list_item_wrap_wrap").slick({
				//   slidesToShow: 1,
				//   slidesToScroll: 1,
				//   autoplay: true,
				//   arrows:false,
				//   autoplaySpeed: 2000,
				//   verticalSwiping: true,
				//   vertical: true,
				//   centerMode: true,
				// });
				// slickPause();
			}
		});
			}
            }
        });
});
// function slickPause() {
// 	$('.list_item_wrap_wrap').slick('slickPause');
// }
function removeinterval(id){
	clearInterval(id);
	console.log("remove");
}