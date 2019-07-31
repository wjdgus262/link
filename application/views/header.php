
	<p class="head_url" style="display: none;"><?=$url?></p>
	<div class="serach_modal">
		<div class="close_div">
			<i class="fas fa-times"></i>
		</div>
		<div style="width: 500px; position: absolute; top: 450px; left: 750px;">
			<input id="url" type="text" name="url" required style="color:white;">
	      <label for="url"><i class="fa fa-search ser_i" aria-hidden="true" style="color: RGBA(120,120, 120, 0.8);;"></i> Search</label>
	      <div class="after"></div>
		</div>
		<!-- <fieldset class="url"> -->
	      
	    <!-- </fieldset> -->
	</div>
	<header>
		<div class="header_wrap">
			<div class="logo">
				<a href="<?=$url?>main"><img src="<?=$url?>static/images/footer_logo.png" alt="img"></a>
			</div>
			<nav>
				<ul class="mainmenu">
					<li><a href="<?=$url?>portfoilo">Portfolio</a></li>
					<li class="down_menu"><a href="#">Smart Matching</a>
						<ul class="he_submenu">
							<?php
								if(isset($id)){
							?>
							<li><a href="<?=$url?>matching/job">Job Matching</a></li>
							<li><a href="<?=$url?>matching/project">Project Matching</a></li>
							<?php
								}else{
							?>
							<li class="not_login"><a href="#">Job Matching</a></li>
							<li class="not_login"><a href="#">Project Matching</a></li>
							<?php
								}
							?>
							
						</ul>
					</li>
					<li><a href="<?=$url?>company/index">채용정보</a></li>
					<li class="down_menu"><a href="#">취업서포트</a>
						<ul class="he_submenu">
							<li><a href="<?=$url?>support/government">정부지원사업</a></li>
							<li><a href="<?=$url?>support/competition">공모전</a></li>
							<li><a href="<?=$url?>support/qna">질문게시판</a></li>
						</ul>
					</li>
					<?php
						if(isset($id)){
					?>
					<li><a href="<?=$url?>mypage?id=<?=$id?>">MyPage</a></li>
					<?php
						}else{
					?>
					<li class="not_login"><a href="#">MyPage</a></li>
					<?php
						}
					?>
					
					
					<!-- <li><i class="fas fa-search"></i></li>
					<li><a href="#">Login</a></li>
					<li><a href="#">무료회원가입</a></li>
					<li><i class="fas fa-th-large"></i></li> -->
				</ul>
				<div class="info_div">
					<i class="fas fa-th-large"></i>
				</div>
				<div class="info_div">
					<!-- <span class="search"><i class="fas fa-search" ></i></span> -->
					<!-- <?php
						if(isset($id))
						{
					?>
					<span class="logout_text"><a href="#">Logout</a></span>
					<?php
						}else{
					?>
					<span class="login_text"><a href="#">Login</a></span>
					<?php
						}
					?>
					
					<span class="register_text"><a href="#">무료회원가입</a></span>
					<?php
						if(isset($id)){
					?>
						<span class="mypage_go" data-num="<?=$id?>" style="cursor: pointer;"><i class="fas fa-th-large"></i></span>
					<?php
						}else{
					?>
						<span class="not_login" style="cursor: pointer;"><i class="fas fa-th-large"></i></span>
					<?php
						}
					?> -->
					
				</div>
			</nav>
		</div>
	</header>