<? include("top.html") ?>
<?php
	$ID=$_GET['ID'];
	$connection = mysqli_connect("mysql.hostinger.kr","u318533843_osu","osu0912","u318533843_osu");
	mysqli_query($connection, "UPDATE review_board SET View=View+1 WHERE ID=$ID");
	$result = mysqli_query($connection, "SELECT * FROM review_board WHERE ID=$ID");
	$row = mysqli_fetch_assoc($result);
?>
	<div class="container">
		<p class="menu_nanum">공지사항</p>
		<div class="contents">
			<div class="panel panel-default">
				<div class="panel-heading" style="text-align:left;">
					<h3 class="panel-title"><?= $row['Title'] ?></h3>
					<span style="font-size:10px; color:#888; padding-top:10px;">
						<span> #&nbsp <?= $row['ID'] ?> </span>
						<span style="padding-left:10px;"> 날짜&nbsp <?php echo date('y-m-d',strtotime($row['Date'])); ?> </span>
						<span style="padding-left:10px;"> 조회&nbsp <?= $row['View'] ?> </span>
					</span>
				</div>
				<div class="panel-body" style="text-align:left;">
					<?= $row['Content'] ?>
				</div>
				<div class="panel-footer" style="text-align:left;">
					<span class="download_link" style="font-size:12px;"> 첨부파일&nbsp
					<?php
						if($row['File']==NULL) {
							echo '없음';
					} else { ?>
						<a href="download.php?ID=<?= $ID ?>"><?=$row['File']?></a>
						<?php } ?>
					</span>
				</div>
			</div>
			<div class="board_button">
			<button onclick="location.href='review.php';" class="btn btn-default btn-sm">목록</button>
			<?php
			//  현재 글보다 id 값이 큰 글 중 가장 작은 것을 가져온다. 즉 바로 이전 글
			$query=mysqli_query($connection, "SELECT ID FROM review_board WHERE ID > $ID limit 1");
			$prev_id=mysqli_fetch_assoc($query);
			if ($prev_id['ID']) // 이전 글이 있을 경우
			{	?>
				<button onclick="location.href='review_view.php?ID=<?= $prev_id['ID'] ?>'" class="btn btn-default btn-sm">이전</button>
			<?php }
			else
			{	?>
				<button onclick="alert ('이전 글이 존재하지 않습니다.');" class="btn btn-default btn-sm">이전</button>
			<?php }
			$query=mysqli_query($connection, "SELECT ID FROM review_board WHERE ID < $ID order by ID desc limit 1");
			$next_id=mysqli_fetch_assoc($query);
			if ($next_id['ID'])
			{	?>
				<button onclick="location.href='review_view.php?ID=<?= $next_id['ID'] ?>'" class="btn btn-default btn-sm">다음</button>
			<?php }
			else
			{	?>
				<button onclick="alert ('다음 글이 존재하지 않습니다.');" class="btn btn-default btn-sm">다음</button>
			<?php }	?>
			<button onclick="location.href='review_modify.php?ID=<?= $ID ?>';" class="btn btn-info btn-primary btn-sm">수정</button>
			<button onclick="location.href='review_delete.php?ID=<?= $ID ?>';" class="btn btn-info btn-primary btn-sm">삭제</button>
			</div>
		</div>
		<?php  mysqli_close($connection); ?>
	</div>
</div>
</body>
<? include("bottom.html") ?>
