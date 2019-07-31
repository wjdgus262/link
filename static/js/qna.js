$(document).ready(function(){
	// alert("a");
	$.ajax({
		type:"POST",
		data:{divs:"전체"},
		dataType:"json",
		url:$(".head_url").text()+"support/get_qna_con",
		success:function(response){
			// alert(response);

			var temp = "<thead></thead>";
			$.each(response,function(key,value){
				// alert(value.num);
				var date = value.qnadate.substring(0,10);
				temp += `<tr class='list_item'>
					<td>
						<div class="list_item_title" data-num="${value.num}">
							<p>${value.qnatitle}</p>
							`;
							if(value.qnacheck == 1){
								temp += `<span class="reply_success">답변완료</span>`;
							}
							

							temp += `<div class="qna_grayline">
							</div>
						</div>
					</td>
					<td>
						<div class="list_item_writer">
							<i class="far fa-user"></i><span>${value.qnawriter}</span>
							<div class="qna_grayline">
							</div>
						</div>
					</td>
					<td>
						<div class="list_item_date">
							<p>${date}</p>
						</div>
					</td>
				</tr>`;
			});
			// alert(temp);
			$(".list_table").html(temp);
			page();
		}
	
	});
	$(".search_right > button").click(function(){
		var text = $(".company_search").val();
		var divs = $(".company_list_select option:selected").val();
		// alert(divs);
		// alert(text);
		if(text == ""){
			$.sweetModal({
				content:"검색어를 입력해주세요",
				icon: $.sweetModal.ICON_ERROR
			});
			return false;
		}else{
			$.ajax({
				type:"POST",
				dataType:"json",
				data:{bodytext:text,divs:divs},
				url:$(".head_url").text()+"support/get_search_qna",
				success:function(response){
					// alert(response);
					if(response == ""){
						$.sweetModal({
							content:"검색결과가 없습니다.",
							icon: $.sweetModal.ICON_ERROR
						});
					}else{
								var temp = "<thead></thead>";
					$.each(response,function(key,value){
						// alert(value.num);
						var date = value.qnadate.substring(0,10);
				temp += `<tr class='list_item'>
					<td>
						<div class="list_item_title" data-num="${value.num}">
							<p>${value.qnatitle}</p>
							`;
							if(value.qnacheck == 1){
								temp += `<span class="reply_success">답변완료</span>`;
							}
							

							temp += `<div class="qna_grayline">
							</div>
						</div>
					</td>
					<td>
						<div class="list_item_writer">
							<i class="far fa-user"></i><span>${value.qnawriter}</span>
							<div class="qna_grayline">
							</div>
						</div>
					</td>
					<td>
						<div class="list_item_date">
							<p>${date}</p>
						</div>
					</td>
				</tr>`;
					});
					$(".list_table").html(temp);
			page();
					}
			
				}
			});
		}
		
	});
	$(".company_search").keydown(function(key) {
        if (key.keyCode == 13) {
        	var text = $(this).val();
		var divs = $(".company_list_select option:selected").val();
		// alert(divs);
		// alert(text);
		if(text == ""){
			$.sweetModal({
				content:"검색어를 입력해주세요",
				icon: $.sweetModal.ICON_ERROR
			});
			return false;
		}else{
			$.ajax({
				type:"POST",
				dataType:"json",
				data:{bodytext:text,divs:divs},
				url:$(".head_url").text()+"support/get_search_qna",
				success:function(response){
					// alert(response);
					if(response == ""){
						$.sweetModal({
							content:"검색결과가 없습니다.",
							icon: $.sweetModal.ICON_ERROR
						});
					}else{
								var temp = "<thead></thead>";
					$.each(response,function(key,value){
						var date = value.qnadate.substring(0,10);
				temp += `<tr class='list_item'>
					<td>
						<div class="list_item_title" data-num="${value.num}">
							<p>${value.qnatitle}</p>
							`;
							if(value.qnacheck == 1){
								temp += `<span class="reply_success">답변완료</span>`;
							}
							

							temp += `<div class="qna_grayline">
							</div>
						</div>
					</td>
					<td>
						<div class="list_item_writer">
							<i class="far fa-user"></i><span>${value.qnawriter}</span>
							<div class="qna_grayline">
							</div>
						</div>
					</td>
					<td>
						<div class="list_item_date">
							<p>${date}</p>
						</div>
					</td>
				</tr>`;
					});
					$(".list_table").html(temp);
			page();
					}
			
				}
			});
		}
        }
    });
    $(".search_cate").click(function(){
    	var cate = $(this).text();
    	// alert($.trim(cate));
    	$(".search_cate").css("border-bottom","2px solid #dddddd");
    	$(this).css("border-bottom","none");
    	$.ajax({
		type:"POST",
		data:{divs:$.trim(cate)},
		dataType:"json",
		url:$(".head_url").text()+"support/get_qna_con",
		success:function(response){
			// alert(response);

			var temp = "<thead></thead>";
			$.each(response,function(key,value){
				// alert(value.num);
				var date = value.qnadate.substring(0,10);
				temp += `<tr class='list_item'>
					<td>
						<div class="list_item_title" data-num="${value.num}">
							<p>${value.qnatitle}</p>
							`;
							if(value.qnacheck == 1){
								temp += `<span class="reply_success">답변완료</span>`;
							}
							

							temp += `<div class="qna_grayline">
							</div>
						</div>
					</td>
					<td>
						<div class="list_item_writer">
							<i class="far fa-user"></i><span>${value.qnawriter}</span>
							<div class="qna_grayline">
							</div>
						</div>
					</td>
					<td>
						<div class="list_item_date">
							<p>${date}</p>
						</div>
					</td>
				</tr>`;
			});
			// alert(temp);
			$(".list_table").html(temp);
			page();
		}
	
	});

    });
    $(".reponse_gogo").click(function(){
    	// alert("a");
    	$('html, body').stop().animate( { scrollTop : '1000' } );
    });
    $(".login_qna_start").click(function(){
    	$(".login_modal").stop().fadeIn();
    });
    $(document).on("click",".list_item_title",function(){
    	// alert("a");
    	var num = $(this).attr("data-num");
    	// alert(num);
    	location.href=$(".head_url").text()+"support/qnaview?num="+num;
    });



    	$(".qna_gogo").click(function(){
    		location.href=$(".head_url").text()+"support/qnawriter";
    	});	
	 	$(".qna_write").click(function(){
	 		location.href=$(".head_url").text()+"support/qnawriter";
	 		// alert("a");
	 	});
});	
function page(){ 
var reSortColors = function($table) {
  $('tbody tr:odd td', $table).removeClass('even').removeClass('listtd').addClass('odd');
  $('tbody tr:even td', $table).removeClass('odd').removeClass('listtd').addClass('even');
 };
 $('table.list_table').each(function() {
  var pagesu = 10;  //페이지 번호 갯수
  var currentPage = 0;
  var numPerPage = 15;  //목록의 수
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