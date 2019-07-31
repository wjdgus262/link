<?php
	date_default_timezone_set('Asia/Seoul');
?>
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
		<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/inputTags.css">




	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/animate.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/sub_header.css">
	<link rel="stylesheet" type="text/css" href= "<?=$url?>static/css/company_view.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/modal.css">
	<script type="text/javascript" src="<?=$url?>static/libs/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/jquery.lazyload.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/inputTags.jquery.js"></script>
<script type="text/javascript" src="<?=$url?>static/js/companyview.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/member_script.js"></script>
	<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/scroll.js"></script>
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v3.2&appId=2153835338214363&autoLogAppEvents=1"></script>
<!-- <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=d9e5d4d7b66f6c50826123e4c4b2ade2"></script> -->
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=d9e5d4d7b66f6c50826123e4c4b2ade2&libraries=services"></script>



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
		.company_list_page > a{
			cursor: pointer;
		}
		.inputTags-field{
			height: 45px;
		}
		.inputTags-field::placeholder{
			content: "가나다라";
		}
		.inputTags-list{
			/*height: 60px;*/
		}
		.hash_input *{
			color: black;
		}
		div.inputTags-list span.inputTags-item{
			margin-top: -5px;
		}
	</style>
</head>
<body>
	<!-- <?php
		echo $id;
	?> -->
	<?php
		include 'modal.php';
		$num = $_GET['num'];
	?>
	<!-- <input type="" name="" placeholder=""> -->
	<p class="url" style="color: white; display: none;" ><?=$url?></p>

	<p class="nums" style="color: white;display: none;"><?=$num?></p>
	<div class="wrap">
		<div class="company_top">
			<img src="<?=$url?>static/images/top_background.png" alt="img">
			<div class="mi_div">
				<div class="company_title">
						<h1>채용공고</h1>
				</div>
			</div>
		</div>
		<nav class="comapny_nav">
			<div class="company_nav_top">
				<p><?=$result[0]->companyname?></p>
				<h1><?=$result[0]->companytitle?></h1>
				<?php
					if(isset($id)){
				?>
					<span class="company_scrp_btns" data-num="<?=$num?>">
					<i class="fas fa-folder-open"></i>
					<p>스크랩</p>
					</span>
					<?php
						if($likes == "not"){
					?>
						<span class="company_like_btns not_company_like" data-num="<?=$num?>">
							<i class="far fa-heart"></i>
							<p>좋아요</p>
						</span>
					<?php
						}else{
					?>
						<span class="company_like_btns success_company_like" data-num="<?=$num?>">
							<i class="fas fa-heart"></i>
							<p>좋아요</p>
						</span>
					<?php
						}
					?>
					
				<?php
					}
				?>
				
			</div>
			<div class="company_nav_bottom">
				<div class="nav_bottom_top">
					<p class="start_date"><?=$result[0]->companystart?></p>
					<p class="or_p">  부터</p>
					<p class="end_date"><?=$result[0]->companyend?></p>
					<p class="or_p">  까지</p>
				</div>
				<div class="nav_bottom_bottom">
					<p class="like_counts">좋아요 <?=$count[0]->company_like?></p>
					<p class="scrap_counts">스크랩수 <?=$count[0]->company_scrap?></p>
					<p class="counts">조회수 <?=$count[0]->companycount?></p>
				</div>
			</div>
		</nav>
		<section class="view_section">
			<div class="view_section_top">
				<div class="company_top_info">
					<div class="top_info_left">
						<div class="left_title">
							<div class="left_title_circle">
								<p>채용<br>업종</p>
							</div>
						</div>
						<?php
							$sechexplode =  explode(',', $result[0]->companySectors);
							for($i = 0; $i < count($sechexplode)-1; $i++){

								if($sechexplode[$i] == "웹디자인"){
						?>
							<div class="left_div_item">
								<img src="<?=$url?>static/images/port_img/port_web.jpg" alt="img">
								<p>웹디자인</p>
							</div>
						<?php
								}else if($sechexplode[$i] == "타이포그래피"){
						?>
							<div class="left_div_item">
								<img src="<?=$url?>static/images/port_img/port_type.jpg" alt="img">
								<p>타이포그래피</p>
							</div>
						<?php
								}else if($sechexplode[$i] == "그래픽디자인" || $sechexplode[$i] == "디자인"){
						?>
							<div class="left_div_item">
								<img style="width: 50%;" src="<?=$url?>static/images/port_img/port_grp.jpg" alt="img">
								<p>그래픽디자인</p>
							</div>
						<?php
								}else if($sechexplode[$i] == "편집디자인"){
						?>
							<div class="left_div_item">
								<img src="<?=$url?>static/images/port_img/port_up.jpg" alt="img">
								<p>편집디자인</p>
							</div>
						<?php
								}else if($sechexplode[$i] == "IT"){
						?>
							<div class="left_div_item">
								<img src="<?=$url?>static/images/port_img/port_it.jpg" alt="img">
								<p>IT</p>
							</div>
						<?php
								}else if($sechexplode[$i] == "영상"){
						?>
							<div class="left_div_item">
								<img src="<?=$url?>static/images/port_img/port_video.jpg" alt="img">
								<p>영상</p>
							</div>
						<?php
								}else if($sechexplode[$i] == "기획"){
						?>
							<div class="left_div_item">
								<img src="<?=$url?>static/images/port_img/port_type.jpg" alt="img">
								<p>기획</p>
							</div>
						<?php
								}
						?>
						<?php
							}
						?>
						
						
						
					</div>
					<div class="top_info_center">
						<button class="go_company" data-num="<?=$result[0]->companyurl?>">채용지원하기</button>
					</div>
					<div class="top_info_right">
						<div class="right_title">
							<div class="right_title_circle">
								<p>채용<br>키워드</p>
							</div>
						</div>
						<div class="right_bodys">
							<?php
								$hashexplode = explode(',', $result[0]->companyhash);
								for($i = 0; $i < count($hashexplode)-1; $i++){
									if($i == 6){
										break;
									}
							?>
								<span>#<?=$hashexplode[$i]?></span>
							<?php
								}
							?>
							<!-- <span>#경력우대</span>
							<span>#창의인재</span>
							<span>#성실겸손</span>
							<span>#성실겸손</span> -->
						</div>
					</div>
				</div>
				<div class="company_default_div">
					<div class="default_div_wrap">
						<div class="default_div_title">
							<h1>채용 기본정보</h1>
						</div>
						<?php
							$quaexplode =  explode(',', $result[0]->companyqua);
							$conditionexplode =  explode(',', $result[0]->companycondition);
							$etc_un = explode(",", $result[0]->companyetc_uqni);
						?>
						<div class="default_div_body">
							<table class="hire">
								<tr class="title_tr">
									<td colspan="2">채용조건</td>
								</tr>
								<tr>
									<td class="title_td">경력</td>
									<td><?=$quaexplode[0]?></td>
								</tr>
								<tr>
									<td class="title_td">학력</td>
									<td><?=$quaexplode[1]?></td>
								</tr>
								<tr>
									<td class="title_td">직종</td>
									<td><?=$result[0]->companySectors?></td>
								</tr>
								<tr>
									<td class="title_td">기업인재상</td>
									<td><?=$result[0]->companytalent?></td>
								</tr>
								<tr>
									<td class="title_td">기타사항</td>
									<td><?=$etc_un[0]?></td>
								</tr>
							</table>

							<table class="work">
								<tr class="title_tr">
									<td colspan="2">근무조건</td>
								</tr>
								<tr>
									<td class="title_td">고용유형</td>
									<td><?=$conditionexplode[1]?></td>
								</tr>
								<tr>
									<td class="title_td">근무조건</td>
									<td><?=$result[0]->companyworking?></td>
								</tr>
								<tr>
									<td class="title_td">근무지역</td>
									<td><?=$conditionexplode[0]?></td>
								</tr>
								<tr>
									<td class="title_td">급여조건</td>
									<td><?=$result[0]->companymoney?></td>
								</tr>
								<tr>
									<td class="title_td">특이사항</td>
									<td><?=$etc_un[1]?></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="company_main_body">
					<div class="main_body_top">
						<h1>채용 상세정보</h1>
					</div>
					<div class="main_body_img">
						<?php
							$imgexplode = explode(",",$result[0]->companyimg);
							// echo count($imgexplode);
							// for($i = 0; $i < count($imgexplode)-1 )
							if(count($imgexplode) == 1){
						?>
							<img src="<?=$url?><?=$result[0]->companyimg?>" alt="img">
						<?php
							}else{
								for($i = 0; $i < count($imgexplode)-1; $i++){

								
						?>
								<img src="<?=$url?><?=$imgexplode[$i]?>" alt="img">
						<?php
								}
							}
						?>
						<!-- <img src="<?=$url?>static/link_company_lmg/10.jpg" alt="img"> -->
					</div>
					<div class="main_body_info">
						<div class="body_info_title">
							<h1>채용 일정 진행 사항</h1>
						</div>
						<div class="body_info_wrap">
							<div class="strt_count_date">
								<p>채용 지원 시작일로부터</p>
								<?php
									$startdate = new DateTime($result[0]->companystart);
									$currentdate = new DateTime(date("Y-m-d"));
									$end_printd_date = new DateTime($result[0]->companyend);
									// echo $result[0]->companystart;
									if($startdate > $currentdate){
										// echo "startdate";
										?>
											<h4>아직 시작하지 않은 공고 입니다.</h4>
										<?php
									}else{
								?>
								<h1><?=date_diff($startdate, $currentdate)->days?>일차</h1>
								<?php
									}
								?>
								
							</div>
							<div class="end_count_date">
								<h1>D-<?=date_diff($end_printd_date, $currentdate)->days?></h1>
							</div>
							<?php
								$endexplode = explode("-", $result[0]->companyend);
								$enddate =  mktime(24, 0, 0, $endexplode[1], $endexplode[2], $endexplode[0]);
								$today = time();
								$timer_second = ($enddate-$today);
								$timer_days = (int)($timer_second/(60*60*24));
								$timer_hour = (int)($timer_second/(60*60)%24);
								$timer_min = (int)($timer_second/60%60);
								
							?>
							<p class="end_count_p">채용 마감일까지 27일  남았습니다.</p>
							<p class="info_p">* 채용 마감일에는 지원자가 몰려 서버가 다운되는 등의 문제가 발생할 수 있으니, 마감일 전까지 반드시 지원 완료하시기 바랍니다.</p>
						</div>
					</div>
				</div>
				<div class="company_info_div">
					<div class="company_info_title">
						<h1>회사 정보</h1>
					</div>
					<div class="company_info_body">
						<div class="info_body_title">
							<p><?=$result[0]->companyname?></p>
						</div>
						<div class="info_body_main">
							<div class="body_company_logo">
								<img src="<?=$url?><?=$result[0]->companylogo?>" alt="img">
							</div>
							<div class="body_map_div" id="map">
							</div>
							<div class="body_div_info">
								<div class="car_info">
									<p class="infos_title">교통편 이용</p>
									<p><?=$result[0]->companycar?></p>
								</div>
								<div class="car_info" style="margin-top: 60px;">
									<p class="infos_title">상세정보</p>
									<p><?=$result[0]->companyinfo?></p>
								</div>
							</div>
						</div>
						<div class="last_info_div">
							<div class="last_div_left">
								<p>분야 ) <?=$result[0]->companySectors?></p>
								<p>TEL ) <?=$result[0]->companytel?></p>
								<p>url ) <?=$result[0]->companyurl?></p>
							</div>
							<div class="last_div_center">
								<h4 style="margin-top: 0; font-weight: bold;">주소</h4>
								<p class="company_address"><?=$result[0]->companyaddress?></p>
							</div>
							<div class="last_div_right">
								<button class="like_company_btn" data-num="<?=$num?>">관심기업등록</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button class="go_company fixed_btn" data-num="<?=$result[0]->companyurl?>">채용지원하기</button>
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
<script type="text/javascript">
	$(document).ready(function(){
		var timer_total_sc = <?php echo $timer_second;?>;
		var timer_days_sc = <?php echo $timer_days;?>;
		var timer_hour_sc = <?php echo $timer_hour;?>;
		var timer_min_sc = <?php echo $timer_min;?>;
		var timer_second_sc = <?php echo $timer_second;?>%60;
		var timer_total_second_sc = <?php echo $timer_second;?>;
		if(timer_total_sc < 1){
				$(".end_count_p").text("");
			}else{
				$(".end_count_p").text("채용 마감일까지 "+timer_days_sc+"일 "+timer_hour_sc+"시간 "+timer_min_sc+"분 "+timer_second_sc+"초 남았습니다.");
			}
		timer = setInterval(function(){
			timer_total_second_sc--;
			timer_second_sc--;
			if(timer_second_sc <= 0){
				timer_min_sc--;
				timer_second_sc = 59;
			}
			if(timer_min_sc <= 0){
				timer_hour--;
				timer_min_sc = 59;
			}
			if(timer_hour_sc <= 0){
				timer_days_sc--;
				timer_hour = 23;
			}
			if(timer_total_sc < 1){
				$(".end_count_p").text("");
			}else{
				$(".end_count_p").text("채용 마감일까지 "+timer_days_sc+"일 "+timer_hour_sc+"시간 "+timer_min_sc+"분 "+timer_second_sc+"초 남았습니다.");
			}
			if(timer_total_second_sc < 1){
				clearTimeOut(timer);
			}
		},1000);
	});
	
</script>
</html>