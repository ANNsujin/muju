<? include("top.html") ?>
<div class="whole_content">
	<div class="container">
		<div class="row">
			<!-- left navbar -->
			<div class="col-lg-3 col-md-3 col-sm-4">
				<div class="list-group table-of-contents">
					<img class="list-group-item" src="../image/menu_about.png" arc="../image/menu_about.png">
					<a class="list-group-item" href="about.php">인사말</a>
					<a class="list-group-item" href="about2.php">외관 및 야경</a>
					<a class="list-group-item" href="about3.php">위치 및 교통안내</a>
				</div>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-8">
				<div class="contents">
					<p>펜션소개 > 위치 및 교통안내</p>
					<br>
					<img src="../image/traffic.png" alt="../image/traffic.png">
					<br><br>
					<div id="map" ></iframe></div>
				</div>
			</div>
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
