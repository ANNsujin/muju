<? include("top.html") ?>
<?php
	$ID=$_GET['ID'];
	$connection = mysqli_connect("mysql.hostinger.kr","u318533843_osu","osu0912","u318533843_osu");
	mysqli_query($connection, "UPDATE notice_board SET View=View+1 WHERE ID=$ID");
	$result = mysqli_query($connection, "SELECT * FROM notice_board WHERE ID=$ID");
	$row = mysqli_fetch_assoc($result);
?>
	<div class="container">
		<p class="menu_nanum">공지사항</p>
		<hr class="menu_line">
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
			<button onclick="location.href='notice.php';" class="btn btn-default btn-sm">목록</button>
			<?php
			//  현재 글보다 id 값이 큰 글 중 가장 작은 것을 가져온다. 즉 바로 이전 글
			$query=mysqli_query($connection, "SELECT ID FROM notice_board WHERE ID > $ID limit 1");
			$prev_id=mysqli_fetch_assoc($query);
			if ($prev_id['ID']) // 이전 글이 있을 경우
			{	?>
				<button onclick="location.href='notice_view.php?ID=<?= $prev_id['ID'] ?>'" class="btn btn-default btn-sm">이전</button>
			<?php }
			else
			{	?>
				<button onclick="alert ('이전 글이 존재하지 않습니다.');" class="btn btn-default btn-sm">이전</button>
			<?php }
			$query=mysqli_query($connection, "SELECT ID FROM notice_board WHERE ID < $ID order by ID desc limit 1");
			$next_id=mysqli_fetch_assoc($query);
			if ($next_id['ID'])
			{	?>
				<button onclick="location.href='notice_view.php?ID=<?= $next_id['ID'] ?>'" class="btn btn-default btn-sm">다음</button>
			<?php }
			else
			{	?>
				<button onclick="alert ('다음 글이 존재하지 않습니다.');" class="btn btn-default btn-sm">다음</button>
			<?php }	?>
			<button type="button" class="btn btn-info btn-primary btn-sm" data-toggle="modal" data-target="#modModal">수정</button>
			<button type="button" class="btn btn-info btn-primary btn-sm" data-toggle="modal" data-target="#delModal">삭제</button>
			</div>

			<!-- Modify Modal -->
			<div class="modal fade" id="modModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel01">
			  <div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title board_Modal_title" id="myModalLabel01">여행후기 수정하기</h4>
				  </div>
				  <form action="notice_check_auth.php" method="post">
					  <div class="modal-body board_Modal_body">
						<p>&raquo 공지사항은 펜션지기만 수정할 수 있습니다.</p>
						<label for="inputPw"> 비밀번호를 입력하세요. </label><br>
						<input type="hidden"  name="check" value="1"> <!-- 수정 value -->
					    <input type="hidden"  name="ID" value="<?= $row['ID'] ?>">
						<input type="password" class="form-control" id="inputPw" name="PW">
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">닫기</button>
						<button type="submit" class="btn btn-info btn-primary btn-sm">제출</button>
					  </div>
				  </form>
				</div>
			  </div>
			</div>

			<!-- Delete Modal -->
			<div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel02">
			  <div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title board_Modal_title" id="myModalLabel02">여행후기 삭제하기</h4>
				  </div>
				  <form action="notice_check_auth.php" method="post">
					  <div class="modal-body board_Modal_body">
						<p>&raquo 공지사항은 펜션지기만 삭제할 수 있습니다.</p>
						<label for="inputPw"> 비밀번호를 입력하세요. </label><br>
						<input type="hidden"  name="check" value="2"> <!-- 삭제 value -->
					    <input type="hidden"  name="ID" value="<?= $row['ID'] ?>">
						<input type="password" class="form-control" id="inputPw" name="PW">
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">닫기</button>
						<button type="submit" class="btn btn-info btn-primary btn-sm">제출</button>
					  </div>
				  </form>
				</div>
			  </div>
			</div>
		</div>
		<?php  mysqli_close($connection); ?>
	</div>
</div>
</body>
<? include("bottom.html") ?>
