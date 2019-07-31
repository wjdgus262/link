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
	<link rel="stylesheet" type="text/css" href= "<?=$url?>static/css/subpage.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/modal.css">
	<script type="text/javascript" src="<?=$url?>static/libs/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/jquery.lazyload.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/portfoilo.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/member_script.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/scroll.js"></script>
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v3.2&appId=2153835338214363&autoLogAppEvents=1"></script>

	<title></title>
	<script type="text/javascript">
		$(document).ready(function(){

			$('img.gocoder').lazyload({        // 이미지를 동적으로 호출 하도록
                placeholder : './static/images/loading.gif',    // 로딩 이미지
                threshold: 0,                 // 접근 ~px 이전에 로딩을 시도한다.
                load : function(){              // 로딩시에 이벤트
                    $(this).attr('alt',$(this).attr("data-original"));
                }
            });
            $('.port_rank_wrap').slick({
  slidesToShow: 4,
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
	<!-- <?php
		echo $id;
	?> -->

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
						<h1>PORTFOLIO</h1>
						<p>취업지원자들의 실력을 확인해볼 수 있는 공간입니다.</p>
					</div>
			</div>
		</div>
		<nav class="port_nav">
				<ul class="port_ul">
					<li style="margin-left: 0;">
						<a href="portfoilo?cate=웹디자인&div=cate">
						<img src="<?=$url?>static/images/port_img/port_web.jpg">
						<p>웹 디자인</p>
						</a>
					</li>
					<li>
						<a href="portfoilo?cate=타이포그래피&div=cate">
						<img src="<?=$url?>static/images/port_img/port_type.jpg" style="width: 59px;">
						<p>타이포 그래피</p>
						</a>
					</li>
					<li>
						<a href="portfoilo?cate=그래픽디자인&div=cate">
						<img src="<?=$url?>static/images/port_img/port_grp.jpg" style="width: 36px;">
						<p>그래픽 디자인</p>
						</a>
					</li>
					<li>
						<a href="portfoilo?cate=편집디자인&div=cate">
						<img src="<?=$url?>static/images/port_img/port_up.jpg">
						<p>편집 디자인</p>
						</a>
					</li>
					<li>
						<a href="portfoilo?cate=IT&div=cate">
						<img src="<?=$url?>static/images/port_img/port_it.jpg" style="width: 59px;">
						<p>IT</p>
						</a>
					</li>
					<li>
						<a href="portfoilo?cate=영상/모션그래픽&div=cate">
						<img src="<?=$url?>static/images/port_img/port_video.jpg" style="width: 72px;">
						<p>VIDEO</p>
						</a>
					</li>
					<?php
						if(isset($id) && $division == 1){
					?>
						<div class="writer_portfolio port_inset_btn">
							<i class="fas fa-pen"></i>
							<p>포트폴리오<br>등록</p>
						</div>
					<?php
						}
					?>
					
					
				</ul>
			</nav>
		<section class="port_body">
			<div class="port_rank">
				<div class="port_top">
					<div class="port_rank_title">
						<p>실시간 인기 포트폴리오</p>
					</div>
					<div class="port_rank_div">
						<div class="port_rank_wrap">
							<?php
								foreach ($top_rank as $entry) {
								$arr = explode(',', $entry->portfoilo_img);
							?>
							<div class="rank_item" data-num="<?=$entry->num?>">
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
							<?php
								}
							?>
							
						</div>
					</div>
				</div>
			</div>
			<div class="ports">
				<div class="ports_wrap">
					<div class="ports_top">
						<div class="ports_top_left">
							<select class="left_select">
								<option>제목</option>
								<option>내용</option>
								<option>작성자</option>
							</select>
							<input type="text" name="search_input" class="search_input" style="font-size: 0.8em;" placeholder="검색어를 입력해주세요.">
							<button class="search_btn"><span>검색</span> <span>|</span> <i class="fas fa-search"></i></button>
						</div>
						<div class="ports_top_right">
							<span><a href="portfoilo?kekword=count&div=click">조회순</a></span><span><a href="portfoilo?kekword=top&div=click">인기순</a></span><span><a href="portfoilo?kekword=like&div=click">추천순</a></span>
						</div>
					</div>
					<div class="ports_bodys">
						<?php
							
							foreach ($result as $entry) {
								$like_count = 0;
								$arr = explode(',', $entry->portfoilo_img);
									foreach ($like_result as $entry1) {
										if($entry1->portfoilo_num == $entry->num){
											$like_count++;
										}
									}
								?>
									<div class="ports_item" data-num="<?=$entry->num?>">
										<div class="ports_img">
											<img src="<?=$url?>static/userimages/portfoilo/<?=$arr[0]?>">
											<div class="gray_div" style="display: none;">
												<p>자세히 보기</p>

												<div class="circle plus_circle">
													<i class="fas fa-plus"></i>
												</div>

												<div class="like_count_comment">
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