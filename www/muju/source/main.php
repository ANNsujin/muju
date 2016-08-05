<?php include $_SERVER['DOCUMENT_ROOT']."/muju/source/top.html";?>
	<div class="container-fluid">
	<!-- end of popup -->
	<!-- main image slider -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="/muju/image/main1.jpeg" alt="/muju/image/main1.jpeg">
				<div class="carousel-caption">
					<h3>First Image</h3>
					<p>main</p>
				</div>
			</div>
			<div class="item">
				<img src="/muju/image/main2.jpeg" alt="/muju/image/main2.jpeg">
				<div class="carousel-caption">
					<h3>Second Image</h3>
					<p>main</p>
				</div>
			</div>
			<div class="item">
				<img src="/muju/image/main3.jpeg" alt="/muju/image/main3.jpeg">
				<div class="carousel-caption">
					<h3>Third Image</h3>
					<p>main</p>
				</div>
			</div>
		</div>
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
</div>
</body>
<?php include $_SERVER['DOCUMENT_ROOT']."/muju/source/bottom.html";?>
