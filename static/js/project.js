$(document).ready(function(){
			$('#circle').circleProgress({
    value: 0.0,
    size: 160,
    startAngle: -1.55,
    emptyFill:"rgba(255, 255, 255)",
    fill: {
      color: '#6A3BFF'
    }
  });

			var circe_vale = 0.0;
			var f_name_flag = 0;
			var f_info_flag = 0;
			var f_cur_flag = 0;
			$(".project_name_input").focusout(function(){
				// alert("a");
				var name = $(this).val();
				if(name != ""){
					circe_vale += 0.4;
					f_name_flag = 1;
				}else{
					f_name_flag = 0;
					if(circe_vale == 0.0){
						circe_vale = 0.0;
					}else{
						circe_vale -= 0.4;
					}
				}

				$('#circle').circleProgress({
					    value: circe_vale,
					    size: 160,
					    startAngle: -1.55,
					    emptyFill:"rgba(255, 255, 255)",
					    fill: {
					      color: '#6A3BFF'
					  }
				 });
				console.log(circe_vale);
			});
			$(".project_info_input").focusout(function(){
				var info = $(this).val();
				if(info != ""){
					circe_vale += 0.4;
					f_info_flag = 1;
				}else{
					f_info_flag = 0;
					if(circe_vale == 0.0){
						circe_vale = 0.0;
					}else{
						circe_vale -= 0.4;
					}
					
				}

				$('#circle').circleProgress({
					    value: circe_vale,
					    size: 160,
					    startAngle: -1.55,
					    emptyFill:"rgba(255, 255, 255)",
					    fill: {
					      color: '#6A3BFF'
					  }
				 });
				console.log(circe_vale);
			});
			$(".current_input").focusout(function(){
				var current = $(this).val();
				if(current != ""){
					circe_vale += 0.4;
					f_cur_flag = 1;
				}else{
					f_cur_flag = 0;
					if(circe_vale == 0.0){
						circe_vale = 0.0;
					}else{
						circe_vale -= 0.4;
					}
				}

				$('#circle').circleProgress({
					    value: circe_vale+0.1,
					    size: 160,
					    startAngle: -1.55,
					    emptyFill:"rgba(255, 255, 255)",
					    fill: {
					      color: '#6A3BFF'
					  }
				 });
				console.log(circe_vale);
			});
			$(".start_circle").click(function(){
				// alert("a");
				if(f_name_flag == 0 || f_info_flag == 0 || f_cur_flag == 0){
					$.sweetModal({
							content:"빈칸없이 입력해주세요",
							icon: $.sweetModal.ICON_ERROR
						});
						return false;
				}else{
					var planer = $(".planer option:selected").val();
					var dev = $(".dev option:selected").val();
					var des = $(".degin option:selected").val();
					$('.planer_p').text("기획"+planer+"명");
					$(".degin_p").text("디자이너"+des+"명");
					$(".dev_p").text("개발자"+dev+"명");
					$.ajax({
						type:"POST",
						data:{cate:"기획자"},
						url:$(".head_url").text()+"matching/pro_mat",
						dataType:"json",
						success:function(response){
							// alert(response);
							var temp = "<thead></thead>";
							var count = 0;
							var id = $(".get_id").text();
							$.each(response.member,function(key,value){
								if(value.id != id){
								var hash_split = value.info.split(",");
								temp += ` <tr>
							<td>
								<div class="item_div">
									<div class="item_left">
										<div class="item_circle">
											<div class="item_in_circle">
												<img src="${$(".head_url").text()+value.porfile_img}">
											</div>
										</div>
									</div>
									<div class="item_infos">
										<h2>${value.name}</h2>`
										for(var i = 0; i < hash_split.length; i++){
											if(i == 4){
												break;
											}
											temp += `<span>#${hash_split[i]}</span>`;
										}
									temp += `</div>
									<div class="item_porst">`
										$.each(response.port,function(key1,value1){
											if(value.id == value1.portfoilo_id){
												var port_imgarr = value1.portfoilo_img.split(",");
												temp += `<div class="port_wrap">
														<img src="${$(".head_url").text()+"static/userimages/portfoilo/"+port_imgarr[0]}">
													</div>`;
											}
										});
									temp += `
									</div>
									<div class="item_send">
										<button class="send" data-id="${value.id}">제안<br>메세지<br>보내기</button>
									</div>
								</div>
							</td>
						</tr>`;

						count++;
						}
							});
							$(".modal_body_table").html(temp);
							page();
							$(".modal_title > h2").text("매칭결과, 기획자 총 "+count+"명이 추천되었습니다.")
							$(".project_modal").stop().fadeIn();
						}
					});	
					
				}
			});

			$(".body_left_btn").click(function(){
				var text = $(this).text();
				if(text == "기획자"){
					$(this).css({
						"border":"2px solid #6A3BFF",
						"background":"#6A3BFF",
						"color":"white",
					})
					$(".dev_btn").css({
						"border":"2px solid #4EA7EA",
						"background":"none",
						"color":"#4EA7EA",
					});
					$(".degin_btn").css({
						"border":"2px solid #6EDBC9",
						"background":"none",
						"color":"#6EDBC9",
					});
				}else if(text == "개발자"){
					$(".planer_btn").css({
						"border":"2px solid #6A3BFF",
						"background":"none",
						"color":"#6A3BFF",
					})
					$(".dev_btn").css({
						"border":"2px solid #4EA7EA",
						"background":"#4EA7EA",
						"color":"white",
					});
					$(".degin_btn").css({
						"border":"2px solid #6EDBC9",
						"background":"none",
						"color":"#6EDBC9",
					});
				}else{
					$(".planer_btn").css({
						"border":"2px solid #6A3BFF",
						"background":"none",
						"color":"#6A3BFF",
					})
					$(".dev_btn").css({
						"border":"2px solid #4EA7EA",
						"background":"none",
						"color":"#4EA7EA",
					});
					$(".degin_btn").css({
						"border":"2px solid #6EDBC9",
						"background":"#6EDBC9",
						"color":"white",
					});
				}
				$.ajax({
						type:"POST",
						data:{cate:text},
						url:$(".head_url").text()+"matching/pro_mat",
						dataType:"json",
						success:function(response){
							// alert(response);
							var temp = "<thead></thead>";
							var count = 0;
							var id = $(".get_id").text();
							$.each(response.member,function(key,value){
								if(value.id != id){
								var hash_split = value.info.split(",");
								temp += ` <tr>
							<td>
								<div class="item_div">
									<div class="item_left">
										<div class="item_circle">
											<div class="item_in_circle">
												<img src="${$(".head_url").text()+value.porfile_img}">
											</div>
										</div>
									</div>
									<div class="item_infos">
										<h2>${value.name}</h2>`
										for(var i = 0; i < hash_split.length; i++){
											if(i == 4){
												break;
											}
											temp += `<span>#${hash_split[i]}</span>`;
										}
									temp += `</div>
									<div class="item_porst">`
										$.each(response.port,function(key1,value1){
											if(value.id == value1.portfoilo_id){
												var port_imgarr = value1.portfoilo_img.split(",");
												temp += `<div class="port_wrap">
														<img src="${$(".head_url").text()+"static/userimages/portfoilo/"+port_imgarr[0]}">
													</div>`;
											}
										});
									temp += `
									</div>
									<div class="item_send">
										<button class="send" data-id="${value.id}">제안<br>메세지<br>보내기</button>
									</div>
								</div>
							</td>
						</tr>`;

						count++;
						}
							});
							$(".modal_body_table").html(temp);
							page();
							$(".modal_title > h2").text("매칭결과, "+text+" 총 "+count+"명이 추천되었습니다.")
							$(".project_modal").stop().fadeIn();
						}
					});	
			});
			$(".close_circle").click(function(){
				$(".project_modal").stop().fadeOut();
			});
			$(document).on("click",".send",function(){
				var payer = $(this).attr("data-id");
				var project_name = $(".project_name_input").val();
				var project_info = $(".project_info_input").val();
				$(".reply_input_id").val(payer);
				$(".reply_input_body").val(project_name+"프로젝트를 당신과 함께 하고 싶습니다. 이 프로젝트 는 "+project_info+" 입니다.");
				var input_val = $(".reply_input_body").val();
				$(".replay_count").text(input_val.length);
				$(".reply_modal").stop().fadeIn();

				
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

			$('.reply_success_btn').click(function(){
				var payer = $(".reply_input_id").val();
				var bodytext = $(".reply_input_body").val();

				if(payer == "" || bodytext == ""){
					$.sweetModal({
						content:"빈칸 없이 입력해주세요.",
						icon: $.sweetModal.ICON_ERROR
					});
					return false;
				}
				if(reply_flag == 1){
					$.sweetModal({
						content:"쪽지는 1000자 제한입니다..",
						icon: $.sweetModal.ICON_ERROR
					});
					return false;
				}
				$.ajax({
					type:"POST",
					data:{content:bodytext,payer:payer},
					url:$(".head_url").text()+"matching/project_send",
					success:function(response){
						// alert(response);
						if(response == 1){
							$.sweetModal.confirm('제안 메세지를 쪽지로 보냈습니다.', function() {
								location.reload();
							});
						}else{
							$.sweetModal({
								content:"Error",
								icon: $.sweetModal.ICON_ERROR
							});
							return false;
						}
					}

				});
			});
		});
function page(){ 
var reSortColors = function($table) {
  $('tbody tr:odd td', $table).removeClass('even').removeClass('listtd').addClass('odd');
  $('tbody tr:even td', $table).removeClass('odd').removeClass('listtd').addClass('even');
 };
 $('table.modal_body_table').each(function() {
  var pagesu = 10;  //페이지 번호 갯수
  var currentPage = 0;
  var numPerPage = 4;  //목록의 수
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
   $('<br /><span class="page-number" cursor: "pointer"><i class="fas fa-angle-double-left  icons"></i></span>').bind('click', {newPage: page},function(event) {
          currentPage = 0;   
          $table.trigger('repaginate');  
          $($(".page-number")[2]).addClass('active').siblings().removeClass('active');
      }).appendTo($pager).addClass('clickable');
    // [이전]
      $('<span class="page-number" cursor: "pointer">&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-left icons"></i>&nbsp;</span>').bind('click', {newPage: page},function(event) {
          if(currentPage == 0) return; 
          currentPage = currentPage-1;
    $table.trigger('repaginate'); 
    $($(".page-number")[(currentPage-nowp)+2]).addClass('active').siblings().removeClass('active');
   }).appendTo($pager).addClass('clickable');
    // [1,2,3,4,5,6,7,8]
   for (var page = nowp ; page < endp; page++) {
    $('<span class="page-number numbers" cursor: "pointer" style="margin-left: 8px; "></span>').text(page + 1).bind('click', {newPage: page}, function(event) {
     currentPage = event.data['newPage'];
     $table.trigger('repaginate');
     $($(".page-number")[(currentPage-nowp)+2]).addClass('active').siblings().removeClass('active');
     }).appendTo($pager).addClass('clickable');
   } 
    // [다음]
      $('<span class="page-number" cursor: "pointer">&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-right icons"></i>&nbsp;</span>').bind('click', {newPage: page},function(event) {
    if(currentPage == numPages-1) return;
        currentPage = currentPage+1;
    $table.trigger('repaginate'); 
     $($(".page-number")[(currentPage-nowp)+2]).addClass('active').siblings().removeClass('active');
   }).appendTo($pager).addClass('clickable');
    // [끝]
   $('<span class="page-number" cursor: "pointer">&nbsp;<i class="fas fa-angle-double-right icons"></i></span>').bind('click', {newPage: page},function(event) {
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
function xssthis(origin) {
return origin.replace(/\<|\>|\"|\'|\%|\;|\(|\)|\&|\+|\-/g, "");
}