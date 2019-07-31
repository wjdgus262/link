$(document).ready(function(){
	// alert("a");
	$(".search_port_item").mouseover(function(){
		// alert("a");
		$(this).children(".search_port_img").children(".rank_gray").stop().fadeIn();
	});
	$(".search_port_item").mouseleave(function(){
		// alert("a");
		$(this).children(".search_port_img").children(".rank_gray").stop().fadeOut();
	});

	 $(".com_top_item").mouseover(function(){
	 	// alert("a");
	 	$(this).children(".com_top_info").stop().fadeIn();
	 });
	 $(".com_top_item").mouseleave(function(){
	 	// alert("a");
	 	$(this).children(".com_top_info").stop().fadeOut();
	 });

	 

	 $(".search_port_item").click(function(e){
		e.preventDefault();
		var num = $(this).attr("data-num");
		$(".tool > img").remove();
		// alert(num)
		// alert(num);
		// $(".portfoilo_modal").show();

		$('body').css("overflow", "hidden");
		// alert($(".url").text());
		$.ajax({
			type:"POST",
			data:{num:num},
			url:$(".head_url").text()+"portfoilo/port_view",
			dataType:"json",
			cache: false,	
			success:function(response){
				// alert(response.num);
				$(".portfoilo_img_body img").remove();
				var img = response.img.split(",");
				 for ( var i in img ) {
				 	if(img[i] == ""){
				 		break;
				 	}
			        $(".portfoilo_img_body_wrap").append("<img src='"+$(".head_url").text()+"static/userimages/portfoilo/"+img[i]+"' alt='img'>");
			      }
			     var tool = response.tool.split(",");
			   		// alert(tool[0]);
			     for(var j in tool){
			     	if(tool[j] == ""){
				 		break;
				 	}
				 	// alert(tool[j]);
				 	$(".tool").append("<img src='"+$(".head_url").text()+"static/images/tools/"+tool[j]+".png' alt='img'>");
			     }



			     $('.user_name').text(response.id);
			     $(".title").text(response.title);
			     $(".upjgon").text(response.category);
			     $(".like_count").text(response.like_count);
			     $(".view_count").text(response.count);
			     $(".comment_count").text(response.comment_count);
			     $(".portfoilo_date").text(response.date_porfoilo);
			     $(".portfoilo_conent").text(response.bodytext);
			     // $(".tool").append("<span>"+response.tool+"</span>");
			     $(".insert_comment_btn").attr("data-num",num);
			     $(".profile_circle > img").remove();
			     $(".insert_circle > img").remove();
			     $(".profile_circle").append("<img src='"+response.id_img+"' alt='img'>");
			     $(".insert_circle").append("<img src='"+response.login_member_img+"' alt='img'>");
			     $('.portfoilo_img_body_wrap').slick({
            	autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
     prevArrow:"<button type='button' class='slick-prev prev_btn_slick'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next next_btn_slick'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
            });
			     var hash = response.hash_tag.split(",");
			     $(".portfoilo_info_hash > span").remove();
			      for (var i =0; i < hash.length-1; i++ ) {
			      	var span = "<span class='hash_span'>"+hash[i]+"</span>"
			        $(".portfoilo_info_hash").append(span);
			      }
			      // alert(response.like);
			    if(response.like == "not_login"){
					$(".like_circle > i").remove();
					$(".like_circle").prepend("<i class='far fa-heart not_login'></i>");
				}else if(response.like == "not_like"){
					$(".like_circle > i").remove();
					$(".like_circle").prepend("<i class='far fa-heart not_like' data-num='"+num+"'></i>");
				}else{
					$(".like_circle > i").remove();
					$(".like_circle").prepend("<i class='fas fa-heart like_success' data-num='"+num+"'></i>");
				}



				var temp = "<thead></thead>";
					$.each(response.comment_list,function(key,value){
						// alert(value.portfoilo_comment_id);
						temp += `<tr>
								<td class="porfile_td_img">
									<div class="td_porfile_circle">
										<img src="${value.porfile_img}" alt="img">
									</div>
								</td>
								<td class="comment_bodytext_table">
									<div class="table_bodytext_top">
										<p>${value.portfoilo_comment_id}</p>
									</div>
									<div class="table_bodytext_bottom">
										<p>${value.portfoilo_comment_bodytext}</p>
									</div>
								</td>`;

								if(value.portfoilo_comment_id == response.login_id){
									temp += `<td>
									<span class='update_comment' data-num='${value.num}' data-pornum='${value.portfoilo_num}'>수정</span>
									<span class='delete_comment' data-num='${value.num}' data-pornum='${value.portfoilo_num}'>삭제</span>
								</td>
							</tr>`;
								}else{
									temp += `</tr>`;
								}
								
					});
					$(".tbl").html(temp);
					page();




				$(".portfoilo_modal").show();
			 },
			 error:function(request,status,error){
			 	alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
			 }
		});
	});

	$(document).on("click",".not_like",function(){
			var num = $(this).attr("data-num");
			// alert(num);
			$.ajax({
				type:"POST",
				data:{num:num},
				url:"portfoilo/like_go",
				success:function(response){
					// alert(response);
					$(".like_circle > i").remove();
					$(".like_circle").prepend("<i class='fas fa-heart like_success' data-num='"+num+"'></i>");
					$(".like_count").text(response);
					return false;
				}
			});

		});
		$(document).on("click",".like_success",function(){
			// alert("a");
			var num = $(this).attr("data-num");
			$.ajax({
				type:"POST",
				data:{num:num},
				url:"portfoilo/like_defind",
				success:function(response){
					$(".like_circle > i").remove();
					$(".like_circle").prepend("<i class='far fa-heart not_like' data-num='"+num+"'></i>");
					$(".like_count").text(response);
					return false;
				}
			});
		});

		$(".success_comment").click(function(){
			var num = $(this).attr("data-num");
			var bodytext = $(".comment_area").val();
			if(bodytext == ""){
				$.sweetModal({
					content:"내용을 입력해주세요.",
					icon: $.sweetModal.ICON_ERROR
				});
			}else{
				$.ajax({
					type:"POST",
					dataType:"json",
					data:{num:num,bodytext:bodytext},
					url:"portfoilo/comment_insert",
					success:function(response){
						// alert(response.result);
						var temp = "<thead></thead>";
					$.each(response.result,function(key,value){
						// alert(value.portfoilo_comment_id);
						temp += `<tr>
								<td class="porfile_td_img">
									<div class="td_porfile_circle">
										<img src="${value.porfile_img}" alt="img">
									</div>
								</td>
								<td class="comment_bodytext_table">
									<div class="table_bodytext_top">
										<p>${value.portfoilo_comment_id}</p>
									</div>
									<div class="table_bodytext_bottom">
										<p>${value.portfoilo_comment_bodytext}</p>
									</div>
								</td>`;
								if(value.portfoilo_comment_id == response.login_id){
									temp += `<td>
									<span class='update_comment' data-num='${value.num}' data-pornum='${value.portfoilo_num}'>수정</span>
									<span class='delete_comment' data-num='${value.num}' data-pornum='${value.portfoilo_num}'>삭제</span>
								</td>
							</tr>`;
								}else{
									temp += `</tr>`;
								};
					});
					$(".tbl").html(temp);
					page();
					$(".comment_count").text(response.count);
					$(".comment_area").val("");


					}
				});
			}
		});
		$(".follow_div").click(function(){
		var follow_id = $(this).attr("data-id");
		// alert(follow_id);
		$.ajax({
			type:"POST",
			url:"portfoilo/follow",
			data:{follow_id:follow_id},
			success:function(response){
				// alert(response);
				if(response == "find"){
					$.sweetModal({
						content:"이미 팔로우 한 유저 입니다.",
						icon: $.sweetModal.ICON_ERROR
					});
				}else{
					$.sweetModal({
						content:"팔로우 성공",
						icon: $.sweetModal.ICON_SUCCESS
					});
				}
			}
		});
	});



		$(document).on("click",function(e){
			if($(".portfoilo_modal").is(e.target)){
				$('body').css("overflow-y", "auto");
		$(".portfoilo_img_body img").remove();
		$('.portfoilo_img_body_wrap').slick('unslick');
		$(".portfoilo_modal").fadeOut();

			}
	});

	$(document).on("click",".delete_comment",function(){
		// alert("a");
		var num = $(this).attr("data-num");
		var pornum = $(this).attr("data-pornum");
		// alert(pornum);
		// alert(num);
		$.sweetModal.confirm('정말로 댓글을 삭제하시겠습니까?', function() {
  			// alert("a");
  			$.ajax({
  				dataType:"json",
  				data:{num:num,pornum:pornum},
				url:"portfoilo/delete_comment",
				type:"POST",
				success:function(response){
					// alert(response.result);
					var temp = "<thead></thead>";
					$.each(response.result,function(key,value){
						// alert(value.portfoilo_comment_id);
						temp += `<tr>
								<td class="porfile_td_img">
									<div class="td_porfile_circle">
										<img src="${value.porfile_img}" alt="img">
									</div>
								</td>
								<td class="comment_bodytext_table">
									<div class="table_bodytext_top">
										<p>${value.portfoilo_comment_id}</p>
									</div>
									<div class="table_bodytext_bottom">
										<p>${value.portfoilo_comment_bodytext}</p>
									</div>
								</td>`;
								if(value.portfoilo_comment_id == response.login_id){
									temp += `<td>
									<span class='update_comment' data-num='${value.num}' data-pornum='${value.portfoilo_num}'>수정</span>
									<span class='delete_comment' data-num='${value.num}' data-pornum='${value.portfoilo_num}'>삭제</span>
								</td>
							</tr>`;
								}else{
									temp += `</tr>`;
								};
					});
					$(".tbl").html(temp);
					page();
					$(".comment_count").text(response.count);
				}
  			});
		});
		
	});

	$(document).on("click",'.update_comment',function(){
		$(".comment_update_modal").fadeIn();
		var num = $(this).attr("data-num");
		var pornum = $(this).attr("data-pornum");
		$(".num").text(num);
		$(".pornum").text(pornum);
		// alert("a");
	});
	$(".update_top > i").click(function(){
		$(".comment_update_modal").fadeOut();
	});
	$(".update_comment_btn").click(function(){
		var num = $(".num").text();
		var pornum = $(".pornum").text();
		var bodytext = $(".update_comment_input").val();
		if(bodytext == ""){
			$.sweetModal({
							content:"댓글 내용을 입력해주세요.",
							icon: $.sweetModal.ICON_ERROR
						});
						return false
		}else{
			$.ajax({
				dataType:"json",
  				data:{num:num,pornum:pornum,bodytext:bodytext},
				url:"portfoilo/update_comment",
				type:"POST",
				success:function(response){
					var temp = "<thead></thead>";
					$.each(response.result,function(key,value){
						// alert(value.portfoilo_comment_id);
						temp += `<tr>
								<td class="porfile_td_img">
									<div class="td_porfile_circle">
										<img src="${value.porfile_img}" alt="img">
									</div>
								</td>
								<td class="comment_bodytext_table">
									<div class="table_bodytext_top">
										<p>${value.portfoilo_comment_id}</p>
									</div>
									<div class="table_bodytext_bottom">
										<p>${value.portfoilo_comment_bodytext}</p>
									</div>
								</td>`;
								if(value.portfoilo_comment_id == response.login_id){
									temp += `<td>
									<span class='update_comment' data-num='${value.num}' data-pornum='${value.portfoilo_num}'>수정</span>
									<span class='delete_comment' data-num='${value.num}' data-pornum='${value.portfoilo_num}'>삭제</span>
								</td>
							</tr>`;
								}else{
									temp += `</tr>`;
								};
					});
					$(".tbl").html(temp);
					page();
					$(".update_comment_input").val("");
					$(".comment_update_modal").fadeOut();
					$(".comment_count").text(response.count);
				}
			});
		}
	});



	var reply_flag = 0;
	$(".reply_input_body").keyup(function(e){
		var content = $(this).val();
		// alert(content.length);

		$(".replay_count").text(content.length);
		if(content.length > 1000){
			$.sweetModal({
							content:"쪽지는 1000자 제한입니다..",
							icon: $.sweetModal.ICON_ERROR
						});
						return false;
			reply_flag = 1;
		}
	});
	$(".reply_success_btn").click(function(){
		var content = $(".reply_input_body").val();
		var payer = $(".reply_input_id").val();
		if(content == ""){
			$.sweetModal({
							content:"빈칸없이 입력해주세요.",
							icon: $.sweetModal.ICON_ERROR
						});
						return false;
		}else{
			if(reply_flag == 1){
				$.sweetModal({
							content:"쪽지는 1000자 제한입니다..",
							icon: $.sweetModal.ICON_ERROR
						});
						return false;
			}else{
				var url = $(".url").text();
				$.ajax({
					type:"POST",
					data:{content:content,payer:payer},
					url:$(".head_url").text()+"portfoilo/replay",
					success:function(response){
						// alert(response);
						if(response == 1){
							$(".reply_modal").hide();
							$.sweetModal({
							content:"쪽지를 정상적으로 발송했습니다.",
							icon: $.sweetModal.ICON_SUCCESS
						});

						}else{
							alert("error");
						}
					}
				});
				// alert("success");
			}
		}
	});

	$(".reply_modal_btn").click(function(){
		var payer = $(this).parent("div").children(".user_name").text();
		// alert(payer);
		$('body').css("overflow-y", "auto");
		$(".reply_input_id").val(payer);
		$(".portfoilo_modal").hide();
		$(".reply_modal").show();
	});
	$(".reply_close").click(function(){
		$(".reply_modal").hide();
	});
	$(".rank_item").mouseover(function(){
      // alert("a");
      	$(this).children(".rank_gray").stop().fadeIn();
    });
    $(".rank_item").mouseleave(function(){
      // alert("a");
      	$(this).children(".rank_gray").stop().fadeOut();
    });




    $(document).on("click",".company_item",function(){
		var num = $(this).attr("data-num");
		// alert(num);
		location.href=$(".head_url").text()+"company/company_view?num="+num;
	});

    $(".com_top_item").click(function(){
	 	var num = $(this).attr("data-num");
	 	var href = $(this).attr("data-url");
	 		$.ajax({
	 			type:"POST",
	 			data:{num:num},
	 			url:$(".head_url").text()+"support/com_update_count",
	 			success:function(response){
	 				if(response == 1){
	 					location.href=href;
	 				}
	 			}
	 		});
	 });

    $(document).on("click",".gove_item_title",function(){
			var a_url = $(this).attr("data-url");
			// alert(url);
			var num = $(this).attr('data-num');
			// alert(num);
			$.ajax({
				type:"POST",
				data:{num:num},
				url:$(".head_url").text()+"support/gove_count",
				success:function(response){
					// alert(response);
					if(response == 1){
						location.href=a_url;
					}else{
						$.sweetModal({
							content:"Error.",
							icon: $.sweetModal.ICON_ERROR
						});
						return false;
					}
					
				}
			});
			// location.href=a_url;
		});

    $(document).on("click",".list_item_title",function(){
    	// alert("a");
    	var num = $(this).attr("data-num");
    	// alert(num);
    	location.href=$(".head_url").text()+"support/qnaview?num="+num;
    });


    $(".qna_more_search").click(function(){
    	location.href=$(".head_url").text()+"support/qna";
    });
    $(".gove_more_search").click(function(){
    	location.href=$(".head_url").text()+"support/government";
    });
    $(".com_more_search").click(function(){
    	location.href=$(".head_url").text()+"support/competition";
    });
     $(".company_more_search").click(function(){
    	location.href=$(".head_url").text()+"company/index";
    });                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       

   

 


     $(".port_more_search").click(function(){
    	location.href=$(".head_url").text()+"portfoilo";
    });
});
function page(){ 
var reSortColors = function($table) {
  $('tbody tr:odd td', $table).removeClass('even').removeClass('listtd').addClass('odd');
  $('tbody tr:even td', $table).removeClass('odd').removeClass('listtd').addClass('even');
 };
 $('table.paginated').each(function() {
  var pagesu = 10;  //페이지 번호 갯수
  var currentPage = 0;
  var numPerPage = 5;  //목록의 수
  var $table = $(this);    
  
  //length로 원래 리스트의 전체길이구함
  var numRows = $table.find('tbody tr').length;
  //Math.ceil를 이용하여 반올림
  var numPages = Math.ceil(numRows / numPerPage);
  //리스트가 없으면 종료
  if (numPages==0) return;
  //pager라는 클래스의 div엘리먼트 작성
  var $pager = $('<td align="center" id="remo" colspan="10"><div class="pager"></div></td>');
  
  var nowp = currentPage;
  var endp = nowp+10;
  
  //페이지를 클릭하면 다시 셋팅
  $table.bind('repaginate', function() {
  //기본적으로 모두 감춘다, 현재페이지+1 곱하기 현재페이지까지 보여준다
  
   $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
   $("#remo").html("");
   
   if (numPages > 1) {     // 한페이지 이상이면
    if (currentPage < 5 && numPages-currentPage >= 5) {   // 현재 5p 이하이면
     nowp = 0;     // 1부터 
     endp = pagesu;    // 10까지
    }else{
     nowp = currentPage -5;  // 6넘어가면 2부터 찍고
     endp = nowp+pagesu;   // 10까지
     pi = 1;
    }
    
    if (numPages < endp) {   // 10페이지가 안되면
     endp = numPages;   // 마지막페이지를 갯수 만큼
     nowp = numPages-pagesu;  // 시작페이지를   갯수 -10
    }
    if (nowp < 1) {     // 시작이 음수 or 0 이면
     nowp = 0;     // 1페이지부터 시작
    }
   }else{       // 한페이지 이하이면
    nowp = 0;      // 한번만 페이징 생성
    endp = numPages;
   }
   // [처음]
   $('<br /><span class="page-number" cursor: "pointer">[처음]</span>').bind('click', {newPage: page},function(event) {
          currentPage = 0;   
          $table.trigger('repaginate');  
          $($(".page-number")[2]).addClass('active').siblings().removeClass('active');
      }).appendTo($pager).addClass('clickable');
    // [이전]
      $('<span class="page-number" cursor: "pointer">&nbsp;&nbsp;&nbsp;[이전]&nbsp;</span>').bind('click', {newPage: page},function(event) {
          if(currentPage == 0) return; 
          currentPage = currentPage-1;
    $table.trigger('repaginate'); 
    $($(".page-number")[(currentPage-nowp)+2]).addClass('active').siblings().removeClass('active');
   }).appendTo($pager).addClass('clickable');
    // [1,2,3,4,5,6,7,8]
   for (var page = nowp ; page < endp; page++) {
    $('<span class="page-number" cursor: "pointer" style="margin-left: 8px;"></span>').text(page + 1).bind('click', {newPage: page}, function(event) {
     currentPage = event.data['newPage'];
     $table.trigger('repaginate');
     $($(".page-number")[(currentPage-nowp)+2]).addClass('active').siblings().removeClass('active');
     }).appendTo($pager).addClass('clickable');
   } 
    // [다음]
      $('<span class="page-number" cursor: "pointer">&nbsp;&nbsp;&nbsp;[다음]&nbsp;</span>').bind('click', {newPage: page},function(event) {
    if(currentPage == numPages-1) return;
        currentPage = currentPage+1;
    $table.trigger('repaginate'); 
     $($(".page-number")[(currentPage-nowp)+2]).addClass('active').siblings().removeClass('active');
   }).appendTo($pager).addClass('clickable');
    // [끝]
   $('<span class="page-number" cursor: "pointer">&nbsp;[끝]</span>').bind('click', {newPage: page},function(event) {
           currentPage = numPages-1;
           $table.trigger('repaginate');
           $($(".page-number")[endp-nowp+1]).addClass('active').siblings().removeClass('active');
   }).appendTo($pager).addClass('clickable');
     
     $($(".page-number")[2]).addClass('active');
reSortColors($table);
  });
   $pager.insertAfter($table).find('span.page-number:first').next().next().addClass('active');   
   $pager.appendTo($table);
   $table.trigger('repaginate');
 });
}