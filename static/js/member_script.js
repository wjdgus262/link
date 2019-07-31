$(document).ready(function(){
	// alert("a");
	$(".info_div").click(function(){
		// alert("a");
		$(".menu_modal").fadeIn();
	});
	$(".search").click(function(){
  		// alert("a");
  		$(".serach_modal").fadeIn("fast");
  	});
  	$(".close_div").click(function(){
  		$(".serach_modal").fadeOut("fast");
  		reset();
  	});
  	$("#url").focusin(function(){
  		// alert("aa");
  		$(".ser_i").css("color","white");
  	});
  	$("#url").focusout(function(){
  		// alert("aa");
  		$(".ser_i").css("color","RGBA(120,120, 120, 0.8)");
  	});
  	
	var name_ch = false;
	var age_ch = false;
	var email_ch = false;
	var phone_ch = false;
	var id_ch = false;
	var pw_ch = false;
	var conpw_ch =false;
	$(".registername").focusin(function(){
		// $(this).val("");
		$(this).parent("div").children(".check_circle").hide();
		name_ch = false;
	});
	$(".registername").focusout(function(){
		var name = $(this).val();
		if($.isNumeric(name)){
			error_check($(this));
			name_ch = false;
		}else if(name == ""){
			error_check($(this));
			name_ch = false;
		}else{
			success_check($(this));
			name_ch = true;
		}
	});


	$(".registerage").focusin(function(){
		// $(this).val("");
		$(this).parent("div").children(".check_circle").hide();
		age_ch = false;
	});
	$(".registerage").focusout(function(){
		var age = $(this).val();
		if($.isNumeric(age)){
			success_check($(this));
			age_ch = true;
		}else if(age == ""){
			error_check($(this));
			age_ch = false;
		}else{
			error_check($(this));
			age_ch = false;
		}
	});
	$(".registerjink").focusin(function(){
		$(this).parent("div").children(".check_circle").hide();
		age_ch = false;
	});
	$(".registerjink").focusout(function(){
		var age = $(this).val();
		if(age == ""){
			error_check($(this));
			age_ch = false;
		}else{
			success_check($(this));
			age_ch = true;
		}
	});
	$(".registerEmail").focusin(function(){
		// $(this).val("");
		$(this).parent("div").children(".check_circle").hide();
		email_ch = false;
	});
	$(".registerEmail").focusout(function(){
		var email = $(this).val();
		var regEmail = /([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if(!regEmail.test(email)){
			error_check($(this));
			email_ch = false;
		}else if(email == ""){
			error_check($(this));
			email_ch = false;
		}else{
			$.ajax({
				type:"POST",
				data:{email:email},
				url:$(".head_url").text()+"member/find_email",
				success:function(response){
					if(response == "find")
					{
						error_check($(".registerEmail"));
						email_ch = false;
					}else{
						success_check((".registerEmail"));
						email_ch = true;
					}
				}
			});
			success_check($(this));
			email_ch = true;
		}
	});

	$(".registerPhone").focusin(function(){
		// $(this).val("");
		$(this).parent("div").children(".check_circle").hide();
		phone_ch = false;
	});
	$(".registerPhone").focusout(function(){
		var phone = $(this).val();
		var regPhone = /^(?:(010-?\d{4})|(01[1|6|7|8|9]-?\d{3,4}))-?\d{4}$/;
		// alert(regPhone.test(phone));
		if(!regPhone.test(phone)){
			error_check($(this));
			phone_ch = false;
		}else if(phone == ""){
			error_check($(this));
			phone_ch = false;
		}else{
			success_check($(this));
			phone_ch = true;
		}
	});
	$(".registerid").focusin(function(){
		$(this).parent("div").children(".check_circle").hide();
		id_ch = false;
	});
	$(".registerid").focusout(function(){
		var id = $(this).val();
		if(id == ""){
			error_check($(this));
			id_ch = false;
		}else if(id.length < 4 || id.length > 11){
			error_check($(this));
			id_ch = false;
		}else{
			$.ajax({
				type:"POST",
				data:{"id":id},
				url:$(".head_url").text()+"member/find_id",
				success:function(response){
					
					if(response == "find")
					{
						error_check($(".registerid"));
						id_ch = false;
					}else{
						success_check((".registerid"));
						id_ch = true;
					}
				}
			});
		}
	});
	$(".registerPassword").focusin(function(){
		$(this).parent("div").children(".check_circle").hide();
		pw_ch = false;
	});
	$(".registerPassword").focusout(function(){
		var pw = $(this).val();
		var regExpPw = /(?=.*\d{1,50})(?=.*[~`!@#$%\^&*()-+=]{1,50})(?=.*[a-zA-Z]{2,50}).{8,50}$/;
		// alert(regExpPw.test(pw));
		if(pw == ""){
			error_check($(this));
			pw_ch = false;
		}else if(!regExpPw.test(pw)){
			error_check($(this));
			pw_ch = false;
		}else{
			success_check($(this));
			pw_ch = true;
		}
	});
	$(".registerConfirmPassword").focusin(function(){
		$(this).parent("div").children(".check_circle").hide();
		conpw_ch = false;
	});
	$(".registerConfirmPassword").focusout(function(){
		var pw = $(this).parent("div").parent("div").children("div:nth-child(2)").children("input").val();
		var conpw = $(this).val();
		if(pw == conpw){
			success_check($(this));
			conpw_ch = true;
		}else if(conpw == ""){
			error_check($(this));
			conpw_ch = false;
		}else{
			error_check($(this));
			conpw_ch = false;
		}
	});


	var category_var = "";
	$(".category_div").click(function(){
		$(".category_div").css("background","rgba(255,255,255,0.0)");
		$(this).css("background","rgba(255,255,255,0.5)");
		category_var  = $(this).attr("data-index");
		// $(this).children(".category_circe").css("board-color","black");
		// $(this).children(".category_circe").children("i").css("color","black");
	});

	var regirster_flag = 0;
  	var count_index = 0;
  	$(".register_close > i").click(function(e){
  		
  		$(".register_modal").fadeOut();
  		$(".register_body").css("margin-left","0%");
  		regirster_flag = 0;
  		count_index = 0;
  		reset();
  	});
  	
  	
  	
  	$(".job").click(function(){
		// alert("a");
		$(".register_intro").fadeOut();
		$(".job_seeker_wrap").fadeIn();
		$(".register_button").fadeIn();
		$(".job_firstdiv").css("visibility","visible");
		 $(".job_thired_div").css("visibility","hidden");
		$(".job_four_div").css("visibility","hidden");
		$(".job_second_div").css("visibility","hidden");
		regirster_flag = 4;
		// alert(regirster_flag);
	});
	$(".enter_a").click(function(){
		$(".register_intro").fadeOut();
		$(".Enterprise_wrap").fadeIn();
		$(".register_button").fadeIn();
		$(".Enterprise_firstdiv").css("visibility","visible");
		$(".Enterprise_seconddiv").css("visibility","hidden");
		$(".Enterprise_thireddiv").css("visibility","hidden");
		regirster_flag = 3;
	});
	$('.first_next').click(function(){
			// count_index = 1;
			$(this).removeClass("gogo");
			if(name_ch == false || age_ch == false || email_ch == false || phone_ch == false){
	  			$.sweetModal({
					content:"오류 없이 입력해주세요.",
					icon: $.sweetModal.ICON_ERROR
				});
	  			return false;
  			}
			$(".prev_btn_re").show();
			if(regirster_flag == 4){

				if(count_index == 0){
					$(".job_firstdiv").css("visibility","hidden");
		  			$(".job_thired_div").css("visibility","hidden");
		  			$(".job_four_div").css("visibility","hidden");
		  			$(".job_second_div").css("visibility","visible");
		  			$(".job_second_div").show();
					$(".job_wrap").css("marginLeft","-100%");
					count_index = 1;
				}else if(count_index == 1){
					if(id_ch == false || pw_ch == false || conpw_ch == false){
			  			$.sweetModal({
							content:"오류 없이 입력해주세요.",
							icon: $.sweetModal.ICON_ERROR
						});
			  			return false;
		  			}
					$(".job_firstdiv").css("visibility","hidden");
		  			$(".job_second_div").css("visibility","hidden");
		  			$(".job_four_div").css("visibility","hidden");
		  			$(".job_thired_div").css("visibility","visible");
		  			$(".job_thired_div").show();
					$(".job_wrap").css("marginLeft","-200%");

					count_index = 2;
				}else if(count_index == 2){
					var check = $('input:radio[name=gender]').is(':checked');
		  			if(check == false){
		  				$.sweetModal({
							content:"카레고리를 체크해주세요.",
							icon: $.sweetModal.ICON_ERROR
						});
						return false;
		  			}
		  			var m_check = $('input:radio[name=mility]').is(':checked');
		  			if(m_check == false){
		  				$.sweetModal({
							content:"병역을 체크해주세요.",
							icon: $.sweetModal.ICON_ERROR
						});
						return false;
		  			}
		  			if(category_var == ""){
		  				$.sweetModal({
							content:"카레고리를 체크해주세요.",
							icon: $.sweetModal.ICON_ERROR
						});
						return false;
		  			}
					$(".job_firstdiv").css("visibility","hidden");
		  			$(".job_second_div").css("visibility","hidden");
		  			$(".job_thired_div").css("visibility","hidden");
		  			$(".job_four_div").css("visibility","visible");
		  			$(".job_four_div").show();
					$(".job_wrap").css("marginLeft","-300%");
					count_index = 3;
					// $(this).addClass("gogo");
					$(this).text("Join");
				}else{
					var name = $(".job_seeker_wrap .registername").val();
					var age = $(".job_seeker_wrap  .registerage").val();
					var email = $(".job_seeker_wrap  .registerEmail").val();
					var phone = $(".job_seeker_wrap  .registerPhone").val();
					var id = $(".job_seeker_wrap  .registerid").val();
					var pw = $(".job_seeker_wrap  .registerPassword").val();
					var gender = $('input[name="gender"]:checked').val();
					// alert(gender);
					var milty = $('input[name="mility"]:checked').val();
					var cate = category_var;
					var up_jong = null;
					var year = $(".job_seeker_wrap .registeryear").val();
					var edut = $(".edut_select option:selected").val();
					// alert(year);
					// var jasosu = $(".job_seeker_wrap .jasosu").val();
					var jasosu = "";
					var j_i = 0;
					$(".register_modal .job_seeker_wrap .inputTags-list > span").each(function(){
						jasosu += $(this).attr("data-tag")+",";
						j_i++;
					});
					// alert(jasosu);
					var division = 1;
					var input_array = new Array(name,age,email,phone,id,pw,gender,milty,cate,up_jong,year,jasosu,division,edut);
					// alert(jasosu);
					if(year == "" || jasosu == ""){
						$.sweetModal({
							content:"카레고리를 체크해주세요.",
							icon: $.sweetModal.ICON_ERROR
						});
						return false;
					}
					if(j_i == 0){
						$.sweetModal({
							content:"해시태그를 입력해주세요.",
							icon: $.sweetModal.ICON_ERROR
						});
						return false;
					}
					go_ajax(input_array);
				}
			}else if(regirster_flag == 3){
				if(count_index == 0){
					
					$(".Enterprise_firstdiv").css("visibility","hidden");
					$(".Enterprise_seconddiv").css("visibility","visible");
					$(".Enterprise_thireddiv").css("visibility","hidden");
					$(".Enterprise_seconddiv").show();
					$(".Enterprise_body").css("marginLeft","-100%");
					count_index = 1;
				}else if(count_index == 1){
					if(id_ch == false || pw_ch == false || conpw_ch == false){
			  			$.sweetModal({
							content:"오류 없이 입력해주세요.",
							icon: $.sweetModal.ICON_ERROR
						});
			  			return false;
		  			}
					$(".Enterprise_firstdiv").css("visibility","hidden");
					$(".Enterprise_seconddiv").css("visibility","hidden");
					$(".Enterprise_thireddiv").css("visibility","visible");
					$(".Enterprise_thireddiv").show();
					$(".Enterprise_body").css("marginLeft","-200%");
					count_index = 2;
					$(this).addClass("gogo");
					$(this).text("Join");
				}else{
					var name = $(".Enterprise_wrap .registername").val();
					var age = $(".Enterprise_wrap .registerage").val();
					var email = $(".Enterprise_wrap .registerEmail").val();
					var phone = $(".Enterprise_wrap .registerPhone").val();
					var id = $(".Enterprise_wrap .registerid").val();
					var pw = $(".Enterprise_wrap .registerPassword").val();
					var gender = 0;
					var milty = 0;
					var cate = 0;
					var up_jong = $(".Enterprise_wrap .registerjink").val();
					var edut = null;
					var year = 0;
					// var inje = $(".Enterprise_wrap .injesang").val();
					var inje = "";
					var j_i = 0;
					$(".register_modal  .Enterprise_wrap .inputTags-list > span").each(function(){
						inje += $(this).attr("data-tag")+",";
						j_i++;
					});
					var division = 2;
					// alert(name);
					var input_array = new Array(name,age,email,phone,id,pw,gender,milty,cate,up_jong,year,inje,division,edut);
					if(j_i == 0){
						$.sweetModal({
							content:"해시태그를 입력해주세요.",
							icon: $.sweetModal.ICON_ERROR
						});
						return false;
					}
					go_ajax(input_array);
				}
			}
	});
	$(".prev_btn_re").click(function(){
		// alert("a");
		$(this).removeClass("gogo");
		if(regirster_flag == 4){
			if(count_index == 3){
				$(".job_firstdiv").css("visibility","hidden");
		  		$(".job_second_div").css("visibility","hidden");
		  		$(".job_four_div").css("visibility","hidden");
		  		$(".job_thired_div").css("visibility","visible");
		  		$(".job_thired_div").show();
				$(".job_wrap").css("marginLeft","-200%");
				count_index = 2;
				$(".first_next").text("Next");
			}else if(count_index == 2){
				$(".job_firstdiv").css("visibility","hidden");
		  		$(".job_second_div").css("visibility","hidden");
		  		$(".job_thired_div").css("visibility","hidden");
		  		$(".job_second_div").css("visibility","visible");
		  		$(".job_second_div").show();
				$(".job_wrap").css("marginLeft","-100%");
				count_index = 1;
			}else if(count_index == 1){
				$(".job_four_div").css("visibility","hidden");
		  		$(".job_second_div").css("visibility","hidden");
		  		$(".job_thired_div").css("visibility","hidden");
		  		$(".job_firstdiv").css("visibility","visible");
		  		$(".job_firstdiv").show();
				$(".job_wrap").css("marginLeft","0%");
				count_index = 0;
				$(this).hide();
			}
		}else if(regirster_flag == 3){
			if(count_index == 2){
				$(".Enterprise_firstdiv").css("visibility","hidden");
				$(".Enterprise_seconddiv").css("visibility","visible");
				$(".Enterprise_thireddiv").css("visibility","hidden");
				$(".Enterprise_seconddiv").show();
				$(".Enterprise_body").css("marginLeft","-100%");
				$(".first_next").text("Next");
				count_index = 1;
			}else if(count_index == 1){
				$(".Enterprise_firstdiv").css("visibility","visible");
				$(".Enterprise_seconddiv").css("visibility","hidden");
				$(".Enterprise_thireddiv").css("visibility","hidden");
				$(".Enterprise_firstdiv").show();
				$(".Enterprise_body").css("marginLeft","0%");
				count_index = 0;
				$(this).hide();
			}
		}
		
	});

  	//login
  	var click_flag = 0;
  	$(".login_btn_p").click(function(e){
  		e.preventDefault();
  		// alert("a");
  		click_flag = 1;
  		$(".menu_modal").fadeOut();
  		$(".login_modal").fadeIn();
  	});
  	$(".login_close > i").click(function(){
  		$(".login_modal").fadeOut();
  		login_reset();
  		click_flag = 0;
  	});

  	$(".inputid").focusout(function(){
  		var id = $(this).val();
  		if(id == ""){
  			login_error_check($(this));
  		}else{
  			login_success_check($(this));
  		}
  	});
  	$(".inputpw").focusout(function(){
  		var id = $(this).val();
  		if(id == ""){
  			login_error_check($(this));
  		}else{
  			login_success_check($(this));
  		}
  	});
  	$('.login_btn').click(function(){
  		// alert("a");
  		var id = $(".inputid").val();
  		var pw = $(".inputpw").val();
  		if(id == "" || pw == ""){
  			$.sweetModal({
				content:"아이디와패스워드를 입력해주세요.",
				icon: $.sweetModal.ICON_ERROR
			});
  		}else{
  			$.ajax({
  				type:"POST",
  				data:{"id":id,"pw":pw},
  				url:$(".head_url").text()+"member/login",
  				success:function(response){
  					// alert(response);
  					if(response != "error")
  					{
  						$.sweetModal.confirm('환영합니다.', function() {
							location.href=$(".head_url").text()+"mypage?id="+response;
						});

  					}else{
  						$.sweetModal({
							content:"로그인 에러.",
							icon: $.sweetModal.ICON_ERROR
						});
  					}
  				}
  			});
  	// 		$.sweetModal({
			// 	content:"",
			// 	icon: $.sweetModal.ICON_SUCCESS
			// });
  		}
  	});
  	$(document).on("click",".sweet-modal-buttons>a",function(e){
  		event.preventDefault();
  		// $(this).removeAttr("href");
  		// location.reload();
  	});
  	$(".regi_btn_p" ).click(function(e){
  		e.preventDefault();
  		$(".menu_modal").fadeOut();
  		$(".register_modal").fadeIn();
  	});
  	$(".logout_text").click(function(){
  		$.sweetModal.confirm('정말로 로그아웃 하시겠습니까?', function() {
  			$.ajax({
  				type:"POST",
  				url:$(".head_url").text()+"member/logout",
  				success:function(response){
  					$.sweetModal.confirm('로그아웃 성공', function() {
							location.href=$(".head_url").text()+"main";
					});
  				}
  			});
		});
  	});
  	$(".mypage_go").click(function(){
  		var id = $(this).attr("data-num");
  		location.href="mypage?id="+id;
  		return false;
  	});
  	$(document).on("click",".not_login",function(){
  		// $.sweetModal.confirm('로그인 해주세요.', function() {

		// });
		alert("로그인 해주세요.");
		// $('body').css("overflow-y", "auto");
		// $(".portfoilo_img_body img").remove();
		// $('.portfoilo_img_body_wrap').slick('unslick');
		// $(".portfoilo_modal").fadeOut();
			$('.login_modal').show();
  	});
  	$(".login_or_regi_go").click(function(){
  		$(".login_modal").stop().fadeOut();
  		$(".register_modal").stop().fadeIn();
  	});
  	
  	$('.find_pw').click(function(){
  		$(".login_modal").stop().fadeOut();
  		$(".find_pw_modal").stop().fadeIn();

  	});
  	$(".find_pw_close").click(function(){
  		$(".find_pw_modal").stop().fadeOut();
  	});
  	$(".find_pw_cnale").click(function(){
  		$(".find_pw_modal").stop().fadeOut();
  		$(".login_modal").stop().fadeIn();
  	});
  	var find_id_flag = 0;
  	$(".find_id_input").focusout(function(){
		var id = $(this).val()
		if(id == ""){
			error_check($(this));
			find_id_flag = 0;
		}else{
			success_check($(this));
			find_id_flag = 1;
		}
	});
	var find_name_flag = 0;
  	$('.find_name_input').focusout(function(){
  		var name = $(this).val()
		if(name == ""){
			error_check($(this));
			find_name_flag = 0;
		}else{
			success_check($(this));
			find_name_flag = 1;
		}
  	});
  	$(".find_pw_btn").click(function(){
  		var url = $(".head_url").text();
  		// alert(url);
  		var id = $(".find_id_input").val();
  		var name = $(".find_name_input").val();
  		if(find_name_flag == 0 || find_id_flag == 0){
  			$.sweetModal({
				content:"빈칸없이 입력해주세요.",
				icon: $.sweetModal.ICON_ERROR
			});
			return false;
  		}else{
  			$.ajax({
  				type:"POST",
  				url:url+"member/find_pw",
  				data:{id:id,name:name},
  				beforeSend:function(){
  					// console.log("loader");
  					$(".loadgin_mail_modal").show();
  				},
  				success:function(response){
  					if(response == "success"){
  						$.sweetModal({
							content:"임시비밀번호를 메일로 전송했습니다.",
							icon: $.sweetModal.ICON_SUCCESS
						});
						$(".find_pw_modal").stop().fadeOut();
						$(".login_modal").stop().fadeIn();
  					}else{
  						$.sweetModal({
							content:"메일전송 실패.",
							icon: $.sweetModal.ICON_ERROR
						});
  					}
  	// 				
			return false;
  				},
  				complete:function(data){
  					// console.log("complete");
  					$(".loadgin_mail_modal").hide();
  				}

  			});
  		}
  	});
  	$(".down_menu").mouseover(function(){
  		$(this).children(".he_submenu").stop().slideDown();
  	});
  	$(".down_menu").mouseleave(function(){
  		$(this).children(".he_submenu").stop().slideUp();
  	});
  	// $(".mypage_go").click(function(){
  		// var id = $(this).attr("")
  	// });





  	//회원수정
  	$("#update_input").change(function(){
  		// alert("a");
  		// alert($(this).val());
  		readURL(this);
  		 var update_img = $(".update_img_circle > img");
    if(update_img.width() > update_img.height()){
        $(".update_img_circle > img").css("width","80px");
         $(".update_img_circle > img").css("height","80px");
      }else{
        $(".update_img_circle > img").css("width","80px");
        $(".update_img_circle > img").css("height","80px");
      }
  	});
  	$("#update_input_1").change(function(){
  		// alert("a");
  		// alert($(this).val());
  		readURL(this);
  		 var update_img = $(".update_img_circle > img");
    if(update_img.width() > update_img.height()){
        $(".update_img_circle > img").css("width","80px");
         $(".update_img_circle > img").css("height","80px");
      }else{
        $(".update_img_circle > img").css("width","80px");
        $(".update_img_circle > img").css("height","80px");
      }
  	});
  	var update_name_ch = true;
	var update_age_ch = true;
	var update_email_ch = true;
	var update_phone_ch = true;
	
	$(".updatename").focusin(function(){
		// $(this).val("");
		$(this).parent("div").children(".check_circle").hide();
		update_name_ch = false;
	});
	$(".updatename").focusout(function(){
		var name = $(this).val();
		if($.isNumeric(name)){
			error_check($(this));
			update_name_ch = false;
		}else if(name == ""){
			error_check($(this));
			update_name_ch = false;
		}else{
			success_check($(this));
			update_name_ch = true;
		}

	});


	$(".updateage").focusin(function(){
		// $(this).val("");
		$(this).parent("div").children(".check_circle").hide();
		update_age_ch = false;
	});
	$(".updateage").focusout(function(){
		var age = $(this).val();
		if($.isNumeric(age)){
			success_check($(this));
			update_age_ch = true;
		}else if(age == ""){
			error_check($(this));
			update_age_ch = false;
		}else{
			error_check($(this));
			update_age_ch = false;
		}

	});
	$(".updatejink").focusin(function(){
		$(this).parent("div").children(".check_circle").hide();
		update_age_ch = false;
	});
	$(".updatejink").focusout(function(){
		var age = $(this).val();
		if(age == ""){
			error_check($(this));
			update_age_ch = false;
		}else{
			success_check($(this));
			update_age_ch = true;
		}
	});
	$(".updatePhone").focusin(function(){
		// $(this).val("");
		$(this).parent("div").children(".check_circle").hide();
		update_phone_ch = false;
	});
	$(".updatePhone").focusout(function(){
		var phone = $(this).val();
		var regPhone = /^(?:(010-?\d{4})|(01[1|6|7|8|9]-?\d{3,4}))-?\d{4}$/;
		// alert(regPhone.test(phone));
		if(!regPhone.test(phone)){
			error_check($(this));
			update_phone_ch = false;
		}else if(phone == ""){
			error_check($(this));
			update_phone_ch = false;
		}else{
			success_check($(this));
			update_phone_ch = true;
		}
	});

	var update_pw_ch = false;
	var update_conpw_ch =false;
	$(".updatePassword").focusin(function(){
		$(this).parent("div").children(".check_circle").hide();
		update_pw_ch = false;
	});
	$(".updatePassword").focusout(function(){
		var pw = $(this).val();
		var regExpPw = /(?=.*\d{1,50})(?=.*[~`!@#$%\^&*()-+=]{1,50})(?=.*[a-zA-Z]{2,50}).{8,50}$/;
		// alert(regExpPw.test(pw));
		if(pw == ""){
			error_check($(this));
			update_pw_ch = false;
		}else if(!regExpPw.test(pw)){
			error_check($(this));
			update_pw_ch = false;
		}else{
			success_check($(this));
			update_pw_ch = true;
		}
	});
	$(".updateConfirmPassword").focusin(function(){
		$(this).parent("div").children(".check_circle").hide();
		update_conpw_ch = false;
	});
	$(".updateConfirmPassword").focusout(function(){
		var pw = $(this).parent("div").parent("div").children("div:nth-child(2)").children("input").val();
		var conpw = $(this).val();
		if(pw == conpw){
			success_check($(this));
			update_conpw_ch = true;
		}else if(conpw == ""){
			error_check($(this));
			update_conpw_ch = false;
		}else{
			error_check($(this));
			update_conpw_ch = false;
		}
	});

	var update_category_var = "";
	$(".category_div").click(function(){
		$(".category_div").css("background","rgba(255,255,255,0.0)");
		$(this).css("background","rgba(255,255,255,0.5)");
		update_category_var  = $(this).attr("data-index");
		// $(this).children(".category_circe").css("board-color","black");
		// $(this).children(".category_circe").children("i").css("color","black");
	});
	var update_flag = 0;
	$(".update_profile_circle").click(function(){
               $.ajax({
                  type:"POST",
                  dataType:"json",
                  url:$("head_url").text()+"member/get_member",
                  success:function(response){
                     $.each(response,function(key,value){
                        // alert("a");
                        $(".inputTags-list").addClass("up");
                        $('.updatename').val(value.name);
                        $('.updateage').val(value.age);
                        $('.updateEmail').val(value.email);
                        $(".updatePhone").val(value.phone);
                        $(".updateid").val(value.id);
                        $(".updatejink").val(value.sectors);
                        $(".update_img_circle > img").attr("src",$(".head_url").text()+value.porfile_img);
                        if(value.gender == "남성"){
                           $("input:radio[value='남성']").attr('checked', true);
                        }else{
                           $("input:radio[value='여성']").attr('checked', true);
                        }
                        if(value.military == "군필"){
                           $("input:radio[value='군필']").attr('checked', true);
                        }else{
                           $("input:radio[value='미필']").attr('checked', true);
                        }
                        if(value.category == "개발자"){
                           $(".deve").css("background","rgba(255,255,255,0.5)");
                        }else if(value.category == "디자이너"){
                           $(".digi").css("background","rgba(255,255,255,0.5)");
                        }else{
                           $(".plac").css("background","rgba(255,255,255,0.5)");
                        }
                        $(".updateyear").val(value.career);
                        // $(".inputTags-list").appen
                        // alert(value.info);
                        var info = value.info;
                        var infosplit = info.split(",");
                        for(var i in infosplit ){
                           // alert(infosplit[i]);
                           if(infosplit[i] == ""){
                              break;
                           }
                           var span = `<span class='inputTags-item' data-tag='${infosplit[i]}'>
                              <span class='value' title='Cliquez pour éditer'>${infosplit[i]}</span>
                              <i class='close-item'>x</i>
                           </span>`;
                           $(".inputTags-list").prepend(span);

                        }
                        if(value.division == 1){
                           $(".update_person_modal .job_firstdiv").css("visibility","visible");
                           $(".update_person_modal .job_second_div").css("visibility","hidden");
                           $(".update_person_modal .job_four_div").css("visibility","hidden");
                           $(".update_person_modal .job_thired_div").css("visibility","hidden");
                           update_flag = 1;
                           $(".update_person_modal").show();
                        }else{
                          $(".update_enter_modal .Enterprise_firstdiv").css("visibility","visible");
			               $(".update_enter_modal .Enterprise_seconddiv").css("visibility","hidden");
			               $(".update_enter_modal .Enterprise_thireddiv").css("visibility","hidden");
                           update_flag = 2;
                           $(".update_enter_modal").show();
                        }
                        
                     });
                  }
              });
            });


	var mo_pr = 0;
	$(".person_btn").click(function(){
		// 
		$(this).removeClass("gogo");
		$(".update_prev_btn_re").show();
		if(update_flag == 1){
			if(update_name_ch == false || update_age_ch == false ||  update_phone_ch == false){
	  			$.sweetModal({
					content:"오류 없이 입력해주세요.",
					icon: $.sweetModal.ICON_ERROR
				});
	  			return false;
  			}
  			
			if(mo_pr == 0){
				$(".update_person_modal .job_wrap").css("margin-left","-100%");
				$(".update_person_modal .job_firstdiv").css("visibility","hidden");
                $(".update_person_modal .job_second_div").css("visibility","visible");
                $(".update_person_modal .job_four_div").css("visibility","hidden");
                $(".update_person_modal .job_thired_div").css("visibility","hidden");
				mo_pr = 1;
			}else if(mo_pr == 1){
				$(".update_person_modal .job_firstdiv").css("visibility","hidden");
                $(".update_person_modal .job_second_div").css("visibility","hidden");
                $(".update_person_modal .job_four_div").css("visibility","hidden");
                $(".update_person_modal .job_thired_div").css("visibility","visible");
				if(update_pw_ch == false || update_conpw_ch == false){
			  			$.sweetModal({
							content:"오류 없이 입력해주세요.",
							icon: $.sweetModal.ICON_ERROR
						});
			  			return false;
		  			}
		  			$(".update_person_modal .job_wrap").css("margin-left","-200%");
		  			mo_pr = 2;
			}else if(mo_pr == 2){
				$(".update_person_modal .job_firstdiv").css("visibility","hidden");
                $(".update_person_modal .job_second_div").css("visibility","hidden");
                $(".update_person_modal .job_four_div").css("visibility","visible");
                $(".update_person_modal .job_thired_div").css("visibility","hidden");
		  			$(".update_person_modal .job_wrap").css("margin-left","-300%");
					mo_pr = 3;
					$(this).text("Update");
			}else if(mo_pr == 3){
				var updateyear = $(".updateyear").val();
				if(updateyear == ""){
					$.sweetModal({
							content:"경력을 입력해주세요.",
							icon: $.sweetModal.ICON_ERROR
						});
						return false;
				}
				var name = $(".job_seeker_wrap .updatename").val();
				var age = $(".job_seeker_wrap  .updateage").val();
				var email = $(".job_seeker_wrap  .updateEmail").val();
				var phone = $(".job_seeker_wrap  .updatePhone").val();
				var id = $(".job_seeker_wrap  .updateid").val();
				var pw = $(".job_seeker_wrap  .updatePassword").val();
				var gender = $('input[name="update_gender"]:checked').val();
				var milty = $('input[name="update_mility"]:checked').val();
				var cate = update_category_var;
				var up_jong = null;
				var year = $(".job_seeker_wrap .updateyear").val();
				var edut = $(".edut_select_update option:selected").val();
				var u_jasosu = "";
				var j_i = 0;
				$(".update_person_modal .job_seeker_wrap .up > span").each(function(){
					u_jasosu += $(this).attr("data-tag")+",";
					j_i++;
				});
				if(j_i == 0){
					$.sweetModal({
						content:"해시태그를 입력해주세요.",
						icon: $.sweetModal.ICON_ERROR
					});
					return false;
				}
				// alert(j_i);
				var division = 1;
				// var input_array = new Array(name,age,email,phone,id,pw,gender,milty,cate,up_jong,year,jasosu,division);
				// alert($("#update_input")[0].files[0]);
				if(typeof $(".person_img")[0].files[0] == "undefined"){
					var input_array = new Array(name,age,email,phone,id,pw,gender,milty,cate,up_jong,year,u_jasosu,division,null,edut);
					update_ajax(input_array);
				}else{
					var formData = new FormData();
					formData.append("profile_img",$(".person_img")[0].files[0]);
					 $.ajax({
	                url: $("head_url").text()+"insert_profile.php",
	                        processData: false,
	                        contentType: false,
	                        data: formData,
	                        type: 'POST',
	                        dataType:"json",
	                        success: function(result){
	                            // alert("업로드 성공!!");
	                            if(result.success == true){
	                            	var input_array = new Array(name,age,email,phone,id,pw,gender,milty,cate,up_jong,year,u_jasosu,division,result.url,edut);
	                            	update_ajax(input_array);
	                            }else{
	                            	$.sweetModal({
										content:"파일 업로드 실패.",
										icon: $.sweetModal.ICON_ERROR
									});
									return false;
	                            }
	                        }
	               	 });
               	 
				}
	
			}
		}else{
			if(update_name_ch == false || update_age_ch == false ||  update_phone_ch == false){
	  			$.sweetModal({
					content:"오류 없이 입력해주세요.",
					icon: $.sweetModal.ICON_ERROR
				});
	  			return false;
  			}
			
			if(mo_pr == 0){
				$(".update_enter_modal .Enterprise_firstdiv").css("visibility","hidden");
               $(".update_enter_modal .Enterprise_seconddiv").css("visibility","visible");
               $(".update_enter_modal .Enterprise_thireddiv").css("visibility","hidden");
               $(".update_enter_modal .Enterprise_body").css("margin-left","-100%");
				mo_pr = 1;
			}else if(mo_pr == 1){
				
				if(update_pw_ch == false || update_conpw_ch == false){
			  			$.sweetModal({
							content:"오류 없이 입력해주세요.",
							icon: $.sweetModal.ICON_ERROR
						});
			  			return false;
		  			}
		  			$(".update_enter_modal .Enterprise_firstdiv").css("visibility","hidden");
               $(".update_enter_modal .Enterprise_seconddiv").css("visibility","hidden");
               $(".update_enter_modal .Enterprise_thireddiv").css("visibility","visible");
				$(".update_enter_modal .Enterprise_body").css("margin-left","-200%");
				mo_pr = 2;
				$(this).text("Update");
			}else{
				 

				var name = $(".update_enter_modal .updatename").val();
					var age = $(".update_enter_modal .updateage").val();
					var email = $(".update_enter_modal .updateEmail").val();
					var phone = $(".update_enter_modal .updatePhone").val();
					var id = $(".update_enter_modal .updateid").val();
					var pw = $(".update_enter_modal .updatePassword").val();
					var gender = 0;
					var milty = 0;
					var cate = 0;
					var up_jong = $(".update_enter_modal .updatejink").val();
					var edut = null;
					var year = 0;
					// var inje = $(".Enterprise_wrap .injesang").val();
					var inje = "";
					var j_i = 0;
						$(".update_enter_modal .Enterprise_wrap .up > span").each(function(){
						inje += $(this).attr("data-tag")+",";
						j_i++;
					});
					var division = 2;
					if(typeof $(".Enterprise_body .etner_img")[0].files[0] == "undefined"){
					var input_array = new Array(name,age,email,phone,id,pw,gender,milty,cate,up_jong,year,inje,division,null,edut);
					update_ajax(input_array);
				}else{
					var formData = new FormData();
					formData.append("profile_img",$(".Enterprise_body .etner_img")[0].files[0]);
					 $.ajax({
	                url: $("head_url").text()+"insert_profile.php",
	                        processData: false,
	                        contentType: false,
	                        data: formData,
	                        type: 'POST',
	                        dataType:"json",
	                        success: function(result){
	                            // alert("업로드 성공!!");
	                            if(result.success == true){
	                            	var input_array = new Array(name,age,email,phone,id,pw,gender,milty,cate,up_jong,year,inje,division,result.url,edut);
	                            	update_ajax(input_array);
	                            }else{
	                            	$.sweetModal({
										content:"파일 업로드 실패.",
										icon: $.sweetModal.ICON_ERROR
									});
									return false;
	                            }
	                        }
	               	 });
               	 
				}
			}
		}
			
			
	});
	$(".update_prev_btn_re").click(function(){
		if(update_flag == 1){
			if(mo_pr == 3){
				$(".update_person_modal .job_firstdiv").css("visibility","hidden");
                $(".update_person_modal .job_second_div").css("visibility","hidden");
                $(".update_person_modal .job_four_div").css("visibility","hidden");
                $(".update_person_modal .job_thired_div").css("visibility","visible");
				$(".update_person_modal .job_wrap").css("margin-left","-200%");
				mo_pr = 2;
			}else if(mo_pr == 2){
				$(".update_person_modal .job_firstdiv").css("visibility","hidden");
                $(".update_person_modal .job_second_div").css("visibility","visible");
                $(".update_person_modal .job_four_div").css("visibility","hidden");
                $(".update_person_modal .job_thired_div").css("visibility","hidden");
				$(".update_person_modal .job_wrap").css("margin-left","-100%");
				mo_pr = 1;
			}else if(mo_pr == 1){
				$(".update_person_modal .job_firstdiv").css("visibility","visible");
                $(".update_person_modal .job_second_div").css("visibility","hidden");
                $(".update_person_modal .job_four_div").css("visibility","hidden");
                $(".update_person_modal .job_thired_div").css("visibility","hidden");
				$(".update_person_modal .job_wrap").css("margin-left","0%");
				mo_pr = 0;
			}
		}else{
			if(mo_pr == 2){
				$(".update_enter_modal .Enterprise_firstdiv").css("visibility","hidden");
               $(".update_enter_modal .Enterprise_seconddiv").css("visibility","visible");
               $(".update_enter_modal .Enterprise_thireddiv").css("visibility","hidden");
				 $(".update_enter_modal .Enterprise_body").css("margin-left","-100%");
			 mo_pr = 1;
			}else if(mo_pr == 1){
				$(".update_enter_modal .Enterprise_firstdiv").css("visibility","visible");
               $(".update_enter_modal .Enterprise_seconddiv").css("visibility","hidden");
               $(".update_enter_modal .Enterprise_thireddiv").css("visibility","hidden");
				$(".update_enter_modal .Enterprise_body").css("margin-left","-0%");
				mo_pr = 0;
			}
		}
	});	
	$(".update_person_modal .update_close").click(function(){
		$(".update_person_modal .job_firstdiv").css("visibility","visible");
        $(".update_person_modal .job_second_div").css("visibility","hidden");
        $(".update_person_modal .job_four_div").css("visibility","hidden");
        $(".update_person_modal .job_thired_div").css("visibility","hidden");
		$(".update_person_modal .job_wrap").css("margin-left","0%");
		mo_pr = 0;
		$(".update_person_modal").stop().fadeOut();
	});
	$(".update_enter_modal .update_close").click(function(){
		$(".update_enter_modal .Enterprise_firstdiv").css("visibility","visible");
       $(".update_enter_modal .Enterprise_seconddiv").css("visibility","hidden");
       $(".update_enter_modal .Enterprise_thireddiv").css("visibility","hidden");
		$(".update_enter_modal .Enterprise_body").css("margin-left","-0%");
		mo_pr = 0;
		$(".update_enter_modal").stop().fadeOut();
	});
});
function success_check(target){
	$(target).parent("div").children(".check_circle").show();
	$(target).parent("div").children(".check_circle").css("background","#00CC05");
	$(target).parent("div").children(".check_circle").children(".register_not").hide();
	$(target).parent("div").children(".check_circle").children(".register_check").show();
}
function error_check(target){
	$(target).parent("div").children(".check_circle").show();
	$(target).parent("div").children(".check_circle").css("background","red");
	$(target).parent("div").children(".check_circle").children(".register_not").show();
	$(target).parent("div").children(".check_circle").children(".register_check").hide();
}
function login_success_check(target)
{
	$(target).parent("div").children(".check_circle").show();
	$(target).parent("div").children(".check_circle").css("background","#00CC05");
	$(target).parent("div").children(".check_circle").children(".info_not").hide();
	$(target).parent("div").children(".check_circle").children(".info_check").show();
}
function login_error_check(target)
{
	$(target).parent("div").children(".check_circle").show();
	$(target).parent("div").children(".check_circle").css("background","red");
	$(target).parent("div").children(".check_circle").children(".info_check").hide();
	$(target).parent("div").children(".check_circle").children(".info_not").show();
}
function reset()
{
	// $(".register_second").css("visibility","hidden");
	// $(".register_thired").css("visibility","hidden");
	// $(".register_first").css("visibility","visible");
	// $(".register_body").css("margin-left","-0%");
	$(".Enterprise_wrap").hide();
	$(".job_seeker_wrap").hide();
	$('.register_intro').show();
	$(".job_wrap").css("margin-left","-0%");
	$(".Enterprise_body").css("margin-left","-0%");	
	regirster_flag = 0;
	count_index = 0;
	$(".prev_btn_re").hide();
	$(".register_btn").text("Next");
	$(".register_button").hide();
	$(".register_modal .check_circle").hide();
	$(".register_modal input").val("");	
}
function login_reset()
{
	$(".login_modal input").val("");
	$(".check_circle").hide();
}
function go_ajax(option){
	// alert(option[0]);
	$.ajax({
		type:"POST",
		data:{"insert":option},
		url:$(".head_url").text()+"member/insert_member",
		success:function(response){
			// alert(response);
			if(response == "1"){
				$.sweetModal.confirm('회원가입 성공', function() {
							location.reload();
					});
			}else{
				$.sweetModal({
							content:"회원가입 에러.",
							icon: $.sweetModal.ICON_ERROR
						});
			}
		}
	});
}
function update_ajax(option){
	// alert(option[0]);
	$.ajax({
		type:"POST",
		data:{"update":option},
		url:$(".head_url").text()+"member/update_member",
		success:function(response){
			if(response == "1"){
				$.sweetModal.confirm('회원수정 성공', function() {
							location.reload();
					});
			}else{
				$.sweetModal({
							content:"회원수정 에러.",
							icon: $.sweetModal.ICON_ERROR
						});
			}
		}
	});
}
function readURL(input) {
 if (input.files && input.files[0]) { 
 var reader = new FileReader(); 
 //파일을 읽기 위한 FileReader객체 생성 
 reader.onload = function (e) { 
 //파일 읽어들이기를 성공했을때 호출되는 이벤트 핸들러 
 $('.profile_img').attr('src', e.target.result); 
 $(".profile_img_div > img").attr("src",e.target.result);
 //이미지 Tag의 SRC속성에 읽어들인 File내용을 지정 //(아래 코드에서 읽어들인 dataURL형식)
 } 
 reader.readAsDataURL(input.files[0]); //File내용을 읽어 dataURL형식의 문자열로 저장 
} }
