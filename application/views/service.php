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
	<link rel="stylesheet" type="text/css" href= "<?=$url?>static/css/service.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/modal.css">
	<script type="text/javascript" src="<?=$url?>static/libs/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/jquery.lazyload.js"></script>
	<!-- <script type="text/javascript" src="<?=$url?>static/js/portfoilo.js"></script> -->
	<script type="text/javascript" src="<?=$url?>static/js/member_script.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/scroll.js"></script>
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v3.2&appId=2153835338214363&autoLogAppEvents=1"></script>

	<title></title>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.slide_wrap').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
   prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
});

			$(".infos_gogo").click(function(){
				var popupX = (window.screen.width / 2) - (500 / 2);
				var popupY= (window.screen.height / 2) - (600 / 2);
				var win = window.open("./static/link/link.html", "PopupWin", "width=500,height=600,left="+popupX+",top="+popupY);
			});
			

			$(window).scroll(function(event){ 
				var scrollValue = $(document).scrollTop();
				if(scrollValue >= 1700){
					$('.mat_span').each(function() {
			  var $this = $(this),
			      countTo = $this.attr('data-count');
			  
			  $({ countNum: $this.text()}).animate({
			    countNum: countTo
			  },

			  {

			    duration: 500,
			    easing:'linear',
			    step: function() {
			      $this.text(Math.floor(this.countNum));
			    },
			    complete: function() {
			      $this.text(this.countNum);
			      //alert('finished');
			    }

			  });  
			});

			$('.port_count').each(function() {
			  var $this = $(this),
			      countTo = $this.attr('data-count');
			  
			  $({ countNum: $this.text()}).animate({
			    countNum: countTo
			  },

			  {

			    duration: 1000,
			    easing:'linear',
			    step: function() {
			      $this.text(Math.floor(this.countNum));
			    },
			    complete: function() {
			      $this.text(this.countNum);
			      //alert('finished');
			    }

			  });  
			});


			$('.company_count').each(function() {
			  var $this = $(this),
			      countTo = $this.attr('data-count');
			  
			  $({ countNum: $this.text()}).animate({
			    countNum: countTo
			  },

			  {

			    duration: 1000,
			    easing:'linear',
			    step: function() {
			      $this.text(Math.floor(this.countNum));
			    },
			    complete: function() {
			      $this.text(this.countNum);
			      //alert('finished');
			    }

			  });  
			});
			$('.gove_count').each(function() {
			  var $this = $(this),
			      countTo = $this.attr('data-count');
			  
			  $({ countNum: $this.text()}).animate({
			    countNum: countTo
			  },

			  {

			    duration: 1000,
			    easing:'linear',
			    step: function() {
			      $this.text(Math.floor(this.countNum));
			    },
			    complete: function() {
			      $this.text(this.countNum);
			      //alert('finished');
			    }

			  });  
			});

			$('.com_count').each(function() {
			  var $this = $(this),
			      countTo = $this.attr('data-count');
			  
			  $({ countNum: $this.text()}).animate({
			    countNum: countTo
			  },

			  {

			    duration: 1000,
			    easing:'linear',
			    step: function() {
			      $this.text(Math.floor(this.countNum));
			    },
			    complete: function() {
			      $this.text(this.countNum);
			      //alert('finished');
			    }

			  });  
			});
				}
			});

			$(".service_go").click(function(){
				location.href=$(".head_url").text()+"portfoilo";
			});

		});
	</script>
</head>
<body>
	<?php
		include 'modal.php';
	?>
	<?php
		include 'header.php';
	?>

	<section class="service_top_section">
		<video autoplay muted loop id="myVideo">
		  <source src="./static/service_video.mp4" type="video/mp4">
		</video>
		<div class="black_div">
			<h1>취업이 필요한 순간</h1>
			<p>취업의 연결고리 LINK</p>
		</div>
	</section>
	<section class="service_mid_section">
			<h1>About Link</h1>
			<div class="service_slide_wrap">
				<div class="slide_wrap">
					<div class="slide_item">
						<div class="slide_item_img">
							<img src="<?=$url?>static/images/future.jpg" alt="img">
						</div>
						<div class="slide_item_body">
							<h1>Togerher for a better future.</h1>
							<h3>더 나은 미래를 향한 동행</h3>
							<p style="margin-top: 10px;">창의적 사고와 끝없는 도전을 통해 새로운 미래를 창조함으로써<br>인류 사회의 꿈을 실현합니다.</p>
						</div>
					</div>
					<div class="slide_item">
						<div class="slide_item_img">
							<img src="<?=$url?>static/images/leader.jpg" alt="img">
						</div>
						<div class="slide_item_body">
							<h1>Global Leader</h1>
							<h3>미래를 개척하는 Link</h3>
							<p>지속적인 성장을 통해 기업가치를 증대시킵니다. 공정하고 투명한 경영을 실천합니다.<br> 상호존중과 신뢰의 노사문화를 구현합니다. 글로버 시민으로서 사회 발전에 기여합니다.</p>
						</div>
					</div>
					<div class="slide_item">
						<div class="slide_item_img">
							<img style="height: 100%;" src="<?=$url?>static/images/chal.jpg" alt="img">
						</div>
						<div class="slide_item_body">
							<h1>Challenge spirit</h1>
							<h3>도전정신</h3>
							<p>우리는 향상 최고를 지향합니다. 그래서 변화를 두려워 하지 않고 끊임없이 도전합니다.<br>우리는 하기 힘든일이라고 회피하지 않습니다.<br>오히려 새로운 가치를 찾아 나아갑니다.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="service_info_wrap">
				<div class="info_wrap_left">
					<img src="<?=$url?>static/images/large_logo.png" alt="img">
				</div>
				<div class="info_wrap_right">
					<p style="font-weight: bold; font-size:20px ">
						많은 사람들이 Link 에서<br> 
내 일을 찾고 있습니다. <br>
행복하게 일하는 내일을 <br>
만들어가기 위해 나아가겠습니다.<br>
<br>
<span style="font-weight: normal;">Link Team<span>
					</p>
				</div>
			</div>
	</section>
	<section class="service_bottom_section">
		<div class="service_bottom_wrap">
			<h1>About Service</h1>
			<div class="service_bottom_body">
				<div class="service_item ver_large_item">
					<p>평균 매칭도</p>
					<span class="mat_span" data-count="85.6">0</span><span style="margin-left: 0">%</span>
					<div class="item_icon_div">
						<i class="far fa-handshake" style="margin-right: 10px;"></i>
					</div>
				</div>
				<div class="service_item arge_item">
					<p>포트폴리오</p>
					<span data-count="50562" class="port_count">0</span><span style="margin-left: 0">개</span>
					<div class="item_icon_div">
						<i class="fas fa-user-edit"style="margin-right: 10px;" ></i>
					</div>
				</div>
				<div class="service_item mid_item">
					<p>채용공고</p>
					<span class="company_count" data-count="3513">0</span><span style="margin-left: 0">개</span>
					<div class="item_icon_div">
						<i class="far fa-clipboard" ></i>
					</div>
				</div>
				<div class="service_item smail_item">
					<p>정부지원사업</p>
					<span class="gove_count" data-count="1345">0</span><span style="margin-left: 0">개</span>
					<div class="item_icon_div">
						<i class="fas fa-building"></i>
					</div>
				</div>
				<div class="service_item ver_smail_item">
					<p>공모전</p>
					<span class="com_count" data-count="2456">0</span><span style="margin-left: 0">개</span>
					<div class="item_icon_div">
						<i class="fab fa-wpforms"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="matching_section">
		<div class="matching_wrap">
			<div class="matching_left">
				<img src="<?=$url?>static/images/matching_img.png" alt="img">
			</div>
			<div class="matching_right">
				<h1>Smart Matching</h1>
				<p>최고의 매칭 시스템으로 취준생과취준생<br>그리고 기업과취준생을 연결시켜드리겠습니다.</p>
<img src="<?=$url?>static/images/matciong_img2.png" alt="img">
			</div>
		</div>
	</section>
	<section class="service_last_section">
		<p>“지금 Link 에서 다양한 서비스를 만나보세요.”</p>
		<button class="service_go">Link 서비스 이용하기</button>
		<span class="infos_gogo">개인정보처리방침</span>
	</section>

		<?php
			include 'footer.php';
		?>
	</div>
</body>
</html>