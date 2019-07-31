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
	<link rel="stylesheet" type="text/css" href= "<?=$url?>static/css/company_list.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/modal.css">
	<script type="text/javascript" src="<?=$url?>static/libs/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/jquery.lazyload.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/company.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/member_script.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/scroll.js"></script>
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v3.2&appId=2153835338214363&autoLogAppEvents=1"></script>

	<title></title>
	<style type="text/css">
		.company_list_page > a{
			cursor: pointer;
		}

	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			// alert("<?php echo $tabdiv?>");
			<?php
				if($tabdiv != "all"){
			?>
				var a_href = $(location).attr('href');
			
				
					var strArr = a_href.split("/");
			
					var aaa = strArr[0]+"//"+strArr[2]+"/"+strArr[3]+"/"+strArr[4]+"/"+strArr[5];
					$(".company_list_page > strong").remove();
					$(".company_list_page").prepend("<a href='"+aaa+"'>1</a>");
			<?php
				}
				if($tabdiv == "all"){
			?>
				$(".all").css({
					"height":"101%",
					"border-bottom":"none"
				});
				$(".division").css({
					"height":"100%",
					"border-bottom":"1px solid #dddddd"
				});
				$(".date").css({
					"height":"100%",
					"border-bottom":"1px solid #dddddd"
				});
			<?php
				}else if($tabdiv == "division"){
			?>
				$(".all").css({
					"height":"100%",
					"border-bottom":"1px solid #dddddd"
				});
				$(".division").css({
					"height":"101%",
					"border-bottom":"none"
				});
				$(".date").css({
					"height":"100%",
					"border-bottom":"1px solid #dddddd"
				});
			<?php
				}else if($tabdiv == "date"){
			?>	
				$(".all").css({
					"height":"100%",
					"border-bottom":"1px solid #dddddd"
				});
				$(".division").css({
					"height":"100%",
					"border-bottom":"1px solid #dddddd"
				});
				$(".date").css({
					"height":"101%",
					"border-bottom":"none"
				});
			<?php
				}else{
			?>
				$(".all").css({
					"height":"100%",
					"border-bottom":"1px solid #dddddd"
				});
				$(".division").css({
					"height":"100%",
					"border-bottom":"1px solid #dddddd"
				});
				$(".date").css({
					"height":"100%",
					"border-bottom":"1px solid #dddddd"
				});
			<?php
				}
			?>


			// alert($(location).attr('href'));

			$('.pop_company_body_wrap').slick({
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
	<p style="display:none;" class="get_url"><?=$url?></p>
	<div class="wrap">
		<div class="company_top">
			<img src="<?=$url?>static/images/top_background.png" alt="img">
			<div class="mi_div">
				<div class="company_title">
						<h1>채용정보게시판</h1>
						<p>함께 만들어가는 기업, 링크</p>
				</div>
			</div>
		</div>
		<nav class="comapny_nav">
			<div class="circle company_circle">
				<p>업종별</p>
			</div>
			<ul class="company_ul">
					<li style="margin-left: 0;">
						<a href="<?=$url?>company/index?div=cateclick&cate=웹">
						<img src="<?=$url?>static/images/port_img/port_web.jpg">
						<p>웹 디자인</p>
						</a>
					</li>
					<li>
						<a href="<?=$url?>company/index?div=cateclick&cate=디자인">
						<img src="<?=$url?>static/images/port_img/port_type.jpg" style="width: 59px;">
						<p>타이포 그래피</p>
						</a>
					</li>
					<li>
						<a href="<?=$url?>company/index?div=cateclick&cate=그래픽">
						<img src="<?=$url?>static/images/port_img/port_grp.jpg" style="width: 36px;">
						<p>그래픽 디자인</p>
						</a>
					</li>
					<li>
						<a href="<?=$url?>company/index?div=cateclick&cate=편집">
						<img src="<?=$url?>static/images/port_img/port_up.jpg">
						<p>편집 디자인</p>
						</a>
					</li>
					<li>
						<a href="<?=$url?>company/index?div=cateclick&cate=소프트웨어">
						<img src="<?=$url?>static/images/port_img/port_it.jpg" style="width: 59px;">
						<p>IT</p>
						</a>
					</li>
					<li>
						<a href="<?=$url?>company/index?div=cateclick&cate=영상">
						<img src="<?=$url?>static/images/port_img/port_video.jpg" style="width: 72px;">
						<p>VIDEO</p>
						</a>
					</li>
				</ul>
		</nav>
		<!-- asg -->
		<section class="company_section">
			<div class="company_wrap">
				<div class="pop_company">
					<div class="pop_company_top">
						<div class="pop_company_title">
							<p>실시간 인기 채용 정보</p>
						</div>
					</div>
					<div class="pop_company_body">
						<div class="pop_company_body_wrap">
							<?php
								foreach ($top_rank as $entry) {
									$arr = explode(",",$entry->companyqua);
									$arr_two = explode(",",$entry->companycondition);
							?>
							<div class="pop_list" data-num="<?=$entry->companynum?>">
								<div class="pop_list_wrap">
									<div class="pop_list_wrap_img">
										<?php
											if(isset($entry->companylogo)){
										?>
											<img src="<?php echo $url.$entry->companylogo?>" alt="img">
										<?php
											}
										?>
										
									</div>
									<div class="pop_list_wrap_info">
										<table class="infos">
											<tr>
												<td><?=$arr[0]?></td><td><?=$arr_two[1]?></td>

											</tr>
											<tr>
												<td><?=$arr[1]?></td><td><?=$arr_two[0]?></td>
											</tr>
											<tr>
												<td  colspan="2"><?=$entry->companyend?> 마감</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<?php
								}
							?>
						</div>
					</div>
				</div>

				<div class="company_banner">
					<div class="company_img">
						<img src="<?=$url?>static/company_band.jpg">
					</div>
				</div>

				<div class="company_list">
					<div class="company_list_top">
						<div class="company_list_top_left">
							<div class="all" data-href="all">
								<p>전체 기업 공고</p>
							</div>
							<div class="division" data-href="divis">
								<p>업종별</p>
								<i class="fas fa-sort-down"></i>
							</div>
							<div class="date" data-href="date">
								<p>마감기한순</p>
								<i class="fas fa-sort-down"></i>
							</div>
						</div>
						<div class="company_list_top_right">
							<select class="company_list_select">
								<option>제목</option>
								<option>기업</option>
							</select>
							<input type="text" name="text" class="company_search">
							<button class="company_search_btn"><span>검색</span> <span>|</span> <i class="fas fa-search"></i></button>
						</div>
					</div>
					<div class="company_list_body">
						<div class="company_list_body_top">
							<input type="checkbox" name="all" class="all_check" id="all_check">
							<label for="all_check" class="all_label">전체</label>

							<?php
								if(isset($id)){
							?>
								<button class="list_btn scrap_btn" style="margin-left: 50px;">스크랩</button>
								<button class="list_btn likes_company_btn">관심기업</button>
							<?php
								}else{
							?>
								<button class="list_btn company_not_login" style="margin-left: 50px;">스크랩</button>
								<button class="list_btn company_not_login">관심기업</button>
							<?php
								}
							?>
							
							<!-- <button class="list_btn">관심기업</button> -->
						</div>
						<div class="company_list_body_bottom">
							<?php
								$j = 0;
								$timenow = date("Y-m-d H:i:s"); 
								$str_now = strtotime($timenow);
								foreach($results as $entry){
									$timetarget = $entry->companyend;
									$str_target = strtotime($timetarget);
									if($str_now < $str_target){


									$arr = explode(",",$entry->companyqua);
									$arr_two = explode(",",$entry->companycondition);
							?>
							<div class="company_list_item" >
								<!-- <i class="fas fa-heart re_heart"></i> -->
									<?php
										if(isset($id)){
											$like_comexpoeld = explode(",", $member_result[0]->like_company);
											if(count($like_comexpoeld) != 0){
										for($i = 0; $i < count($like_comexpoeld); $i++){
											if($like_comexpoeld[$i] == $entry->companynum){
									
										
									?>
										<i class="fas fa-heart re_heart"></i>
									<?php
											}}
										}
										}
									?>
								<div class="company_list_check">
									<input type="checkbox" name="all" class="check" id="check<?=$j?>" data-num="<?=$entry->companynum?>" data-num="<?=$entry->companynum?>">
									<label for="check<?=$j?>"></label>
								</div>
								<div class="company_list_logo">
									<div class="company_list_in_logo">

										<?php
											if($entry->companylogo != ""){
												
										?>
											<img src="<?php echo $url.$entry->companylogo?>" alt="img">
										<?php
											}else{

										?>
											<p>NOT LOGO</p>
										<?php
											}
										?>
									</div>
								</div>
								<div class="company_list_title" data-num="<?=$entry->companynum?>">
									<p><?=$entry->companytitle?></p>

								</div>
								<div class="company_list_info">
									<div class="company_list_info_one">
										<p><?=$arr[0]?></p>
										<p><?=$arr[1]?></p>
										<div class="company_gray_line">
										</div>
									</div>
									<div class="company_list_info_two">
										<div class="info_two_top">
											<i class="fas fa-user"></i><span><?=$arr_two[1]?></span>
										</div>
										<div class="info_two_bottom">
											<i class="fas fa-map-marker-alt"></i><span><?=$arr_two[0]?></span>
										</div>
										<div class="company_gray_line">
										</div>
									</div>
									<div class="company_list_info_three">
										<p><?=$entry->companyend?> 까지</p>
									</div>
								</div>
							</div>
							<?php
							$j++;
							}
								}
							?>
						<div class="company_list_btn">
							<?php
								if($division == 2){
							?>
							<button class="company_write">채용정보 올리기</button>
							<?php
								}
							?>
							
						</div>

						<div class="company_list_page">
							<?php
								// var_dump($pagin);
								echo $pagin;
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
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