<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨

$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


<div class="callbox" style="margin-top:0px;">
  <?php for ($i=0; $i<$list_count; $i++) {  ?>
	<div class="container">
	<h3 class="text-left ko1"><?php echo $list[$i]['subject']; ?></h3>
	  <div class="row">
		<div class="col-md-8">
		  <p class="ko_17">
		 <?php echo $list[$i]['wr_content']; ?>
		  </p>
		</div>
		<div class="col-md-4">
		  <a class="btn btn-lg btn-secondary btn-block ko" href="<?php echo $list[$i]['wr_link1']; ?>" target="_blank"><?php echo $list[$i]['wr_1']; ?></a>
		</div>
	  </div>
	</div>
    <?php }  ?>
</div>
