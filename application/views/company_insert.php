
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
		<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/bootstrap-tagsinput.css">




	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/libs/animate.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/sub_header.css">
	<link rel="stylesheet" type="text/css" href= "<?=$url?>static/css/company_insert.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?=$url?>static/css/modal.css">
	<script type="text/javascript" src="<?=$url?>static/libs/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/sweetmodal/jquery.sweet-modal.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/jquery.lazyload.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?=$url?>static/libs/bootstrap-tagsinput.js"></script>
<script type="text/javascript" src="<?=$url?>static/js/company_insert.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/member_script.js"></script>
	<script type="text/javascript" src="<?=$url?>static/js/scroll.js"></script>
	<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
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
	<script type="text/javascript">
		$(document).ready(function(){
			 	// $('#tags').inputTags({
			 		// max: 10
			 	// });
			 	// $(".hash_inputs").tag
		});
	</script>
	<style type="text/css">
		header *{
			font-size: 19px;
		}
		.bootstrap-tagsinput{
			/*background: red;*/
			border-radius: 0px;
			width: 100%;
			height: 100%;
			border: 1px solid #b2b2b2;
			font-size: 17px;
			background: white;
			line-height: 40px;
		}
	</style>
</head>
<body>
	<!-- <?php
		echo $id;
	?> -->
	<?php
		include 'modal.php';
	?>
	<!-- <input type="" name="" placeholder=""> -->
	<p class="url" style="color: white; display: none;" ><?=$url?></p>
	<div class="wrap">
		<div class="company_top">
			<img src="<?=$url?>static/images/top_background.png" alt="img">
			<div class="mi_div">
				<div class="company_title">
						<h1>채용공고 올리기</h1>
				</div>
			</div>
		</div>
		<nav class="comapny_nav">
			<h1>“상세한 채용 정보 기입은 보다 신속하고 정확한 인재채용으로 이어집니다.”</h1>
			<p>* 필수항목은 반드시 입력해주십시오. </p>
		</nav>
		<section class="insert_section" style="overflow: hidden;">
			<div class="insert_wrap">
				<div class="insert_div">

					<div class="insert_bodys first_div">
						<div class="first_wrap">
							<div class="insert_left">
								<span>회사정보</span>
							</div>
							<div class="insert_right first_right">
								<div class="first_item">
									<div class="first_item_title">
										<p>*회사명</p>
									</div>
									<div class="first_item_input">
										<input type="text" class="inputs insert_title" placeholder="최대 15자 까지 입력가능합니다.">
									</div>
								</div>

								<div class="first_item">
									<div class="first_item_title">
										<p>*회사로고</p>
									</div>
									<div class="first_item_input">
										<input type="text" class="inputs insert_logo" placeholder="가로형 이미지 jpg, jpeg, png 만 업로드 가능합니다." disabled="disabled">
										<label for="logo_input" class="file_label">파일찾기</label>
										<input type="file" id="logo_input" accept=".gif, .jpg, .png">
									</div>
								</div>
								<div class="first_item">
									<div class="first_item_title">
										<p>*회사주소</p>
									</div>
									<div class="first_item_input">
										<input type="text" class="inputs insert_adress" placeholder="도로명 주소, 지번 주소 모두 가능합니다." disabled="disabled">
										<button class="add_address">주소찾기</button>
									</div>
								</div>
								<div class="first_item">
									<div class="first_item_title">
										<p>회사위치</p>
									</div>
									<div class="first_item_input large_item">
										<div class="map_div" id="map">
											<p>주소을 입력하시면 지도가 표시됩니다</p>
										</div>
										<div class="cars">
											<p>교통편 정보</p>
											<input type="text" class="cars_input inputs" >
											<p style="margin-top: 10px;">*상세정보</p>
											<textarea class="more_info inputs" placeholder="회사에대한 간단한 소개를 해주세요."></textarea>
										</div>
									</div>
								</div>
								<div class="first_item" style="margin-top: 200px;">
									<div class="first_item_title">
										<p>*회사번호</p>
									</div>
									<div class="first_item_input">
										<input type="text" class="inputs insert_tel" placeholder="회사전화번호를 입력해주세요(-구분).">
									</div>
								</div>
								<div class="first_item">
									<div class="first_item_title">
										<p>*회사인재상</p>
									</div>
									<div class="first_item_input">
										<input type="text" class="inputs insert_tea" placeholder="해시태그 입력 , 로 구분" data-role="tagsinput" style="width: 537px">
									</div>
								</div>
								<div class="first_item">
									<div class="first_item_title">
										<p>*홈페이지</p>
									</div>
									<div class="first_item_input">
										<input type="text" class="inputs insert_page" placeholder="홈페이지 url 를 입력하십시오(http://없이 도메인만 입력해주세요.)." style="width: 100%;">
									</div>
								</div>

							</div>
							<div class="insert_btns">

								<button class="buttons next_btn">다음 >> </button>
								<button class="buttons canel_btn" style="margin-right: 20px;">취소</button>
							</div>
						</div>
					</div>
					<div class="insert_bodys second_div">
						<div class="second_wrap">
							<div class="insert_left">
								<span>채용정보</span>

								
							</div>
							<div class="insert_right second_right">
								<div class="second_item">
									<div class="second_title">
										<p>*공고제목</p>
									</div>
									<div class="second_input">
										<input type="text" class="second_inputs insert_gongtitle" placeholder="공고 제목 을 입력해주세요.">
									</div>
								</div>
								<div class="second_item">
									<div class="second_title">
										<p>*모집기간</p>
									</div>
									<div class="second_input">
										<div class="date_div">
											<p>시작일</p>
											<select class="start_year" style="border-left: 1px solid gray;">
											</select>
											<select class="start_mm" style="border-left: 1px solid gray;"></select>
											<select class="start_dd" style="border-left: 1px solid gray; border-right: 1px solid gray;"></select>
											<p>부터</p>
										</div>
										<div class="date_div">
											<p>마감일</p>
											<select class="end_year" style="border-left: 1px solid gray;">
											</select>
											<select class="end_mm" style="border-left: 1px solid gray;"></select>
											<select class="end_dd" style="border-left: 1px solid gray; border-right: 1px solid gray;"></select>
											<p>까지</p>
										</div>
									</div>
								</div>
								<div class="second_item mid_second_item">
									<div class="second_title">
										<p style="line-height: 130px">*모집업종</p>
									</div>
									<div class="second_input">
										<input type="checkbox" class="checks" id="web_check" value="웹디자인">
										<label for="web_check" class="check_label">
											<img style="margin-bottom: 10px;" src="<?=$url?>static/images/port_img/port_web.jpg">
											<p style="margin-left: 50px;">웹디자인</p>
										</label>

										<input type="checkbox" class="checks" id="type_check" value="타이포그래피">
										<label for="type_check" class="check_label">
											<img src="<?=$url?>static/images/port_img/port_type.jpg">
											<p style="margin-left: 45px;">타이포그래피</p>
										</label>

										<input type="checkbox" class="checks" id="grp_check" value="그래픽디자인">
										<label for="grp_check" class="check_label">
											<img style="width: 45px" src="<?=$url?>static/images/port_img/port_grp.jpg">
											<p style="margin-left: 45px;">그래픽디자인</p>
										</label>

										<input type="checkbox" class="checks" id="up_check" value="편집디자인">
										<label for="up_check" class="check_label">
											<img src="<?=$url?>static/images/port_img/port_up.jpg">
											<p style="margin-left: 45px;">편집디자인</p>
										</label>

										<input type="checkbox" class="checks" id="it_check" value="IT">
										<label for="it_check" class="check_label">
											<img src="<?=$url?>static/images/port_img/port_it.jpg">
											<p style="margin-left: 45px;">IT</p>
										</label>

										<input type="checkbox" class="checks" id="video_check" value="영상">
										<label for="video_check" class="check_label">
											<img src="<?=$url?>static/images/port_img/port_video.jpg">
											<p style="margin-left: 45px;">VIDEO</p>
										</label>
									</div>
								</div>
								<div class="second_item">
									<div class="second_title">
										<p style="margin-top: 10px;">*모집조건</p>
									</div>
									<div class="second_input large_second_input">
										<div class="large_item">
											<p>경력</p>

											<input type="radio" name="career" class="radios" id="new_career" value="신입">
											<label for="new_career">신입</label>

											<input type="radio" name="career" class="radios" id="career" value="경력">
											<label for="career" style=" margin-left: 100px;">경력</label>

											<input type="radio" name="career" class="radios" id="career_hi" value="경력우대">
											<label for="career_hi" style=" margin-left: 100px;">경력우대</label>

											<input type="radio" name="career" class="radios" id="not_career" value="경력사항 무관">
											<label for="not_career" style=" margin-left: 100px;">경력사항 무관</label>
										</div>


										<div class="large_item">
											<p>학력</p>

											<input type="radio" name="education" class="radios" id="not_education" value="학력무관">
											<label for="not_education">학력무관</label>

											<input type="radio" name="education" class="radios" id="high" value="고졸이상">
											<label for="high" style=" margin-left: 69px;">고졸이상</label>

											<input type="radio" name="education" class="radios" id="college" value="전문대졸이상">
											<label for="college" style=" margin-left: 69px;">전문대졸이상</label>

											<input type="radio" name="education" class="radios" id="uni" value="대졸이상">
											<label for="uni" style=" margin-left: 69px;">대졸이상</label>

											<input type="radio" name="education" class="radios" id="doctor" value="석/박사이상">
											<label for="doctor" style=" margin-left: 69px;">석/박사이상</label>
										</div>

										<div class="large_item">
											<p>급여</p>

											<input type="text" class="second_inputs insert_money" placeholder="직접 입력" disabled="disabled">

											<select class="moeny_order">
												<option value="not">구간선택</option>
												<option value="1">직접입력</option>
												<option value="2000 이하">2000 이하</option>
												<option value="2000 ~ 2500">2000 ~ 2500</option>
												<option value="2500 ~ 3000">2500 ~ 3000</option>
												<option value="3000 ~ 3500">3000 ~ 3500</option>
												<option value="3500 이상">3500 이상</option>
											</select>
										</div>


										<div class="large_item">
											<p>고용유형</p>

											<input type="radio" name="employ" class="radios" id="employ_one" value="정규직">
											<label for="employ_one">정규직</label>

											<input type="radio" name="employ" class="radios" id="employ_two" value="계약직">
											<label for="employ_two" style=" margin-left: 100px;">계약직</label>

											<input type="radio" name="employ" class="radios" id="employ_thr" value="전환형 계약직">
											<label for="employ_thr" style=" margin-left: 100px;">전환형 계약직</label>

											<!-- <input type="text" class="second_inputs insert_employ" placeholder="급여 직접입력하기"> -->
										</div>
										<div class="large_item">
											<p>근무조건</p>

											<input type="text" class="second_inputs insert_working" placeholder="근무 조건을 입력해주세요.">
											<!-- <input type="text" class="second_inputs insert_employ" placeholder="급여 직접입력하기"> -->
										</div>
										<div class="large_item">
											<p>근무지역</p>

											<input type="text" class="second_inputs insert_area" placeholder="직접 입력" disabled="disabled">

											<select class="moeny_area">
												<option value="not">지역 선택</option>
												<option value="1">직접입력</option>
												<option value="서울">서울</option>
												<option value="경기">경기</option>
												<option value="인천">인천</option>
												<option value="강원">강원</option>
												<option value="대전">대전</option>
												<option value="대구">대구</option>
												<option value="부산">부산</option>
												<option value="광주">광주</option>
												<option value="제주">제주</option>
											</select>
										</div>
										<div class="large_item">
											<p>특이사항</p>

											<input type="text" class="second_inputs insert_uniq" placeholder="특이 사항을 입력해주세요.">

											
										</div>
									</div>
								</div>
								<div class="second_item">
									<div class="second_title">
										<p>*해시태그</p>
									</div>
									<div class="second_input hash_input">
										<!-- <input type="text" class="second_inputs insert_hash" placeholder="공고에 대한 정보를 해쉬태그 형식으로 입력해주세요."> -->
										<!-- <input type="text" id="tags" placeholder="태그는 , 로 구분됩니다." /> -->
										<!-- <p style="margin-top: 5px; color: gray;">* 해시태그는 , 로 구분됩니다.</p> -->
										<input type="text" class="hash_inputs" data-role="tagsinput" placeholder="해시태그는 , 로 구분됩니다.">
									</div>
								</div>
								<div class="second_item" style="margin-top: 400px;">
									<div class="second_title">
										<p>기타사항</p>
									</div>
									<div class="second_input">
										<input type="text" class="second_inputs insert_etc" placeholder="기타 사항을 입력해주세요.">
										<!-- <input type="text" class="second_inputs insert_hash" placeholder="공고에 대한 정보를 해쉬태그 형식으로 입력해주세요."> -->
										
									</div>
								</div>
							</div>
							<div class="insert_btns">
								<button class="buttons next_btn">다음 >> </button>
								<button class="buttons prev_btn" style="margin-right: 20px;"><< 이전</button>
							</div>
						</div>
					</div>
					<div class="insert_bodys third_div">
						<div class="third_wrap">
							<div class="insert_left">
								<span class="last_span">채용<br>상세정보</span>
								<p style="width: 128px; text-align: center; margin-top: 30px; font-size: 13px;">채용 공고에 대한 이미지를 업로드 해주세요.</p>
							</div>
							<div class="insert_right third_right">
								<div class="form-group">

  <input id="images" name="images[]" type="file" multiple>

  <span class="file_name" style="color: white;"></span>
</div>

							</div>
							<div class="insert_btns">
								<button class="buttons success_btn">등록완료</button>
								<button class="buttons prev_btn" style="margin-right: 20px;"><< 이전</button>
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