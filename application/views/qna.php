<!DOCTYPE html>
<html>
<head>
	<title>Link</title>
	<meta charset="utf-8">
	<!--sweetmodal-->
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.css">
	<link rel="icon" href="<?=$url?>static/images/header_logo.png" type="image/ico">
<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/slick/slick.css"/>



	<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/slick/slick.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?=$url?>link/static/libs/animate.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/sub_header.css">
	<link rel="stylesheet" type="text/css" href= "<?=$url?>static/css/qna.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/modal.css">
	<script type="text/javascript" src="<?=$url?>static/libs/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/jquery.lazyload.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/qna.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/member_script.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/scroll.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/slick/slick.min.js"></script>
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
			$('.first_section_wrap').slick({
				autoplay: true,
  autoplaySpeed: 5000,
  arrows: true,
				prevArrow:"<button type='button' class='slick-prev pull-left prev_btn_slick'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next pull-right next_btn_slick'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
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
						<h1>취업성공 Q&A 게시판</h1>
				</div>
			</div>
			<nav class="comapny_nav">
			<!-- <h1>“성의 있는 질문이 성의 있는 답변으로 보답받습니다.”</h1> -->
		</nav>
		</div>
		<!-- <div class="qna_section">
			<img src="<?=$url?>static/images/qna_backimg.png" alt="img">
			<div class="gray_div">
				<div class="qna_infos">
					<h1>기업,직원에게 물어보기</h1>
					<p>진로,직무,기업 생활까지<br>
여러가지 질문에 응답해드립니다.</p>
					<?php
						if(!isset($id)){
					?>
						<button class="qna_start login_qna_start">로그인 후 질문하기</button>
					<?php
						}else if($division == 1){
					?>
						<button class="qna_start qna_gogo">질문하기</button>
					<?php
						}else if($division == 2){
					?>
						<button class="qna_start reponse_gogo">답변하기</button>
					<?php
						}
					?>
					
				</div>
			</div>
		</div> -->
		<div class="qna_body_section">
			<div class="qna_body_wrap">
				<div class="qna_first_section">
					<h2>취업준비생들이 가장 많이 묻는 질문</h2>
					<div class="first_section_wrap">
						<div class="first_item">
							<div class="first_item_top">
								<i class="fab fa-quora"></i>
								<h1>자소서를 작성할 때 600자로 되어 있으면 꽉 채워야 좋나요?</h1>
							</div>
							<div class="first_item_body">
								<p>굳이 글씨를 꽉 채워서 작성하지 않으셔도 됩니다. 지원자 대부분이 자소서를 작성할 때
글자수를 다 채워야 합격한다고 믿는 지원자분들이 많이 계신데 전부 채운다고 해서 좋은
자기소개서가 아닙니다. 실제 자소서를 작성할 때 본인의 얘기를 잘 담으면 그걸로 충분합니다.
자소서는 양보다 질입니다. 제일 적당한 자소서 양은 70~80%정도가 제일 좋습니다.</p>
							</div>
						</div>

						<div class="first_item">
							<div class="first_item_top">
								<i class="fab fa-quora"></i>
								<h1>자소서 지원동기를 작성할 때 어떻게 작성하는게 좋을까요?</h1>
							</div>
							<div class="first_item_body">
								<p> 대부분 자소서에서 제일 어려운 항목이 지원동기가 아닐까 싶습니다. 저 또한 지원동기가 
제일 어려웠으니까요. 지원동기를 작성할 때 본인만의 직업관을 적으면 좋습니다. 직업관이란
자신만의 회사를 선택하는 기준정도? 라고 할 수 있는데요. 나의 기준과 지원한 기업 사이에 
연관성이 있는지 기업의 인재상이나 핵심 가치 등 연결고리를 잘 만들어 작성하면 어렵지 않게
훌륭한 자소서를 작성할 수 있을겁니다.</p>
							</div>
						</div>

						<div class="first_item">
							<div class="first_item_top">
								<i class="fab fa-quora"></i>
								<h1>다대다 면접에서 합격하려면 어떻게 하는게 좋나요?</h1>
							</div>
							<div class="first_item_body">
								<p>다대다 면접에서 면접을 같이보는 지원자들이 답변을 잘하면 합격할 가능성이 높다는 통계가
있습니다. 즉, 다같이 잘해야 합격률이 올라간다는 거죠. 다대다 면접을 통과하고 싶다면 다같이
준비 잘하고 답변을 잘해야겠죠? </p>
							</div>
						</div>

						<div class="first_item">
							<div class="first_item_top">
								<i class="fab fa-quora"></i>
								<h1>면접볼 때 꼭 정장을 입어야 하나요?</h1>
							</div>
							<div class="first_item_body">
								<p>흔히 물어보는 질문인데 정장을 입는 것이 좋습니다. 회사 입장에서는 지원자의 첫인상을 보는
자리가 면접이기 때문에 단정한 모습으로 보이는 게 좋습니다. 더운 여름 같은 경우는 자켓을 
벗고 면접 입장 시 입고가는 것이 좋습니다. 면접관이 사전에 편하게 입고오라고 해도 정장이나 
단정한 캐쥬얼차림으로 입는 걸 추천드립니다.</p>
							</div>
						</div>

						<div class="first_item">
							<div class="first_item_top">
								<i class="fab fa-quora"></i>
								<h1>대학교를 진학중인데 지원해도 될까요?</h1>
							</div>
							<div class="first_item_body">
								<p>대학교를 다니면서 취업에 준비하려고 하는 학생분들이 많이 계십니다. 하지만 대부분 
채용에서는 졸업예정자이나거 졸업자인 경우에만 지원자격이 생기기 때문에 사실상 학교를
다니면서 지원하고 싶다면 졸업예정자일 경우만 해당이 됩니다. 학교에서 지원하는 취업프로그램에 참여하는 경우에도 학교를 다니면서 가능합니다.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="qna_board_section">
			<div class="board_wrap">
					<div class="qna_search_menu">
						<div class="search_left">
							<div class="search_cate all">
								<p>전체</p>
							</div>
							<div class="search_cate emp">
								<p>취업</p>
							</div>
							<div class="search_cate rectal">
								<p>직장생활</p>
							</div>
							<div class="search_cate other">
								<p>기타</p>
							</div>
						</div>
						<div class="search_right">
							<select class="company_list_select">
								<option>제목</option>
								<option>내용</option>
								<option>작성자</option>
							</select>
							<input type="text" name="text" class="company_search">
							<button class="company_search_btn"><span>검색</span> <span>|</span> <i class="fas fa-search"></i></button>
						</div>
					</div>
					<div class="qna_list">
						<table class="list_table" cellpadding="0" cellspacing="0">
							<thead></thead>
						</table>
						<?php
						if(isset($id) && $division == 1){
					?>
						<button class="qna_write">질문등록</button>
					<?php
						}
					?>
						
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