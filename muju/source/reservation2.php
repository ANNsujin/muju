<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../css/custom.min.css">

	<script>
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-23019901-1']);
		_gaq.push(['_setDomainName', "bootswatch.com"]);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/custom.js"></script>
	<script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script>

	<title> Muju [무주평강펜션에 오신 것을 환영합니다] </title>
</head>
<body style="magin-top:0px;">
	<div class="container-fluid">
	<!-- side popup -->
		<div class="popup_wrap">
			<div id="divpop" class="popup">
				<table>
					<tr>
						<td class="popup_table" align="center">
							<a href="notice.php"> <img src="../image/side1.png" alt="../image/side1.png"></a>
							<a href="reservation2.php" onclick="window.open(this.href, 'win1'); return false;" onkeypress="this.onclick()"><img src="../image/side2.png" alt="../image/side2.png"></a>
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
	</div>
	<div class="container-fluid">
		<div class="contents_res">
			<EMBED src="https://app.zari.me/v2/booking/muju_pyeongkang">
		</div>
	</div>
</body>
</html>
