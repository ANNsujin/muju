<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="/muju/css/bootstrap.css" media="screen">
	<link rel="stylesheet" type="text/css" href="/muju/css/custom.min.css">

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
	<script src="/muju/js/bootstrap.min.js"></script>
	<script src="/muju/js/custom.js"></script>
	<script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script>

	<!-- popup layer java script-->
	<script language="JavaScript">
		function getCookie(c_name){
			var i,x,y,ARRcookies=document.cookie.split(";");
			for (i=0;i<ARRcookies.length;i++)
			{
				x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
				y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
				x=x.replace(/^\s+|\s+$/g,"");
				if (x==c_name)
				{	return unescape(y);}
			}
		}
		function setCookie( name, value, expiredays ) {
			var todayDate = new Date();
			todayDate.setDate( todayDate.getDate() + expiredays );
			document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
		}
		function closePop(num){
		    if(document.forms['popup_form'+num].chkbox.checked){
		        setCookie('poplevel',num, 1); //1 : continue day
		    }
		    document.getElementById('pop_'+num).style.visibility = 'hidden';
		}
		if(!getCookie("poplevel")){setCookie("poplevel","0",1);} // poplevel (기본 쿠키)가 없을 시에는, 이것을 만듦 (초기 생성단계)
	</script>
</head>
<body style="magin-top:0px;">
	<div class="container-fluid">
	<!-- side popup -->
		<div class="popup_wrap_left">
			<div id="pop_1" class="popup">
				<table>
					<tr>
						<td class="popup_table" align="center">
							<a href="/muju/source/notice.php"> <img src="/muju/image/side1.png" alt="/muju/image/side1.png"></a>
							<a href="/muju/source/reservation2.php" onclick="window.open(this.href, 'win1'); return false;" onkeypress="this.onclick()"><img src="/muju/image/side2.png" alt="/muju/image/side2.png"></a>
							<a href="/muju/source/reservation.php"> <img src="/muju/image/side3.png" alt="/muju/image/side3.png"></a>
							<img src="/muju/image/side4.png" alt="/muju/image/side4.png">
						</td>
					</tr>
					<tr>
						<td class="popup_footer">
							<form name="popup_form1">
								<div id="check1"><input type="checkbox" name="chkbox" value="checkbox">&nbsp오늘 하루 닫음 <br></div>
								<div id="close1" class="close_pop"><a href="javascript:closePop(1);">[닫기]</a></div>
							</form>
						</td>
					</tr>
				</table>
			</div>
		</div>
	<!-- side popup -->
		<div class="popup_wrap_right">
			<div id="pop_2" class="popup">
				<table>
					<tr>
						<td class="popup_table" align="center">
							<a class="qr" href="http://plus.kakao.com/home/@muju_pyeongkang"> <img data-toggle="tooltip" title="카톡으로 손쉽게 예약하세요"  src="/muju/image/qrcode.png" alt="/muju/image/qrcode.png"></a>
							<img data-toggle="tooltip" title="카톡으로 손쉽게 예약하세요" src="/muju/image/side5.png" alt="/muju/image/side5.png">
						</td>
					</tr>
					<tr>
						<td class="popup_footer">
							<form name="popup_form2">
								<div id="check2"><input type="checkbox" name="chkbox" value="checkbox">&nbsp오늘 하루 닫음 <br></div>
								<div id="close2" class="close_pop"><a href="javascript:closePop(2);">[닫기]</a></div>
							</form>
						</td>
					</tr>
				</table>
			</div>
		</div>
	<script language="Javascript"> //visibility -> hidden
	    document.all['pop_1'].style.visibility = "hidden";
	    document.all['pop_2'].style.visibility = "hidden";
		var i=getCookie("poplevel"); // 처음 poplevel의 값.
		if(i == "0"){
			document.all['pop_1'].style.visibility = "visible";
			document.all['pop_2'].style.visibility = "visible";
		}
		else if(i == "1"){
			document.all['pop_2'].style.visibility = "visible";
		}
		else if(i == "2"){
			document.all['pop_1'].style.visibility = "visible";
		}
	</script>
	</div>
	<div class="container-fluid">
		<div class="contents_res">
			<EMBED src="https://app.zari.me/v2/booking/muju_pyeongkang">
		</div>
	</div>
</body>
</html>
