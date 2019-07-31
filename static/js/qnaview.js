$(document).ready(function(){
	
			// $.ajax({
			// 	type:"POST",
			// 	data:{num:num},
			// 	url:$(".head_url").text()+"support/qna_count",
			// 	success:function(response){
			// 		// alert(response);
			// 	}
			// });

	$(".a_success").click(function(){
		// alert("a");
		var num = $(".view_num").text();
		var contents = $(".a_input").val();
		if(contents == ""){
			$.sweetModal({
				content:"답변 내용을 입력해주세요.",
				icon: $.sweetModal.ICON_ERROR
			});
		}else{
			$.ajax({
				type:"POST",
				data:{num:num,contents:contents},
				url:$(".head_url").text()+"support/insert_qnareply",
				success:function(response){
					// alert(response);
					if(response == 1){
						location.reload();
					}else{
						$.sweetModal({
							content:"답변 내용 에러.",
							icon: $.sweetModal.ICON_ERROR
						});
					}
				}
			});
		}
	});
	$(".a_delete").click(function(){
		var num = $(this).attr("data-num");
		$.sweetModal.confirm('정말로 답변을 삭제하시겠습니까?', function() {
			$.ajax({
				type:"POST",
				data:{num:num},
				url:$(".head_url").text()+"support/qna_reply_delete",
				success:function(response){
					if(response == 1){
						location.reload();
					}else{
						$.sweetModal({
							content:"삭제 에러.",
							icon: $.sweetModal.ICON_ERROR
						});
					}
				}
			});
		});
	});
	$(".a_good").click(function(){
		var num = $(".view_num").text();
		var replynum = $(this).attr("data-num");
		var name = $(this).parent("div").parent("div").children(".list_item_top").children(".list_item_left").children("h1").text();
		var nameattr = name.split(" ");
		// alert(nameattr[0]);
		$.sweetModal.confirm('정말로 '+nameattr[0]+" 님의 답변을 채택하시겠습니까?", function() {
			$.ajax({
				type:"POST",
				data:{num:num,replynum:replynum},
				url:$(".head_url").text()+"support/qna_success",
				success:function(response){
					// alert(response);
					if(response == 1){
						location.reload();
					}else{
						$.sweetModal({
							content:"채택 에러.",
							icon: $.sweetModal.ICON_ERROR
						});
					}
				}
			});
		});
	});

	$(".qna_delete").click(function(){
		var num = $(".view_num").text();
		$.sweetModal.confirm('정말로 질문을 삭제하시겠습니까?', function() {
			$.ajax({
				type:"POST",
				data:{num:num},
				url:$(".head_url").text()+"support/qnadelete",
				success:function(response){
					// alert(response);
					if(response == 1){
						location.href=$(".head_url").text()+"support/qna";
					}else{
						$.sweetModal({
							content:"삭제 에러.",
							icon: $.sweetModal.ICON_ERROR
						});
					}
				}
			});
		});
	});


	$(".a_cirlce").each(function(){
		var a_img = $(this).children("img");
		if(a_img.width() > a_img.height()){
        a_img.css("width","70px");
         a_img.css("height","70px");
      }else{
        a_img.css("width","70px");
        a_img.css("height","70px");
      }
	});

});