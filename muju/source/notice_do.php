<meta charset="UTF-8">
<?php
	$ID=$_POST['ID'];
	$input_check = 1; // check varaible; to check if it has title and content
	if(!$_POST['Title']) // title 작성 안함
	{ $input_check = 0; // 작성, 수정 실패 ?>
		<script>
			alert("제목을 작성하지 않았습니다. 목록으로 돌아갑니다.");
			location.href='notice.php';
		</script>
	<?php }
	else { $title=$_POST['Title']; }
	if(!$_POST['Content']) // Content 작성 안함
	{ $input_check = 0; // 작성, 수정 실패	?>
		<script>
			alert("내용을 작성하지 않았습니다. 목록으로 돌아갑니다.");
			location.href='notice.php';
		</script>
	<?php }
	else { $content=$_POST['Content']; }

	$connection = mysqli_connect("mysql.hostinger.kr","u318533843_osu","osu0912","u318533843_osu");

    function file_errmsg($code){
        switch($code){
        case(UPLOAD_ERR_INI_SIZE):
            return "업로드한 파일이 php.ini upload_max_filesize보다 큽니다.";
        case(UPLOAD_ERR_FORM_SIZE):
            return "업로드한 파일이 MAX_FILE_SIZE 보다 큽니다. ";
        case(UPLOAD_ERR_PARTIAL):
            return "파일이 일부분만 전송되었습니다. 다시 시도해 주십시요.";
        case(UPLOAD_ERR_NO_FILE):
            return "파일이 전송되지 않았습니다.";
        case(UPLOAD_ERR_NO_TMP_DIR):
            return "임시 폴더가 없습니다.";
        case(UPLOAD_ERR_CANT_WRITE):
            return "디스크에 파일 쓰기를 실패했습니다. 다시 시도해 주십시요.";
        default:
            return "확장에 의해 파일 업로드가 중지되었습니다.";
        }
    }

	$upload_check = 0; // check varaible; to check if it has right condition during upload
	// 서버에 저장될 디렉토리이름
	$uploaddir = '../uploads/';
	// 서버에 저장될 파일이름
	$filename = basename($_FILES['File']['name']);
	$md5filename = $uploaddir . rand() . md5("notice_".$filename);
	$ext = explode('.', $filename); // 배열로 저장
	$ext = strtolower(array_pop($ext)); // 마지막 원소를 꺼내 (array_pop) 모두 소문자로 변경(strtolower)
 	$allowext =array("gif","jpeg","png","jpg");
	if ($input_check) { // title, content가 없을 시에는 확인하지 않는다.
		$upload_check = 1;
		if($_FILES['File']['error'] === UPLOAD_ERR_OK) { // 첨부파일이 존재하면, 다음을 확인한다
			if(!in_array($ext, $allowext)) {
				$upload_check = 0; // 업로드 실패 ?>
				<script>
					alert("확장자가 올바르지 않습니다. 이미지 파일만 업로드 가능합니다. 목록으로 돌아갑니다.");
					location.href='notice.php';
				</script>
			<?php }
	        else if($_FILES['File']['size'] <= 0){
				$upload_check = 0; // 업로드 실패  ?>
				<script>
					alert("파일 업로드에 실패했습니다. 목록으로 돌아갑니다.");
					location.href='notice.php';
				</script>
			<?php }
	        else {
	            if(!is_uploaded_file($_FILES['File']['tmp_name'])) {
					$upload_check = 0; // 업로드 실패  ?>
					<script>
						alert("HTTP로 전송된 파일이 아닙니다. 목록으로 돌아갑니다.");
						location.href='notice.php';
					</script>
				<?php }
	            else { // move_uploaded_file은 임시 저장되어 있는 파일을 ./uploads 디렉토리로 이동합니다.
	                if (!move_uploaded_file($_FILES['File']['tmp_name'], $md5filename)) {
						$upload_check = 0; // 업로드 실패  ?>
						<script>
							alert("파일 업로드에 실패했습니다. 목록으로 돌아갑니다.");
							location.href='notice.php';
						</script>
					<?php }
	            }
	        }
	    } /*else {  // 첨부파일이 존재하지 않으면, 다음을 확인한다
			?>
			<script>
				alert("<?php file_errmsg($_FILES['File']['error']);?>");
			</script>
		<?php }*/
	}
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
