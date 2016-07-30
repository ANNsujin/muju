<?php
    /*
    호스트:mysql.hostinger.kr
    DB명:u318533843_osu
    */

	$ID=$_GET['ID'];
    $connection = mysqli_connect("mysql.hostinger.kr","u318533843_osu","osu0912","u318533843_osu");
	$result = mysqli_query($connection, "SELECT * FROM notice_board WHERE ID=$ID");
	$row = mysqli_fetch_assoc($result);
	@unlink($row['File_en']);
	mysqli_query($connection, "DELETE FROM notice_board WHERE ID = $ID");
	?>
	<meta charset="UTF-8">
	<script>
		alert("삭제되었습니다.");
		location.href='notice.php';
	</script>
