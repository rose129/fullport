<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨

$list_count = (is_array($list) && $list) ? count($list) : 0;
?>
<style>
#topad{ background: black; margin-bottom: 0; line-height: 34px; text-align: center; display:block;}
#topad a{color: white;}
</style>


    <ul id="topad" class="row">
    <?php for ($i=0; $i<$list_count; $i++) {  ?>
        <li>
            <?php

            echo "<a href=\"".$list[$i]['wr_link1']."\"> ";
            echo $list[$i]['subject'];
            echo "</a>";

            ?>
        </li>

    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
    <a href="<?php echo get_pretty_url($bo_table); ?>" class="lt_more"><span class="sound_only"><?php echo $bo_subject ?></span>더보기</a>

</div>
