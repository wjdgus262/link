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
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/animate.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/sub_header.css">
	<link rel="stylesheet" type="text/css" href= "<?=$url?>static/css/search.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/modal.css">
	<script type="text/javascript" src="<?=$url?>static/libs/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/jquery.lazyload.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/search.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/member_script.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/scroll.js"></script>
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v3.2&appId=2153835338214363&autoLogAppEvents=1"></script>

	<title></title>
	<script type="text/javascript">
		$(document).ready(function(){
            $('.search_port_slick').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
     prevArrow:"<button type='button' class='slick-prev pull-left1'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next pull-right1'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
});

             $('.search_company_wrap').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
     prevArrow:"<button type='button' class='slick-prev pull-left1'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next pull-right1'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
});

$('.com_top_div_wrap').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
     prevArrow:"<button type='button' class='slick-prev pull-left1'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next pull-right1'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
});
		});
	</script>
</head>
<body>
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
	<p class="url" style="color: white; display: none;"><?=$url?></p>
	<div class="comment_update_modal" style="display: none;">
		<div class="comment_update_wrap">
			<div class="update_top">
				<h3>댓글수정</h3>
				<i class="fas fa-times"></i>
			</div>
			<div class="update_input">
				<input type="text" class="update_comment_input">
			</div>
			<div class="update_bottom">
				<span class="num" style="color: #ededed"></span>
				<span class="pornum" style="color: #ededed"></span>
				<button class="update_comment_btn">댓글수정</button>
			</div>
		</div>
		
	</div>
	<div class="portfoilo_modal" style="display: none;">
		<div class="portfoilo_wrap">
			<div class="portfilo_top">
				<div class="portfoilo_top_porfile">
					<div class="profile_circle">
						<!-- <img src="./static/images/empty_userimg.png" alt="img"> -->
					</div>
				</div>
				<div class="portfoilo_top_info">
					<div class="top_info_div">
						<p class="user_name">admin</p>
						<div class="lines_top_info" style="margin-top: 43px;">
						</div>
						<p class="title">작품 이름</p>

						<?php
							if($division == 2){
						?>
							<button class="reply_modal_btn">스카웃 하기</button>
						<?php
							}
						?>
							
						
					</div>
					<div class="top_info_div_1">
						<p class="upjgon">시간 디자인 / 그래픽 디자인</p>
					</div>
				</div>
			</div>
			<div class="portfoilo_img_body">
				<div class="portfoilo_img_body_wrap">
					<!-- <img src="./static/userimages/portfoilo/1.png" alt="img">
					<img src="./static/userimages/portfoilo/2.png" alt="img">
					<img src="./static/userimages/portfoilo/3.png" alt="img"> -->
				</div><!-- 
				<button class="prev"></button>
				<button class="next"></button> -->
			</div>
			<div class="portfoilo_like_body">
				<div class="like_circle">
					<!-- <i class="far fa-heart"></i> -->
					<!-- <i class="fas fa-heart"></i> -->
				</div>
			</div>
			<div class="portfoilo_comment_or_info">
				<div class="portfoilo_comment_body">
					<div class="portfoilo_comment_insert_body">
						<div class="insert_body_top">
							<div class="insert_body_top_profile">
								<div class="insert_circle">
								</div>
							</div>
							<textarea class="comment_area"></textarea>
						</div>
						<div class="insert_body_bottom">
							<?php
								if(isset($id)){
							?>
								<button class="insert_comment_btn success_comment">등록하기</button>
							<?php
								}else{
							?>
								<button class="insert_comment_btn not_login">등록하기</button>
							<?php
								}
							?>
							
						</div>
					</div>
					<div class="comment_list"> 
						<table class="tbl paginated" id="tbl">
							<thead></thead>
							<tr>
								<td class="porfile_td_img">
									<div class="td_porfile_circle">
										<img src="./static/userimages/portfoilo/1.png" alt="img">
									</div>
								</td>
								<td class="comment_bodytext_table">
									<div class="table_bodytext_top">
										<p>admin</p>
									</div>
									<div class="table_bodytext_bottom">
										<p>bodytext</p>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="portfoilo_info_div">
					<div class="portfoilo_info_title">
						<p>작품설명</p>
						<p class="portfoilo_conent">컨텐츠다아아아아앙아아아아아아</p>
					</div>
					<div class="portfoilo_info_body">
						<div class="tool">
							<p>툴</p>
							<!-- <img src="<?=$url?>static/images/tooltest.png" alt="img">
							<img src="<?=$url?>static/images/tooltest.png" alt="img">
							<img src="<?=$url?>static/images/tooltest.png" alt="img"> -->
						</div>
						<div class="info_body_likes">
							<div class="body_likes_item">
								 <i class="fas fa-heart"></i>
								 <p class="like_count">20</p>
							</div>
							<div class="body_likes_item">
								<img src="<?=$url?>static/images/icons_portfoilo.png">
								<p class="view_count">20</p>
							</div>
							<div class="body_likes_item">
								 <i class="fas fa-comments"></i>
								 <p class="comment_count">20</p>
							</div>
							<div class="body_likes_item">
								<i class="fas fa-calendar" style="margin-left: 7px;"></i>
								<p class="portfoilo_date">20</p>
							</div>
						</div>
					</div>
					<div class="portfoilo_info_hash">
					<!-- 	<span class="hash_span">#해쉬태그1</span>
						<span class="hash_span">#해쉬태그1</span>
						<span class="hash_span">#해쉬태그1</span> -->
					</div>
				</div>
			</div>
		</div>
	</div>


	<p class="url" style="color: white; display: none;"><?=$url?></p>
	<?php
		include 'modal.php';
	?>
	<?php
		include 'header.php';
	?>

	<div class="wrap">
		<div class="portfoilo_top">
			<img src="<?=$url?>static/images/port_back.png" alt="img">
			<div class="mi_div">
					<div class="portfoilo_title">
						<h1>검색 페이지</h1>
					</div>
			</div>
		</div>
		<nav class="port_nav">
			</nav>
		<section class="port_body">
			<div class="search_wrap">
				<div class="search_portfoilo">
					<div class="search_title">
						<h1>포트폴리오</h1>
						<span class="port_more_search">더 많은 <br>포트폴리오 보기</span>
					</div>
					<div class="search_port_body" style="text-align: center;">
						<?php
							if(empty($result['port'])){
						?>
							<h1 style="line-height: 430px; font-size:2em; ">검색된 포트폴리오가 없습니다.</h1>
						<?php
							}else{
						?>
						<div class="search_port_slick">
							<?php
								foreach ($result['port'] as $entry) {
									$arr = explode(',', $entry->portfoilo_img);
							
							?>
							<div class="search_port_item" data-num="<?=$entry->num?>">
								<div class="search_port_img">
									<img src="<?=$url?>static/userimages/portfoilo/<?=$arr[0]?>" alt="img">
									<div class="rank_gray" style="display: none;">
									<p>자세히 보기</p>
									<div class="circle rank_circle">
										<i class="fas fa-plus"></i>
									</div>
									<div class="rank_count_comment">
										<span>조회수 : </span><span><?=$entry->portfoilo_count?>회</span><br>
										<span>좋아요 : </span><span><?=$entry->portfoilo_like_count?>개</span><br>
										<span>댓글수 : </span><span><?=$entry->portfoilo_comment_count?>개</span>
									</div>
								</div>
								</div>
								<div class="ports_infos">
									<i class="fas fa-user-alt"></i><span><?=$entry->portfoilo_nickname?></span><br>
									<i class="fas fa-pen"></i><span><?=$entry->portfoilo_title?></span>
								</div>
							</div>
							<?php
								}
								
							?>
						</div>
						<?php
							}
						?>
					</div>
				</div>


				<div class="search_company">
					<div class="search_title">
						<h1>채용공고</h1>
						<span class="company_more_search">더 많은 <br>채용공고 보기</span>
					</div>
					<div class="search_company_body" style="text-align: center;">
						<?php
							if(empty($result['company'])){
						?>
							<h1 style="line-height: 360px; font-size:2em; ">검색된 채용공고가 없습니다.</h1>
						<?php
							}else{
						?>
						<div class="search_company_wrap" >
							<?php
								foreach ($result['company'] as $entry) {
									$arr = explode(',', $entry->companyimg);
							?>
							<div class="company_item" data-num="<?=$entry->companynum?>">
								<div class="list_item_wrap">
									<div class="list_item_img">
										<div class="list_item_wrap_wrap" style="margin-top: 0px;"><img src="<?=$url?><?=$arr[0]?>" alt="img"></div></div>
									
									<div class="item_info" style="opacity: 1;">
										<h1><?=$entry->companyname?></h1><span><?=$entry->companySectors?></span><p><?=$entry->companystart?> - <?=$entry->companyend?></p>
									</div>
								</div>
							</div>
							<?php
								}
							?>
						</div>
						<?php
							}
						?>
					</div>
				</div>

				<div class="search_com">
					<div class="search_title">
						<h1>공모전</h1>
						<span class="com_more_search">더 많은 <br>공모전 보기</span>
					</div>
					<div class="com_top_div" style="text-align: center;">
						<?php
							if(empty($result['comperition'])){
						?>
							<h1 style="line-height: 337px; font-size:2em; ">검색된 공모전이 없습니다.</h1>
						<?php
							}else{
						?>
						<div class="com_top_div_wrap">
							<?php
							$currentdate = new DateTime(date("Y-m-d"));
								foreach($result['comperition'] as $entry){
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
						<?php
							}
						?>
					</div>
				</div>

				<div class="search_gove" style="text-align: center;">
					<div class="search_title">
						<h1>정부지원사업</h1>
						<span class="gove_more_search">더 많은 <br>정부지원사업 보기</span>
					</div>
					<?php
						if(empty($result['gove'])){
					?>
						<h1 style="line-height: 450px; font-size:2em; ">검색된 정부지원사업이 없습니다.</h1>
					<?php
						}else{
					?>
					<div class="gove_body">
						<?php
							$temp;
							foreach ($result['gove'] as $entry) {
								if($entry->area == "서울"){
									$temp = '<img src="http://192.168.20.95/link/static/images/logos/soeul.png" alt="img">';
								}else if($entry->area == "부산"){
									$temp = '<img src="http://192.168.20.95/link/static/images/logos/busan.png" alt="img">';
								}else if($entry->area == "대구"){
									$temp = '<img src="http://192.168.20.95/link/static/images/logos/dego.png" alt="img">';
								}else if($entry->area == "인천"){
									$temp ='<img src="http://192.168.20.95/link/static/images/logos/in.png" alt="img">';
								}else if($entry->area == "광주"){
									$temp = '<img src="http://192.168.20.95/link/static/images/logos/gung.png" alt="img">';
								}else if($entry->area == "대전"){
									$temp = '<img src="http://192.168.20.95/link/static/images/logos/dejun.png" alt="img">';
								}else if($entry->area == "울산"){
									$temp+= '<img src="http://192.168.20.95/link/static/images/logos/san.png" alt="img">';
								}else if($entry->area == "세종"){
									$temp = '<img src="http://192.168.20.95/link/static/images/logos/sejung.png" alt="img">';
								}else if($entry->area == "경기도"){
									$temp = '<img style="width:30%; margin-left:10px;" src="http://192.168.20.95/link/static/images/logos/gi.png" alt="img">';
								}else if($entry->area == "강원도"){
									$temp = '<img src="http://192.168.20.95/link/static/images/logos/gang.png" alt="img">';
								}else if($entry->area == "충청북도"){
									$temp = '<img src="http://192.168.20.95/link/static/images/logos/congno.png" alt="img">';
								}else if($entry->area == "충청남도"){
									$temp = '<img src="http://192.168.20.95/link/static/images/logos/cong_s.png" alt="img">';
								}else if($entry->area == "전라북도"){
									$temp = '<img src="http://192.168.20.95/link/static/images/logos/junla.png" alt="img">';
								}else if($entry->area == "전라남도"){
									$temp = '<img src="http://192.168.20.95/link/static/images/logos/juns.png" alt="img">';
								}else if($entry->area == "경상북도"){
									$temp = '<img src="http://192.168.20.95/link/static/images/logos/giup.png" alt="img">';
								}else if($entry->area == "경상남도"){
									$temp = '<img src="http://192.168.20.95/link/static/images/logos/giups.png" alt="img">';
								}else{
									$temp = '<img src="http://192.168.20.95/link/static/images/logos/jeju.png" alt="img">';
								}
						?>
						<div class="gove_item">
							<div class="item_logo">
								<div class="gove_item_logo">
									<?php
										echo $temp;
									?>
								</div>
							</div>
							<div class="item_title">
								<div class="gove_item_title" data-url="<?=$entry->url?>" data-num="<?=$entry->num?>">
									<p><?=$entry->name?></p>
								</div>
							</div>
							<div class="item_divis">
								<div class="gove_item_divis">
									<p><?=$entry->person?></p>
									<div class="company_gray_line">
											</div>
								</div>
							</div>
							<div class="item_info_gove">
								<div class="company_list_info_two">
									<div class="info_two_top">
										<i class="fas fa-user"></i><span><?=$entry->gove_option?></span>
									</div>
									<div class="info_two_bottom">
										<i class="fas fa-map-marker-alt"></i><span><?=$entry->area?></span>
									</div>
									<div class="company_gray_line">
									</div>
								</div>
							</div>
							<div class="item_dates">
								<div class="item_date">
									<div class="gove_date">
										<p><?=$entry->end_date?></p>
									</div>
								</div>
							</div>
						</div>
						<?php
							}
						?>
					</div>
					<?php
						}
					?>
				</div>

				<div class="search_qna" style="text-align: center;">
					<div class="search_title">
						<h1>QnA</h1>
						<span class="qna_more_search">더 많은 <br>QnA 보기</span>
					</div>
					<?php
						if(empty($result['qna'])){
					?>
						<h1 style="line-height: 450px; font-size:2em; ">검색된 QnA가 없습니다.</h1>
					<?php
						}else{
					?>
					<div class="qna_body">
						<?php
							foreach ($result['qna'] as $entry) {
								$date = date_create($entry->qnadate);
						?>
						<div class="qna_item">
							<div class="list_item_title" data-num="<?=$entry->num?>">
								<p><?=$entry->qnatitle?></p>
								<?php
									if($entry->qnacheck == 1){
								?>
									<span class="reply_success">답변완료</span>
								<?php
									}
								?>
								<div class="qna_grayline">
								</div>
							</div>
							<div class="list_item_writer">
								<i class="far fa-user"></i><span><?=$entry->qnawriter?></span>
								<div class="qna_grayline">
								</div>
							</div>
							<div class="list_item_date">
								<p><?php echo date_format($date,"Y-m-d")?></p>
							</div>
						</div>
						<?php
							}
						?>
					</div>
					<?php
						}
					?>
				</div>
			</div>
		</section>
	</div>
		<?php
			include 'footer.php';
		?>
	</div>
</body>
</html>