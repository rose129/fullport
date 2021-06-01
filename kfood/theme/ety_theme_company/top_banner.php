<?php
// 각 게시판의 배너 이미지를 변경할 수 있습니다.
// 페이지들의 상단 배너들은 pages 각 페이지들에서 수정해주세요.
// 참고하시어 수정해서 사용해주세요.


// 인엑스는 제외
if(!defined('_INDEX_')) {

	$pagename = basename($_SERVER["PHP_SELF"]);


	// about.php 페이지
	if($pagename == 'about.php'){
		$background_images = "https://via.placeholder.com/1920x400";
		$title = 'ABOUT';
		$title_sub = '백그라운드 이미지를 변경하시거나 폰트색상등을 변경해서 사용해주세요.';
	}

	// service.php 페이지
	if($pagename == 'service.php'){
		$background_images = "https://via.placeholder.com/1920x400";
		$title = 'SERVICE';
		$title_sub = '백그라운드 이미지를 변경하시거나 폰트색상등을 변경해서 사용해주세요.';
	}


	// product.php 페이지
	if($pagename == 'product.php'){
		$background_images = "https://via.placeholder.com/1920x400";
		$title = 'PRODUCT';
		$title_sub = '백그라운드 이미지를 변경하시거나 폰트색상등을 변경해서 사용해주세요.';
	}

	// new.php 페이지
	if($pagename == 'new.php'){
		$background_images = "https://via.placeholder.com/1920x400";
		$title = 'PRODUCT';
		$title_sub = '백그라운드 이미지를 변경하시거나 폰트색상등을 변경해서 사용해주세요.';
	}


	// 그외 페이지들
	if($pagename == 'product-2.php' || 
		$pagename == 'pages-1.php' || 
		$pagename == 'pages-2.php' || 
		$pagename == 'current_connect.php' || 
		$pagename == 'qalist.php' ||
		$pagename == 'qawrite.php' ||
		$pagename == 'qaview.php' ||
		$pagename == 'faq.php'
		){

		$background_images = "https://via.placeholder.com/1920x400";
		$title = 'PAGES';
		$title_sub = '백그라운드 이미지를 변경하시거나 폰트색상등을 변경해서 사용해주세요.';
	}


	/*
	게시판
	*****/

	// gallery 게시판
	if($bo_table == 'gallery'){
		$background_images = "https://via.placeholder.com/1920x400";
		$title = 'GALLERY';
		$title_sub = '백그라운드 이미지를 변경하시거나 폰트색상등을 변경해서 사용해주세요.';
	
	}

	// 그외 게시판들
	if($bo_table == 'free' || $bo_table == 'notice' || $bo_table == 'free_responsive' || $bo_table == 'free_scroll'){
		$background_images = "https://via.placeholder.com/1920x400";
		$title = '게시판';
		$title_sub = '백그라운드 이미지를 변경하시거나 폰트색상등을 변경해서 사용해주세요.';
	}


?>
<!-------------------------- 상단배경 수정 -------------------------->
	<style>
	/* mobile */
	@media (min-width: 1px) and (max-width: 1089px) {
			.about-bg{background-image:url('<?php echo $background_images?>');width:100%;-webkit-background-size:100% auto;-moz-background-size:100% auto;-o-background-size:100% auto;background-position:center; background-size: cover; background-repeat:no-repeat;color:#fff;height:100%;}.ml-auto,.mx-auto{padding-top:10px;padding-bottom:10px}.lead{font-size:12px;font-weight:300}.display-4{ font-size:1.5rem;font-weight:300;}.btn,a.btn{line-height:20px!important;height:20px!important;padding:0 5px;text-align:center;font-weight:700;border:0;-webkit-transition:background-color .3s ease-out;-moz-transition:background-color .3s ease-out;-o-transition:background-color .3s ease-out;transition:background-color .3s ease-out}.btn-outline-secondary{font-size:11px;padding:0 5px}
	}
	/* desktop */
	@media (min-width: 1090px) {
		.about-bg{background-image:url('<?php echo $background_images?>');background-position:center center;background-repeat:no-repeat;color:#fff;height:400px}.lead{font-size:1.25rem;font-weight:300}.display-4{font-size:2.5rem;font-weight:300;line-height:1.2}
	}
	</style>


	<div class="position-relative overflow-hidden p-md-5 text-center bg-dark bg-sub-1 ety-mt-main margin-bottom-50 about-bg">

	  <div class="col-md-5 p-lg-5 mx-auto my-5">
		<h1 class="display-4 font-weight-normal"><?php echo $title?></h1>
		<p class="lead font-weight-normal ko1">
			<?php echo $title_sub?>
		</p>
	  </div>
	  <div class="product-device shadow-sm d-none d-md-block"></div>
	  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
	</div>
<!-------------------------- ./상단배경 수정 -------------------------->


<?php } ?>