$(document).ready(function(){
	var num = $(".get_num").text();
			$.ajax({
				type:"POST",
				url:$(".head_url").text()+"portfoilo/port_get",
				data:{num:num},
				dataType:"json",
				success:function(response){
					// alert(response);
					$.each(response,function(key,value){
							$(".port_title").val(value.portfoilo_title);
							$('.port_info').val(value.portfoilo_bodytext);
							$(".hash_port").tagsinput('items')
							var hash_split = value.portfoilo_category.split('/');
							// alert(hash_split[0]);
							for(var i = 0; i < hash_split.length; i++){
								$('.checks').each(function(){
									if($(this).val() == $.trim(hash_split[i])){
										$(this).prop("checked", true);
									}
								});
							}
							var tool_split = value.portfoilo_tool.split(',');
							for(var i = 0; i < hash_split.length; i++){
								$('.tool_check').each(function(){
									if($(this).val() == $.trim(tool_split[i])){
										$(this).prop("checked", true);
									}
								});
							}
					});
				}
			});
			$("#port_images").fileinput({
				allowedFileExtensions: ["jpg", "gif", "png"],
			
		        uploadAsync: false,
		        uploadUrl: "../port_upload.php", // your upload server url
		        uploadExtraData: function() {
		        	// alert(response);
		            return {

		                userid: "가",
		                username: "나"
		            };
		        },
		    });

			 $('#port_images').on('filebatchuploadsuccess', function(event, data, previewId, index) {
					// alert(data.response.name);
					$(".file_name").text(data.response.name);
			});

			 $('.port_cancel').click(function(){
			 		location.href=$(".head_url").text()+"mypage?id="+$(".get_id").text();
			 });

			$(".port_success").click(function(){
	 		var title = $(".port_title").val();
	 		var cate = "";
	 		$(".checks").each(function(){
	 			if($(this).is(":checked") == true) {
					cate += $(this).val()+" / ";
				}
	 		});
	 		var tool = "";
	 		$(".tool_check").each(function(){
	 			if($(this).is(":checked") == true) {
					tool += $(this).val()+",";
				}
	 		});
	 		var bodytext = $(".port_info").val();
	 		var hash = $(".hash_port").val();
	 		var file_name = $(".file_name").text();
	 		// alert(tool);
	 		if(title == "" || cate == "" || tool == "" || bodytext == ""){
	 			$.sweetModal({
					content:"빈칸 없이 입력해주세요.",
					icon: $.sweetModal.ICON_ERROR
				});
	  			return false;
	 		}else if(file_name == ""){
	 			$.sweetModal({
					content:"파일을 업로드해주세요.",
					icon: $.sweetModal.ICON_ERROR
				});
	  			return false;
	 		}
	 		else{
	 			var array = new Array(title,cate,tool,bodytext,hash,file_name,num);
	 			$.ajax({
	 				type:"POST",
	 				url:$(".head_url").text()+"portfoilo/port_update",
	 				data:{array:array},
	 				success:function(response){
	 					// alert(response);
	 					if(response == 1){
	 						location.href=$(".head_url").text()+"portfoilo";
	 					}else{
	 						$.sweetModal({
								content:"등록 실패.",
								icon: $.sweetModal.ICON_ERROR
							});
				  			return false;
	 					}
	 				}
	 			});
	 		}
	 });
});