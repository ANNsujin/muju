<?php include $_SERVER['DOCUMENT_ROOT']."/muju/source/top.html";?>
	<div class="container">
		<div class="menu_nanum">
			<img src="/muju/image/menu3_0.png" arc="/muju/image/menu3_0.png">
			<span> 외부시설</span>
		</div>
		<hr class="menu_line">
		<div class="contents">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <!-- Top part of the slider -->
                <div class="carousel slide" id="myCarousel">
                    <!-- Carousel items -->
                    <div class="carousel-inner facility_img">
                        <div class="active item" data-slide-number="0">
	                        <img src="/muju/image/sample.png" arc="/muju/image/sample.png">
							<div class="carousel-caption">
								<h3 class="facility_detail">1 Image</h3>
								<p class="desktop">main</p>
							</div>
						</div>
                        <div class="item" data-slide-number="1">
                        	<img src="/muju/image/sample.png" arc="/muju/image/sample.png">
							<div class="carousel-caption">
								<h3 class="facility_detail">2 Image</h3>
								<p class="desktop">main</p>
							</div>
						</div>
                        <div class="item" data-slide-number="2">
	                    	<img src="/muju/image/sample.png" arc="/muju/image/sample.png">
							<div class="carousel-caption">
								<h3 class="facility_detail">3 Image</h3>
								<p class="desktop">main</p>
							</div>
						</div>
                    </div><!-- Carousel nav -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <!-- Bottom switcher of slider for desktop -->
			<div class="col-lg-3 col-md-3 col-sm-3 desktop" id="slider-thumbs">
                <ul class="hide-bullets">
                    <li>
                        <a class="thumbnail" id="carousel-selector-0"><img src="http://placehold.it/170x100&text=one"></a>
                    </li>
					<li>
                        <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x100&text=two"></a>
                    </li>
					<li>
                        <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100&text=three"></a>
                    </li>
                </ul>
            </div>
            <!-- Bottom switcher of slider for mobile -->
			<div class="col-xs-12 mob" id="slider-thumbs">
                <ul class="hide-bullets">
                    <li class="col-xs-4 mob">
                        <a class="thumbnail" id="carousel-selector-0"><img src="http://placehold.it/170x100&text=one"></a>
                    </li>
	                <li class="col-xs-4 mob">
                        <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x100&text=two"></a>
                    </li>
	                <li class="col-xs-4 mob">
                        <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100&text=three"></a>
                    </li>
                </ul>
            </div>
		</div>
	</div>
</div>
</body>
<?php include $_SERVER['DOCUMENT_ROOT']."/muju/source/bottom.html";?>
