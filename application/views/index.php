<!DOCTYPE html>
<html>
<head>
	<title>Link</title>
	<meta charset="utf-8">
	<!--sweetmodal-->
	<link rel="stylesheet" type="text/css" href="./static/libs/sweetmodal/jquery.sweet-modal.css">

	<link rel="icon" href="./static/images/header_logo.png" type="image/ico">

	<link rel="stylesheet" type="text/css" href="./static/libs/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="./static/libs/animate.css">
	<link rel="stylesheet" type="text/css" href="./static/libs/fullpage/fullpage.css">
	<link rel="stylesheet" type="text/css" href="./static/css/main.css">
	<link rel="stylesheet" type="text/css" href="./static/css/modal.css">
	<link rel="stylesheet" type="text/css" href="./static/css/header.css">
	<!-- <link rel="stylesheet" type="text/css" href="./static/css/content.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="./static/css/footer.css"> -->
	<script type="text/javascript" src="./static/libs/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="./static/libs/fullpage/fullpage.js"></script>
	<script type="text/javascript" src="./static/libs/sweetmodal/jquery.sweet-modal.js"></script>
	<script type="text/javascript" src="./static/js/custom_animate.js"></script>
	<script type="text/javascript" src="./static/js/member_script.js"></script>
	<title></title>
	<style type="text/css">
		header{
			/*display: none;*/
		}
		.serach_modal{
			display: none;
		}
	</style>
</head>
<body>
	<!-- <?php
		echo $id;
	?> -->
	<!-- <?php
		
	?>
	<?php
		
	?> -->
	<?php
		// include 'header.php';
	?>
	<?php
		include 'modal.php';
	?>
	<header>
		<div class="logo_div">
			<img src="./static/images/footer_logo.png" alt="img">
		</div>
		<div class="menu_div">
			<i class="fas fa-th-large"></i>
		</div>
	</header>
	<div class="matching_modal" style="display: none;">
		<div class="matching_wrap">
			<div class="matching_close_div">
				<i class="fas fa-times"></i>
			</div>
			<img src="<?=$url?>static/images/sign_img.jpg">
			<div class="matching_gray ">
				<div class="matching_cate job_go">
					<i class="fas fa-user-md"></i>
					<p>Job Matching</p>
				</div>
				<div class="matching_cate project_go">
					<i class="fas fa-user-friends"></i>
					<p>Project Matching</p>
				</div>
			</div>
		</div>
	</div>
	<div id="fullpage">
		<div class="section section1" data-anchor="page1"> 
			<video autoplay muted loop id="myVideo">
			  <source src="./static/video4.mp4" type="video/mp4">
			</video>
			<div class="balck">
				<div class="anim animated fadeIn">
					<div class="section1_top">
						<h1>IT와 Design 취업의 연결고리 LINK</h1>
					</div>
					<div class="section_bodytext">
						<p>포트폴리오를 통해 자신의 길을 찾아보세요!<br>
자신의 회사에 맞는 사원을 찾는다면 LINK Smart Matching으로 찾아보세요!</p>
					</div>
					<div class="serach_div">
						<div style="width: 650px; position: absolute; top: 510px; left: 635px;">
							<input id="url" type="text" name="url" required style="color:white;">
					      <label for="url"><i class="fa fa-search ser_i" aria-hidden="true" style="color: RGBA(120,120, 120, 0.8);;"></i> Search</label>
					      <div class="after"></div>
						</div>
					</div>
					<div class="section1_icons">
						<div class="icons_item">
							<a href="#page2">
							<img src="./static/images/link_icon_1.png" alt="img">
							<p>Portfollo</p></a>
						</div>
						<div class="icons_item">
							<a href="#page3">
							<img src="./static/images/link_icon_2.png" alt="img">
							<p>Smart Matching</p></a>
						</div>
						<div class="icons_item">
							<a href="#page4">
							<img src="./static/images/link_icon_3.png" alt="img">
							<p>Support</p></a>
						</div>
						<!-- <img src="./static/images/link_icon_1.png" alt="img"> -->
					</div>
					<div class="scroll_div">
						<i class="fas fa-chevron-down"></i>
						<p>scroll</p>
					</div>
				</div>
				
			</div>
		</div>
		<div class="section section2" data-anchor="page2"> 
			<img src="./static/images/works.jpg" alt="img">
			<div class="balck">
				<div class="anim animated fadeIn">
					<div class="section1_top">
						<h1 style="font-size: 4.5em;">Portfolio</h1>
					</div>
					<div class="section_bodytext">
						<p style="font-size: 1.4em;">분야 별 포트폴리오를 통해 자신의 실력을 인증하세요!<br>
포트폴리오를 통해 기업 매칭이 이뤄지는 LINK!
						</p>
					</div>
					<div class="section2_btn_div">
						<button class="portfolio_more">더 보러가기</button>
					</div>
					<div class="section2_icons">
						<!-- <img src="./static/images/web.png"> -->
						<div class="section2_item" data-href="portfoilo?cate=웹디자인&div=cate">
							<div class="section2_item_img">
								<img src="./static/images/web.png">
							</div>
							<p>웹 디자인</p>
						</div>

						<div class="section2_item" data-href="portfoilo?cate=타이포그래피&div=cate">
							<div class="section2_item_img">
								<img src="./static/images/type.png" style="width: 85px;">
							</div>
							<p>타이포그래피</p>
						</div>

						<div class="section2_item" data-href="portfoilo?cate=그래픽디자인&div=cate">
							<div class="section2_item_img">
								<img src="./static/images/grpy.png" style="width: 55px;">
							</div>
							<p>그래픽디자인</p>
						</div>


						<div class="section2_item" data-href="portfoilo?cate=편집디자인&div=cate">
							<div class="section2_item_img">
								<img src="./static/images/update.png">
							</div>
							<p>편집디자인</p>
						</div>


						<div class="section2_item" data-href="portfoilo?cate=IT&div=cate">
							<div class="section2_item_img">
								<img src="./static/images/it.png" style="width: 85px;">
							</div>
							
							<p>IT</p>
						</div>

						<div class="section2_item" data-href="portfoilo?cate=영상/모션그래픽&div=cate">
							<div class="section2_item_img">
								<img src="./static/images/video.png">
							</div>
							
							<p>video</p>
						</div>
					</div>
					<div class="scroll_div">
						<i class="fas fa-chevron-down"></i>
						<p>scroll</p>
					</div>
				</div>
			</div>
		</div>
		<div class="section section3" data-anchor="page3"> 
			<img src="./static/images/headhunter.png" alt="img">
			<div class="balck">
				<div class="anim animated fadeIn">
					<div class="section1_top section3_top" style="height: 33%;">
						<h1 style="font-size: 4.5em; line-height:500px;">Smart Matching</h1>
					</div>
					<div class="section_bodytext" style="padding-top: 0;">
						<p style="font-size: 1.4em;"> LINK의 Smart matching 을 이용하여 자신과 맞는 파트너를 찾아보세요!<br>
기업에 색깔에 맞는 사원 채용도<br>
프로젝트에 맞는 팀원 모집도 LINK를 통해서 쉽고 간단하게!
						</p>
					</div>
					<div class="smart_section">
						<?php
							if(isset($id)){
						?>
						<button class="smart_btns">Smart Matching Start</button>
						<?php
							}else{
						?>
						<button class="not_login smart_btns_not_login">Smart Matching Start</button>
						<?php
							}
						?>
						
					</div>
					<div class="section3_slide_btn ">
						<div class="gray_line">
						</div>
						<div class="circle gray_circle first_circle enterper">
							<p>Design</p>
						</div>
						<div class="circle larg_circle second_circle head">
							<p>Smart Matching <br> & <br> Portfolio </p>
						</div>
						<div class="circle gray_circle thred_circle project">
							<p>IT</p>
						</div>
					</div>
					<div class="scroll_div">
						<i class="fas fa-chevron-down"></i>
						<p>scroll</p>
					</div>
				</div>
			</div>
		</div>
		<div class="section section4" data-anchor="page4"> 
			<img src="./static/images/company_bu.jpg" alt="img">
			<div class="balck">
				<div class="anim animated fadeIn">
					<div class="section1_top">
						<h1 style="font-size: 4.0em;">취업서포트</h1>
					</div>
					<div class="section_bodytext">
						<p style="font-size: 1.4em;">당신이 출근하는 그날까지 당신의 취업을 위한 모든 것!
						</p>
					</div>
					<div class="section4_imgs_div" >
						<div class="section4_item gove">
							<div class="item_black">
							</div>
							<img src="./static/images/enter_item.png">
							<h2 class="section4_title">정부지원 정책</h2>
							<h2 class="section4_info">정부지원 정책 보러가기</h2>
							<i class="fas fa-long-arrow-alt-right arrow"></i>
						</div>
						<div class="section4_item fest">
							<div class="item_black">
							</div>
							<img src="./static/images/head_item.png">
							<h2 class="section4_title">공모전 UPDATE</h2>
							<h2 class="section4_info">공모전 보러가기</h2>
							<i class="fas fa-long-arrow-alt-right arrow"></i>
						</div>
						<div class="section4_item qna">
							<div class="item_black">
							</div>
							<img src="./static/images/project_item.png">
							<h2 class="section4_title">취업성공 Q&A</h2>
							<h2 class="section4_info">취업성공 Q&A 보러가기</h2>
							<i class="fas fa-long-arrow-alt-right arrow"></i>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</body>
</html>