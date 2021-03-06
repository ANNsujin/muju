<?php include $_SERVER['DOCUMENT_ROOT']."/muju/source/top.html";?>
<?php
    /* 페이징 준비 */
    $connection = mysqli_connect("localhost","bgbanana","bgpbsp0818","bgbanana");
   	$result = mysqli_query($connection, "SELECT * FROM notice_board");
   	$total = mysqli_num_rows($result); //전체 게시글의 수
    include("paging.php");
    /* 페이징 로드 */
    $currentLimit = ($onePage * $page) - $onePage; //몇 번째의 글부터 가져오는지
    $sqlLimit = ' limit ' . $currentLimit . ', ' . $onePage; //limit sql 구문
    $sql = 'SELECT * FROM notice_board ORDER BY ID DESC' . $sqlLimit; //원하는 개수만큼 가져온다.
    $result = $connection->query($sql);
?>
	<div class="container">
		<div class="menu_nanum">
			<img src="/muju/image/menu6_0.png" arc="/muju/image/menu6_0.png">
			<span> 공지사항</span>
		</div>
		<hr class="menu_line">
		<div class="contents" style="margin-left:15px; margin-right:15px;">
			<table class="table table-striped table-hover" style="table-layout:fixed;">
				<colgroup>
					<col class="desktop" width="60px" />
					<col class="desktop" width="120px" />
					<col witdh="*" />
					<col class="desktop" width="80px" />
					<col class="desktop" width="60px" />
				</colgroup>
				<thead class="desktop">
				<tr>
					<th>#</th>
					<th>분류</th>
					<th>제목</th>
					<th>날짜</th>
					<th>조회</th>
				</tr>
				</thead>
				<tbody>
				<?php
					for($i=0;$i<$count;$i++) { $row = mysqli_fetch_assoc($result); ?>
				<tr>
					<th class="desktop"> <?= $row['ID'] ?> </th>
					<td class="desktop"> <?= $row['Classify'] ?> </td>
					<td class="board_title text-cut"> <a href='/muju/source/notice_view.php?ID=<?= $row['ID'] ?>'> <?= $row['Title'] ?> </a>
						<span class="mob" style="font-size:10px; color:#888; padding-top:5px;">
						    <span> 날짜&nbsp <?php echo date('y-m-d',strtotime($row['Date'])); ?> </span>
						    <span style="padding-left:10px;"> 조회&nbsp <?= $row['View'] ?> </span>
						    <span style="padding-left:10px;"> 분류&nbsp <?= $row['Classify'] ?> </span>
						</span>
					</td>
					<td class="desktop"> <?php echo date('y-m-d',strtotime($row['Date'])); ?> </td>
					<td class="desktop"> <?= $row['View'] ?> </td>
				</tr>
				<?php } mysqli_close($connection); ?>
				</tbody>
			</table>
			<div class="board_button">
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#pwModal">글쓰기</button>
			</div>
			<div class="pagination_center">
				<ul class="pagination">
					<?php if($page != 1) { //첫페이지 아니면 '처음' 활성화 ?>
						<li><a href="/muju/source/notice.php?page=1">&laquo;</a></li>
					<?php } else { //첫페이지면 '처음' 비활성화 ?>
						<li class="disabled"><a href="#">&laquo;</a></li>
						<?php }
					if($currentSection != 1) { //첫 섹션이 아니면 '이전' 활성화 ?>
						<li><a href="/muju/source/notice.php?page=<?=$prevPage?>"><</a></li>
					<?php } else { //첫 섹션이면 '이전' 비활성화 ?>
						<li class="disabled"><a href="#"><</a></li>
						<?php }
					for($i = $firstPage; $i <= $lastPage; $i++) {
						if($i == $page) { ?>
							<li class="active">
						<?php }
						else { ?>
							<li>
						<?php } ?>
						<a href="/muju/source/notice.php?page=<?=$i?>"><?=$i?></a></li>
						<?php }
					if($currentSection != $allSection) { //마지막 섹션이 아니면 '다음' 활성화 ?>
						<li><a href="/muju/source/notice.php?page=<?=$nextPage?>">></a></li>
					<?php } else { //마지막 섹션이면 '다음' 비활성화 ?>
						<li class="disabled"><a href="#">></a></li>
						<?php }
					if($page != $Pagenum) { // 마지막 페이지가 아니면 '끝' 활성화 ?>
						<li><a href="/muju/source/notice.php?page=<?=$Pagenum?>">&raquo;</a></li>
					<?php } else { //마지막 페이지이면 '끝' 비활성화 ?>
						<li class="disabled"><a href="#">&raquo;</a></li>
						<?php } ?>
				</ul>
			</div>

            <!-- Modal -->
            <div class="modal fade" id="pwModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title board_Modal_title" id="myModalLabel">공지사항 글쓰기</h4>
                  </div>
                  <form action="/muju/source/notice_check_auth.php" method="post">
                      <div class="modal-body board_Modal_body">
                        <p>&raquo 공지사항은 펜션지기만 작성할 수 있습니다.</p>
    					<label for="inputPw"> 비밀번호를 입력하세요. </label><br>
						<input type="hidden"  name="check" value="0"> <!-- 글쓰기 value -->
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
	</div>
</div>
</body>
<?php include $_SERVER['DOCUMENT_ROOT']."/muju/source/bottom.html";?>
