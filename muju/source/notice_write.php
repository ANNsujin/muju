<? include("top.html") ?>
	<div class="container">
		<div class="contents">
			<form enctype="multipart/form-data" class="form-horizontal" action="notice_do.php" method="post">
				<fieldset>
				<legend class="legend_nanum">공지사항 글쓰기</legend>
				<div class="form-group">
					<label for="inputTitle" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">Title</label>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
						<input type="text" class="form-control" id="inputTitle" name="Title">
					</div>
				</div>
				<div class="form-group">
					<label for="textAreaContent" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">Content</label>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
						<textarea class="form-control" rows="20" id="textAreaContent" name="Content"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="inputFile" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">첨부파일</label>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
						<input type="hidden" name="MAX_FILE_SIZE" value="2000000" >
						<input type="file"  readonly="readonly" class="form-control" id="inputFile" placeholder="File" name="File">
					</div>
				</div>
				<div class="form-group" style="font-size:11px; margin-top:-10px; margin-bottom:0px;">
					<div style="visibility:hidden;" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">첨부파일 설명</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="text-align: left; margin-bottom: 5px;">
						<div class="desktop">
							&raquo 첨부파일은 특수문자를 제외한 영문의 이름이어야 하며,&nbsp2MB이하, jpeg, gif, png, jpg 형식이어야 합니다.<br>&nbsp&nbsp&nbsp 파일은 최대 1개까지 올릴 수 있습니다.
						</div>
						<div class="mob">
							&raquo 첨부파일은 특수문자를 제외한 영문의 이름이어야 하며,<br>&nbsp&nbsp&nbsp 2MB이하, jpeg, gif, png, jpg 형식이어야 합니다.<br>&nbsp&nbsp&nbsp 파일은 최대 1개까지 올릴 수 있습니다.
						</div>
					</div>
				</div>
				<div class="board_button">
					<label style="visibility:hidden;" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">버튼</label>
						&nbsp
						<button type="button" onclick="alert ('목록으로 돌아갑니다.'); location.href='notice.php';" class="btn btn-default btn-sm">취소</button>
						<button type="reset" onclick="alert ('양식을 비웁니다.');" class="btn btn-default btn-sm">초기화</button>
						<button type="submit" class="btn btn-info btn-primary btn-sm">제출</button>
				</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
</body>
<? include("bottom.html") ?>
