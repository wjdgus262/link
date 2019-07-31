<?php
	date_default_timezone_set('Asia/Seoul');
	$con = mysqli_connect("localhost","root","","link");
	mysqli_set_charset($con,"utf8");
	// echo "날짜 : ".date("Y-m-d h:i:s")."<br>";
	// echo "주소 : ".$_SERVER['REMOTE_ADDR']."<br>";
	// echo "호스트 : ".$_SERVER['HTTP_HOST']."<br>";
	// echo "환경 : ".$_SERVER['HTTP_USER_AGENT']."<br>";
	// echo "뷰페이지 : ".$_SERVER['PHP_SELF']."<br>";
	// echo "서버 포트 : ".$_SERVER['SERVER_PORT']."<br>";
	// echo "사용자 포트 : ".$_SERVER['REMOTE_PORT']."<br>";

	// echo $this->session->userdata['userid'];
	$id = $this->session->userdata['userid'];
	$addr = $_SERVER['REMOTE_ADDR'];
	$host = $_SERVER['HTTP_HOST'];
	$Environment = $_SERVER['HTTP_USER_AGENT'];
	$view = $_SERVER['PHP_SELF'];
	$user_port = $_SERVER['REMOTE_PORT'];

	$sql = "INSERT INTO log(`log_id`,`log_addr`,`log_host`,`log_self`,`log_agent`,`log_por`) values ('$id','$addr','$host','$view','$Environment','$user_port')";
	// mysqli_query($con,$sql);
	$result = mysqli_query($con,$sql);
	// if($result){
	// 	echo "succcess";
	// }else{
	// 	echo "error";
	// }
?>