<? include("top.html") ?>
	<div class="container">
		<p class="menu_nanum">펜션소개 >> 위치 및 교통안내</p>
		<div class="contents">
			<div id="map" ></iframe></div>
			<br><br>
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
