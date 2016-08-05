<meta charset="UTF-8">
<?php
	$ID=$_POST['ID'];
	$check=$_POST['check'];
	$PW=$_POST['PW'];
	$connection = mysqli_connect("localhost","bgbanana","bgpbsp0818","bgbanana");
	$result = mysqli_query($connection, "SELECT * FROM community_board WHERE ID=$ID");
	$row = mysqli_fetch_assoc($result);
	if($check==1) // 게시글 수정
	{
		if($PW!=$row['PW']) {
		?>
		<script>
			alert("비밀번호가 틀렸습니다.");
			location.href='/muju/source/community_view.php?ID=<?= $row['ID'] ?>';
		</script>
		<?php
		} else { ?>
		<script>
			location.href='/muju/source/community_modify.php?ID=<?= $row['ID'] ?>';
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
			location.href='/muju/source/community_view.php?ID=<?= $row['ID'] ?>';
		</script>
		<?php
		} else { ?>
		<script>
			location.href='/muju/source/community_delete.php?ID=<?= $row['ID'] ?>';
		</script>
		<?php
		}
	}
?>
