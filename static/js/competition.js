$(document).ready(function(){
		var url = $(".head_url").text();
		$.ajax({
			type:"POST",
			url:$(".head_url").text()+"support/get_com",
			data:{divs:"all"},
			dataType:"json",
			success:function(response){
				// alert(response);
				var now = new Date().format("yyyy-MM-dd");
				// alert(now);
				var start_array = now.split("-");
				var start_date = new Date(start_array[0],Number(start_array[1])-1,start_array[2]);
				// alert(start_date);
				$.each(response,function(key,value){
					var end_array = value.enddate.split("-");
					var end_date = new Date(end_array[0],Number(end_array[1])-1,end_array[2]);
					var between = (end_date.getTime() - start_date.getTime())/1000/60/60/24;
					var reward_array = value.reward.split(",");
					var item = `<div class="com_item" data-url="${value.a_url}" data-num="${value.num}"> 
							<div class="com_item_wrap">
								<div class="com_item_img"> 
									<img src="${url}${value.img}" alt="img">
								</div>
								<div class="com_item_info">
									<div class="info_div_com">
										<div class="info_div_title">
											<p>분야</p>
										</div>
										<div class="info_div_body">
											<p>${value.cate}</p>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>응모대상</p>
										</div>
										<div class="info_div_body">
											<p>${value.object}</p>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>주최/주관</p>
										</div>
										<div class="info_div_body">
											<p>${value.host}</p>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>접수기간</p>
										</div>
										<div class="info_div_body">
											<p>${value.startdate} ~ ${value.enddate}</p><span>D-${between}</span>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>수상작 발표</p>
										</div>
										<div class="info_div_body">
											<p>${value.annou}</span>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>총 상금</p>
										</div>
										<div class="info_div_body">
											<p>${reward_array[0]}</span>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>1등 상금</p>
										</div>
										<div class="info_div_body">
											<p>${reward_array[1]}</span>
										</div>
									</div>
									<div class="info_div_com ">
										<div class="info_div_title">
											<p>홈페이지</p>
										</div>
										<div class="info_div_body url_div">
											<p>${value.cu_url}</p>
										</div>
									</div>
								</div>
							</div>
						</div>`;
						$(".com_list_body").append(item);;
				});
			}
		});
	$(".company_ul > li").click(function(){
		var cate = $(this).attr("data-cate");
		$(".com_list_body >.com_item").remove();
		$.ajax({
			type:"POST",
			url:$(".head_url").text()+"support/get_com",
			data:{divs:"cateclick",keyward:cate},
			dataType:"json",
			success:function(response){
				// alert(response);
				var now = new Date().format("yyyy-MM-dd");
				// alert(now);
				var start_array = now.split("-");
				var start_date = new Date(start_array[0],Number(start_array[1])-1,start_array[2]);
				// alert(start_date);
				$.each(response,function(key,value){
					var end_array = value.enddate.split("-");
					var end_date = new Date(end_array[0],Number(end_array[1])-1,end_array[2]);
					var between = (end_date.getTime() - start_date.getTime())/1000/60/60/24;
					var reward_array = value.reward.split(",");
					var item = `<div class="com_item" data-url="${value.a_url}" data-num="${value.num}"> 
							<div class="com_item_wrap">
								<div class="com_item_img"> 
									<img src="${url}${value.img}" alt="img">
								</div>
								<div class="com_item_info">
									<div class="info_div_com">
										<div class="info_div_title">
											<p>분야</p>
										</div>
										<div class="info_div_body">
											<p>${value.cate}</p>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>응모대상</p>
										</div>
										<div class="info_div_body">
											<p>${value.object}</p>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>주최/주관</p>
										</div>
										<div class="info_div_body">
											<p>${value.host}</p>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>접수기간</p>
										</div>
										<div class="info_div_body">
											<p>${value.startdate} ~ ${value.enddate}</p><span>D-${between}</span>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>수상작 발표</p>
										</div>
										<div class="info_div_body">
											<p>${value.annou}</span>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>총 상금</p>
										</div>
										<div class="info_div_body">
											<p>${reward_array[0]}</span>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>1등 상금</p>
										</div>
										<div class="info_div_body">
											<p>${reward_array[1]}</span>
										</div>
									</div>
									<div class="info_div_com ">
										<div class="info_div_title">
											<p>홈페이지</p>
										</div>
										<div class="info_div_body url_div">
											<p>${value.cu_url}</p>
										</div>
									</div>
								</div>
							</div>
						</div>`;
						$(".com_list_body").append(item);;
				});
				var offset = $(".com_list_body").offset();
        		$('html, body').animate({scrollTop : offset.top-120}, 400);
			}
		});
	});
	$(".com_search_btn").click(function(){
		var cate = $(".com_search").val();
		var select = $(".com_list_select option:selected").val();
		// alert(cate);
		$(".com_list_body >.com_item").remove();
		$.ajax({
			type:"POST",
			url:$(".head_url").text()+"support/get_com",
			data:{divs:"search",keyward:cate,select:select},
			dataType:"json",
			success:function(response){
				// alert(response);
				var now = new Date().format("yyyy-MM-dd");
				// alert(now);
				var start_array = now.split("-");
				var start_date = new Date(start_array[0],Number(start_array[1])-1,start_array[2]);
				// alert(start_date);
				$.each(response,function(key,value){
					var end_array = value.enddate.split("-");
					var end_date = new Date(end_array[0],Number(end_array[1])-1,end_array[2]);
					var between = (end_date.getTime() - start_date.getTime())/1000/60/60/24;
					var reward_array = value.reward.split(",");
					var item = `<div class="com_item" data-url="${value.a_url}" data-num="${value.num}"> 
							<div class="com_item_wrap">
								<div class="com_item_img"> 
									<img src="${url}${value.img}" alt="img">
								</div>
								<div class="com_item_info">
									<div class="info_div_com">
										<div class="info_div_title">
											<p>분야</p>
										</div>
										<div class="info_div_body">
											<p>${value.cate}</p>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>응모대상</p>
										</div>
										<div class="info_div_body">
											<p>${value.object}</p>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>주최/주관</p>
										</div>
										<div class="info_div_body">
											<p>${value.host}</p>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>접수기간</p>
										</div>
										<div class="info_div_body">
											<p>${value.startdate} ~ ${value.enddate}</p><span>D-${between}</span>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>수상작 발표</p>
										</div>
										<div class="info_div_body">
											<p>${value.annou}</span>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>총 상금</p>
										</div>
										<div class="info_div_body">
											<p>${reward_array[0]}</span>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>1등 상금</p>
										</div>
										<div class="info_div_body">
											<p>${reward_array[1]}</span>
										</div>
									</div>
									<div class="info_div_com ">
										<div class="info_div_title">
											<p>홈페이지</p>
										</div>
										<div class="info_div_body url_div">
											<p>${value.cu_url}</p>
										</div>
									</div>
								</div>
							</div>
						</div>`;
						$(".com_list_body").append(item);;
				});
			}
		});
	});
	 $(".com_search").keydown(function(key) {
        if (key.keyCode == 13) {
        	var cate = $(this).val();
		var select = $(".com_list_select option:selected").val();
		// alert(cate);
		$(".com_list_body >.com_item").remove();
		$.ajax({
			type:"POST",
			url:$(".head_url").text()+"support/get_com",
			data:{divs:"search",keyward:cate,select:select},
			dataType:"json",
			success:function(response){
				// alert(response);
				var now = new Date().format("yyyy-MM-dd");
				// alert(now);
				var start_array = now.split("-");
				var start_date = new Date(start_array[0],Number(start_array[1])-1,start_array[2]);
				// alert(start_date);
				$.each(response,function(key,value){
					var end_array = value.enddate.split("-");
					var end_date = new Date(end_array[0],Number(end_array[1])-1,end_array[2]);
					var between = (end_date.getTime() - start_date.getTime())/1000/60/60/24;
					var reward_array = value.reward.split(",");
					var item = `<div class="com_item" data-url="${value.a_url}" data-num="${value.num}"> 
							<div class="com_item_wrap">
								<div class="com_item_img"> 
									<img src="${url}${value.img}" alt="img">
								</div>
								<div class="com_item_info">
									<div class="info_div_com">
										<div class="info_div_title">
											<p>분야</p>
										</div>
										<div class="info_div_body">
											<p>${value.cate}</p>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>응모대상</p>
										</div>
										<div class="info_div_body">
											<p>${value.object}</p>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>주최/주관</p>
										</div>
										<div class="info_div_body">
											<p>${value.host}</p>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>접수기간</p>
										</div>
										<div class="info_div_body">
											<p>${value.startdate} ~ ${value.enddate}</p><span>D-${between}</span>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>수상작 발표</p>
										</div>
										<div class="info_div_body">
											<p>${value.annou}</span>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>총 상금</p>
										</div>
										<div class="info_div_body">
											<p>${reward_array[0]}</span>
										</div>
									</div>
									<div class="info_div_com">
										<div class="info_div_title">
											<p>1등 상금</p>
										</div>
										<div class="info_div_body">
											<p>${reward_array[1]}</span>
										</div>
									</div>
									<div class="info_div_com ">
										<div class="info_div_title">
											<p>홈페이지</p>
										</div>
										<div class="info_div_body url_div">
											<p>${value.cu_url}</p>
										</div>
									</div>
								</div>
							</div>
						</div>`;
						$(".com_list_body").append(item);;
				});
			}
		});
        }
    });
	 $(".com_top_item").mouseover(function(){
	 	// alert("a");
	 	$(this).children(".com_top_info").stop().fadeIn();
	 });
	 $(".com_top_item").mouseleave(function(){
	 	// alert("a");
	 	$(this).children(".com_top_info").stop().fadeOut();
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
	 $(document).on("click",".com_item",function(){
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

	 $(window).scroll(function(){
	 	var scrollValue = $(document).scrollTop();
	 	if(scrollValue > 2000){
	 		// alert("a");
	 		$(".up_circle").stop().fadeIn();
	 	}else{
	 		$(".up_circle").stop().fadeOut();
	 	}
	 });
	 $(".up_circle").click(function(){
	 	$('html, body').stop().animate( { scrollTop : 0 },500 );
	 });
});
function page(){ 
var reSortColors = function($table) {
  $('tbody tr:odd td', $table).removeClass('even').removeClass('listtd').addClass('odd');
  $('tbody tr:even td', $table).removeClass('odd').removeClass('listtd').addClass('even');
 };
 $('table.com_list_table').each(function() {
  var pagesu = 10;  //페이지 번호 갯수
  var currentPage = 0;
  var numPerPage = 10;  //목록의 수
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
   $('<br /><span class="page-number span_btn" cursor: "pointer"><i class="fas fa-angle-double-left  icons"></i></span>').bind('click', {newPage: page},function(event) {
          currentPage = 0;   
          $table.trigger('repaginate');  
          $($(".page-number")[2]).addClass('active').siblings().removeClass('active');
      }).appendTo($pager).addClass('clickable');
    // [이전]
      $('<span class="page-number span_btn" cursor: "pointer">&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-left icons"></i>&nbsp;</span>').bind('click', {newPage: page},function(event) {
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
      $('<span class="page-number span_btn" cursor: "pointer">&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-right icons"></i>&nbsp;</span>').bind('click', {newPage: page},function(event) {
    if(currentPage == numPages-1) return;
        currentPage = currentPage+1;
    $table.trigger('repaginate'); 
     $($(".page-number")[(currentPage-nowp)+2]).addClass('active').siblings().removeClass('active');
   }).appendTo($pager).addClass('clickable');
    // [끝]
   $('<span class="page-number span_btn" cursor: "pointer">&nbsp;<i class="fas fa-angle-double-right icons"></i></span>').bind('click', {newPage: page},function(event) {
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
Date.prototype.format = function(f) {
    if (!this.valueOf()) return " ";
 
    var weekName = ["일요일", "월요일", "화요일", "수요일", "목요일", "금요일", "토요일"];
    var d = this;
     
    return f.replace(/(yyyy|yy|MM|dd|E|hh|mm|ss|a\/p)/gi, function($1) {
        switch ($1) {
            case "yyyy": return d.getFullYear();
            case "yy": return (d.getFullYear() % 1000).zf(2);
            case "MM": return (d.getMonth() + 1).zf(2);
            case "dd": return d.getDate().zf(2);
            case "E": return weekName[d.getDay()];
            case "HH": return d.getHours().zf(2);
            case "hh": return ((h = d.getHours() % 12) ? h : 12).zf(2);
            case "mm": return d.getMinutes().zf(2);
            case "ss": return d.getSeconds().zf(2);
            case "a/p": return d.getHours() < 12 ? "오전" : "오후";
            default: return $1;
        }
    });
};
 
String.prototype.string = function(len){var s = '', i = 0; while (i++ < len) { s += this; } return s;};
String.prototype.zf = function(len){return "0".string(len - this.length) + this;};
Number.prototype.zf = function(len){return this.toString().zf(len);};