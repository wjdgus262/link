<div class="login_modal" style="display: none;">
		<div class="login_wrap">
			<img src="../static/images/login_img.png" alt="img">
			<div class="login_div">
				<div class="login_close">
					<i class="fas fa-times"></i>
				</div>
				<div class="login_logo">
					<img src="../static/images/login_logo.png" alt="logo">
				</div>
				<div class="login_title">
					<h1>LOGIN</h1>
				</div>
				<div class="login_id">
					<p>ID</p>
					<input type="text" name="text" class="inputid">
					<div class="circle check_circle" style="display: none;">
						<i class="fas fa-check info_check"></i>
						<i class="fas fa-times info_not" style="display: none;"></i>
					</div>
				</div>
				<div class="login_pw">
					<p>Password</p>
					<input type="password" name="text" class="inputpw">
					<div class="circle check_circle" style="display: none;">
						<i class="fas fa-check info_check"></i>
						<i class="fas fa-times info_not" style="display: none;"></i>
					</div>
					<p class="find_pw" style="cursor: pointer;">Forgot Password?</p>
				</div>
				<div class="login_button">
					<button class="login_btn">Login</button>
				</div>
			</div>
		</div>
	</div>


	<div class="register_modal" style="display: none;">
		<div class="register_wrap">
			<img src="../static/images/login_img.png" alt="img">
			<div class="register_div">
				<div class="register_close">
					<i class="fas fa-times"></i>
				</div>
				<div class="register_logo">
					<img src="../static/images/login_logo.png" alt="logo">
				</div>
				<div class="register_title">
					<h1>Reegister</h1>
				</div>
				<div class="register_body" >
					<div class="register_intro">
						<div class="intro_div job">
							<div class="intro_top">
								<img src="../static/images/jobseeker.png" alt="img">
							</div>
							<div class="intro_bottom">
								<p>Job seeker</p>
							</div>
						</div>
						<div class="intro_div enter_a">
							<div class="intro_top">
								<img src="../static/images/company.png" alt="img" style="margin-top: 15%;">
							</div>
							<div class="intro_bottom">
								<p>Enterprise</p>
							</div>
						</div>
					</div>
					<div class="job_seeker_wrap" style="overflow: hidden; display: none;">
						<div class="job_wrap" style="margin-left: 0%;">
							<div class="job_firstdiv">
								<div class="register_group">
									<p>Name</p>
									<input type="text" name="text" class="registername">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Age</p>
									<input type="text" name="text" class="registerage">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Email</p>
									<input type="text" name="text" class="registerEmail">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Phone</p>
									<input type="text" name="text" class="registerPhone">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
							</div>
							<div class="job_second_div">
								<div class="register_group">
									<p>ID</p>
									<input type="text" name="text" class="registerid">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Password</p>
									<input type="password" name="text" class="registerPassword">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Confirm Password</p>
									<input type="password" name="text" class="registerConfirmPassword">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
							</div>
							<div class="job_thired_div">
								<div class="job_thired_title">
									<p>Category</p>
								</div>
								<div class="job_thired_div_body">
									<div class="radio_group gender">
										<label for="man" style="margin-left: 20px;">MAN</label>
										<input type="radio" name="gender" id="man" class="gender_radio" value="1">
										<label for="woman" style="margin-left: 20px;">WOMAN</label>
										<input type="radio" name="gender" id="woman" class="gender_radio" value="2">
									</div>
									<div class="radio_group milty">
										<label for="gon" style="margin-left: 20px;">군필</label>
										<input type="radio" name="mility" id="gon" class="mility_radio" value="1">
										<label for="me" style="margin-left: 40px;">미필</label>
										<input type="radio" name="mility" id="me" class="mility_radio" value="2">
									</div>
									<div class="category_group">
										<div class="category_div deve" data-index="1">
											<div class="circle category_circe">
												<img src="../static/images/dev_icon.png" alt="img">
											</div>
											<p>developer</p>
										</div>

										<div class="category_div deve" data-index="2">
											<div class="circle category_circe">
												<img src="../static/images/degi_icon.png" alt="img">
											</div>
											<p>designer</p>
										</div>

										<div class="category_div deve" data-index="3">
											<div class="circle category_circe">
												<img src="../static/images/pal_icon.png" alt="img">
											</div>
											<p>Planner</p>
										</div>
									</div>
								</div>
							</div>
							<div class="job_four_div">
								<div class="register_group">
									<p>경력</p>
									<input type="text" name="text" class="registeryear" style="width: 150px;" placeholder="신입 or 년수">
									<!-- <span>년</span> -->
								</div>
								<div class="register_group">
									<p>자소서</p>
									<textarea class="jasosu"></textarea>
									<!-- <span>년</span> -->
								</div>
							</div>
						</div>
					</div>
					<div class="Enterprise_wrap" style="overflow: hidden; display: none;">
						<div class="Enterprise_body">
							<div class="Enterprise_firstdiv">
								<div class="register_group">
									<p>기업이름</p>
									<input type="text" name="text" class="registername">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>

								<div class="register_group">
									<p>업무</p>
									<input type="text" name="text" class="registerjink">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>

								<div class="register_group">
									<p>Email</p>
									<input type="text" name="text" class="registerEmail">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>

								<div class="register_group">
									<p>Phone</p>
									<input type="text" name="text" class="registerPhone">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
							</div>
							<div class="Enterprise_seconddiv">
								<div class="register_group">
									<p>ID</p>
									<input type="text" name="text" class="registerid">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Password</p>
									<input type="password" name="text" class="registerPassword">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
								<div class="register_group">
									<p>Confirm Password</p>
									<input type="password" name="text" class="registerConfirmPassword">
									<div class="circle check_circle">
										<i class="fas fa-check register_check"></i>
										<i class="fas fa-times register_not"></i>
									</div>
								</div>
							</div>
							<div class="Enterprise_thireddiv">
								<p class="Enterprise_thireddiv_title">원하는 인재상을 적어주세요.</p>
								<textarea class="injesang"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="register_button" style="display: none;">
					<i class="fas fa-chevron-left prev_btn_re" style="display: none;"></i>
					<button class="register_btn first_next">Next</button>
				</div>
				</div>
				
			</div>
		</div>
	</div>


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

			</div>
			<nav>
				<ul class="mainmenu">
					<li><a href="./portfoilo">Portfollo</a></li>
					<li><a href="#">기업후기</a></li>
					<li><a href="#">팀구해요</a></li>
					<li><a href="#">기업게시판</a></li>
					<li><a href="#">Gallery</a></li>
					<!-- <li><i class="fas fa-search"></i></li>
					<li><a href="#">Login</a></li>
					<li><a href="#">무료회원가입</a></li>
					<li><i class="fas fa-th-large"></i></li> -->
				</ul>
				<div class="info_div">
					<span class="search"><i class="fas fa-search" ></i></span>
					<?php
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
					<span><i class="fas fa-th-large"></i></span>
				</div>
			</nav>
		</div>
	</header>