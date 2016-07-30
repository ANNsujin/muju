<meta charset="UTF-8">
<?php
	$ID=$_POST['ID'];
	$input_check = 1; // check varaible; to check if it has title and content
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
	$uploaddir = '../uploads/notice/';

	include("upload_check.php"); // 중복 제거; file upload condition check

	if ($upload_check) { // 업로드에 실패 시, INSERT or UPDATE를 진행하지 않는다.
		if (!isset($_POST['ID'])) // ID 없음 -> 게시글 작성
		{
			$input = "INSERT INTO notice_board (Title, Content, File, File_en) VALUES('$title','$content','$filename','$md5filename')"; /*string일 때는 ''로묶어줘야한다*/
		}
		else { // ID 있음 -> 게시글 수정
			$result = mysqli_query($connection, "SELECT * FROM notice_board WHERE ID=$ID");
			$row = mysqli_fetch_assoc($result);
			@unlink($row['File_en']);
			$input = "UPDATE notice_board SET Title='$title', Content='$content', File='$filename', File_en='$md5filename' WHERE ID=$ID"; /*string일 때는 ''로묶어줘야한다*/
		}
		// print_r($_FILES); // 저장된 파일 정보 출력
		mysqli_query($connection, $input);
		?>
		<meta charset="UTF-8">
		<script>
			alert("저장되었습니다.");
			location.href='notice.php';
		</script>
		<?php
	}
	mysqli_close($connection);
	?>
