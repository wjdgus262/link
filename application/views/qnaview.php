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
	<link rel="stylesheet" type="text/css" href= "<?=$url?>static/css/qnaview.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/modal.css">

	<script type="text/javascript" src="<?=$url?>static/libs/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/summernote.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/summernote-ko-KR.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/qnaview.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/member_script.js"></script>
	<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/scroll.js"></script>
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
		.login_pw > .find_pw{
			bottom: 25px;
		}
		.login_pw > .login_or_regi_go{
			bottom: 0;
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
	<p class="view_num" style="display: none;"><?=$num?></p>
	<div class="wrap">
		<div class="company_top">
			<img src="<?=$url?>static/images/support_back.png" alt="img">
			<div class="mi_div">
				<div class="company_title">
						<h1>질문페이지</h1>
				</div>
			</div>
		</div>
		<nav class="comapny_nav">
			<h1><?=$result['view'][0]->qnatitle?></h1>
			<div class="ather_div">
				<p>조회수 : <?=$result['view'][0]->qnacount?></p>
				<p>작성자 : <?=$result['view'][0]->qnawriter?></p>
			</div>
			<?php
				if($result['view'][0]->qnacheck == 1){
			?>
				<div class="checks_div">
					<i class="far fa-check-circle"></i>
					<p>답변완료</p>
				</div>
			<?php
				}
			?>
			
		</nav>
		<!-- asg -->
	</div>
	<section class="qna_view">
		<div class="qna_view_wrap">
			<div class="qna_view_body">
				<?=$result['view'][0]->qnabodytext?>

				<div class="body_buttons">
					<button class="qna_delete">삭제</button>
					<button class="qna_update">수정</button>
				</div>
			</div>
			<?php
				if(isset($id) && $result['view'][0]->qnacheck == 0){
			?>
			<div class="qna_view_a">
				<input type="text" class="a_input" placeholder="답변 내용을 입력해주세요.">
				<button class="a_success">답변하기</button>
			</div>
			<?php
				}
			?>
			
			<div class="qna_a_list">
				<?php
					foreach ($result['reply'] as $entry) {
				?>
				<div class="list_item">
					<div class="list_item_wrap">
						<div class="list_item_top">
							<div class="list_item_left">
								<?php
									foreach ($result['member'] as $entry1) {
										if($entry1->id == $entry->qnareplyid)
										{
								?>
								<div class="a_cirlce">
									<img src="<?=$url?><?=$entry1->porfile_img?>" alt="img">
								</div>
								<h1><?=$entry1->name?> 님의 답변</h1>
								<?php
										}
									}

								?>
								
							</div>
							<div class="list_item_right">
								<?php
									if($entry->qnareplycheck == 1){
								?>
									<div class="check_div">
										<i class="far fa-check-circle"></i>
										<p>질문자채택</p>
									</div>
								<?php
									}
								?>
								
							</div>
						</div>
						<div class="list_item_body">
							<p><?=$entry->qnareplybodytext?></p>
						</div>
						<div class="list_item_btn">
							<?php
								if($id == $entry->qnareplyid){
							?>
								<button class="a_delete" data-num="<?=$entry->num?>">삭제</button>
							<?php
								}
							?>
							
							<?php
								if($id == $result['view'][0]->qnawriter_id && $result['view'][0]->qnacheck == 0){
							?>
								<button class="a_good" data-num="<?=$entry->num?>">채택</button>
							<?php
								}
							?>
							
						</div>
					</div>
				</div>
				<?php
					}
				?>
				<!-- <div class="list_item">
					<div class="list_item_wrap">
						<div class="list_item_top">
							<div class="list_item_left">
								<div class="a_cirlce">
									<img src="<?=$url?>static/userprofile/FypOdYVQyR1558321051-image.jpg">

								</div>
								<h1>admin 님의 답변</h1>
							</div>
							<div class="list_item_right">
								<div class="check_div">
									<i class="far fa-check-circle"></i>
									<p>질문자채택</p>
								</div>
							</div>
						</div>
						<div class="list_item_body">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
						</div>
						<div class="list_item_btn">
							<button class="a_delete">삭제</button>
							<button class="a_good">체택</button>
						</div>
					</div>
				</div> -->
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