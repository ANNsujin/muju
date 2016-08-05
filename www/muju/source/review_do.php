<meta charset="UTF-8">
<?php
	$sitekey = '6LcFXyYTAAAAAIwbjZPfOwGoG381AQZEdZ7siJdB';
	$secretKey = "6LcFXyYTAAAAACUxIkDz0gi-aWuSH_LBaEwO6Jle";
	$input_check = 1; // check varaible; to check if it has title and content and checking
	$recaptcha = 0;
	if($_POST['g-recaptcha-response']) { $recaptcha = $_POST['g-recaptcha-response']; }
	if($recaptcha){
		$url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $recaptcha ."&remoteip=" . $_POST[remoteip];
		$resource =  file_get_contents( $url );
		$flag = json_decode($resource);
		if(!$flag->success == "1")
		{ ?>
			<script>
			alert("정상적인 접속이 아닙니다. 목록으로 돌아갑니다.");
			location.href='/muju/source/review.php';
			</script>
		<?php }
	}
	else { ?>
		<script>
		alert("로봇이 아님을 확인해주세요.");
		history.go(-1);
		</script>
	<?php $input_check=0;
	}
	$ID=$_POST['ID'];
	if(!$_POST['Writer']) // Writer 작성 안함
	{ $input_check = 0; // 작성, 수정 실패	?>
		<script>
			alert("글 작성자를 작성하지 않았습니다.");
			history.go(-1);
		</script>
	<?php }
	else { $writer=$_POST['Writer']; }
	if(!$_POST['PW']) // PW 작성 안함
	{ $input_check = 0; // 작성, 수정 실패	?>
		<script>
			alert("글 수정, 삭제 비밀번호를 입력하지 않았습니다.");
			history.go(-1);;
		</script>
	<?php }
	else { $PW=$_POST['PW']; }
	if(!$_POST['Title']) // title 작성 안함
	{ $input_check = 0; // 작성, 수정 실패 ?>
		<script>
			alert("제목을 작성하지 않았습니다.");
			history.go(-1);
		</script>
	<?php }
	else { $title=$_POST['Title']; }
	if(!$_POST['Content']) // Content 작성 안함
	{ $input_check = 0; // 작성, 수정 실패	?>
		<script>
			alert("내용을 작성하지 않았습니다.");
			history.go(-1);
		</script>
	<?php }
	else { $content=$_POST['Content']; }

	// 서버에 저장될 디렉토리이름
	$uploaddir = '/muju/uploads/review';

	include("upload_check.php"); // 중복 제거; file upload condition check

	if ($upload_check) { // 업로드에 실패 시, INSERT or UPDATE를 진행하지 않는다.
		if (!isset($_POST['ID'])) // ID 없음 -> 게시글 작성
		{
			$input = "INSERT INTO review_board (Title, Content, File, File_en, Writer, PW) VALUES('$title','$content','$filename','$md5filename','$writer','$PW')"; /*string일 때는 ''로묶어줘야한다*/
		}
		else { // ID 있음 -> 게시글 수정
			$result = mysqli_query($connection, "SELECT * FROM review_board WHERE ID=$ID");
			$row = mysqli_fetch_assoc($result);
			@unlink($row['File_en']);
			$input = "UPDATE review_board SET Title='$title', Content='$content', File='$filename', File_en='$md5filename', Writer='$writer', PW='$PW' WHERE ID=$ID"; /*string일 때는 ''로묶어줘야한다*/
		}
		// print_r($_FILES); // 저장된 파일 정보 출력
		mysqli_query($connection, $input);
		?>
		<meta charset="UTF-8">
		<script>
			alert("저장되었습니다.");
			location.href='/muju/source/review.php';
		</script>
		<?php
	}
	mysqli_close($connection);
	?>
