<? include("top.html") ?>
	<div class="container">
		<div class="menu_nanum">
			<img src="../image/menu1_3.png" arc="../image/menu1_3.png">
			<span> 펜션소개 >> 위치 및 교통안내</span>
		</div>
		<hr class="menu_line">
		<div class="contents">
			<div id="map" ></iframe></div><br>
			<hr class="menu_line_sub">
			<div class="desktop sub-contents"><img src="../image/traffic.png" alt="../image/traffic.png"></div>
			<div class="mob"><img src="../image/traffic_mob.png" arc="../image/traffic_mob.png"></div>
		</div>
	</div>
</div>
<!--google map script -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
	var mapCanvas = document.getElementById("map");
	var mapOptions = {
		center: new google.maps.LatLng(35.905397, 127.780388), zoom: 18
	}
	var map = new google.maps.Map(mapCanvas, mapOptions);
	var marker = new google.maps.Marker({
	position: new google.maps.LatLng(35.905397, 127.780388),
	map: map
	});
</script>
</body>
<? include("bottom.html") ?>
