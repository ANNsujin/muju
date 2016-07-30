<?php
	/* 페이징 시작 */
	//페이지 get 변수가 있다면 받아오고, 없다면 1페이지를 보여준다.
	if($total==0){  //초기 상태: no page, no note
		$page=1;
		$currentSection=1;
		$firstPage=1;
		$lastPage=1;
		$allSection=1;
		$Pagenum=1;
	}
	else {
		if(isset($_GET['page'])) {
			$page = $_GET['page'];
		} else {
			$page = 1;
		}
		$onePage = 10;// 한 페이지에 보여줄 게시글의 수.
		$Pagenum = ceil( $total / $onePage); //전체 페이지의 수
		if($page < 1 || $page > $Pagenum) {
		?>
			<script>
				alert("존재하지 않는 페이지입니다.");
				history.back();
			</script>
		<?php
			exit;
		}
		$oneSection = 5; //한번에 보여줄 총 페이지 개수(1 ~ 5, 6 ~ 10 ...)
		$currentSection = ceil($page / $oneSection); //현재 섹션
		$allSection = ceil($Pagenum / $oneSection); //전체 섹션의 수

		$firstPage = ($currentSection * $oneSection) - ($oneSection - 1); //현재 섹션의 처음 페이지
		if($currentSection == $allSection) {
			$lastPage = $Pagenum; //현재 섹션이 마지막 섹션이라면 $allPage가 마지막 페이지가 된다.
		} else {
			$lastPage = $currentSection * $oneSection; //현재 섹션의 마지막 페이지
		}
		if($page == $Pagenum) { // 마지막 페이지
			$count = fmod($total, $onePage);
			if($count==0)
			{$count=$onePage;}
		}
		else {
			$count = $onePage;
		}
		$prevPage = (($currentSection - 1) * $oneSection); //이전 페이지, 6~10일 때 이전을 누르면 5 페이지로 이동.
		$nextPage = (($currentSection + 1) * $oneSection) - ($oneSection - 1); //다음 페이지, 6~10일 때 다음을 누르면 11 페이지로 이동.
		/* 페이징 끝 */
	}
	?>
