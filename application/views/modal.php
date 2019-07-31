<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/inputTags.css">
<script type="text/javascript" src="<?=$url?>static/libs/inputTags.jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		// my_hash
		$('.my_hash').inputTags({
				max: 10
		});
		$('.enter_hash').inputTags({
				max: 10
		});
		$('.update_hash').inputTags({
				max: 10
		});
	});
</script>
<div class="login_modal" style="display: none;">
		<div class="login_wrap" style="">
			<img src="<?=$url?>static/images/sign_img.jpg" alt="img">
			<div class="login_div">
				<div class="login_close">
					<i class="fas fa-times"></i>
				</div>
				<div class="login_logo">
					<img src="<?=$url?>static/images/login_logo.png" alt="logo">
				</div>
				<div class="login_title">
					<h1>LOGIN</h1>
				</div>
				<div class="login_id">
					<p>ID</p>
					<input type="text" name="text" class="inputid">
					<div class="circle check_circle" style="display: none;">
						<i class="fas fa-check info_check"></i>
						<i class="fas fa-times info_not" style="display: none;"></i>
					</div>
				</div>
				<div class="login_pw">
					<p>Password</p>
					<input type="password" name="text" class="inputpw">
					<div class="circle check_circle" style="display: none;">
						<i class="fas fa-check info_check"></i>
						<i class="fas fa-times info_not" style="display: none;"></i>
					</div>
					<p class="find_pw" style="cursor: pointer;">Forgot Password?</p>
					<p class="login_or_regi_go" style="cursor: pointer;">회원가입</p>
				</div>
				<div class="login_button">
					<button class="login_btn">Login</button>
				</div>
			</div>
		</div>
	</div>


	<div class="register_modal" style="display: none;">
		<div class="register_wrap">
			<img src="<?=$url?>static/images/sign_img.jpg" alt="img">
			<div class="register_div">
				<div class="register_close">
					<i class="fas fa-times"></i>
				</div>
				<div class="register_logo">
					<img src="<?=$url?>static/images/login_logo.png" alt="logo">
				</div>
				<div class="register_title">
					<h1>Reegister</h1>
				</div>
				<div class="register_body" >
					<div class="register_intro">
						<div class="intro_div job">
							<div class="intro_top">
								<img src="<?=$url?>static/images/jobseeker.png" alt="img">
							</div>
							<div class="intro_bottom">
								<p>Job seeker</p>
							</div>
						</div>
						<div class="intro_div enter_a">
							<div class="intro_top">
								<img src="<?=$url?>static/images/company.png" alt="img" style="margin-top: 15%;">
							</div>
							<div class="intro_bottom">
								<p>Enterprise</p>
							</div>
						</div>
					</div>
					<div class="job_seeker_wrap" style="overflow: hidden; display:none;">
						<div class="job_wrap">
							<div class="job_firstdiv">
								<div class="register_group">
									<p>Name</p>
									<input type="text" name="text" class="registername">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Age</p>
									<input type="text" name="text" class="registerage">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Email</p>
									<input type="text" name="text" class="registerEmail">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Phone</p>
									<input type="text" name="text" class="registerPhone">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
							</div>
							<div class="job_second_div">
								<div class="register_group">
									<p>ID</p>
									<input type="text" name="text" class="registerid">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Password</p>
									<input type="password" name="text" class="registerPassword">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Confirm Password</p>
									<input type="password" name="text" class="registerConfirmPassword">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
							</div>
							<div class="job_thired_div">
								<div class="job_thired_title">
									<p>Category</p>
								</div>
								<div class="job_thired_div_body">
									<div class="radio_group gender">
										<label for="man" style="margin-left: 20px;">MAN</label>
										<input type="radio" name="gender" id="man" class="gender_radio" value="남성">
										<label for="woman" style="margin-left: 20px;">WOMAN</label>
										<input type="radio" name="gender" id="woman" class="gender_radio" value="여성">
									</div>
									<div class="radio_group milty">
										<label for="gon" style="margin-left: 20px;">군필</label>
										<input type="radio" name="mility" id="gon" class="mility_radio" value="군필">
										<label for="me" style="margin-left: 40px;">미필</label>
										<input type="radio" name="mility" id="me" class="mility_radio" value="미필">
									</div>
									<div class="category_group">
										<div class="category_div deve" data-index="개발자">
											<div class="circle category_circe">
												<img src="<?=$url?>static/images/dev_icon.png" alt="img">
											</div>
											<p>developer</p>
										</div>

										<div class="category_div deve" data-index="디자이너">
											<div class="circle category_circe">
												<img src="<?=$url?>static/images/degi_icon.png" alt="img">
											</div>
											<p>designer</p>
										</div>

										<div class="category_div deve" data-index="기획자">
											<div class="circle category_circe">
												<img src="<?=$url?>static/images/pal_icon.png" alt="img">
											</div>
											<p>Planner</p>
										</div>
									</div>
								</div>
							</div>
							<div class="job_four_div">
								<div class="register_group" style="float: left; width: 50%">
									<p>경력</p>
									<input type="text" name="text" class="registeryear" style="width: 150px;" placeholder="신입 or 년수">
									<!-- <span>년</span> -->
								</div>
								<div class="register_group" style="float: left; width: 50%">
									<p>학력</p>
									<!-- <input type="text" name="text" class="registeryear" style="width: 150px;" placeholder="신입 or 년수"> -->
									<select class="edut_select" style="width: 150px; box-sizing: border-box;
									 border: 1px solid white; color: white; font-size: 17px; height: 30px; background: none;margin-top: 10px;">
										<option value="고졸">고졸</option>
										<option value="초대졸">초대졸</option>
										<option value="대졸">대졸</option>
									</select>
									<!-- <span>년</span> -->
								</div>
								<div class="register_group" style="float: left;">
									<p style="font-size: 16px;">자기자신을 해시태그형식으로 입력해주세요</p>
									<!-- <textarea class="my_hash"></textarea> -->
									<input type="text" class="my_hash">
									<!-- <span>년</span> -->
								</div>
							</div>
						</div>
					</div>
					<div class="Enterprise_wrap" style="overflow: hidden; display: none;">
						<div class="Enterprise_body">
							<div class="Enterprise_firstdiv">
								<div class="register_group">
									<p>기업이름</p>
									<input type="text" name="text" class="registername">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>

								<div class="register_group">
									<p>업무</p>
									<input type="text" name="text" class="registerjink">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>

								<div class="register_group">
									<p>Email</p>
									<input type="text" name="text" class="registerEmail">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>

								<div class="register_group">
									<p>Phone</p>
									<input type="text" name="text" class="registerPhone">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
							</div>
							<div class="Enterprise_seconddiv">
								<div class="register_group">
									<p>ID</p>
									<input type="text" name="text" class="registerid">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Password</p>
									<input type="password" name="text" class="registerPassword">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Confirm Password</p>
									<input type="password" name="text" class="registerConfirmPassword">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
							</div>
							<div class="Enterprise_thireddiv">
								<p class="Enterprise_thireddiv_title">원하는 인재상을 해시태그로 입력해주세요</p>
								<input type="text" class="enter_hash">
							</div>
						</div>
					</div>
				</div>
				<div class="register_button" style="display: none;">
					<i class="fas fa-chevron-left prev_btn_re" style="display: none;"></i>
					<button class="register_btn first_next">Next</button>
				</div>
				</div>
				
			</div>
		</div>
	</div>


<script type="text/javascript">
	$(document).ready(function(){
		// alert("a");
		$(".menu_main_menu > li").mouseover(function(){
			$(this).children(".submenu").stop().slideDown("slow");
		});
		$(".menu_main_menu > li").mouseleave(function(){
			$(this).children(".submenu").stop().slideUp("slow");
		});
		$(".menu_modal_close > i").click(function(){
			$(".menu_modal").fadeOut();
		});

		$(document).keyup(function(e) {
		     if (e.keyCode == 27) { 
		     	// alert("a");
		     	$(".menu_modal").fadeOut();
		     	$(".register_modal").fadeOut();
		     	$(".login_modal").fadeOut();
		     	$(".serach_modal").fadeOut();
		    }
		});
	});
</script>

<div class="menu_modal" style="display: none;">
	<div class="menu_modal_top">
		<div class="menu_modal_logo">
			<img src="<?=$url?>static/images/footer_logo.png" alt="img">
		</div>
		<div class="menu_modal_close">
			<?php
				if(isset($id)){
			?>
			<p style="margin-left: 800px;" class="logout_text">로그아웃</p>
			<?php
				}else{
			?>
			<p style="margin-left: 800px;" class="login_btn_p">로그인</p>
			<?php
				}
			?>
			
			<p style="margin-left:50px;" class="regi_btn_p">회원가입</p>
			<i class="fas fa-times"></i>
		</div>
	</div>
	<div class="menu_modal_body">
		<nav class="menu_modal_nav">
			<ul class="menu_main_menu">
				<li><a href="<?=$url?>portfoilo">Portfolio</a>
					<ul class="submenu">
						<li><a href="<?=$url?>portfoilo?cate=웹디자인&div=cate">웹디자인</a></li>
						<li><a href="<?=$url?>portfoilo?cate=타이포그래피&div=cate">타이포그래피</a></li>
						<li><a href="<?=$url?>portfoilo?cate=그래픽디자인&div=cate">그래픽디자인</a></li>
						<li><a href="<?=$url?>portfoilo?cate=편집디자인&div=cate">편집디자인</a></li>
						<li><a href="<?=$url?>portfoilo?cate=IT&div=cate">IT</a></li>
						<li><a href="<?=$url?>portfoilo?cate=영상/모션그래픽&div=cate">Video</a></li>
					</ul>
				</li>
				<li><a href="#">Smart Matching</a>
					<ul class="submenu">
						<?php
							if(isset($id)){
						?>
						<li><a href="<?=$url?>matching/job">Job Matching</a></li>
						<li><a href="<?=$url?>matching/project">Project Matching</a></li>
						<?php
							}else{
						?>
						<li><a href="#">Job Matching</a></li>
						<li><a href="#">Project Matching</a></li>
						<?php
							}
						?>
						
					</ul>
				</li>
				<li><a href="<?=$url?>company/index">채용정보</a></li>
				<li><a href="#">취업서포트</a>
					<ul class="submenu">
						<li><a href="<?=$url?>support/government">정부지원사업</a></li>
						<li><a href="<?=$url?>support/competition">공모전</a></li>
						<li><a href="<?=$url?>support/qna">질문게시판</a></li>
					</ul>
				</li>
				<?php
					if(isset($id)){
				?>
				<li><a href="mypage?id=<?=$id?>" style="color:white;">MyPage</a></li>
				<?php
					}else{
				?>
				<li class="not_login"><a href="#" style="color:white;">MyPage</a></li>
				<?php
					}
				?>
				<li><a href="<?=$url?>service">서비스소개</a></li>
			</ul>
		</nav>
		<div class="menu_footer">
			<h1>LINK</h1>
			<div class="footer_office_1" style="margin-left: 0px;">
					<h3>OFFICE</h3>
					<h4>HEADQUARTER</h4>
					<p>Jeju Special Self-<br>
Governing Province</p>
				</div>

				<div class="footer_contact_1" style="margin-left: 200px; margin-top: 20px;">
					<h3>CONTACT US</h3>
					<!-- <h4>HEADQUARTER</h4> -->
					<p>link@naver.com<br>
+82 010-2957-6336</p>
				</div>

			<div class="footer_partners_1" style="margin-left: 150px; margin-top: 20px;">
					<h3>PARTNERS</h3>
					<h4>Business</h4>
					<p>Samsung<br>LG<br>Apple</p>
					<h4 style="margin-top: 30px;">Advertising</h4>
					<p>Google<br>PUBG<br>EA</p>
				</div>

				<div class="footer_sns_1">
					<h3>SNS</h3>
					<!-- <h4>Business</h4> -->
					<p>Facebook<br>Twitter<br>Google<br>Git</p>
				</div>

				<div class="copyright_1" style="margin-left: 100px; margin-top: 40px;">
					<span>Copyright 2019. Link All rights reserved.</span>
				</div>
		</div>
	</div>
</div>
<div class="find_pw_modal" style="display: none;">
		<div class="find_pw_wrap" style="">
			<img src="<?=$url?>static/images/sign_img.jpg" alt="img">
			<div class="find_pw_div">
				<div class="find_pw_close">
					<i class="fas fa-times"></i>
				</div>
				<div class="find_pw_logo">
					<img src="<?=$url?>static/images/login_logo.png" alt="logo">
				</div>
				<div class="find_pw_title">
					<h1>FIND PW</h1>
				</div>
				<div class="find_pw_id">
					<p>ID</p>
					<input type="text" name="text" class="find_id_input">
					<div class="circle check_circle" style="display: none;">
						<i class="fas fa-check info_check"></i>
						<i class="fas fa-times info_not" style="display: none;"></i>
					</div>
				</div>
				<div class="find_pw_pw">
					<p>Name</p>
					<input type="text" name="text" class="find_name_input">
					<div class="circle check_circle" style="display: none;">
						<i class="fas fa-check info_check"></i>
						<i class="fas fa-times info_not" style="display: none;"></i>
					</div>
				</div>
				<div class="find_pw_button">
					<button class="find_pw_cnale">취소</button>
					<button class="find_pw_btn">찾기</button>
				</div>
			</div>
		</div>
	</div>

<div class="loading_modal loadgin_mail_modal" style="display: none;">
	<div class="loading_wrap">
		<div class="loading-container">
		    <div class="loading"></div>
		    <div id="loading-text">loading</div>
		</div>
		<p>메일을 전송중입니다.</p>
	</div>
	
</div>


<div class="loading_modal loading_modal_mypage" style="display: none;">
	<div class="loading_wrap">
		<div class="loading-container">
		    <div class="loading"></div>
		    <div id="loading-text">loading</div>
		</div>
		<p>잠시만기다려주세요.</p>
	</div>
	
</div>



<!-- 회원수정 취준생 -->
<div class="update_modal update_person_modal" style="display: none;">
		<div class="update_wrap">
			<img src="<?=$url?>static/images/sign_img.jpg" alt="img">
			<div class="register_div">
				<div class="update_close">
					<i class="fas fa-times"></i>
				</div>
				<div class="register_logo">
					<img src="<?=$url?>static/images/login_logo.png" alt="logo">
				</div>
				<div class="register_title">
					<h1>Modified</h1>
				</div>
				<div class="update_body" >
					<div class="job_seeker_wrap" style="overflow: hidden; display:block;">
						<div class="job_wrap">
							<div class="job_firstdiv">
								<div class="register_group update_img">
									<div class="update_img_circle">
										<img class="profile_img" src="<?=$url?>static/images/white_empty.png" alt="logo" >
									</div>
									<label for="update_input" class="file_label1"><i class="fas fa-pen"></i></label>
									<input type="file" id="update_input" class="person_img"accept=".gif, .jpg, .png">
								</div>
								<div class="register_group">
									<p>Name</p>
									<input type="text" name="text" class="updatename">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Age</p>
									<input type="text" name="text" class="updateage">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Email</p>
									<input type="text" name="text" class="updateEmail" readonly>
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Phone</p>
									<input type="text" name="text" class="updatePhone">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
							</div>
							<div class="job_second_div">
								<div class="register_group">
									<p>ID</p>
									<input type="text" name="text" class="updateid" readonly>
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Password</p>
									<input type="password" name="text" class="updatePassword">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Confirm Password</p>
									<input type="password" name="text" class="updateConfirmPassword">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
							</div>
							<div class="job_thired_div">
								<div class="job_thired_title">
									<p>Category</p>
								</div>
								<div class="job_thired_div_body">
									<div class="radio_group gender">
										<label for="man" style="margin-left: 20px;">MAN</label>
										<input type="radio" name="update_gender" id="man" class="gender_radio" value="남성">
										<label for="woman" style="margin-left: 20px;">WOMAN</label>
										<input type="radio" name="update_gender" id="woman" class="gender_radio" value="여성">
									</div>
									<div class="radio_group milty">
										<label for="gon" style="margin-left: 20px;">군필</label>
										<input type="radio" name="update_mility" id="gon" class="mility_radio" value="군필">
										<label for="me" style="margin-left: 40px;">미필</label>
										<input type="radio" name="update_mility" id="me" class="mility_radio" value="미필">
									</div>
									<div class="category_group">
										<div class="category_div deve" data-index="개발자">
											<div class="circle category_circe">
												<img src="<?=$url?>static/images/dev_icon.png" alt="img">
											</div>
											<p>developer</p>
										</div>

										<div class="category_div digi" data-index="디자이너">
											<div class="circle category_circe">
												<img src="<?=$url?>static/images/degi_icon.png" alt="img">
											</div>
											<p>designer</p>
										</div>

										<div class="category_div plac" data-index="기획자">
											<div class="circle category_circe">
												<img src="<?=$url?>static/images/pal_icon.png" alt="img">
											</div>
											<p>Planner</p>
										</div>
									</div>
								</div>
							</div>
							<div class="job_four_div">
								<div class="register_group" style="float: left; width: 50%;">
									<p>경력</p>
									<input type="text" name="text" class="updateyear" style="width: 150px;" placeholder="신입 or 년수">
								</div>
								<div class="register_group" style="float: left; width: 50%">
									<p>학력</p>
									<!-- <input type="text" name="text" class="registeryear" style="width: 150px;" placeholder="신입 or 년수"> -->
									<select class="edut_select_update" style="width: 150px; box-sizing: border-box;
									 border: 1px solid white; color: white; font-size: 17px; height: 30px; background: none;margin-top: 10px;">
										<option value="고졸">고졸</option>
										<option value="초대졸">초대졸</option>
										<option value="대졸">대졸</option>
									</select>
									<!-- <span>년</span> -->
								</div>
								<div class="register_group" style="float: left;">
									<p style="font-size: 16px;">자기자신을 해시태그형식으로 입력해주세요</p>
									<input type="text" class="update_hash">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="update_button" style="display: block;">
					<i class="fas fa-chevron-left update_prev_btn_re" style="display: none;"></i>
					<button class="update_btn person_btn">Next</button>
				</div>
				</div>
				
			</div>
		</div>
	</div>

<div class="update_modal update_enter_modal" style="display: none;">
		<div class="update_wrap">
			<img src="<?=$url?>static/images/sign_img.jpg" alt="img">
			<div class="register_div">
				<div class="update_close">
					<i class="fas fa-times"></i>
				</div>
				<div class="register_logo">
					<img src="<?=$url?>static/images/login_logo.png" alt="logo">
				</div>
				<div class="register_title">
					<h1>Modified</h1>
				</div>
				<div class="update_body" >
					<div class="Enterprise_wrap" style="overflow: hidden;">
						<div class="Enterprise_body">
							<div class="Enterprise_firstdiv">
								<div class="register_group update_img">
									<div class="update_img_circle">
										<img class="profile_img" src="<?=$url?>static/images/white_empty.png" alt="logo" >
									</div>
									<label for="update_input_1" class="file_label1"><i class="fas fa-pen"></i></label>
									<input type="file" id="update_input_1" class="etner_img" accept=".gif, .jpg, .png">
								</div>
								<div class="register_group">
									<p>기업이름</p>
									<input type="text" name="text" class="updatename">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>

								<div class="register_group">
									<p>업무</p>
									<input type="text" name="text" class="updatejink">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>

								<div class="register_group">
									<p>Email</p>
									<input type="text" name="text" class="updateEmail">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>

								<div class="register_group">
									<p>Phone</p>
									<input type="text" name="text" class="updatePhone">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
							</div>
							<div class="Enterprise_seconddiv">
								<div class="register_group">
									<p>ID</p>
									<input type="text" name="text" class="updateid">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Password</p>
									<input type="password" name="text" class="updatePassword">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Confirm Password</p>
									<input type="password" name="text" class="updateConfirmPassword">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
							</div>
							<div class="Enterprise_thireddiv">
								<p class="Enterprise_thireddiv_title">원하는 인재상을 해시태그로 입력해주세요</p>
								<input type="text" class="enter_hash">
							</div>
						</div>
					</div>
				</div>
				<div class="update_button" style="display: block;">
					<i class="fas fa-chevron-left update_prev_btn_re" style="display: none;"></i>
					<button class="update_btn person_btn">Next</button>
				</div>
				</div>
				
			</div>
		</div>