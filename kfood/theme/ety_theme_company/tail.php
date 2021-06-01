<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>


	<?php

		// left_menu.php 에서 추가된 모든 게시판+페이지를 추가해주셔야 합니다.

		if($bo_table == 'notice' ||
		$bo_table == 'free' ||
		$bo_table == 'free_responsive' ||
		$bo_table == 'free_scroll' ||
		$pagename == "product-2.php" ||
		$pagename == "pages-1.php" ||
		$pagename == "pages-2.php"
		){
	?>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->

	<?php }?>

<?php if(!defined('_INDEX_')) { ?>
  </div>
<?php } ?>

    <footer class="py-5 bg-dark">
		<div class="container footer">
			<div class="row">
				<div class="col-md-12 text-white text-left">
					<h2>ETY.KR</h2><!-- image or text  -->
					<p>
					무료테마인 <a href="http://ety.kr" target="_blank" class="color-white">에티 비즈니스테마</a>는 상업적으로 이용하셔도 됩니다. 하지만 배포, 재배포는 안됩니다. <br />
					또한 해당 테마에 대해서 지적재산권을 주장 할 수 없음을 미리 알려드립니다. <br />
					별도 문의사항은 <span class="color-white">softzonecokr@naver.com</span> 으로 연락 주시기 바랍니다.
					</p>
					<!-- <p>
						<i class="far fa-building"></i> 사무실 : 경기도 아름다운 아파트 101동 1004호<br />
						<i class="fas fa-phone"></i> 연락처 : 010-0000-0000<br />
						<i class="far fa-envelope-open"></i> <a href="mailto:softzonecokr@naver.com" class="color-white">Email : SOFTZONECOKR@NAVER.COM</a><br />
						<i class="fas fa-fax"></i> 팩스번호 : 02) 1234-1234<br />
					</p> -->
          <?php echo latest('ft_basic','ft_info', 1, 500); ?>




                        <!-- ('스킨','게시판',게시물수,글자수) -->


				</div>
			</div>
		</div><!--/container-->
    </footer>



    <!-- Bootstrap core JavaScript -->
    <!--<script src="vendor/jquery/jquery.min.js"></script>-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script>
	var jQuery = $.noConflict(true);
	</script>
    <script src="<?php echo G5_THEME_URL?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo G5_THEME_URL?>/assets/parallax/js/parallax.min.js"></script>
	<script src="<?php echo G5_THEME_URL?>/assets/owlcarousel/js/owl.carousel.min.js"></script>
	<!-- countdown -->
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/assets/countdown/js/kinetic.js"></script>
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/assets/countdown/js/jquery.final-countdown.js"></script>
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/js/bootstrap-dropdownhover.js"></script>
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/js/custom.js"></script>
	<script>

	</script>
	<script>
		// parallax-window 이미지를 수정해주세요.
		jQuery('.parallax-window').parallax({imageSrc: 'https://via.placeholder.com/1920x1080'});
	</script>
	<script>
		$(document).ready(function () {
			//owl
      //플러그인 다루기 1.선택자 나만의 이름으로
			jQuery("#mainBanner").owlCarousel({
				loop:true,
				margin:0,//이미지 사이의 간격
				nav:true,
        items:1,
        autoplay:true,
        dot:false,
				responsive:{
					0:{
						items:1 // 모바일
					},
					600:{
						items:1, // 브라우저 600px 이하
            nav:false
					},
					1024:{
						items:1 // 브라우저 100px 이하
					}
				}
			});

			// countdown
			'use strict';
			jQuery('.countdown').final_countdown({
				'start': 1362139200,
				'end': 1388461320,
				'now': 1387461319
			});
		});
	</script>

<script>

</script>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
