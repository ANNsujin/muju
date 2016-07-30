<meta charset="UTF-8">
<?php
	$PW=$_POST['PW'];
    $connection = mysqli_connect("mysql.hostinger.kr","u318533843_osu","osu0912","u318533843_osu");
	$result = mysqli_query($connection, "SELECT * FROM admin WHERE ID='admin'");
	$row = mysqli_fetch_assoc($result);
	if($PW!=$row['PW']) {
	?>
	<script>
		alert("비밀번호가 틀렸습니다.");
		location.href='notice.php';
	</script>
	<?php
	} else { ?>
	<script>
		location.href='notice_write.php';
	</script>
	<?php
	}?>
