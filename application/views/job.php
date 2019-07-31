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
	<link rel="stylesheet" type="text/css" href= "<?=$url?>static/css/job.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/modal.css">
	<script type="text/javascript" src="<?=$url?>static/libs/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/jquery.lazyload.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/job.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/member_script.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/scroll.js"></script>
	<div id="fb-root"></div>

	<title></title>
	<style type="text/css">
		.company_list_page > a{
			cursor: pointer;
		}

	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			
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
			<h1>“ 기업 인재상과 채용선호조건을 여러분의 특성과 매칭 분석하여 적절한 채용공고를 추천해드립니다. ”</h1>
		</nav>
		<section class="job_section">
			<div class="job_wrap_page">
				<div class="job_page_title">
					<h1>매칭 키워드</h1>
					<div class="job_page_hash">
						<span>#<?=$member[0]->career?></span>
						<span>#<?=$member[0]->education?></span>
						<?php
							$hashplode = explode(',', $member[0]->info);
							for($i = 0; $i < count($hashplode)-1; $i++){
						?>
							<span>#<?=$hashplode[$i]?></span>
						<?php
							}
						?>
					</div>
				</div>
				<div class="job_pate_rank">
				</div>
			</div>
		</section>
		<section class="job_rank_section">
			<div class="job_rank_wrap">
				<h1>추천 기업</h1>
				<div class="job_rank_div">
					<div class="job_rank_div_wrap">
						<?php
							foreach ($rank as $entry) {
						?>
						<div class="rank_item" data-num="<?=$entry->companynum?>">
							<div class="rank_item_top">
								<p>매칭도 <span><?=round($entry->score,2)?>%</span></p>
							</div>
							<div class="rank_item_body">
								<div class="rank_logo">
									<img src="<?=$url?><?=$entry->companylogo?>">
								</div>
								<h1><?=$entry->companyname?></h1>
								<?php
									$tal_explode = explode(",", $entry->companytalent);
									for($i = 0; $i < count($tal_explode); $i++){
										if($i == 2){
											break;
										}
								?>
								<span>#<?=$tal_explode[$i]?></span>
								<?php
									}
								?>
								
								
							</div>
						</div>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</section>
		<section class="job_list_section">
			<div class="job_list_wrap">
				<h1>추천 채용 공고</h1>
				<div class="job_search">
					<select class="job_selct">
						<option value="title">제목</option>
						<option value="enter">기업</option>
						<option value="taln">인재상</option>
					</select>
					<input type="text" class="job_input">
					<button class="job_search_btn"><span>검색</span> <span>|</span> <i class="fas fa-search"></i></button>
				</div>
				<div class="job_list_main">
					<div class="list_item">
						<div class="list_item_wrap">
							<div class="list_item_img">
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