<?php include $_SERVER['DOCUMENT_ROOT']."/muju/source/top.html";?>
<script> // for tooptip, tooltip은 opt-in이라서 따로 해줘야함
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<script LANGUAGE="JavaScript">
function change_img_01()
{document.getElementById("ch_room").src = "/muju/image/room_01.gif";}

function change_img_02()
{document.getElementById("ch_room").src = "/muju/image/room_02.gif";}

function return_img()
{document.getElementById("ch_room").src = "/muju/image/room.gif";}
</script>
	<div class="container">
		<div class="menu_nanum">
			<img src="/muju/image/menu2_0.png" arc="/muju/image/menu2_0.png">
			<span> 방 둘러보기</span>
		</div>
		<hr class="menu_line">
		<div class="contents">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 room_main desktop">
				<div class="room_blank"></div>
				<img class="room_archi" src="/muju/image/room.gif" arc="/muju/image/room.gif" id="ch_room">
				<div class="room_blank"></div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
  				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 room_img">
					<a href="/muju/source/room1.php" class="thumbnail rooom1"><img src="/muju/image/sample.png" arc="/muju/image/sample.png" onmouseover="change_img_01();" onmouseout="return_img();" ></a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 room_side">
				<div class="room_detail" onmouseover="change_img_01();" onmouseout="return_img();">
					<a href="/muju/source/room1.php"><h3> 하늘정원 </h3></a>
					<p> * 객실크기 : 20평 <br> * 기준인원 : 4인 / 추가인원 + 4인 <br> *
					<img src="/muju/image/bed.png" arc="/muju/image/bed.png" style=" margin-left: 10px; width: 5%; height: auto;"> &nbsp 더블베드 1개(Queen) </img>
					<button style="margin-top:-9px; float:right;" type="button" onclick="location.href='/muju/source/room1.php';" class="btn btn-default btn-sm">자세히보기</button>
					</p>
				</div>
				<hr>
				<div class="room_icon" onmouseover="change_img_01();" onmouseout="return_img();">
					<img data-toggle="tooltip" title="WIFI" src="/muju/image/wifi.png" arc="/muju/image/wifi.png">
					<img data-toggle="tooltip" title="에어컨 및 난방" src="/muju/image/air.png" arc="/muju/image/air.png">
					<img data-toggle="tooltip" title="TV" src="/muju/image/tv.png" arc="/muju/image/tv.png">
					<img data-toggle="tooltip" title="소파" src="/muju/image/sofa.png" arc="/muju/image/sofa.png">
					<img data-toggle="tooltip" title="냉장고" src="/muju/image/fridge.png" arc="/muju/image/fridge.png">
					<img data-toggle="tooltip" title="조리기구 및 식기류" src="/muju/image/fork.png" arc="/muju/image/fork.png">
					<img data-toggle="tooltip" title="개인수건" src="/muju/image/towel.png" arc="/muju/image/towel.png">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
  				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 room_img">
					<a href="/muju/source/room2.php" class="thumbnail"><img src="/muju/image/sample.png" arc="/muju/image/sample.png" onmouseover="change_img_02();" onmouseout="return_img();"></a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 room_side" onmouseover="change_img_02();" onmouseout="return_img();">
				<div class="room_detail">
					<a href="/muju/source/room2.php"><h3> 아침이슬 </h3></a>
					<p> * 객실크기 : 20평 <br> * 기준인원 : 4인 / 추가인원 + 4인 <br> *
					<img src="/muju/image/bed.png" arc="/muju/image/bed.png" style=" margin-left: 10px; width: 5%; height: auto;"> &nbsp 더블베드 1개(Queen) </img>
					<button style="margin-top:-9px; float:right;" type="button" onclick="location.href='/muju/source/room2.php';" class="btn btn-default btn-sm">자세히보기</button>
					</p>
				</div>
				<hr>
				<div class="room_icon" onmouseover="change_img_02();" onmouseout="return_img();">
					<img data-toggle="tooltip" title="WIFI" src="/muju/image/wifi.png" arc="/muju/image/wifi.png">
					<img data-toggle="tooltip" title="에어컨 및 난방" src="/muju/image/air.png" arc="/muju/image/air.png">
					<img data-toggle="tooltip" title="TV" src="/muju/image/tv.png" arc="/muju/image/tv.png">
					<img data-toggle="tooltip" title="소파" src="/muju/image/sofa.png" arc="/muju/image/sofa.png">
					<img data-toggle="tooltip" title="냉장고" src="/muju/image/fridge.png" arc="/muju/image/fridge.png">
					<img data-toggle="tooltip" title="조리기구 및 식기류" src="/muju/image/fork.png" arc="/muju/image/fork.png">
					<img data-toggle="tooltip" title="개인수건" src="/muju/image/towel.png" arc="/muju/image/towel.png">
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<?php include $_SERVER['DOCUMENT_ROOT']."/muju/source/bottom.html";?>
