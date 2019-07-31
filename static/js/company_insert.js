
		$(document).ready(function(){
			for(var i = 1900; i <= 2019; i++){
				var option = "<option value='"+i+"'>"+i+"년</option>";
				$(".start_year").append(option);
				$(".end_year").append(option);
			}
			for(var i = 1; i <= 12; i++){
				if(i < 10){
					var option = "<option value='"+i+"'>0"+i+"월</option>";
				}else{
					var option = "<option value='"+i+"'>"+i+"월</option>";
				}
				
				$(".start_mm").append(option);
				$(".end_mm").append(option);
			}
			for(var i = 1; i <= 31; i++){
				if(i < 10){
					var option = "<option value='"+i+"'>0"+i+"일</option>";
				}else{
					var option = "<option value='"+i+"'>"+i+"일</option>";
				}
				$(".start_dd").append(option);
				$(".end_dd").append(option);
			}

// var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
//     mapOption = {
//         center: new daum.maps.LatLng(33.450701, 126.570667), // 지도의 중심좌표
//         level: 3 // 지도의 확대 레벨
//     };  
// var map = new daum.maps.Map(mapContainer, mapOption);
// 지도를 생성합니다    


			$(".add_address").click(function(e){
				e.preventDefault();
				 new daum.Postcode({
			        oncomplete: function(data) {
			            // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분입니다.
			            // 예제를 참고하여 다양한 활용법을 확인해 보세요.
			            $(".insert_adress").val(data.address);
			           var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = {
        center: new daum.maps.LatLng(33.450701, 126.570667), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };  

// 지도를 생성합니다    
var map = new daum.maps.Map(mapContainer, mapOption); 

// 주소-좌표 변환 객체를 생성합니다
var geocoder = new daum.maps.services.Geocoder();

// 주소로 좌표를 검색합니다
geocoder.addressSearch(data.address, function(result, status) {

    // 정상적으로 검색이 완료됐으면 
     if (status === daum.maps.services.Status.OK) {

        var coords = new daum.maps.LatLng(result[0].y, result[0].x);

        // 결과값으로 받은 위치를 마커로 표시합니다
        var marker = new daum.maps.Marker({
            map: map,
            position: coords
        });

        // 인포윈도우로 장소에 대한 설명을 표시합니다
        var infowindow = new daum.maps.InfoWindow({
            content: '<div style="width:150px;text-align:center;padding:6px 0;">'+data.buildingName+'</div>'
        });
        infowindow.open(map, marker);

        // 지도의 중심을 결과값으로 받은 위치로 이동시킵니다
        map.setCenter(coords);
    } 
});    


			        }
			    }).open();
});

	




			


	// var url = $(".url").text()
	$("#images").fileinput({
		allowedFileExtensions: ["jpg", "gif", "png"],
        uploadAsync: false,
        uploadUrl: "../upload.php", // your upload server url
        uploadExtraData: function() {
        	// alert(response);

            return {

                userid: "가",
                username: "나"
            };
        },
    });

	 $('#images').on('filebatchuploadsuccess', function(event, data, previewId, index) {
			// alert(data.response.name);
			$(".file_name").text(data.response.name);
	});


	//노가다 시작
	var title_flag = 0;
	var page_flag = 0;
	var info_flag = 0;
	var tea_flag = 0;
	var tel_flag = 0;
	$(".insert_tel").focusout(function(){
		var tel = $(this).val();
		var regex= /^\d{2,3}-\d{3,4}-\d{4}$/;
		if(tel == ""){
			tel_flag = 0;
		}else{
			if(!regex.test(tel)){
				tel_flag = 0;
			}else{
				tel_flag = 1;
			}
		}
	});
	// $(".insert_tea").focusout(function(){
	// 	var tea = $(this).val();
	// 	if(tea == ""){
	// 		tea_flag = 0;
	// 	}else{
	// 		tea_flag = 1;
	// 	}
	// });

	$(".insert_title").focusout(function(){
		// alert("a");
		var title = $(this).val();
		if(title == ""){
			title_flag =0;
		}else{
			if(title.length > 15){
				// alert("넘아감");
				title_flag =0;
			}else{
				title_flag = 1;
				// alert("success");
			}
		}
	});
  	$("#logo_input").change(function(e){
		$(".insert_logo").val($('#logo_input')[0].files[0].name);
    });
    $(".insert_page").focusout(function(){
    	var expUrl = /^(http\:\/\/)?((\w+)[.])+(asia|biz|cc|cn|com|de|eu|in|info|jobs|jp|kr|mobi|mx|name|net|nz|org|travel|tv|tw|uk|us)(\/(\w*))*$/i;
   		 // return expUrl.test(strUrl);
   		 // alert(expUrl.test($(this).val()));
   		 var page=  $(this).val();
   		 if(page == ""){
   		 	page_flag = 0;
   		 }else{
   		 	if(expUrl.test(page)){
   		 		page_flag = 1;
   		 	}else{
   		 		page_flag =0;
   		 	}
   		 }
    });
    $(".more_info").focusout(function(){
    	// alert("a");
    	var info = $(this).val();
    	if(info == ""){
    		info_flag = 0;
       	}else{
       		info_flag = 1;
    	}
    });

    var gong_flag = 0;
    $(".insert_gongtitle").focusout(function(){
    	var gongtitle = $(this).val();
    	if(gongtitle == ""){
    		gong_flag = 0;
    	}else{
    		gong_flag = 1;
    	}
    });

    var not_flag = 0;
    $(".moeny_order").change(function(){
    	var mon = $(".moeny_order option:selected").val();
    	if(mon == 1){
    		not_flag =1;
    		$(".insert_money").removeAttr("disabled");
    		$(".insert_money").focus();
    	}else{
    		not_flag = 0;
    	}
    	// alert(not_flag);
    });

 	var area_flag = 0;
    $(".moeny_area").change(function(){
    	var area = $(".moeny_area option:selected").val();
    	if(area == 1){
    		area_flag =1;
    		$(".insert_area").removeAttr("disabled");
    		$(".insert_area").focus();
    	}else{
    		area_flag = 0;
    	}
    });
    var working_flag = 0;
    $(".insert_working").focusout(function(){
    	var work = $(this).val();
    	if(work == ""){
    		working_flag = 0;
    	}else{
    		working_flag = 1;
    	}
    });
	var slide_flag  = 0;
	$(".next_btn").click(function(e){
		e.preventDefault();
		if(title_flag == 0  || info_flag == 0 || $(".insert_adress").val() == ""){
			$.sweetModal({
				content:"빈칸 없이 입력해주세요.",
				icon: $.sweetModal.ICON_ERROR
			});
			return false;
		}
		if($(".insert_tea").val() == ""){
			$.sweetModal({
				content:"빈칸 없이 입력해주세요.",
				icon: $.sweetModal.ICON_ERROR
			});
			return false;
		}
		if(page_flag == 0){
			$.sweetModal({
				content:"url 형식을 지켜주세요.",
				icon: $.sweetModal.ICON_ERROR
			});
			return false;
		}
		if(tel_flag == 0){
			$.sweetModal({
				content:"전화번호 형식을 지켜주세요.",
				icon: $.sweetModal.ICON_ERROR
			});
			return false;
		}
		
		if(slide_flag == 0){
			$(".insert_div").css("margin-left","-100%");
			slide_flag = 1;
		}else if(slide_flag == 1){
			if(gong_flag == 0 || working_flag == 0){
				$.sweetModal({
					content:"빈칸 없이 입력해주세요.",
					icon: $.sweetModal.ICON_ERROR
				});
				return false;
			}

			var start_year = $(".start_year option:selected").val();
			var start_mm = $(".start_mm option:selected").val();
			var start_dd = $(".start_dd option:selected").val();
			var startDateCompare = new Date(start_year, parseInt(start_mm)-1,start_dd);

			var end_year = $(".end_year option:selected").val();
			var end_mm = $(".end_mm option:selected").val();
			var end_dd = $(".end_dd option:selected").val();
			var endDateCompare = new Date(end_year, parseInt(end_mm)-1,end_dd);

			var now = new Date();
			var year= now.getFullYear();
			var mm = (now.getMonth()+1)>9 ? ''+(now.getMonth()+1) : '0'+(now.getMonth()+1);
			var day = now.getDate()>9 ? ''+now.getDate() : '0'+now.getDate();
			// alert(day-1);
			var curentDateCompare = new Date(year, parseInt(mm)-1,day-1);
			if(startDateCompare.getTime() > curentDateCompare.getTime()){
			}else{
				$.sweetModal({
					content:"시작일은 현재날짜 이상으로 입력해주세요..",
					icon: $.sweetModal.ICON_ERROR
				});
				return false;
			}
			if(endDateCompare.getTime() > curentDateCompare.getTime()){
			}else{
				$.sweetModal({
					content:"마감일은 현재날짜 이상으로 입력해주세요..",
					icon: $.sweetModal.ICON_ERROR
				});
				return false;
			}
			if(endDateCompare.getTime() < startDateCompare.getTime()){
				$.sweetModal({
					content:"마감일은 시작일 보다 커야합니다.",
					icon: $.sweetModal.ICON_ERROR
				});
				return false;
			}
			var check_i = 0;
			$(".checks").each(function(){
				if($(this).is(':checked')){
					check_i++
				}
			});
			if(check_i == 0){
				$.sweetModal({
					content:"모집 업종을 선택해주세요.",
					icon: $.sweetModal.ICON_ERROR
				});
				return false;
			}

			var career = $('input[name="career"]:checked').val();
			if(typeof career == "undefined"){
 				$.sweetModal({
					content:"경력을 선택해주세요.",
					icon: $.sweetModal.ICON_ERROR
				});
				return false;
			}


			var education = $('input[name="education"]:checked').val();
			if(typeof education == "undefined"){
 				$.sweetModal({
					content:"학력을 선택해주세요.",
					icon: $.sweetModal.ICON_ERROR
				});
				return false;
			}

			if(not_flag == 0){
				var mon = $(".moeny_order option:selected").val();
				if(mon == "not"){
					$.sweetModal({
						content:"급여를 선택해주세요.",
						icon: $.sweetModal.ICON_ERROR
					});
					return false;
				}
			}else{
				var money = $(".insert_money").val();
				if(money == ""){
					$.sweetModal({
						content:"급여를 입력해주세요.",
						icon: $.sweetModal.ICON_ERROR
					});
					return false;
				}
			}
			var employ =  $('input[name="employ"]:checked').val()
			if(typeof employ == "undefined"){
 				$.sweetModal({
					content:"고용유형을 선택해주세요.",
					icon: $.sweetModal.ICON_ERROR
				});
				return false;
			}

			if(area_flag == 0){
				var area = $(".moeny_area option:selected").val();
				if(area == "not"){
					$.sweetModal({
						content:"근무지역을 선택해주세요.",
						icon: $.sweetModal.ICON_ERROR
					});
					return false;
				}
			}else{
				var area = $(".insert_area").val();
				if(area == ""){
					$.sweetModal({
						content:"근무지역을 입력해주세요.",
						icon: $.sweetModal.ICON_ERROR
					});
					return false;
				}
			}

			if($(".hash_inputs").val() == ""){
				$.sweetModal({
						content:"해시태그를 입력해주세요.",
						icon: $.sweetModal.ICON_ERROR
				});
				return false;
			}
			// var hash_count = 0;
			// $(".inputTags-list > span").each(function(){
			// 	hash_count++;
			// });
			// if(hash_count == 0){
			// 	$.sweetModal({
			// 			content:"해시태그를 입력해주세요.",
			// 			icon: $.sweetModal.ICON_ERROR
			// 	});
			// 	return false;
			// }

			$(".insert_div").css("margin-left","-200%");
			slide_flag = 2;
		}
	});
	$(".prev_btn").click(function(e){
		e.preventDefault();
		if(slide_flag == 2){
			$(".insert_div").css("margin-left","-100%");
			slide_flag = 1;
		}else if(slide_flag == 1){
			$(".insert_div").css("margin-left","-000%");
			slide_flag = 0;
		}
	});


	//채용공고 등록
	$(".success_btn").click(function(){
		var start_year = $(".start_year option:selected").val();
		var start_mm = $(".start_mm option:selected").val();
		var start_dd = $(".start_dd option:selected").val();

		var end_year = $(".end_year option:selected").val();
		var end_mm = $(".end_mm option:selected").val();
		var end_dd = $(".end_dd option:selected").val();


		var companyname = $(".insert_title").val();
		var companyaddress = $(".insert_adress").val();
		var companycar = $(".cars_input").val();
		var companyinfo = $(".more_info ").val();
		var companypage = $(".insert_page").val();
		var companytitle = $(".insert_gongtitle").val();
		var companystart = start_year + "-" + start_mm + "-" +  start_dd;
		var companyend = end_year + "-" + end_mm + "-" +end_dd;
		var comapnysectorts = "";
		var companymoney = "";
		var companytel = $(".insert_tel").val();
		var companyteln = $(".insert_tea").val();
		var companyetc_uniq = $(".insert_etc").val()+","+$(".insert_uniq").val();
		var companyworking = $(".insert_working").val();
		// var companyuniq = $(".insert_uniq").val();
		if(not_flag == 0){
			companymoney = $(".moeny_order option:selected").val();
		}else{
			companymoney = $(".insert_money").val();
		}
		var companyqua = $('input[name="career"]:checked').val()+","+$('input[name="education"]:checked').val();
		var companycondition = ""
		if(area_flag == 0){
				companycondition = $(".moeny_area option:selected").val()+","+$('input[name="employ"]:checked').val();
		}else{
				companycondition = $(".insert_area").val()+","+$('input[name="employ"]:checked').val();
		}
		// var companyhash = "";
		var companyhash = $(".hash_inputs").val();
		// $(".inputTags-list > span").each(function(){
		// 	companyhash += $(this).attr("data-tag") + ",";
		// });
		$(".checks").each(function(){
			if($(this).is(':checked')){
				// check_i++
				comapnysectorts += $(this).val()+",";
			}
		});
		var companyimg = $(".file_name").text();
		// alert(filenames);
		if(companyimg == ""){
			$.sweetModal({
						content:"파일을 하나 이상 업로드해주세요.",
						icon: $.sweetModal.ICON_ERROR
				});
				return false;
		}
		
		// var test_array = new Array("a","b","c")
		datas = new FormData();
        datas.append( 'service_image', $( '#logo_input' )[0].files[0] );
        // datas.append("array",insert_array);
        // alert(datas);
        

		$.ajax({
			type:"POST",
			url:"../insert_company.php",
			contentType: 'multipart/form-data', 
            data: datas,       
            dataType:"json",
            mimeType: 'multipart/form-data',
			success:function(response){
				// alert(response.url);
				var insert_array = new Array(companyname,response.url,
			companyaddress,companytitle,
			companyqua,companycondition,companyhash,
			comapnysectorts,companymoney,companypage,
			companyimg,companyinfo,companycar,companystart,
			companyend,companytel,companyteln,companyetc_uniq,companyworking);
				$.ajax({
						type:"POST",
						url:"../test.php",
						data:{array:insert_array},
						success:function(response){
							// alert(response);
							if(response == "success"){
								
								location.href="http://192.168.20.95/link/company/";
							}else{
								$.sweetModal({
										content:"등록 에러.",
										icon: $.sweetModal.ICON_ERROR
								});
								return false;
							}
						}
					});
			},
			 cache: false,
            contentType: false,
            processData: false
		});
	});

	$(".canel_btn").click(function(){
		location.href="http://192.168.20.95/link/company/";
	});
	$(".inputTags-field").attr("placeholder","태그는 , 로 구분됩니다.");
});