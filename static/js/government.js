$(document).ready(function(){
		// alert($(".head_url").text());
		var url = $(".head_url").text();
		$.ajax({
			type:"POST",
			dataType:"json",
			data:{divs:"all"},
			url:url+"support/gove_view",
			success:function(response){
				// alert(response);
				var i = 0;
				var temp = "<thead></thead>";
				$.each(response,function(key,value){
					// i++;
					temp += `<tr>
								<td class="item_logo">
									<div class="gove_item_logo">`;
										if(value.area == "서울"){
											temp += `<img src="${url}static/images/logos/soeul.png" alt="img">`;
										}else if(value.area == "부산"){
											temp += `<img src="${url}static/images/logos/busan.png" alt="img">`;
										}else if(value.area == "대구"){
											temp += `<img src="${url}static/images/logos/dego.png" alt="img">`;
										}else if(value.area == "인천"){
											temp += `<img src="${url}static/images/logos/in.png" alt="img">`;
										}else if(value.area == "광주"){
											temp += `<img src="${url}static/images/logos/gung.png" alt="img">`;
										}else if(value.area == "대전"){
											temp += `<img src="${url}static/images/logos/dejun.png" alt="img">`;
										}else if(value.area == "울산"){
											temp += `<img src="${url}static/images/logos/san.png" alt="img">`;
										}else if(value.area == "세종"){
											temp += `<img src="${url}static/images/logos/sejung.jpg" alt="img">`;
										}else if(value.area == "경기도"){
											temp += `<img style='width:30%; margin-left:10px;' src="${url}static/images/logos/gi.png" alt="img">`;
										}else if(value.area == "강원도"){
											temp += `<img src="${url}static/images/logos/gang.png" alt="img">`;
										}else if(value.area == "충청북도"){
											temp += `<img src="${url}static/images/logos/congno.png" alt="img">`;
										}else if(value.area == "충청남도"){
											temp += `<img src="${url}static/images/logos/cong_s.png" alt="img">`;
										}else if(value.area == "전라북도"){
											temp += `<img src="${url}static/images/logos/junla.png" alt="img">`;
										}else if(value.area == "전라남도"){
											temp += `<img src="${url}static/images/logos/juns.png" alt="img">`;
										}else if(value.area == "경상북도"){
											temp += `<img src="${url}static/images/logos/giup.png" alt="img">`;
										}else if(value.area == "경상남도"){
											temp += `<img src="${url}static/images/logos/giups.png" alt="img">`;
										}else if(value.area == "제주도"){
											temp += `<img src="${url}static/images/logos/jeju.png" alt="img">`;
										}
									temp += `</div>
								</td>
								<td class="item_title">
									<div class="gove_item_title"  data-url="${value.url}" data-num="${value.num}">
										<p>${value.name}</p>
									</div>
								</td>
								<td class="item_divis">
									<div class="gove_item_divis">
										<p>${value.person}</p>
										<div class="company_gray_line">
												</div>
									</div>
								</td>
								<td class="item_info">
									<div class="company_list_info_two">
										<div class="info_two_top">
											<i class="fas fa-user"></i><span>${value.gove_option}</span>
										</div>
										<div class="info_two_bottom">
											<i class="fas fa-map-marker-alt"></i><span>${value.area}</span>
										</div>
										<div class="company_gray_line">
										</div>
										<div class="company_gray_line">
										</div>
									</div>
								</td>
								<td class="item_dates">
									<div class="item_date">
										<div class="gove_date">
											<p>${value.end_date}</p>
										</div>
									</div>
								</td>
							</tr>
 `;
				});
			 	$(".gove_table").html(temp);
				page();
				// alert(i);
			}
		});
		$(".gove_cate_item").click(function(){
			var data = $(this).children("p").text();
			$(".gove_table").html("");
			$.ajax({
			type:"POST",
			dataType:"json",
			data:{divs:"person",data:data},
			url:url+"support/gove_view",
			success:function(response){
				// alert(response);
				var i = 0;
				var temp = "<thead></thead>";
				$.each(response,function(key,value){
					// i++;
					temp += `<tr>
								<td class="item_logo">
									<div class="gove_item_logo">`;
										if(value.area == "서울"){
											temp += `<img src="${url}static/images/logos/soeul.png" alt="img">`;
										}else if(value.area == "부산"){
											temp += `<img src="${url}static/images/logos/busan.png" alt="img">`;
										}else if(value.area == "대구"){
											temp += `<img src="${url}static/images/logos/dego.png" alt="img">`;
										}else if(value.area == "인천"){
											temp += `<img src="${url}static/images/logos/in.png" alt="img">`;
										}else if(value.area == "광주"){
											temp += `<img src="${url}static/images/logos/gung.png" alt="img">`;
										}else if(value.area == "대전"){
											temp += `<img src="${url}static/images/logos/dejun.png" alt="img">`;
										}else if(value.area == "울산"){
											temp += `<img src="${url}static/images/logos/san.png" alt="img">`;
										}else if(value.area == "세종"){
											temp += `<img src="${url}static/images/logos/sejung.jpg" alt="img">`;
										}else if(value.area == "경기도"){
											temp += `<img style='width:30%; margin-left:10px;' src="${url}static/images/logos/gi.png" alt="img">`;
										}else if(value.area == "강원도"){
											temp += `<img src="${url}static/images/logos/gang.png" alt="img">`;
										}else if(value.area == "충청북도"){
											temp += `<img src="${url}static/images/logos/congno.png" alt="img">`;
										}else if(value.area == "충청남도"){
											temp += `<img src="${url}static/images/logos/cong_s.png" alt="img">`;
										}else if(value.area == "전라북도"){
											temp += `<img src="${url}static/images/logos/junla.png" alt="img">`;
										}else if(value.area == "전라남도"){
											temp += `<img src="${url}static/images/logos/juns.png" alt="img">`;
										}else if(value.area == "경상북도"){
											temp += `<img src="${url}static/images/logos/giup.png" alt="img">`;
										}else if(value.area == "경상남도"){
											temp += `<img src="${url}static/images/logos/giups.png" alt="img">`;
										}else if(value.area == "제주도"){
											temp += `<img src="${url}static/images/logos/jeju.png" alt="img">`;
										}
									temp += `</div>
								</td>
								<td class="item_title">
									<div class="gove_item_title"  data-url="${value.url}" data-num="${value.num}">
										<p>${value.name}</p>
									</div>
								</td>
								<td class="item_divis">
									<div class="gove_item_divis">
										<p>${value.person}</p>
										<div class="company_gray_line">
												</div>
									</div>
								</td>
								<td class="item_info">
									<div class="company_list_info_two">
										<div class="info_two_top">
											<i class="fas fa-user"></i><span>${value.gove_option}</span>
										</div>
										<div class="info_two_bottom">
											<i class="fas fa-map-marker-alt"></i><span>${value.area}</span>
										</div>
										<div class="company_gray_line">
										</div>
										<div class="company_gray_line">
										</div>
									</div>
								</td>
								<td class="item_dates">
									<div class="item_date">
										<div class="gove_date">
											<p>${value.end_date}</p>
										</div>
									</div>
								</td>
							</tr>
 `;
				});
			 	$(".gove_table").html(temp);
				page();
				var offset = $(".gove_list_body").offset();
        $('html, body').animate({scrollTop : offset.top-200}, 400);
				// alert(i);
			}
		});
		});
		$(".gove_area_right > span").click(function(){
			var data = $(this).attr("data-area");
			$(".gove_table").html("");
			$.ajax({
			type:"POST",
			dataType:"json",
			data:{divs:"area",data:data},
			url:url+"support/gove_view",
			success:function(response){
				// alert(response);
				var i = 0;
				var temp = "<thead></thead>";
				$.each(response,function(key,value){
					// i++;
					temp += `<tr>
								<td class="item_logo">
									<div class="gove_item_logo">`;
										if(value.area == "서울"){
											temp += `<img src="${url}static/images/logos/soeul.png" alt="img">`;
										}else if(value.area == "부산"){
											temp += `<img src="${url}static/images/logos/busan.png" alt="img">`;
										}else if(value.area == "대구"){
											temp += `<img src="${url}static/images/logos/dego.png" alt="img">`;
										}else if(value.area == "인천"){
											temp += `<img src="${url}static/images/logos/in.png" alt="img">`;
										}else if(value.area == "광주"){
											temp += `<img src="${url}static/images/logos/gung.png" alt="img">`;
										}else if(value.area == "대전"){
											temp += `<img src="${url}static/images/logos/dejun.png" alt="img">`;
										}else if(value.area == "울산"){
											temp += `<img src="${url}static/images/logos/san.png" alt="img">`;
										}else if(value.area == "세종"){
											temp += `<img src="${url}static/images/logos/sejung.jpg" alt="img">`;
										}else if(value.area == "경기도"){
											temp += `<img style='width:30%; margin-left:10px;' src="${url}static/images/logos/gi.png" alt="img">`;
										}else if(value.area == "강원도"){
											temp += `<img src="${url}static/images/logos/gang.png" alt="img">`;
										}else if(value.area == "충청북도"){
											temp += `<img src="${url}static/images/logos/congno.png" alt="img">`;
										}else if(value.area == "충청남도"){
											temp += `<img src="${url}static/images/logos/cong_s.png" alt="img">`;
										}else if(value.area == "전라북도"){
											temp += `<img src="${url}static/images/logos/junla.png" alt="img">`;
										}else if(value.area == "전라남도"){
											temp += `<img src="${url}static/images/logos/juns.png" alt="img">`;
										}else if(value.area == "경상북도"){
											temp += `<img src="${url}static/images/logos/giup.png" alt="img">`;
										}else if(value.area == "경상남도"){
											temp += `<img src="${url}static/images/logos/giups.png" alt="img">`;
										}else if(value.area == "제주도"){
											temp += `<img src="${url}static/images/logos/jeju.png" alt="img">`;
										}
									temp += `</div>
								</td>
								<td class="item_title">
									<div class="gove_item_title"  data-url="${value.url}" data-num="${value.num}">
										<p>${value.name}</p>
									</div>
								</td>
								<td class="item_divis">
									<div class="gove_item_divis">
										<p>${value.person}</p>
										<div class="company_gray_line">
												</div>
									</div>
								</td>
								<td class="item_info">
									<div class="company_list_info_two">
										<div class="info_two_top">
											<i class="fas fa-user"></i><span>${value.gove_option}</span>
										</div>
										<div class="info_two_bottom">
											<i class="fas fa-map-marker-alt"></i><span>${value.area}</span>
										</div>
										<div class="company_gray_line">
										</div>
										<div class="company_gray_line">
										</div>
									</div>
								</td>
								<td class="item_dates">
									<div class="item_date">
										<div class="gove_date">
											<p>${value.end_date}</p>
										</div>
									</div>
								</td>
							</tr>
 `;
				});
			 	$(".gove_table").html(temp);
				page();
				// alert(i);
			}
		});
		});
		$(".gove_search_btn").click(function(){
			var data = $(".gove_search").val();
			// alert(data);
			var divs = $(".gove_list_select option:selected").val();
			$(".gove_table").html("");
			$.ajax({
			type:"POST",
			dataType:"json",
			data:{divs:divs,data:data},
			url:url+"support/gove_view",
			success:function(response){
				// alert(response);
				var i = 0;
				var temp = "<thead></thead>";
				$.each(response,function(key,value){
					// i++;
					temp += `<tr>
								<td class="item_logo">
									<div class="gove_item_logo">`;
										if(value.area == "서울"){
											temp += `<img src="${url}static/images/logos/soeul.png" alt="img">`;
										}else if(value.area == "부산"){
											temp += `<img src="${url}static/images/logos/busan.png" alt="img">`;
										}else if(value.area == "대구"){
											temp += `<img src="${url}static/images/logos/dego.png" alt="img">`;
										}else if(value.area == "인천"){
											temp += `<img src="${url}static/images/logos/in.png" alt="img">`;
										}else if(value.area == "광주"){
											temp += `<img src="${url}static/images/logos/gung.png" alt="img">`;
										}else if(value.area == "대전"){
											temp += `<img src="${url}static/images/logos/dejun.png" alt="img">`;
										}else if(value.area == "울산"){
											temp += `<img src="${url}static/images/logos/san.png" alt="img">`;
										}else if(value.area == "세종"){
											temp += `<img src="${url}static/images/logos/sejung.jpg" alt="img">`;
										}else if(value.area == "경기도"){
											temp += `<img style='width:30%; margin-left:10px;' src="${url}static/images/logos/gi.png" alt="img">`;
										}else if(value.area == "강원도"){
											temp += `<img src="${url}static/images/logos/gang.png" alt="img">`;
										}else if(value.area == "충청북도"){
											temp += `<img src="${url}static/images/logos/congno.png" alt="img">`;
										}else if(value.area == "충청남도"){
											temp += `<img src="${url}static/images/logos/cong_s.png" alt="img">`;
										}else if(value.area == "전라북도"){
											temp += `<img src="${url}static/images/logos/junla.png" alt="img">`;
										}else if(value.area == "전라남도"){
											temp += `<img src="${url}static/images/logos/juns.png" alt="img">`;
										}else if(value.area == "경상북도"){
											temp += `<img src="${url}static/images/logos/giup.png" alt="img">`;
										}else if(value.area == "경상남도"){
											temp += `<img src="${url}static/images/logos/giups.png" alt="img">`;
										}else if(value.area == "제주도"){
											temp += `<img src="${url}static/images/logos/jeju.png" alt="img">`;
										}
									temp += `</div>
								</td>
								<td class="item_title">
									<div class="gove_item_title"  data-url="${value.url}" data-num="${value.num}">
										<p>${value.name}</p>
									</div>
								</td>
								<td class="item_divis">
									<div class="gove_item_divis">
										<p>${value.person}</p>
										<div class="company_gray_line">
												</div>
									</div>
								</td>
								<td class="item_info">
									<div class="company_list_info_two">
										<div class="info_two_top">
											<i class="fas fa-user"></i><span>${value.gove_option}</span>
										</div>
										<div class="info_two_bottom">
											<i class="fas fa-map-marker-alt"></i><span>${value.area}</span>
										</div>
										<div class="company_gray_line">
										</div>
										<div class="company_gray_line">
										</div>
									</div>
								</td>
								<td class="item_dates">
									<div class="item_date">
										<div class="gove_date">
											<p>${value.end_date}</p>
										</div>
									</div>
								</td>
							</tr>
 `;
				});
			 	$(".gove_table").html(temp);
				page();
				// alert(i);
			}
		});
		});
		$(".gove_search").keydown(function(key) {
                if (key.keyCode == 13) {
                    var data = $(this).val();
			// alert(data);
			var divs = $(".gove_list_select option:selected").val();
			$(".gove_table").html("");
			$.ajax({
			type:"POST",
			dataType:"json",
			data:{divs:divs,data:data},
			url:url+"support/gove_view",
			success:function(response){
				// alert(response);
				var i = 0;
				var temp = "<thead></thead>";
				$.each(response,function(key,value){
					// i++;
					temp += `<tr>
								<td class="item_logo">
									<div class="gove_item_logo">`;
										if(value.area == "서울"){
											temp += `<img src="${url}static/images/logos/soeul.png" alt="img">`;
										}else if(value.area == "부산"){
											temp += `<img src="${url}static/images/logos/busan.png" alt="img">`;
										}else if(value.area == "대구"){
											temp += `<img src="${url}static/images/logos/dego.png" alt="img">`;
										}else if(value.area == "인천"){
											temp += `<img src="${url}static/images/logos/in.png" alt="img">`;
										}else if(value.area == "광주"){
											temp += `<img src="${url}static/images/logos/gung.png" alt="img">`;
										}else if(value.area == "대전"){
											temp += `<img src="${url}static/images/logos/dejun.png" alt="img">`;
										}else if(value.area == "울산"){
											temp += `<img src="${url}static/images/logos/san.png" alt="img">`;
										}else if(value.area == "세종"){
											temp += `<img src="${url}static/images/logos/sejung.jpg" alt="img">`;
										}else if(value.area == "경기도"){
											temp += `<img style='width:30%; margin-left:10px;' src="${url}static/images/logos/gi.png" alt="img">`;
										}else if(value.area == "강원도"){
											temp += `<img src="${url}static/images/logos/gang.png" alt="img">`;
										}else if(value.area == "충청북도"){
											temp += `<img src="${url}static/images/logos/congno.png" alt="img">`;
										}else if(value.area == "충청남도"){
											temp += `<img src="${url}static/images/logos/cong_s.png" alt="img">`;
										}else if(value.area == "전라북도"){
											temp += `<img src="${url}static/images/logos/junla.png" alt="img">`;
										}else if(value.area == "전라남도"){
											temp += `<img src="${url}static/images/logos/juns.png" alt="img">`;
										}else if(value.area == "경상북도"){
											temp += `<img src="${url}static/images/logos/giup.png" alt="img">`;
										}else if(value.area == "경상남도"){
											temp += `<img src="${url}static/images/logos/giups.png" alt="img">`;
										}else if(value.area == "제주도"){
											temp += `<img src="${url}static/images/logos/jeju.png" alt="img">`;
										}
									temp += `</div>
								</td>
								<td class="item_title">
									<div class="gove_item_title"  data-url="${value.url}" data-num="${value.num}">
										<p>${value.name}</p>
									</div>
								</td>
								<td class="item_divis">
									<div class="gove_item_divis">
										<p>${value.person}</p>
										<div class="company_gray_line">
												</div>
									</div>
								</td>
								<td class="item_info">
									<div class="company_list_info_two">
										<div class="info_two_top">
											<i class="fas fa-user"></i><span>${value.gove_option}</span>
										</div>
										<div class="info_two_bottom">
											<i class="fas fa-map-marker-alt"></i><span>${value.area}</span>
										</div>
										<div class="company_gray_line">
										</div>
										<div class="company_gray_line">
										</div>
									</div>
								</td>
								<td class="item_dates">
									<div class="item_date">
										<div class="gove_date">
											<p>${value.end_date}</p>
										</div>
									</div>
								</td>
							</tr>
 `;
				});
			 	$(".gove_table").html(temp);
				page();
				// alert(i);
			}
		});
                }
           });

		$(document).on("click",".gove_item_title",function(){
			var a_url = $(this).attr("data-url");
			// alert(url);
			var num = $(this).attr('data-num');
			// alert(num);
			$.ajax({
				type:"POST",
				data:{num:num},
				url:url+"support/gove_count",
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
		$(document).on("click",".gove_top_item",function(){
			var a_url = $(this).attr("data-url");
			// alert(url);
			var num = $(this).attr('data-num');
			// alert(num);
			$.ajax({
				type:"POST",
				data:{num:num},
				url:url+"support/gove_count",
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