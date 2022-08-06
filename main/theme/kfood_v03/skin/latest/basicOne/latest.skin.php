<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>
<style type="text/css">
/* 공통추가 kfood*/
a,.lat_title>a,.basic_li>a{text-decoration:none;color:#000}


</style>
<div class="lat">
    <!-- 테마속//  -->
    <!-- <h2 class="lat_title"><a href="</?php echo get_pretty_url($bo_table); ?>"></?php echo $bo_subject ?></a></h2> -->


    <ul>
    <?php for ($i=0; $i<$list_count; $i++) {  ?>
       

        <li class="basic_li">
            <div style="display:inline-block;">
            
            <?php
            if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";

            echo "<a href=\"".get_pretty_url($bo_table, $list[$i]['wr_id'])."\"> ";
            if ($list[$i]['is_notice'])
                echo "<strong>= ".$list[$i]['subject']."</strong>";
            else
                echo "- ".$list[$i]['subject'];
                //echo "<u>★ㅎ ".$list[$i]['subject']."</u>";

            echo "</a>";
            ?>
            </div>
            <div class="lt_info2">
            	<span class="lt_date"><?php echo $list[$i]['datetime'] ?></span>              
            </div>
        </li>

    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
        <!-- basicRW의 개조판 // 제목, 더보기 삭제 -->
    <!-- <a href="//</?//php //echo get_pretty_url($bo_table); //?>" class="lt_more">+</a> -->
    
</div>