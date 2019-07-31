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
	<link rel="stylesheet" type="text/css" href= "<?=$url?>static/css/competition.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/modal.css">
	<script type="text/javascript" src="<?=$url?>static/libs/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/jquery.lazyload.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/competition.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/member_script.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/scroll.js"></script>

	<div id="fb-root"></div>

	<title></title>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.com_top_div_wrap').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
     prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
});
		});
	</script>
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
	<p style="display:none;" class="get_url"><?=$url?></p>
	<div class="wrap">
		<div class="up_circle">
			<i class="fas fa-chevron-up"></i>
		</div>
		<div class="company_top">
			<img src="<?=$url?>static/images/support_back.png" alt="img">
			<div class="mi_div">
				<div class="company_title">
						<h1>채용정보게시판</h1>
						<p>함께 만들어가는 기업, 링크</p>
				</div>
			</div>
		</div>
		<nav class="comapny_nav">
			<div class="circle company_circle">
				<p>분야별</p>
			</div>
			<ul class="company_ul">
					<li style="margin-left: 0;" data-cate="IT">
						<img src="<?=$url?>static/images/port_img/port_it.jpg">
						<p>웹/소프트웨어</p>
					</li>
					<li data-cate="디자인">
						<img src="<?=$url?>static/images/port_img/port_type.jpg" style="width: 59px;">
						<p>디자인/캐릭터</p>
					</li>
					<li data-cate="기획">
						<img src="<?=$url?>static/images/port_img/port_grp.jpg" style="width: 36px;">
						<p>기획/아이디어</p>
					</li>
					<li data-cate="영상">
						<img src="<?=$url?>static/images/port_img/port_video.jpg">
						<p>영상/UCC</p>
					</li>
				</ul>
		</nav>
		<section class="com_section">
			<div class="com_wrap">
				<div class="com_top_wrap">
					<div class="com_top_title">
						<p>실시간 인기 공모전</p>
					</div>
					<div class="com_top_div">
						<div class="com_top_div_wrap">
							<?php
								$currentdate = new DateTime(date("Y-m-d"));
				
								foreach ($top as $entry) {
								$end_printd_date = new DateTime($entry->enddate);
							?>
							<div class="com_top_item" data-url="<?=$entry->a_url?>" data-num="<?=$entry->num?>">
								<img src="<?=$url?><?=$entry->img?>" alt="img">
								<div class="com_top_info">
									<h1>D-<?=date_diff($currentdate, $end_printd_date)->days?></h1>
									<p><?=$entry->title?></p>
									<p class="tags"><?=$entry->cate?> / <?=$entry->object?></p>
								</div>
							</div>
							<?php
								}
							?>
						</div>
					</div>
				</div>
				<div class="com_banner_div">
					<img src="<?=$url?>static/com_ban.jpg" alt="img">
				</div>
				<div class="com_list_div">
					<div class="com_list_top">
						<div>
							<div class="alls_com">
								<p>전체 공모전</p>
							</div>
						</div>
						<div style="width: 60%;">
							<select class="com_list_select">
								<option value="title">제목</option>
								<option value="host">주최사</option>
							</select>
							<input type="text" name="text" class="com_search">
							<button class="com_search_btn"><span>검색</span> <span>|</span> <i class="fas fa-search"></i></button>
						</div>
					</div>
					<div class="com_list_body">
						
						


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