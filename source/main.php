<? include("top.html") ?>
<div class="whole_content">
	<div class="container">
	<!-- side popup -->
		<div class="popup_wrap">
			<div id="divpop" class="popup">
				<table>
					<tr>
						<td class="popup_table" align="center">
							<a href="notice.php"> <img src="../image/side1.png" alt="../image/side1.png"></a>
							<a href="reservation3.php"> <img src="../image/side2.png" alt="../image/side2.png"></a>
							<a href="reservation.php"> <img src="../image/side3.png" alt="../image/side3.png"></a>
							<img src="../image/side4.png" alt="../image/side4.png">
							<!-- add 'facebook share button' -->
						</td>
					</tr>
					<tr>
						<td class="popup_footer">
							<form name="popup_form"><input type="checkbox" name="chkbox" value="checkbox"/> &nbsp;
							오늘 하루 닫음 <br>
							<a href="javascript:closeWin();">[닫기] &nbsp;</a></form>
						</td>
					</tr>
				</table>
			</div>
		</div>
	<script language="Javascript">
	var cookiedata = document.cookie;
	if ( cookiedata.indexOf("maindiv=done") < 0 ){
		document.getElementById("divpop").style.visibility = "visible";
		}
		else {
			document.getElementById("divpop").style.visibility = "hidden";
	}
    </script>
    <script type="text/javascript"> // for layerd popup
	function setCookie( name, value, expiredays ) {
		var todayDate = new Date(); todayDate.setDate( todayDate.getDate() + expiredays ); document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";" ;}
	function closeWin() {
		if ( document.popup_form.chkbox.checked ){ setCookie( "maindiv", "done" , 1 ); } document.getElementById("divpop").style.visibility = "hidden";}
	</script>
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
				<img src="../image/main1.jpeg" alt="../image/main1.jpeg">
				<div class="carousel-caption">
					<h3>First Image</h3>
					<p>main</p>
				</div>
			</div>
			<div class="item">
				<img src="../image/main2.jpeg" alt="../image/main2.jpeg">
				<div class="carousel-caption">
					<h3>Second Image</h3>
					<p>main</p>
				</div>
			</div>
			<div class="item">
				<img src="../image/main3.jpeg" alt="../image/main3.jpeg">
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
<? include("bottom.html") ?>
