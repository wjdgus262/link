<?php
	$con = mysqli_connect("localhost","root","");
	$sql = "create database link";
	$result = mysqli_query($con,$sql);
	if($result){
		echo "db생성 성공";
	}
	mysqli_select_db($con,"link");
	$sql1 = "CREATE TABLE `ci_sessions` ( `id` varchar(128) NOT NULL, `ip_address` varchar(45) NOT NULL, `timestamp` int(10) unsigned NOT NULL DEFAULT '0', `data` blob NOT NULL, PRIMARY KEY (`id`), KEY `ci_sessions_timestamp` (`timestamp`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
	$result1 = mysqli_query($con,$sql1);
	if($result1){
		echo "ci_session 생성 성공<br>";
	}

	$sql2 = "CREATE TABLE `companyboarlist` ( `companynum` int(11) NOT NULL AUTO_INCREMENT, `companyname` varchar(255) NOT NULL, `companytitle` varchar(255) NOT NULL, `companyaddress` varchar(255) NOT NULL, `companyqua` varchar(255) NOT NULL, `companycondition` varchar(255) NOT NULL, `companyhash` varchar(255) NOT NULL, `companySectors` varchar(255) NOT NULL, `companymoney` varchar(255) NOT NULL, `companyurl` varchar(255) NOT NULL, `companyinfo` varchar(255) NOT NULL, `companycar` varchar(255) NOT NULL, `companystart` date NOT NULL, `companylogo` varchar(255) NOT NULL, `companyimg` varchar(255) NOT NULL, `companyend` date NOT NULL, `companycount` int(11) NOT NULL DEFAULT '0', `companytel` varchar(255) NOT NULL, `companytalent` varchar(255) NOT NULL, `companyetc_uqni` varchar(255) NOT NULL, `companyworking` varchar(255) NOT NULL, `company_scrap` int(11) NOT NULL DEFAULT '0', `company_like` int(11) NOT NULL DEFAULT '0', PRIMARY KEY (`companynum`), FULLTEXT KEY `companyhash` (`companyhash`), FULLTEXT KEY `companyinfo` (`companyinfo`), FULLTEXT KEY `companytalent` (`companytalent`), FULLTEXT KEY `companySectors` (`companySectors`), FULLTEXT KEY `companyhash_2` (`companyhash`,`companySectors`,`companyinfo`,`companytalent`), FULLTEXT KEY `companytitle` (`companytitle`), FULLTEXT KEY `companyname` (`companyname`) ) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8";
	$result2 = mysqli_query($con,$sql2);
	if($result2){
		echo "companyboarlist 생성 성공<br>";
	}

	$sql3 = "CREATE TABLE `company_like` ( `num` int(11) NOT NULL AUTO_INCREMENT, `company_num` int(11) NOT NULL, `user_id` varchar(255) NOT NULL, PRIMARY KEY (`num`) ) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8";
	$result3 = mysqli_query($con,$sql3);
	if($result3){
		echo "company_like 생성 성공<br>";
	}


	$sql4 = "CREATE TABLE `competition` ( `num` int(11) NOT NULL AUTO_INCREMENT, `a_url` varchar(255) NOT NULL, `title` varchar(255) NOT NULL, `host` varchar(255) NOT NULL, `cate` varchar(255) NOT NULL, `img` varchar(255) NOT NULL, `object` varchar(255) NOT NULL, `reward` varchar(255) NOT NULL, `cu_url` varchar(255) NOT NULL, `annou` varchar(255) NOT NULL, `startdate` date NOT NULL, `enddate` date NOT NULL, `count` int(11) NOT NULL DEFAULT '0', PRIMARY KEY (`num`) ) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8";
	$result4 = mysqli_query($con,$sql4);
	if($result4){
		echo "competition 생성 성공<br>";
	}


	$sql5 = "CREATE TABLE `government` ( `num` int(11) NOT NULL AUTO_INCREMENT, `url` varchar(255) NOT NULL, `name` varchar(255) NOT NULL, `area` varchar(255) NOT NULL, `start_date` date NOT NULL, `end_date` varchar(255) NOT NULL, `gove_option` varchar(255) NOT NULL, `support_count` int(11) NOT NULL DEFAULT '0', `person` varchar(255) NOT NULL, PRIMARY KEY (`num`) ) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8";
	$result5= mysqli_query($con,$sql5);
	if($result5){
		echo "government 생성 성공<br>";
	}

	$sql6 = "CREATE TABLE `log` ( `num` int(11) NOT NULL AUTO_INCREMENT, `log_id` varchar(255) NOT NULL, `log_addr` varchar(255) DEFAULT NULL, `log_host` varchar(255) DEFAULT NULL, `log_self` varchar(255) DEFAULT NULL, `log_agent` varchar(255) DEFAULT NULL, `log_por` varchar(255) DEFAULT NULL, PRIMARY KEY (`num`), KEY `log_id` (`log_id`), CONSTRAINT `log_ibfk_1` FOREIGN KEY (`log_id`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
	$result6= mysqli_query($con,$sql6);
	if($result6){
		echo "log 생성 성공<br>";
	}

	$sql7= "CREATE TABLE `member` ( `num` int(11) NOT NULL AUTO_INCREMENT, `id` varchar(255) NOT NULL, `pw` varchar(255) DEFAULT NULL, `name` varchar(255) DEFAULT NULL, `age` int(11) DEFAULT NULL, `email` varchar(255) DEFAULT NULL, `phone` varchar(255) DEFAULT NULL, `porfile_img` varchar(255) NOT NULL DEFAULT 'static/images/white_empty.png', `member_color` varchar(255) NOT NULL, `category` varchar(20) DEFAULT NULL, `division` int(11) DEFAULT NULL, `military` varchar(11) DEFAULT NULL, `career` varchar(255) DEFAULT NULL, `gender` varchar(255) NOT NULL, `sectors` varchar(255) NOT NULL, `info` varchar(255) NOT NULL, `education` varchar(255) NOT NULL, `scrap` varchar(255) NOT NULL, `like_company` varchar(255) NOT NULL, PRIMARY KEY (`id`), KEY `num` (`num`) ) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;";
	$result7= mysqli_query($con,$sql7);
	if($result7){
		echo "member 생성 성공<br>";
	}

	$sql8 = "CREATE TABLE `portfoilo` ( `num` int(11) NOT NULL AUTO_INCREMENT, `portfoilo_id` varchar(255) NOT NULL, `portfoilo_nickname` varchar(255) NOT NULL, `portfoilo_title` varchar(255) NOT NULL, `portfoilo_bodytext` longtext NOT NULL, `portfoilo_img` varchar(255) NOT NULL, `portfoilo_category` varchar(255) NOT NULL, `portfoilo_date` date NOT NULL, `portfoilo_count` int(11) DEFAULT '0', `portfoilo_like_count` int(11) NOT NULL DEFAULT '0', `portfoilo_comment_count` int(11) NOT NULL DEFAULT '0', `portfoilo_hash` varchar(255) NOT NULL, `portfoilo_tool` varchar(255) NOT NULL, PRIMARY KEY (`num`), KEY `portfoilo_id` (`portfoilo_id`), CONSTRAINT `portfoilo_ibfk_1` FOREIGN KEY (`portfoilo_id`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE ) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;";
	$result8= mysqli_query($con,$sql8);
	if($result8){
		echo "portfoilo 생성 성공<br>";
	}

	$sql9 = "CREATE TABLE `portfoilo_comment` ( `num` int(11) NOT NULL AUTO_INCREMENT, `portfoilo_num` int(11) NOT NULL, `portfoilo_comment_id` varchar(255) NOT NULL, `portfoilo_comment_bodytext` varchar(255) DEFAULT NULL, `comment_date` datetime NOT NULL, PRIMARY KEY (`num`), KEY `portfoilo_comment_id` (`portfoilo_comment_id`,`portfoilo_comment_bodytext`), KEY `portfoilo_num` (`portfoilo_num`), CONSTRAINT `portfoilo_comment_ibfk_1` FOREIGN KEY (`portfoilo_comment_id`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE, CONSTRAINT `portfoilo_comment_ibfk_2` FOREIGN KEY (`portfoilo_num`) REFERENCES `portfoilo` (`num`) ON DELETE CASCADE ON UPDATE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
	$result9= mysqli_query($con,$sql9);
	if($result9){
		echo "portfoilo_comment 생성 성공<br>";
	}

	$sql10 = "CREATE TABLE `portfoilo_like` ( `num` int(11) NOT NULL AUTO_INCREMENT, `portfoilo_num` int(11) NOT NULL, `portfoilo_id` varchar(255) DEFAULT NULL, PRIMARY KEY (`num`), KEY `portfoilo_num` (`portfoilo_num`,`portfoilo_id`), KEY `portfoilo_id` (`portfoilo_id`), CONSTRAINT `portfoilo_like_ibfk_1` FOREIGN KEY (`portfoilo_id`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE, CONSTRAINT `portfoilo_like_ibfk_2` FOREIGN KEY (`portfoilo_num`) REFERENCES `portfoilo` (`num`) ON DELETE CASCADE ON UPDATE CASCADE ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;";
	$result10= mysqli_query($con,$sql10);
	if($result10){
		echo "portfoilo_like 생성 성공<br>";
	}

	$sql11 = "CREATE TABLE `qnaboard` ( `num` int(11) NOT NULL AUTO_INCREMENT, `qnatitle` varchar(255) NOT NULL, `qnabodytext` longtext NOT NULL, `qnawriter_id` varchar(255) NOT NULL, `qnawriter` varchar(255) NOT NULL, `qnacate` varchar(255) NOT NULL, `qnadate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP, `qnacount` int(11) DEFAULT '0', `qnacheck` int(11) DEFAULT '0', PRIMARY KEY (`num`), KEY `num` (`num`), KEY `qnawriter_id` (`qnawriter_id`), CONSTRAINT `qnaboard_ibfk_1` FOREIGN KEY (`qnawriter_id`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;";
	$result11= mysqli_query($con,$sql11);
	if($result11){
		echo "qnaboard 생성 성공<br>";
	}

	$sql12 = "CREATE TABLE `qnareply` ( `num` int(11) NOT NULL AUTO_INCREMENT, `qnanum` int(11) NOT NULL, `qnareplybodytext` longtext, `qnareplyid` varchar(255) DEFAULT NULL, `qnareplycheck` int(11) NOT NULL DEFAULT '0', PRIMARY KEY (`num`), KEY `qnanum` (`qnanum`), KEY `qnareplyid` (`qnareplyid`), CONSTRAINT `qnareply_ibfk_1` FOREIGN KEY (`qnanum`) REFERENCES `qnaboard` (`num`) ON DELETE CASCADE ON UPDATE CASCADE, CONSTRAINT `qnareply_ibfk_2` FOREIGN KEY (`qnareplyid`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;";
	$result12= mysqli_query($con,$sql12);
	if($result12){
		echo "qnareply 생성 성공<br>";
	}

	$sql13 = "CREATE TABLE `reply` ( `num` int(11) NOT NULL AUTO_INCREMENT, `reply_payer` varchar(255) NOT NULL, `reply_sender` varchar(255) NOT NULL, `reply_content` longtext NOT NULL, `reply_date` datetime NOT NULL, `reply_read` int(11) NOT NULL DEFAULT '0', PRIMARY KEY (`num`) ) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;";
	$result12= mysqli_query($con,$sql13);
	if($result12){
		echo "reply 생성 성공<br>";
	}


?>