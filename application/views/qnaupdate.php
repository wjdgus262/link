<!DOCTYPE html>
<html>
<head >
	<title>Link</title>
	<meta charset="utf-8">
	<!--sweetmodal-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/summernote.css">
	
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.css">
	<link rel="icon" href="<?=$url?>static/images/header_logo.png" type="image/ico">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/inputTags.css">



	
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/animate.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/sub_header.css">
	<link rel="stylesheet" type="text/css" href= "<?=$url?>static/css/qnawriter.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/modal.css">

	<script type="text/javascript" src="<?=$url?>static/libs/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/summernote.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/summernote-ko-KR.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/qnainsert.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/member_script.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/scroll.js"></script>
	<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
	<div id="fb-root"></div>

	<title></title>
	<style type="text/css">
		header *{
			font-size: 19px;
		}
		.down_menu{
			font-size: 19px;
		}
		.modal-dialog{
			margin-top: 300px;
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
	<p class="url" style="color: white; display: none;" ><?=$url?></p>
	<div class="wrap">
		<div class="company_top">
			<img src="<?=$url?>static/images/support_back.png" alt="img">
			<div class="mi_div">
				<div class="company_title">
						<h1>질문수정</h1>
				</div>
			</div>
		</div>
		<nav class="comapny_nav">
			<h1>“성의 있는 질문이 성의 있는 답변으로 보답받습니다.”</h1>
		</nav>
		<!-- asg -->
	</div>
	<section class="qnawriter_section">
		<div class="qnawriter_wrap">
			<div class="qnawriter_title">
				<div class="qnawriter_icon">
					<h1>질문하기</h1>
					<!-- <div class="icons_circle">
						<i class="fab fa-quora"></i>
					</div> -->
				</div>
				<input type="text" class="qnatitle" placeholder="제목을 입력해주세요.">
			</div>
			<div class="qnawriter_body">
				<textarea class="contents"></textarea>

			</div>
			<div class="qnawriter_btn">
				<button class="qnawriter_cancel" style="background: #1f00a0;">취소</button>
				<button class="qnawriter_success">등록</button>
			</div>
		</div>
	</section>
	<?php
		include 'header.php';
	?>
		<?php
			include 'footer.php';
		?>
	</div>
</body>
</html>