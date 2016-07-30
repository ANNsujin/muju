<? include("top.html") ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<?php
	$ID=$_GET['ID'];
	$connection = mysqli_connect("mysql.hostinger.kr","u318533843_osu","osu0912","u318533843_osu");
	$result = mysqli_query($connection, "SELECT * FROM community_board WHERE ID=$ID");
	$row = mysqli_fetch_assoc($result);
?>
	<div class="container">
		<div class="contents">
			<form enctype="multipart/form-data" class="form-horizontal" action="community_do.php" method="post">
				<fieldset>
				<legend class="legend_nanum">자유게시판 수정하기 | 글 번호 :&nbsp <?=$ID?></legend>
				<div class="form-group">
			      <input type="hidden"  name="ID" value="<?= $row['ID'] ?>">
			    </div>
				<div class="form-group">
					<label for="select" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">분류</label>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-10">
						<select class="form-control" id="select" name="Classify" value="<?= $row['Classify'] ?>">
							<option></option>
							<option>질문답변</option>
							<option>기타</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="inputWriter" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">Writer</label>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-10">
						<input type="text" class="form-control" id="inputWriter" name="Writer" value="<?= $row['Writer'] ?>">
					</div>
					<div class="mob col-xs-12" style="height:5px"></div>
					<label for="inputPassword" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">Password</label>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-10">
						<input type="password" class="form-control" id="inputPassword" name="PW" value="<?= $row['PW'] ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="inputTitle" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">Title</label>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
						<input type="text" class="form-control" id="inputTitle" name="Title" value="<?= $row['Title'] ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="textAreaContent" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">Content</label>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
						<textarea class="form-control" rows="20" id="textAreaContent" name="Content"><?= $row['Content'] ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="inputFile" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">첨부파일</label>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
						<input type="hidden" name="MAX_FILE_SIZE" value="2000000" >
						<input type="file" readonly="readonly" class="form-control" id="inputFile" name="File">
						<input type="text" readonly="readonly" class="form-control" value="<?php
							if($row['File']==NULL) {
								echo '없음';
						} else {
							echo $row['File'];
						}?>">
					</div>
				</div>
				<div class="form-group" style="font-size:11px; margin-top:-10px; margin-bottom:0px;">
					<div style="visibility:hidden;" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">첨부파일 설명</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="text-align: left; margin-bottom: 5px;">
						<div class="desktop">
							&raquo Writer와 Password는 1글자 이상 10글자 이하의 영문 또는 한글로 작성되어야 합니다.<br>
							&raquo 첨부파일은 특수문자를 제외한 영문의 이름이어야 하며,&nbsp2MB이하, jpeg, gif, png, jpg 형식이어야 합니다.<br>&nbsp&nbsp&nbsp 파일은 최대 1개까지 올릴 수 있습니다.
						</div>
						<div class="mob">
							&raquo Writer와 Password는 1글자 이상 10글자 이하의<br>&nbsp&nbsp&nbsp 영문 또는 한글로 작성되어야 합니다.<br>
							&raquo 첨부파일은 특수문자를 제외한 영문의 이름이어야 하며,<br>&nbsp&nbsp&nbsp 2MB이하, jpeg, gif, png, jpg 형식이어야 합니다.<br>&nbsp&nbsp&nbsp 파일은 최대 1개까지 올릴 수 있습니다.
						</div>
					</div>
				</div>
				<div class="form-group">
					<label style="visibility:hidden;" for="select" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">확인</label>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-8">
						 <div class="g-recaptcha" data-sitekey="6LcFXyYTAAAAAIwbjZPfOwGoG381AQZEdZ7siJdB"></div>
					</div>
				</div>
				<div class="board_button">
					<label style="visibility:hidden;" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">버튼</label>
						&nbsp
						<button type="button" onclick="alert ('이 전으로 되돌아갑니다.'); location.href='community_view.php?ID=<?= $row['ID'] ?>';" class="btn btn-default btn-sm">취소</button>
						<button type="submit" class="btn btn-info btn-primary btn-sm">수정완료</button>
				</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
</body>
<? include("bottom.html") ?>