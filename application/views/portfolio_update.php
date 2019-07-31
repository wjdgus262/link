
<!DOCTYPE html>
<html>
<head>
	<title>Link</title>
	<meta charset="utf-8">
	<!--sweetmodal-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">


	<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.css">
	<link rel="icon" href="<?=$url?>static/images/header_logo.png" type="image/ico">
<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/bootstrap-tagsinput.css">




	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/animate.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/sub_header.css">
	<link rel="stylesheet" type="text/css" href= "<?=$url?>static/css/portfoilo_insert.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/modal.css">
	<script type="text/javascript" src="<?=$url?>static/libs/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/jquery.lazyload.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/bootstrap-tagsinput.js"></script>
<script type="text/javascript" src="<?=$url?>static/js/port_update.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/member_script.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/scroll.js"></script>
	<!-- <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script> -->
	<div id="fb-root"></div>
<!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v3.2&appId=2153835338214363&autoLogAppEvents=1"></script> -->
<!-- <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=d9e5d4d7b66f6c50826123e4c4b2ade2"></script> -->
<!-- <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=d9e5d4d7b66f6c50826123e4c4b2ade2&libraries=services"></script> -->



	<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/fileupload/fileinput.css">
	<script type="text/javascript" src="<?=$url?>static/libs/fileupload/fileinput.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/fileupload/kr.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/fileupload/piexif.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/fileupload/purify.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/fileupload/sortable.min.js"></script>
	<title></title>
	<style type="text/css">
		header *{
			font-size: 19px;
		}
		.bootstrap-tagsinput{
			/*background: red;*/
			border-radius: 0px;
			width: 82%;
			height: 100%;
			border: 1px solid #ddd;
			font-size: 17px;
			background: white;
			line-height: 40px;
		}
		.company_top{
	overflow: hidden;
}
.mi_div{
	height: 352px;
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
	<!-- <input type="" name="" placeholder=""> -->
	<p class="get_id" style="display: none;"><?=$id?></p>
	<p class="get_num" style="display: none;"><?=$num?></p>
	<p class="url" style="color: white; display: none;" ><?=$url?></p>
	<div class="wrap">
		<div class="portfoilo_top">
			<img src="<?=$url?>static/images/port_back.png" alt="img">
			<div class="mi_div">
					<div class="portfoilo_title">
						<h1>PORTFOLIO</h1>
						<p>취업지원자들의 실력을 확인해볼 수 있는 공간입니다.</p>
					</div>
			</div>
		</div>
		<nav class="comapny_nav">
			<h1>포트폴리오를 등록해 자신의 실력을 키워보세요!</h1>
		</nav>
		<section class="port_section">
			<div class="port_wrap">
				<div class="port_left">
					<span>포트폴리오</span>
				</div>
				<div class="port_right">
					<div class="right_group">
						<!-- <h3>제목</h3> -->
						<div class="right_title">
							<h3>작품 제목</h3>
						</div>
						<input type="text" class="port_title">
					</div>
					<div class="second_item mid_second_item right_group">
									<div class="right_title">
										<h3>카테고리</h3>
									</div>
									<div class="second_input">
										<input type="checkbox" class="checks" id="web_check" value="웹디자인">
										<label for="web_check" class="check_label">
											<img style="margin-bottom: 10px;" src="<?=$url?>static/images/port_img/port_web.jpg">
											<p style="margin-left: 50px;">웹디자인</p>
										</label>

										<input type="checkbox" class="checks" id="type_check" value="타이포그래피">
										<label for="type_check" class="check_label">
											<img src="<?=$url?>static/images/port_img/port_type.jpg">
											<p style="margin-left: 45px;">타이포그래피</p>
										</label>

										<input type="checkbox" class="checks" id="grp_check" value="그래픽디자인">
										<label for="grp_check" class="check_label">
											<img style="width: 45px" src="<?=$url?>static/images/port_img/port_grp.jpg">
											<p style="margin-left: 45px;">그래픽디자인</p>
										</label>

										<input type="checkbox" class="checks" id="up_check" value="편집디자인">
										<label for="up_check" class="check_label">
											<img src="<?=$url?>static/images/port_img/port_up.jpg">
											<p style="margin-left: 45px;">편집디자인</p>
										</label>

										<input type="checkbox" class="checks" id="it_check" value="IT">
										<label for="it_check" class="check_label">
											<img src="<?=$url?>static/images/port_img/port_it.jpg">
											<p style="margin-left: 45px;">IT</p>
										</label>

										<input type="checkbox" class="checks" id="video_check" value="영상">
										<label for="video_check" class="check_label">
											<img src="<?=$url?>static/images/port_img/port_video.jpg">
											<p style="margin-left: 45px;">VIDEO</p>
										</label>
									</div>
								</div>
						<div class="right_group" style="margin-top: 30px;">
						<!-- <h3>제목</h3> -->
						<div class="right_title">
							<h3>제작 툴</h3>
						</div>
						<div class="tool_wrap">
							<input type="checkbox" class="tool_check" id="ph_check" value="photoshop">
							<label for="ph_check">포토샵</label>

							<input type="checkbox" class="tool_check" id="ai_check" value="ai">
							<label for="ai_check">일러스트</label>

							<input type="checkbox" class="tool_check" id="ind_check" value="ind">
							<label for="ind_check">인디자인</label>

							<input type="checkbox" class="tool_check" id="pp_check" value="pp">
							<label for="pp_check">프리미어 프로</label>

							<input type="checkbox" class="tool_check" id="af_check" value="af">
							<label for="af_check">에펙</label>

							<input type="checkbox" class="tool_check" id="dev_check" value="dev">
							<label for="dev_check">DevC++</label>

							<input type="checkbox" class="tool_check" id="sub_check" value="sub">
							<label for="sub_check">Sublime Text</label>

							<input type="checkbox" class="tool_check" id="visual_check" value="visual">
							<label for="visual_check">Visual Studio</label>

							<input type="checkbox" class="tool_check" id="ather_check" value="ather">
							<label for="ather_check">기타</label>
						</div>
					</div>
					<div class="right_group info_group" style="margin-top: 30px;">
						<div class="right_title">
							<h3>작품 설명</h3>
						</div>
						<textarea class="port_info"></textarea>
					</div>
					<div class="right_group hash_group" style="margin-top: 30px;">
						<div class="right_title">
							<h3>해시 태그</h3>
						</div>
						<input type="text" class="hash_port" data-role="tagsinput" placeholder="해시태그는 , 로 구분됩니다." style="width: 80%;">
					</div>
					<div class="upload_div" style="margin-top: 30px;">
						<div class="right_title">
							<h3>작품 업로드</h3>
						</div>
						<div class="right_upload">
							<input id="port_images" name="images[]" type="file" multiple>
							<span class="file_name" style="color: white;"></span>
						</div>
					</div>
					<div class="right_group">
							<button class="port_success" style="margin-right: 55px;">수정</button>
						<button class="port_cancel" >취소</button>
					
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