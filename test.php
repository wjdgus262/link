<?php
	header('<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />');
date_default_timezone_set('Asia/Seoul');
$con = mysqli_connect("localhost","root","","link");
mysqli_set_charset($con,"utf8");
$array = $_POST['array'];
// var_dump($array);
$sql = "INSERT INTO companyboarlist (companyname,companylogo,companyaddress,companytitle,companyqua,companycondition,companyhash,companySectors,companymoney,companyurl,companyimg,companyinfo,companycar,companystart,companyend,companytel,companytalent,	companyetc_uqni,companyworking) values ('".$array[0]."','$array[1]','$array[2]','$array[3]','$array[4]','$array[5]','$array[6]','$array[7]','$array[8]','$array[9]','$array[10]','$array[11]','$array[12]','$array[13]','$array[14]','$array[15]','$array[16]','$array[17]','$array[18]')";
	$result = mysqli_query($con,$sql);
	if($result){
		// $data['success'] = true;
		echo "success";
	} else{
		die('Could not update data: ' . mysqli_error($con));
		// $data['success'] = false;
  //   $data['error'] = "dberror";
	}
?>