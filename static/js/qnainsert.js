$(document).ready(function(){
	    //qna insert
    $('.contents').summernote({ // summernote를 사용하기 위한 선언
                    height: 600,
					callbacks: { // 콜백을 사용
                        // 이미지를 업로드할 경우 이벤트를 발생
					    onImageUpload: function(files, editor, welEditable) {
						    sendFile(files[0], editor,welEditable);
						    // alert("a");
						}
					}
				});
$('.note-statusbar').hide(); 
    function sendFile(file, editor,wel) {
            // 파일 전송을 위한 폼생성
	 		// alert(file);
	 		data = new FormData();
	 	    data.append("file", file);
	 	    $.ajax({ // ajax를 통해 파일 업로드 처리
	 	        data : data,
	 	        type : "POST",
	 	        url : $(".head_url").text()+"sumer_upload.php",
	 	        cache : false,
	 	        contentType : false,
	 	        processData : false,
	 	        success : function(data) { // 처리가 성공할 경우
                    // 에디터에 이미지 출력
                    // alert($(".head_url").text()+data);
	 	        	$(".contents").summernote('editor.insertImage', $(".head_url").text()+data);
	 	        	// editor.insertImage(wel,data);
	 	        }
	 	    });
	 	}
	 	$(".qnawriter_success").click(function(){
	 		// alert("a");
	 		// alert($(".contents").val());
	 		var title = $(".qnatitle").val();
	 		var bodytext = $(".contents").val();
	 		var select = $(".qnaselect option:selected").val();
	 		// alert(select);
	 		if(title == "" || bodytext == ""){
	 			$.sweetModal({
					content:"빈칸 없이 입력해주세요.",
					icon: $.sweetModal.ICON_ERROR
				});
				return false;
	 		}else{
	 			$.ajax({
	 				type:"POST",
	 				data:{title:title,bodytext:bodytext,select:select},
	 				url:$(".head_url").text()+"support/qnainsert",
	 				success:function(response){
	 					// alert(response);
	 					if(response == 1){
	 						location.href=$(".head_url").text()+"support/qna";
	 					}else{
	 						$.sweetModal({
								content:"등록실패.",
								icon: $.sweetModal.ICON_ERROR
							});
							return false;
	 					}

	 				}
	 			});
	 		}
	 	});
	 	$(".qnawriter_cancel").click(function(){
	 		location.href=$(".head_url").text()+"support/qna";
	 	});
});