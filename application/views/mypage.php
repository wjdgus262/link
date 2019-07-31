<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--sweetmodal-->
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.css">

	<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/animate.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/sub_header.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/mypage.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/modal.css">
	<script type="text/javascript" src="<?=$url?>static/libs/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/jquery.lazyload.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/mypage.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/member_script.js"></script>
	<title></title>

	<style type="text/css">
		header{
			background: white;
		} 
		.mainmenu li  {
			color: black;
		}
		.mainmenu li > a {
			color: black;
		}
		.info_div > i{
			color: black;
		}
		.he_submenu > li > a{
			color: white;
		}
		.basic{
			position: fixed;
			left: 1440px;
			top: 620px;
			display: block;
			z-index: 50;
			width: 200px;
			height: 35px;
		}
		.go_color_test{
			position: fixed;
			left: 1440px;
			top: 665px;
			display: block;
			z-index: 50;
			width: 205px;
			height: 35px;
			background: white;
			border: 1px solid black;
			border-radius: 10px;
			cursor: pointer;
		}
	</style>
</head>
<body style="background: <?=$color?>">
	<?php
		include 'header.php';
	?>
	<?php
		include 'modal.php';
		$mypage_id = $_GET['id'];
	?>
	<!-- <h1>mypage</h1> -->

	<p class="get_url" style="display: none;"><?=$url?></p>
	<?php
		if($id == $mypage_id){
	?>
	<input type='color' class='basic' value='<?=$color?>' />
	<button class="go_color_test"  data-id="<?=$mypage?>">마이페이지 색상 변경</button>
	<?php		
		}
	?>
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


	<div class="myreply_modal" style="display: none;">
		<div class="myreply_wrap">
			<div class="myreply_top">
				<p>admin 님이 나에게 보낸 쪽지</p>
				<span>보낸시간</span> <span class="send_date">19-05-13 [17:08]</span>
			</div>
			<div class="myreply_body">
				<p>테스테스테스트테스트</p>
			</div>
			<div class="myreply_bottom">
				<button class="myreply_success">확인</button>
				<button class="myreply_re">답장</button>
			</div>
		</div>
	</div>
	<div class="wrap_left">
			
				<?php
					if(isset($userimg)){
				?>
				<div class="profile_img_div">
				<img src="<?=$url?><?=$userimg?>" alt="img">
				</div>
				<?php
					}else{
				?>
				<div class="profile_img_div" style="background: white;">
				<img src="<?=$url?>./static/images/empty_userimg.png" alt="img" style="width: 90%; margin-top: 50px;">
			</div>
				<?php
					}
				?>
				
			</div>
			<div class="white_line">
			</div>
			<?php
				if($division == 1){
			?>
				<div class="circle white_circle update_circle">
					<i class="fas fa-pen"></i>
				</div>
			<?php
				}else{
			?>
				<div class="circle white_circle update_circle">
					<i class="fas fa-pen"></i>
				</div>
			<?php
				}
			?>
			
		</div>
	<div class="wrap_right" style="background:<?=$color?>;">
		<div class="profile_info">
			<h1><?=$result[0]->name?></h1>
			<table class="profile_table">
				<tr>
					<td colspan="2" style="text-align: center;"><?=$result[0]->category?></td>
				</tr>
				<tr>
					<td>포트폴리오</td><td style="text-align: center;"><?=$counts['pr_count'];?></td>
				</tr>
				<tr>
					<td>좋아요</td><td style="text-align: center;"><?=$counts['like_count'];?></td>
				</tr>
				<tr>
					<td>댓글 수</td><td style="text-align: center;"><?=$counts['comment_count'];?></td>
				</tr>
				<?php
		if($id == $mypage_id){
	?>
	<tr>
					<td>쪽지</td><td style="text-align: center;"><?=$reply_count;?> <span class="read_count">(<?=$read_count?>)</span></td>
				</tr>
	<?php		
		}
	?>
				
			</table>
			<div class="sns_div">
			</div>
		</div>
		<?php
		if($id == $mypage_id){
	?>
	<div class="mypage_buttons">
			<button class="mypage_btn reply_btn">쪽지함</button>
			<button class="mypage_btn srcap_btn_click">스크랩한공고</button>
		</div>
	<?php		
		}
	?>
		
		<div class="not_scroll scrap_divs" style="display: none;">
			<div class="profile_comment">
			<div class="scarp_title">
				<h3>스크랩한 공고</h3>
				<i class="fas fa-times scarp_close_i"></i>
			</div>
			<div class="scarp_body">
				<?php

					// echo $result[0]->scrap;
				$scrap_arr = explode(",", $result[0]->scrap);
				// var_dump($scrap_arr);
				foreach ($company_result as $entry) {
					# code...
					for($i = 0; $i < count($scrap_arr)-1; $i++){
						if($entry->companynum == $scrap_arr[$i]){
							// echo $i;
								$qua_atr = explode(",", $entry->companyqua);
								$companycondition_atr = explode(",", $entry->companycondition);
							?>
								<div class="scap_body_item" data-num="<?=$entry->companynum?>">
									<div class="scap_logo_img">
										<?php
											if($entry->companylogo != ""){
										?>
										<img src="<?=$entry->companylogo?>" alt="img">
										<?php
											}
										?>
										
									</div>
									<div class="scap_infos">
										<div class="scap_infos_top">
											<p><?=$entry->companytitle?></p>
										</div>
										<div class="scap_infos_bottom">
											<span><?=$qua_atr[0]?></span>
											<span><?=$qua_atr[1]?></span>
											<span><?=$companycondition_atr[1]?></span>
											<span><?=$companycondition_atr[0]?></span>
											<span><?=$entry->companyend?> 까지</span>
										</div>
									</div>
								</div>
							<?php
						}
					}
				}
			?>
				
			</div>
		</div>
		</div>
		

		<div class="not_scroll reply_divs" style="display: none;">
			<div class="profile_comment">
			<div class="scarp_title">
				<h3>쪽지함</h3>
				<i class="fas fa-times reply_close_i"></i>
			</div>
			<div class="scarp_body">
				<div class="reply_header">
					<div class="reply_header_left">
						<p>보낸사람</p> 
					</div>
					<div class="reply_header_right">
						<p>내용</p>
					</div>
				</div>
				<?php
					foreach ($reply as $entry) {
						if($entry->reply_read == 0){
				?>
					<div class="reply_content" data-num="<?=$entry->num?>">
						<div class="reply_content_left">
							<p style="font-weight: bold; color: #6a3bff;"><?=$entry->reply_sender?></p>
						</div>
						<div class="reply_content_right">
							<p style="float: left; font-weight: bold; color: #6a3bff;"><?=$entry->reply_content?></p>
						</div>
					</div>
				<?php
						}else{
				?>
					<div class="reply_content" data-num="<?=$entry->num?>">
						<div class="reply_content_left">
							<p style="font-weight: normal; color: #947cfc;"><?=$entry->reply_sender?></p>
						</div>
						<div class="reply_content_right">
							<p style="float: left; font-weight: normal; color: #947cfc;"><?=$entry->reply_content?></p>
						</div>
					</div>
				<?php
						}
				?>
				
				<?php
					}
				?>
				
			</div>
		</div>
		</div>
	</div>
	<div class="wrap" style="background: <?=$color?>;">
		<div class="profile_wrap">
			<?php
				foreach($port_result as $entry){
					$arr = explode(',', $entry->portfoilo_img);
					?>
					<div class="profile_item">
						<img src="<?=$url?>static/userimages/portfoilo/<?=$arr[0]?>" alt="img">
						<?php
							if($id == $entry->portfoilo_id){
						?>
						<div class="portfoilo_infos">
							<button class="more_port" data-nick="<?=$entry->portfoilo_nickname?>">자세히</button>
							<button class="portfoilo_update" style="margin-top: 30px" data-num="<?=$entry->num?>">수정하기</button>
							<button class="portfoilo_delete" style="margin-top: 30px" data-num="<?=$entry->num?>">삭제하기</button>
						</div>
						<?php
							}else{
						?>
						<div class="portfoilo_infos" style="
	padding-top: 100px;">
							<button class="more_port" data-nick="<?=$entry->portfoilo_nickname?>">자세히</button>
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

</body>
</html>