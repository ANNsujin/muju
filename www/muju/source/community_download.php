<?php

	$ID=$_GET['ID'];
	$connection = mysqli_connect("localhost","bgbanana","bgpbsp0818","bgbanana");
	$result = mysqli_query($connection, "SELECT * FROM community_board WHERE ID=$ID");
	$row = mysqli_fetch_assoc($result);

 	$file_dir = $row['File_en'];
	$filename = explode('/', $file_dir); // 배열로 저장
	$filename = array_pop($filename); // 파일 이름; 마지막 원소를 꺼냄 (array_pop)
	$reail_filename = urldecode($row['File']);

	header('Content-Type: application/x-octetstream');
	header('Content-Length: '.filesize($file_dir));
	header('Content-Disposition: attachment; filename='.$reail_filename);
	header('Content-Transfer-Encoding: binary');

	$fp = fopen($file_dir, "r");
	fpassthru($fp);
	fclose($fp);
 ?>
