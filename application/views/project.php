<!DOCTYPE html>
<html>
<head>
	<title>Link</title>
	<meta charset="utf-8">
	<!--sweetmodal-->
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.css">
	<link rel="icon" href="<?=$url?>static/images/header_logo.png" type="image/ico">
<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/slick/slick.css"/>




	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/sub_header.css">
	<link rel="stylesheet" type="text/css" href= "<?=$url?>static/css/project.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/modal.css">
	<script type="text/javascript" src="<?=$url?>static/libs/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/jquery.lazyload.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/project.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/member_script.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/circle-progress.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/scroll.js"></script>
	<div id="fb-root"></div>

	<title></title>
	<style type="text/css">
		.company_list_page > a{
			cursor: pointer;
		}

	</style>
</head>
<body>
	<!-- <?php
		echo $id;
	?> -->
	<?php
		include 'modal.php';
	?>
	<div class="reply_modal" style="display: none;">
		<div class="reply_modal_wrap">
			<div class="reply_modal_top">
				<div>
					<h2>쪽지쓰기</h2>
				</div>
				<div class="top_right">
					<i class="fas fa-times reply_close"></i>
				</div>
			</div>
			<div class="reply_modal_body">
				<div class="reply_body_top">
					<p>받는사람</p><input type="text" class="reply_input_id" placeholder="받는 분의 아이디를 입력해주세요.">
					<textarea class="reply_input_body"></textarea>
					<div class="reply_body_bottom">	
						<p>/1000자</p>
						<p class="replay_count">0</p>
					</div>
				</div>
			</div>
			<div class="reply_modal_bottom">
				<button class="reply_success_btn">보내기</button>
			</div>
		</div>
	</div>


	<p class="get_id" style="display: none;"><?=$id?></p>
	<div class="project_modal" style="display: none;">
		<div class="project_modal_wrap">
			<div class="modal_title"> 
				<h2>매칭결과, 기획자 총 ~명이 추천되었습니다.</h2>
				<p>[ TEAM MATCHING ]</p>
				<div class="close_circle">
					<i class="fas fa-times"></i>
				</div>
			</div>
			<div class="modal_body">
				<div class="modal_body_left">
					<button class="body_left_btn planer_btn">기획자</button>
					<button class="body_left_btn dev_btn">개발자</button>
					<button class="body_left_btn degin_btn">디자이너</button>
					<h3>매칭 요구사항</h3>
					<p class="planer_p">기획1명</p>
					<p class="degin_p">디자이너1명</p>
					<p class="dev_p">개발자1명</p>
					<div class="modal_img_circle">
						<img src="<?=$url?>static/images/footer_logo.png" alt="img">
					</div>
				</div>
				<div class="modal_body_right">
					<table class="modal_body_table">
						<thead></thead>
					</table>
				</div>
			</div>
		</div>
	</div>
	<p style="display:none;" class="get_url"><?=$url?></p>
	<div class="wrap">
		<div class="company_top">
			<img src="<?=$url?>static/images/job_back.png" alt="img">
			<div class="mi_div">
				<div class="company_title">
						<h1>JOB Matching</h1>
						<!-- <p>함께 만들어가는 기업, 링크</p> -->
				</div>
			</div>
		</div>
		<nav class="comapny_nav">
			<h1>프로젝트 정보와 필요한 포지션·인원수를 입력하시면 자동으로 팀을 매칭해드립니다.</h1>
		</nav>
		<section class="project_section">
			
			<div class="project_wrap">
				<h1>[ 필수정보입력 ]</h1>
				<div class="project_title">
					<div class="project_title_left">
						<p>프로젝트<br>
제안자</p>
					</div>
					<div class="project_title_right">
						<div class="title_circle">
							<div class="title_white_circle">
								<div class="in_circle">
									<img src="<?=$url?>static/userprofile/FypOdYVQyR1558321051-image.jpg">
								</div>
							</div>
						</div>
						<h1><?=$member[0]->name?>(<?=$member[0]->id?>)</h1>
					</div>
				</div>
				<div class="project_name">
					<div class="project_title_left name_title">
						<p>프로젝트명</p>
					</div>
					<input type="text" class="project_name_input">
				</div>
				<div class="project_info">
					<div class="info_left">
						<div class="project_title_left">
						<p>프로젝트<br>설명</p>
						</div>
						<textarea class="project_info_input"></textarea>
					</div>
					<div class="info_right" >
						<div class="right_left">
							<div class="project_title_left info_title">
							<p>현재참여인원</p>
							</div>
							<input type="number" class="current_input" placeholder="직접입력(숫자만)">
							<div class="prject_infos">
									<div class="project_title_left info_title">
									<p>추가모집<br>
포지션·인원</p>
									</div>
								<div class="project_select">
									<div class="selct_item">
										<img src="<?=$url?>static/images/port_img/port_grp.jpg">
										<p>기획자</p>
										<select class="select_person planer">
											<option  value="1">1명</option>
											<option value="2">2명</option>
											<option value="3">3명</option>
											<option value="4">4명</option>
											<option value="5">5명</option>
										</select>
									</div>
									<div class="selct_item">
										<img src="<?=$url?>static/images/port_img/port_grp.jpg">
										<p>개발자</p>
										<select class="select_person dev">
											<option  value="1">1명</option>
											<option value="2">2명</option>
											<option value="3">3명</option>
											<option value="4">4명</option>
											<option value="5">5명</option>
										</select>
									</div>
									<div class="selct_item">
										<img src="<?=$url?>static/images/port_img/port_grp.jpg">
										<p>디자이너</p>
										<select class="select_person degin">
											<option  value="1">1명</option>
											<option value="2">2명</option>
											<option value="3">3명</option>
											<option value="4">4명</option>
											<option value="5">5명</option>
										</select>
									</div>
								</div>
							</div>
							
						</div>
						<div class="right_btn">
							<div class="start_circle">
								<div id="circle"></div>
								<p>MATCHING<br><span>START</span></p>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- asg -->
	</div>
	<?php
		include 'header.php';
	?>
		<?php
			include 'footer.php';
		?>
	</div>
</body>
</html>