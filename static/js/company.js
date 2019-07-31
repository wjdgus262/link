$(document).ready(function(){
	// alert("a");
	// alert($(".get_url").text());

	$(".company_search_btn").click(function(){
		// alert("a");
		var serach_data = $(".company_search").val();
		var select = $(".company_list_select option:selected").val();
		// alert(serach_data);
		// 
		if(serach_data == ""){
			$.sweetModal({
							content:"검색어를 입력해주세요.",
							icon: $.sweetModal.ICON_ERROR
						});
						return false;
		}else{
			if(select == "제목"){	
			// http://192.168.20.95/link/company/index?div=cateclick&cate=영상
			location.href=$(".get_url").text()+"company/index?div=search_title&cate="+serach_data+"";
			}else if(select == "기업"){
				location.href=$(".get_url").text()+"company/index?div=search_cmpany&cate="+serach_data+"";
			}
		}
	});

	$(".company_search").keydown(function(key) {
		var serach_data = $(this).val();
		var select = $(".company_list_select option:selected").val();
         if (key.keyCode == 13) {
         // alert("엔터키를 눌렀습니다.");
         	if(serach_data == ""){
			$.sweetModal({
							content:"검색어를 입력해주세요.",
							icon: $.sweetModal.ICON_ERROR
						});
						return false;
			}else{
				if(select == "제목"){	
				// http://192.168.20.95/link/company/index?div=cateclick&cate=영상
				location.href=$(".get_url").text()+"company/index?div=search_title&cate="+serach_data+"";
				}else if(select == "기업"){
					location.href=$(".get_url").text()+"company/index?div=search_cmpany&cate="+serach_data+"";
				}
			}
        }
    });



	// alert("a");
	$(".all").click(function(){
		// alert("a");
		var href = $(this).attr("data-href");
		// alert(href);
		location.href=$(".get_url").text()+"company/index?div=all";
	});

	$(".division").click(function(){
		var href = $(this).attr("data-href");
		// alert(href);
		location.href=$(".get_url").text()+"company/index?div=division";
	});
	$(".date").click(function(){
		var href = $(this).attr("data-href");
		// alert(href);
		location.href=$(".get_url").text()+"company/index?div=date";
	});


	$(".all_label").click(function(){
		if($("#all_check").prop("checked")) {
		 //해당화면에 전체 checkbox들을 체크해준다 
		 $(".company_list_body_bottom input[type=checkbox]").prop("checked",false); 
		 // alert("a");
		 // 전체선택 체크박스가 해제된 경우 
		 } else { 
		 	// alert("b");
		 //해당화면에 모든 checkbox들의 체크를해제시킨다.
		  $(".company_list_body_bottom input[type=checkbox]").prop("checked",true);
		   }

	});

	$(".scrap_btn").click(function(){
		var i =0;
		var check_num = "";
		$(".company_list_body_bottom input[type=checkbox]").each(function(){
			// alert("a");
			if($(this).prop("checked")){
				i++;
				check_num += $(this).attr("data-num") + ",";
			}
		});
		if(i == 0){
			$.sweetModal({
				content:"채용 공고를 하나이상 선택해주세요.",
				icon: $.sweetModal.ICON_ERROR
			});
			return false;
		}else{
			// alert(check_num);
			$.ajax({
				type:"POST",
				url:$(".get_url").text()+"company/update_scarp",
				data:{nums:check_num},
				success:function(response){
					// alert(response);
					if(response == 1){
						$.sweetModal({
							content:"스크랩 성공.",
							icon: $.sweetModal.ICON_SUCCESS
						});
					}else{
						$.sweetModal({
							content:"스크랩 실패.",
							icon: $.sweetModal.ICON_ERROR
						});
					}
				}
			});
		}
		// alert(i);
	});
	$(".likes_company_btn").click(function(){
		var i =0;
		var check_num = "";
		$(".company_list_body_bottom input[type=checkbox]").each(function(){
			// alert("a");
			if($(this).prop("checked")){
				i++;
				check_num += $(this).attr("data-num") + ",";
			}
		});
		if(i == 0){
			$.sweetModal({
				content:"채용 공고를 하나이상 선택해주세요.",
				icon: $.sweetModal.ICON_ERROR
			});
			return false;
		}else{
			$.ajax({
				type:"POST",
				url:$(".get_url").text()+"company/update_company_likes",
				data:{nums:check_num},
				success:function(response){
					// alert(response);
					if(response == 1){
						location.reload();
						// $.sweetModal({
						// 	content:"관심 기업 등록 성공.",
						// 	icon: $.sweetModal.ICON_SUCCESS
						// });
					}else{
						$.sweetModal({
							content:"관심 기업 등록 실패.",
							icon: $.sweetModal.ICON_ERROR
						});
					}
					
				}
			});
		}
	});
	$(".pop_list").click(function(){
		var num = $(this).attr("data-num");
		// alert(num);
		location.href=$(".get_url").text()+"company/company_view?num="+num;
	});
	$(".company_not_login").click(function(){
		$.sweetModal({
				content:"로그인 해주세요.",
				icon: $.sweetModal.ICON_ERROR
			});
			return false;
	});
	$(".company_write").click(function(){
		location.href=$(".get_url").text()+"company/insert_company";
	});
	$(".company_list_item").mouseover(function(){
		$(this).children(".company_list_title").children("p").css("text-decoration","underline");
	});
	$(".company_list_item").mouseleave(function(){
		$(this).children(".company_list_title").children("p").css("text-decoration","none");
	});
	$(".company_list_title").click(function(){
		var url = $(".get_url").text();
		var num = $(this).attr("data-num");
		// alert(num);
		location.href=url+"company/company_view?num="+num;
	});
	
});