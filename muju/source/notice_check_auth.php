<meta charset="UTF-8">
<?php
	$ID=$_POST['ID'];
	$check=$_POST['check'];
	$PW=$_POST['PW'];
    $connection = mysqli_connect("localhost","bgbanana","bgpbsp0818");
	$result = mysqli_query($connection, "SELECT * FROM admin WHERE ID='admin'");
	$row = mysqli_fetch_assoc($result);
	if($check==0) // 게시글 작성
	{
		if($PW!=$row['PW']) {
		?>
		<script>
			alert("비밀번호가 틀렸습니다.");
			ocation.href='notice.php';
		</script>
		<?php
		} else { ?>
		<script>
			location.href='notice_write.php';
		</script>
		<?php
		}
	}
	else if($check==1) // 게시글 수정
	{
		if($PW!=$row['PW']) {
		?>
		<script>
			alert("비밀번호가 틀렸습니다.");
			location.href='notice_view.php?ID=<?= $ID ?>';
		</script>
		<?php
		} else { ?>
		<script>
			location.href='notice_modify.php?ID=<?= $ID ?>';
		</script>
		<?php
		}
	}
	else if($check==2) // 게시글 삭제
	{
		if($PW!=$row['PW']) {
		?>
		<script>
			alert("비밀번호가 틀렸습니다.");
			location.href='notice_view.php?ID=<?= $ID ?>';
		</script>
		<?php
		} else { ?>
		<script>
			location.href='notice_delete.php?ID=<?= $ID ?>';
		</script>
		<?php
		}
	}
