<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--sweetmodal-->
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.css">
	<link rel="icon" href="<?=$url?>static/images/header_logo.png" type="image/ico">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/animate.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/sub_header.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/mypage_1.css">
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
			/*left: 1440px;
			top: 620px;*/
			display: block;
			z-index: 50;
			width: 200px;
			display: none;
			height: 35px;
		}
		.go_color_test{
			position: fixed;
			left: 860px;
			top: 345px;
			border: 1px solid #6a3bff;
		    width: 160px;
		    height: 40px;
		    margin-top: 5px;
		    text-align: center;
		    line-height: 40px;
		    padding-left: 8px;
		    padding-right: 8px;
		    color: #6a3bff;
		    cursor: pointer;
		    z-index: 50;
		    font-size: 14px;
		}
		.my_prot{
	background: #6a3bff;
	color:white;
}
	</style>
</head>
<body>
	<?php
		include 'header.php';
	?>
	<?php
		include 'modal.php';
		$mypage_id = $_GET['id'];
	?>
	<!-- <h1>mypage</h1> -->

	<p class="get_url" style="display: none;"><?=$url?></p>
	<p class="get_id" style="display: none;"><?=$mypage?></p>
	<p class="get_color" style="display: none;"><?=$color?></p>
	<?php
		if($id == $mypage_id){
	?>
	<input type='color' class='basic' value='<?=$color?>' id="basic_color"/>
	<label for="basic_color" class="go_color_test">마이페이지 색상 변경</label>
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

	<section class="mypage_section">
		<div class="mypage_section_wrap" style="background: <?=$color?>">
			<div class="mypage_user_wrap" >
			<div class="user_wrap_left">
				<div class="user_profile_circle">
					<img src="<?=$url?><?=$userimg?>" alt="img">
				</div>
				<h1>서정현</h1>
				<?php
				if($division == 1){
				?>
					<div class="update_profile_circle">
						<i class="fas fa-pen"></i>
					</div>
				<?php
					}else{
				?>
					<div class="update_profile_circle">
						<i class="fas fa-pen"></i>
					</div>
				<?php
					}
				?>
				
			</div>
			<div class="user_wrap_right">
				<table class="profile_table">
					<tr>
						<td>희망직종</td><td style="text-align: center;"><?=$result[0]->category?></td>
					</tr>
					<tr>
						<td>업로드한 포트폴리오</td><td style="text-align: center;"><?=$counts['pr_count'];?></td>
					</tr>
					<tr>
						<td>총 좋아요</td><td style="text-align: center;"><?=$counts['like_count'];?></td>
					</tr>
					<tr>
						<td>총 댓글 수</td><td style="text-align: center;"><?=$counts['comment_count'];?></td>
					</tr>
						<tr>
						<td>총 쪽지</td><td style="text-align: center;"><?=$reply_count;?></td>
					</tr>
					<tr>
						<td>읽지 않은 쪽지</td><td style="text-align: center;" class="read_count_td"><?=$read_count?></td>
					</tr>
			</table>
			</div>
		</div>
		</div>
		
		<div class="mypage_work_wrap">
			<div class="work_wrap_top">
				<button class="my_prot" style="background:#6a3bff; color: white;">포트폴리오</button>
				<button class="my_scrp">스크랩 공고</button>
				<button class="my_reply_pay">받은 쪽지</button>
				<button class="my_reply_sender">보낸 쪽지</button>
			</div>
			<div class="work_wrap_body">
				<div class="work_port">
					<div class="work_port_search">
						<div class="port_search_div">
							<select class="port_select">
								<option value="웹디자인">웹 디자인</option>
								<option value="타이포그래피">타이포 그래피</option>
								<option value="그래픽디자인">그래픽 디자인</option>
								<option value="편집디자인">편집 디자인</option>
								<option value="IT">IT</option>
								<option value="영상">Video</option>
							</select>
						</div>
						<div class="port_search_right">
							<button class="port_search_btn"><span>검색</span> <span>|</span> <i class="fas fa-search"></i></button>
							<input type="text" class="port_search_input">
						</div>
					</div>
					<div class="work_port_wrap">
							<?php
							foreach($port_result as $entry){
								$arr = explode(',', $entry->portfoilo_img);
						?>
							<div class="work_port_item" >
								<img src="<?=$url?>static/userimages/portfoilo/<?=$arr[0]?>" alt="img">
							<?php
								if($id == $entry->portfoilo_id){
							?>
							<div class="portfoilo_infos" style="display: none;">
								<button class="more_port" data-nick="<?=$entry->portfoilo_nickname?>">자세히</button><br>
								<button class="portfoilo_update" style="margin-top: 30px" data-num="<?=$entry->num?>">수정하기</button><br>
								<button class="portfoilo_delete" style="margin-top: 30px" data-num="<?=$entry->num?>">삭제하기</button><br>
							</div>
							<?php
								}else{
							?>
							<div class="portfoilo_infos" style="padding-top: 120px;" style="display: none;">
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


				<div class="work_scrap" style="display: none;">
					<div class="work_port_search">
						<div class="port_search_div">
						</div>
						<div class="port_search_right">
							<button class="scrap_search_btn"><span>검색</span> <span>|</span> <i class="fas fa-search"></i></button>
							<input type="text" class="scrap_search_input">
						</div>
					</div>
					<div class="work_scrap_wrap">
					</div>
				</div>
				<div class="work_payer" style="display: none;">
					<div class="work_port_search">
						<div class="port_search_div">
							<button class="reply_sender_btn">쪽지쓰기</button>
							<button class="reply_payer_delete">받은쪽지삭제</button>
						</div>
						<div class="port_search_right">
							<button class="reply_payer_search_btn"><span>검색</span> <span>|</span> <i class="fas fa-search"></i></button>
							<input type="text" class="reply_payer_search_input">
						</div>
					</div>
					
					<table class="work_payer_table" cellspacing="0" cellpadding="0">
					</table>
				</div>

				<div class="work_send" style="display: none;">
					<div class="work_port_search">
						<div class="port_search_div">
							<button class="reply_sender_btn">쪽지쓰기</button>
							<button class="reply_send_delete">보낸쪽지삭제</button>
						</div>
						<div class="port_search_right">
							<button class="reply_send_search_btn"><span>검색</span> <span>|</span> <i class="fas fa-search"></i></button>
							<input type="text" class="reply_send_search_input">
						</div>
					</div>
					<table class="work_send_table">
					</table>
				</div>
			</div>
		</div>
	</section>
</body>
</html>