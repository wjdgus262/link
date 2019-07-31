$(document).ready(function(){
			// alert($(".nums").text());
			// var num = $(".nums").text();
			// 	$.ajax({
			// 		type:"POST",
			// 		data:{num:num},
			// 		dataType:"json",
			// 		url:$(".url").text()+"company/company_count",
			// 		success:function(response){
			// 			// alert(response.companycount);
			// 			var count = 0;
			// 			var like = 0;
			// 			var scrap = 0;
			// 			$.each(response,function(key,value){
			// 				// alert(value.companycount);
			// 				count = value.companycount;
			// 				like = value.company_like;
			// 				scrap = value.company_scrap;
			// 			});
			// 			$(".like_counts").text("좋아요 "+like);
			// 			$(".scrap_counts").text("스크랩수 "+scrap);
			// 			$(".counts").text("조회수 "+count);
			// 		},error:function(request,status,error){
			// 	        alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
			// 	       }
			// 	});
				$(".main_body_img > img").each(function(){
					// alert($(this).width());
					if($(this).width() > 1293){
						$(this).css("width","1293px");
					}
				});
			 	$('#tags').inputTags({
			 		max: 10
			 	});
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
geocoder.addressSearch($(".company_address").text(), function(result, status) {

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
            content: '<div style="width:150px;text-align:center;padding:6px 0;">우리회사</div>'
        });
        infowindow.open(map, marker);

        // 지도의 중심을 결과값으로 받은 위치로 이동시킵니다
        map.setCenter(coords);
    } 
});  

				
			
			$(".go_company").click(function(){
				var href = $(this).attr("data-num");
				location.href="http://"+href;
			});



			$(".company_scrp_btns").click(function(){
				// alert("a");
				var num = $(this).attr("data-num");
				// alert(num);
				$.ajax({
					url:$(".url").text()+"company/company_scrap",
					type:"POST",
					data:{num:num},
					dataType:"json",
					success:function(response){
						// alert(response);
						$.each(response,function(key,value){
							$(".scrap_counts").text("스크랩수 "+value.company_scrap);
						});
						$.sweetModal({
				content:"스크랩 성공.",
				icon: $.sweetModal.ICON_SUCCESS
			});
			return false;
					}
				});
			});

			$(document).on("click",".not_company_like",function(){
				var num = $(this).attr("data-num");
				$.ajax({
					type:"POST",
					url:$(".url").text()+"company/like_success",
					data:{num:num},
					dataType:"json",
					success:function(response){
						$.each(response,function(key,value){
							$(".like_counts").text("좋아요 "+value.company_like);
						});
						$(".company_like_btns").remove();
						var divs = `<span class="company_like_btns success_company_like" data-num="${num}">
						<i class="fas fa-heart"></i>
						<p>좋아요</p>
					</span>`;
						$(".company_nav_top").append(divs);
					}
				})
			});
			$(document).on("click",".success_company_like",function(){
				var num = $(this).attr("data-num");
				$.ajax({
					type:"POST",
					url:$(".url").text()+"company/like_delete",
					data:{num:num},
					dataType:"json",
					success:function(response){
						// alert(response);
						$.each(response,function(key,value){
							$(".like_counts").text("좋아요 "+value.company_like);
						});
						$(".company_like_btns").remove();
						var divs = `<span class="company_like_btns not_company_like" data-num="${num}">
						<i class="far fa-heart"></i>
						<p>좋아요</p>
					</span>`;
						$(".company_nav_top").append(divs);
					}
				})
			});
			$(".like_company_btn").click(function(){
				var num = $(this).attr("data-num");
				// alert(num);
				$.ajax({
					type:"POST",
					url:$(".url").text()+"company/like_company",
					data:{num:num},
					dataType:"json",
					success:function(response){
						// alert(response);
						if(response == 1){
							$.sweetModal({
				content:"관심기업등록 성공.",
				icon: $.sweetModal.ICON_SUCCESS
			});
			return false;
						}else{
							$.sweetModal({
				content:"관심기업등록 실패.",
				icon: $.sweetModal.ICON_SUCCESS
			});
			return false;
						}
					}
				});

			});
	$(window).scroll(function(){
		// alert("a");
		var scrollValue = $(document).scrollTop();
		// alert(scrollValue);
		if(scrollValue >= 500){
			$(".fixed_btn").stop().fadeIn("fast");
		}else{
			$(".fixed_btn").stop().fadeOut("fast");
		}
	});
});