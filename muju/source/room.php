<? include("top.html") ?>
<script> // for tooptip, tooltip은 opt-in이라서 따로 해줘야함
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<script LANGUAGE="JavaScript">
function change_img_01()
{document.getElementById("ch_room").src = "../image/room_01.gif";}

function change_img_02()
{document.getElementById("ch_room").src = "../image/room_02.gif";}

function return_img()
{document.getElementById("ch_room").src = "../image/room.gif";}
</script>
	<div class="container">
		<div class="menu_nanum">
			<img src="../image/menu2_0.png" arc="../image/menu2_0.png">
			<span> 방 둘러보기</span>
		</div>
		<hr class="menu_line">
		<div class="contents">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 room_main desktop">
				<div class="room_blank"></div>
				<img class="room_archi" src="../image/room.gif" arc="../image/room.gif" id="ch_room">
				<div class="room_blank"></div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
  				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 room_img">
					<a href="room1.php" class="thumbnail rooom1"><img src="../image/sample.png" arc="../image/sample.png" onmouseover="change_img_01();" onmouseout="return_img();" ></a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 room_side">
				<div class="room_detail" onmouseover="change_img_01();" onmouseout="return_img();">
					<a href="room1.php"><h3> 하늘정원 </h3></a>
					<p> * 객실크기 : 15평 <br> * 기준인원 : 4인 / 추가인원 + 4인 <br> *
					<img src="../image/bed.png" arc="../image/bed.png" style=" margin-left: 10px; width: 5%; height: auto;"> &nbsp 더블베드 1개(Queen) </img>
					<button style="margin-top:-9px; float:right;" type="button" onclick="location.href='room1.php';" class="btn btn-default btn-sm">자세히보기</button>
					</p>
				</div>
				<hr>
				<div class="room_icon" onmouseover="change_img_01();" onmouseout="return_img();">
					<img data-toggle="tooltip" title="WIFI" src="../image/wifi.png" arc="../image/wifi.png">
					<img data-toggle="tooltip" title="에어컨 및 난방" src="../image/air.png" arc="../image/air.png">
					<img data-toggle="tooltip" title="TV" src="../image/tv.png" arc="../image/tv.png">
					<img data-toggle="tooltip" title="소파" src="../image/sofa.png" arc="../image/sofa.png">
					<img data-toggle="tooltip" title="냉장고" src="../image/fridge.png" arc="../image/fridge.png">
					<img data-toggle="tooltip" title="조리기구 및 식기류" src="../image/fork.png" arc="../image/fork.png">
					<img data-toggle="tooltip" title="개인수건" src="../image/towel.png" arc="../image/towel.png">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
  				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 room_img">
					<a href="room2.php" class="thumbnail"><img src="../image/sample.png" arc="../image/sample.png" onmouseover="change_img_02();" onmouseout="return_img();"></a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 room_side" onmouseover="change_img_02();" onmouseout="return_img();">
				<div class="room_detail">
					<a href="room2.php"><h3> 아침이슬 </h3></a>
					<p> * 객실크기 : 15평 <br> * 기준인원 : 4인 / 추가인원 + 4인 <br> *
					<img src="../image/bed.png" arc="../image/bed.png" style=" margin-left: 10px; width: 5%; height: auto;"> &nbsp 더블베드 1개(Queen) </img>
					<button style="margin-top:-9px; float:right;" type="button" onclick="location.href='room2.php';" class="btn btn-default btn-sm">자세히보기</button>
					</p>
				</div>
				<hr>
				<div class="room_icon" onmouseover="change_img_02();" onmouseout="return_img();">
					<img data-toggle="tooltip" title="WIFI" src="../image/wifi.png" arc="../image/wifi.png">
					<img data-toggle="tooltip" title="에어컨 및 난방" src="../image/air.png" arc="../image/air.png">
					<img data-toggle="tooltip" title="TV" src="../image/tv.png" arc="../image/tv.png">
					<img data-toggle="tooltip" title="소파" src="../image/sofa.png" arc="../image/sofa.png">
					<img data-toggle="tooltip" title="냉장고" src="../image/fridge.png" arc="../image/fridge.png">
					<img data-toggle="tooltip" title="조리기구 및 식기류" src="../image/fork.png" arc="../image/fork.png">
					<img data-toggle="tooltip" title="개인수건" src="../image/towel.png" arc="../image/towel.png">
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<? include("bottom.html") ?>
