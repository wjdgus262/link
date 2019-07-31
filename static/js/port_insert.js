$(document).ready(function(){
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
	 			// alert(tool);
	 			var array = new Array(title,cate,tool,bodytext,hash,file_name);
	 			$.ajax({
	 				type:"POST",
	 				url:$(".head_url").text()+"portfoilo/port_insert",
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
	 $(".port_cancel").click(function(){
	 	location.href=$(".head_url").text()+"portfoilo";
	 });
});