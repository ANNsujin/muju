<? include("top.html") ?>
<div class="whole_content">
	<div class="container">
		<div class="row">
			<!-- left navbar -->
			<div class="col-lg-3 col-md-3 col-sm-4">
				<div class="list-group table-of-contents">
					<img class="list-group-item" src="../image/menu_community.png" arc="../image/menu_community.png">
					<a class="list-group-item" href="community.php">여행후기</a>
					<a class="list-group-item" href="community2.php">자유 게시판</a>
				</div>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-8">
				<div class="contents">
				<form class="form-horizontal">
					<fieldset>
					<legend>글쓰기</legend>
					<div class="form-group">
						<label for="select" class="col-lg-2 col-md-2 col-sm-2 control-label">분류</label>
						<div class="col-lg-3 col-md-4 col-sm-4">
							<select class="form-control" id="select">
								<option>질문답변</option>
								<option>기타</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="inputName" class="col-lg-2 col-md-2 col-sm-2 control-label">Name</label>
						<div class="col-lg-3 col-md-4 col-sm-4">
							<input type="text" class="form-control" id="inputName" placeholder="Name">
						</div>
						<label for="inputPassword" class="col-lg-2 col-md-2 col-sm-2 control-label">Password</label>
						<div class="col-lg-3 col-md-4 col-sm-4">
							<input type="password" class="form-control" id="inputPassword" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="inputName" class="col-lg-2 col-md-2 col-sm-2 control-label">E-mail</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<input type="text" class="form-control" id="inputName" placeholder="E-mail">
						</div>
					</div>
					<div class="form-group">
						<label for="textArea" class="col-lg-2 col-md-2 col-sm-2 control-label">Textarea</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<textarea class="form-control" rows="20" id="textArea"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="textArea" class="col-lg-2 col-md-2 col-sm-2 control-label">첨부파일</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<textarea class="form-control" rows="1" id="textArea"></textarea>
							<button type="button" class="btn btn-default btn-post" aria-label="Left Align">
								<span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
							</button>
							//첨부파일 제약사항 서술
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
							<div class="checkbox">
								<label>
									<input type="checkbox"> 비밀글
								</label>
							</div>
							<br>
							<a href="community2.php" class="btn btn-default btn-sm">취소</a> <!-- 목록 맨 처음 페이지로..?-->
							<button type="reset" class="btn btn-default btn-sm">Cancel</button>
							<a href="community2.php" class="btn btn-info btn-primary btn-sm">제출</a> <!-- 제출-->
						</div>
					</div>
					</fieldset>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>
</body>
<? include("bottom.html") ?>
