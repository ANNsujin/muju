<? include("top.html") ?>
	<div class="container">
		<div class="menu_nanum">
			<img src="../image/menu2_1.png" arc="../image/menu2_1.png">
			<span> 방 둘러보기 >> 하늘정원<</span>
		</div>
		<hr class="menu_line">
		<div class="contents">
			<!-- 도면 -->
			<div class="col-lg-4 col-md-4 col-sm-4 room_main desktop">
				<div class="room_blank"></div>
				<img class="room_archi" src="../image/sample.png" arc="../image/sample.png">
				<div class="room_blank"></div>
			</div>
			<!-- carousel silider -->
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <!-- Top part of the slider -->
                <div class="carousel slide" id="myCarousel">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item" data-slide-number="0">
                        <img src="../image/sample.png" arc="../image/sample.png"></div>

                        <div class="item" data-slide-number="1">
                        <img src="../image/sample.png" arc="../image/sample.png"></div>

                        <div class="item" data-slide-number="2">
                        <img src="../image/sample.png" arc="../image/sample.png"></div>

                        <div class="item" data-slide-number="3">
                        <img src="../image/sample.png" arc="../image/sample.png"></div>

                        <div class="item" data-slide-number="4">
                        <img src="../image/sample.png" arc="../image/sample.png"></div>

                        <div class="item" data-slide-number="5">
                        <img src="../image/sample.png" arc="../image/sample.png"></div>

                        <div class="item" data-slide-number="6">
                        <img src="../image/sample.png" arc="../image/sample.png"></div>

                        <div class="item" data-slide-number="7">
                        <img src="../image/sample.png" arc="../image/sample.png"></div>
                    </div><!-- Carousel nav -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="room">
                        <a class="thumbnail" id="carousel-selector-0"><img src="http://placehold.it/170x100&text=one"></a>
                    </li>
	                <li class="room">
                        <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x100&text=two"></a>
                    </li>
                    <li class="room">
                        <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100&text=three"></a>
                    </li>
                    <li class="room">
                        <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/170x100&text=four"></a>
                    </li>
					<li class="room">
                        <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x100&text=five"></a>
                    </li>
                    <li class="room">
                        <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x100&text=six"></a>
                    </li>
                    <li class="room">
                        <a class="thumbnail" id="carousel-selector-6"><img src="http://placehold.it/170x100&text=seven"></a>
                    </li>
                    <li class="room">
                        <a class="thumbnail" id="carousel-selector-7"><img src="http://placehold.it/170x100&text=eight"></a>
                    </li>
                </ul>
            </div>
		</div>
		<!-- 방 설명 부분 -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<hr class="menu_line_sub">
				<!-- desktop -->
				<table style="margin: 0 auto;" width="95%" class="room_table desktop">
				<colgroup>
					<col width="20%" />
					<col width="10%" />
					<col width="10%" />
					<col width="10%" />
					<col width="10%" />
					<col width="10%" />
					<col width="10%" />
					<col width="10%" />
					<col width="10%" />
				</colgroup>
				<tbody>
					<tr>
						<th class="r_title_down r_title_dark" rowspan="2" style="font-size: 35px; font-family: 'Nanum Pen Script';"> 하늘정원 </th>
						<th class="r_title_dark" colspan="2"> 인원 </th>
						<th class="r_title_dark" colspan="6"> 요금 </th>
					</tr>
					<tr>
						<td class="r_title_down r_title_light" style="font-weight:bold;"> 기준인원 </td>
						<td class="r_title_down r_title_light" style="font-weight:bold;"> 추가인원 </td>
						<td class="r_title_down r_title_light" colspan="2" style="font-weight:bold;"> 여름 성수기 </td>
						<td class="r_title_down r_title_light" colspan="2" style="font-weight:bold;"> 겨울 성수기 </td>
						<td class="r_title_down r_title_light" colspan="2" style="font-weight:bold;"> 비수기 </td>
					</tr>
					<tr>
						<td> 1 Room, 1 Bed </td>
						<td> 4 Persons </td>
						<td> 4 Persons </td>
						<td> 주중 </td>
						<td> 주말 </td>
						<td> 주중 </td>
						<td> 주말 </td>
						<td> 주중 </td>
						<td> 주말 </td>
					</tr>
					<tr>
						<td class="r_title_down" colspan="3"> 외부 데크 포함 22평 </td> <!-- 확인 필요 -->
						<td class="r_title_down"> 200,000₩ </td>
						<td class="r_title_down"> 200,000₩ </td>
						<td class="r_title_down"> 170,000₩ </td>
						<td class="r_title_down"> 200,000₩ </td>
						<td class="r_title_down"> 150,000₩ </td>
						<td class="r_title_down"> 180,000₩ </td>
					</tr>
				</tbody>
				</table>
				<!-- mobile -->
				<div class="col-xs-12 mob">
					<table style="margin: 0 auto; width:95%;" class="room_table">
					<colgroup>
						<col width="16%;" />
						<col width="16%;" />
						<col width="16%;" />
						<col width="16%;" />
						<col width="16%;" />
						<col width="16%;" />
					</colgroup>
					<tbody>
						<tr>
							<th class="r_title_down r_title_dark" colspan="4" rowspan="2" style="font-size: 35px; font-family: 'Nanum Pen Script';"> 하늘정원 </th>
							<th class="r_title_dark" colspan="2"> 인원 </th>
						</tr>
						<tr>
							<td class="r_title_down r_title_light" style="font-weight:bold;"> 기준인원 </td>
							<td class="r_title_down r_title_light" style="font-weight:bold;"> 추가인원 </td>
						</tr>
						<tr>
							<td colspan="4"> 1 Room, 1 Bed </td>
							<td> 4인 </td>
							<td> 4인 </td>
						</tr>
						<tr>
							<td colspan="4"> 외부 데크 포함 22평 </td> <!-- 확인 필요 -->
						</tr>
						<tr>
							<th class="r_title_dark" colspan="6"> 요금 </th>
						</tr>
						<tr>
							<td class="r_title_down r_title_light" colspan="2" style="font-weight:bold;"> 여름 성수기 </td>
							<td class="r_title_down r_title_light" colspan="2" style="font-weight:bold;"> 겨울 성수기 </td>
							<td class="r_title_down r_title_light" colspan="2" style="font-weight:bold;"> 비수기 </td>
						</tr>
						<tr>
							<td> 주중 </td>
							<td> 주말 </td>
							<td> 주중 </td>
							<td> 주말 </td>
							<td> 주중 </td>
							<td> 주말 </td>
						</tr>
						<tr>
							<td class="r_title_down"> 20만원 </td>
							<td class="r_title_down"> 20만원 </td>
							<td class="r_title_down"> 17만원 </td>
							<td class="r_title_down"> 20만원 </td>
							<td class="r_title_down"> 15만원 </td>
							<td class="r_title_down"> 18만원 </td>
						</tr>
					</tbody>
				</table><br>
			</div>
				<hr class="menu_line_sub desktop">
				<div class="col-lg-6 col-md-6 col-sm-6 room_footer desktop" >
					<p><b> * 공지사항 :</b> 침대, 냉장고, 식탁, 의자, TV, 드라이기 제공
						<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp전 객실 개별 WIFI, 에어컨 제공
						<br><b> *&nbsp&nbsp&nbsp&nbsp주방&nbsp&nbsp&nbsp&nbsp:</b> 취사가능(전자렌지, 커피포트, 밥솥, 조리기구)
						<br><b> *&nbsp&nbsp&nbsp&nbsp욕실&nbsp&nbsp&nbsp&nbsp:</b> 샴푸, 린스, 바디워시, 개별 수건 구비 </p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 room_footer desktop">
					<p><b> * 유의사항 :</b> 객실 내부에서 지정된 물품 외의 취사 금지
						<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp(브루스타, 바베큐)
						<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp객실 내 바베큐 불가 → 외부 데크 이용 </p>
					<p style="font-weight:bold"> ※ 1인 추가시, 만원 추가 </p>
				</div>
				<div class="col-xs-12 room_footer mob" >
					<p><b> * 공지사항 :</b> 침대, 냉장고, 식탁, 의자, TV, 드라이기 제공
						<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp전 객실 개별 WIFI, 에어컨 제공
						<br><b> *&nbsp&nbsp&nbsp&nbsp주방&nbsp&nbsp&nbsp&nbsp:</b> 취사가능
						<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp(전자렌지, 커피포트, 밥솥, 조리기구)
						<br><b> *&nbsp&nbsp&nbsp&nbsp욕실&nbsp&nbsp&nbsp&nbsp:</b> 샴푸, 린스, 바디워시, 개별 수건 구비</p>
						<p><b> * 유의사항 :</b> 객실 내부에서 지정된 물품 외의 취사 금지
						<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp(브루스타, 바베큐)
						<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp객실 내 바베큐 불가 → 외부 데크 이용 </p>
					<p style="font-weight:bold"> ※ 1인 추가시, 만원 추가 </p>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<? include("bottom.html") ?>
