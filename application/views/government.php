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
	<link rel="stylesheet" type="text/css" href="<?=$url?>link/static/libs/animate.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/sub_header.css">
	<link rel="stylesheet" type="text/css" href= "<?=$url?>static/css/government.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/modal.css">
	<script type="text/javascript" src="<?=$url?>static/libs/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/jquery.lazyload.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/government.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/member_script.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/scroll.js"></script>
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v3.2&appId=2153835338214363&autoLogAppEvents=1"></script>

	<title></title>
	<style type="text/css">
		.company_list_page > a{
			cursor: pointer;
		}
		.icons{
			cursor:pointer;;
			color: #6a3bff;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			// alert($(location).attr('href'));
			$('.gove_top_div_wrap').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
     prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
});
		});
	</script>
</head>
<body>
	<!-- <?php
		echo $id;
	?> -->
	<?php
		include 'modal.php';
	?>
	<div class="wrap">
		<div class="company_top">
			<img src="<?=$url?>static/images/support_back.png" alt="img">
			<div class="mi_div">
				<div class="company_title">
						<h1>정부 · 지역 시도별 지원사업 안내</h1>
						<p>함께 만들어가는 기업, 링크</p>
				</div>
			</div>
		</div>
		<nav class="comapny_nav">
			<h1>“ 정부·지역 시도별 지원사업을 한눈에 볼 수 있는 정보 안내 페이지입니다. ”</h1>
		</nav>
		<section class="gove_section">
			<div class="gove_section_wrap">
				<div class="gove_cate_wrap">
					<div class="gove_cate_wrap_left">
						<div class="circle gove_cate_circle">
							<img src="<?=$url?>static/images/gove_cate_img.png" alt="img">
							<p>지원대상자</p>
						</div>
					</div>
					<div class="gove_cate_wrap_right">
						<div class="gove_cate_item">
							<img src="<?=$url?>static/images/gove_cate1.png" alt="img">
							<p>취업준비생</p>
						</div>

						<div class="gove_cate_item">
							<img style="width: 64%;" src="<?=$url?>static/images/gove_cate2.png" alt="img">
							<p>사회초년생</p>
						</div>

						<div class="gove_cate_item" style="width: 150px">
							<img style="width: 48%;" src="<?=$url?>static/images/gove_cate3.png" alt="img">
							<p>중소기업 재직자</p>
						</div>

						<div class="gove_cate_item">
							<img style="width: 58%;" src="<?=$url?>static/images/gove_cate4.png" alt="img">
							<p>창업가</p>
						</div>

						<div class="gove_cate_item">
							<img style="width: 83%;" src="<?=$url?>static/images/gove_cate5.png" alt="img">
							<p>기업</p>
						</div>
					</div>
				</div>
				<div class="gove_top_wrap">
					<div class="gove_top_title">
						<p>실시간 인기 정부 지원사업 정보</p>
					</div>
					<div class="gove_top_div">
						<div class="gove_top_div_wrap">
							<?php
								foreach ($top_rank as $entry) {
							?>
							<div class="gove_top_item" data-num="<?=$entry->num?>" data-url="<?=$entry->url?>">
								<div class="goves_logo">
									<!-- <img src="<?=$url?>static/images/logos/busan.png" alt="img"> -->
									<?php
										if($entry->area == "서울"){
											echo '<img src="'.$url.'static/images/logos/soeul.png" alt="img">';
										}else if($entry->area == "부산"){
											echo '<img src="'.$url.'static/images/logos/busan.png" alt="img">';
										}else if($entry->area == "대구"){
											echo '<img src="'.$url.'static/images/logos/dego.png" alt="img">';
										}else if($entry->area == "인천"){
											echo '<img src="'.$url.'static/images/logos/in.png" alt="img">';
										}else if($entry->area == "광주"){
											echo '<img src="'.$url.'static/images/logos/gung.png" alt="img">';
										}else if($entry->area == "대전"){
											echo '<img src="'.$url.'static/images/logos/dejun.png" alt="img">';
										}else if($entry->area == "울산"){
											echo '<img src="'.$url.'static/images/logos/san.png" alt="img">';
										}else if($entry->area == "세종"){
											echo '<img src="'.$url.'static/images/logos/sejung.png" alt="img">';
										}else if($entry->area == "경기도"){
											echo '<img style="width: 50%; margin-left: 55px;" src="'.$url.'static/images/logos/gi.png" alt="img">';
										}else if($entry->area == "강원도"){
											echo '<img src="'.$url.'static/images/logos/gang.png" alt="img">';
										}else if($entry->area == "충청북도"){
											echo '<img src="'.$url.'static/images/logos/congno.png" alt="img">';
										}else if($entry->area == "충청남도"){
											echo '<img src="'.$url.'static/images/logos/cong_s.png" alt="img">';
										}else if($entry->area == "전라북도"){
											echo '<img src="'.$url.'static/images/logos/junla.png" alt="img">';
										}else if($entry->area == "전라남도"){
											echo '<img src="'.$url.'static/images/logos/juns.png" alt="img">';
										}else if($entry->area == "경상북도"){
											echo '<img src="'.$url.'static/images/logos/giup.png" alt="img">';
										}else if($entry->area == "경상남도"){
											echo '<img src="'.$url.'static/images/logos/giups.png" alt="img">';
										}else if($entry->area == "제주도"){
											echo '<img src="'.$url.'static/images/logos/jeju.png" alt="img">';
										}
									?>
								</div>
								<p><?=$entry->name?></p>
								<p><?=$entry->end_date?></p>
							</div>
							<?php
								}
							?>
						</div>
					</div>
				</div>
				<div class="gove_banner">
					<img src="<?=$url?>static/gove_ban.jpg" alt="img">
				</div>
				<div class="gove_area_wrap">
					<div class="gove_area_left">
						<div class="gove_area_circle">
							<img src="<?=$url?>static/images/gove_area_pin.png" alt="img">
							<p>지역별</p>
						</div>
					</div>
					<div class="gove_area_right">
						<span data-area="서울">서울</span>
						<span data-area="부산">부산</span>
						<span data-area="대구">대구</span>
						<span data-area="인천">인천</span>
						<span data-area="광주">광주</span>
						<span data-area="대전">대전</span>
						<span data-area="울산">울산</span>
						<span data-area="세종시">세종</span><br>
						<span data-area="경기도">경기</span>
						<span data-area="강원도">강원</span>
						<span data-area="충청북도">충북</span>
						<span data-area="충청남도">충남</span>
						<span data-area="전라북도">전북</span>
						<span data-area="전라남도">전남</span>
						<span data-area="경상북도">경북</span>
						<span data-area="경상남도">경남</span>
						<span data-area="제주도">제주</span>
					</div>
				</div>
				
				<div class="gove_list">
					<div class="gove_list_top">
						<div>
							<div class="alls_gove">
								<p>전체 정부 지원</p>
							</div>
						</div>
						<div style="width: 60%;">
							<select class="gove_list_select">
								<option value="title">제목</option>
								<option value="views">지원형태</option>
							</select>
							<input type="text" name="text" class="gove_search">
							<button class="gove_search_btn"><span>검색</span> <span>|</span> <i class="fas fa-search"></i></button>
						</div>
					</div>
					<div class="gove_list_body">
						<table class="gove_table paginated" cellpadding="0" cellspacing="0">
						</table>
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