<? include("top.html") ?>
<div class="whole_content">
	<div class="container">
		<div class="contents">
			<p class="menu_nanum">펜션소개 >> 위치 및 교통안내</p>
			<br>
			<img src="../image/traffic.png" alt="../image/traffic.png">
			<br><br>
			<div id="map" ></iframe></div>
		</div>
	</div>
	<!--google map script -->
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
</div>
</body>
<? include("bottom.html") ?>
