<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

	<!-- 

		배경이미지 사이즈 1920x425 또는 2560x425 / 아래 css 에서 배경이미지를 수정해주세요. 

	-->

	<style>
	/* mobile */
	@media (min-width: 1px) and (max-width: 1089px) {
			.about-bg{background-image:url(img/3.jpg);width:100%;-webkit-background-size:100% auto;-moz-background-size:100% auto;-o-background-size:100% auto;background-position:center center;background-repeat:no-repeat;color:#fff;height:110px}.ml-auto,.mx-auto{padding-top:10px;padding-bottom:10px}.lead{font-size:12px;font-weight:300}.display-4{font-size:1.5rem;font-weight:300;line-height:1.2}.btn,a.btn{line-height:20px!important;height:20px!important;padding:0 5px;text-align:center;font-weight:700;border:0;-webkit-transition:background-color .3s ease-out;-moz-transition:background-color .3s ease-out;-o-transition:background-color .3s ease-out;transition:background-color .3s ease-out}.btn-outline-secondary{font-size:11px;padding:0 5px}
	}
	/* desktop */
	@media (min-width: 1090px) {
		.about-bg{background-image:url(img/3.jpg);background-position:center center;background-repeat:no-repeat;color:#fff;height:400px}.lead{font-size:1.25rem;font-weight:300}.display-4{font-size:2.5rem;font-weight:300;line-height:1.2}
	}
	</style>

	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
		<h1>Bootstrap4</h1>
		<p class="ko">
			<strong>유료테마</strong>는 네비게이션 자동화, 모바일 네비게이션 자동화가 되어 있으며 모바일팝업을 지원합니다.<br>
			또한 내용관리를 통한 페이지를 무한으로 생성이 가능하고 네비게이션과 자동으로 연동 됩니다.		
		</p>
	  </div>
	</div>




    <!-- Page Content -->
    <div class="container">
	<div class="center-heading margin-top-50">
		<h2>THEME</h2>
		<span class="center-line"></span>
	</div>

	<div class="row">
		<div class="col-lg-6 mb-6">
			<!--card-->
			<div class="card">
			  <img src="https://via.placeholder.com/348x348" class="card-img-top" alt="...">
			  <div class="card-body">
				<h5 class="card-title">소개타이틀</h5>
				<p class="card-text">완성도 높은 테마 입니다. 질문답변게시판을 운영하고 있으며, 반응형으로 제작되어져 있습니다.</p>
				<a href="http://ety.kr" target="_blank" class="btn btn-danger">바로가기</a>
			  </div>
			</div>
			<!--/card-->
		</div><!-- /col -->
		<div class="col-lg-6 mb-6">
			<!--card-->
			<div class="card">
			  <img src="https://via.placeholder.com/348x348" class="card-img-top" alt="...">
			  <div class="card-body">
				<h5 class="card-title">소개타이틀</h5>
				<p class="card-text">그누보드(CMS) 5.4 버전에 최적화 되어 있습니다. 계속 업데이트 되는 테마 입니다.</p>
				<a href="http://ety.kr" target="_blank" class="btn btn-danger">바로가기</a>
			  </div>
			</div>
			<!--/card-->
		</div><!-- /col -->
		<div class="col-lg-6 mb-6">
			<!--card-->
			<div class="card">
			  <img src="https://via.placeholder.com/348x348" class="card-img-top" alt="...">
			  <div class="card-body">
				<h5 class="card-title">소개타이틀</h5>
				<p class="card-text">그누보드(CMS) 5.4 버전에 최적화 되어 있습니다. 계속 업데이트 되는 테마 입니다.</p>
				<a href="http://ety.kr" target="_blank" class="btn btn-danger">바로가기</a>
			  </div>
			</div>
			<!--/card-->
		</div><!-- /col -->
		<div class="col-lg-6 mb-6">
			<!--card-->
			<div class="card">
			  <img src="https://via.placeholder.com/348x348" class="card-img-top" alt="...">
			  <div class="card-body">
				<h5 class="card-title">소개타이틀</h5>
				<p class="card-text">그누보드(CMS) 5.4 버전에 최적화 되어 있습니다. 계속 업데이트 되는 테마 입니다.</p>
				<a href="http://ety.kr" target="_blank" class="btn btn-danger">바로가기</a>
			  </div>
			</div>
			<!--/card-->
		</div><!-- /col -->

	</div>









		<div class="margin-top-50"></div>
    </div>
    <!-- /.container -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>