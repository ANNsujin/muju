<?php include $_SERVER['DOCUMENT_ROOT']."/muju/source/top.html";?>
	<div class="container">
		<div class="menu_nanum">
			<img src="/muju/image/menu1_3.png" arc="/muju/image/menu1_3.png">
			<span> 펜션소개 >> 위치 및 교통안내</span>
		</div>
		<hr class="menu_line">
		<div class="contents">
			<div id="map" ></div><br>
			<hr class="menu_line_sub">
			<div class="desktop sub-contents"><img src="/muju/image/traffic.png" alt="/muju/image/traffic.png"></div>
			<div class="mob"><img src="/muju/image/traffic_mob.png" arc="/muju/image/traffic_mob.png"></div>
		</div>
	</div>
	</div>
<!--google map script -->
<script type="text/javascript">
	var map;
	function initMap() {
	  var myLatLng = {lat: 35.905397, lng: 127.780388};
	  var map = new google.maps.Map(document.getElementById('map'), {
	    zoom: 18,
	    center: myLatLng
	  });

	  var marker = new google.maps.Marker({
	    position: myLatLng,
	    map: map,
	    title: "무주평강펜션!"
	  });
	}
	// To add the marker to the map, call setMap();
	marker.setMap(map);
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAEcSCR68HbwtMC0lOIh1lWDxUxr0iGaA&callback=initMap">
</script>


</body>
<?php include $_SERVER['DOCUMENT_ROOT']."/muju/source/bottom.html";?>
