<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH . '/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="' . $latest_skin_url . '/style.css">', 0);
$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="container">
  <h2 class="Natitle">테마속/ozwebzin_01/ <a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $bo_subject ?></a></h2>
  <div class="row">
    <div class="col-xl-4 bg-primary text-white">4</div>
    <div class="col-xl-8 bg-dark text-white">8</div>
  </div>
</div>
<hr>

<div class="pic_lt">
<!-- 아래는 반복문  -->
  <ul style="background:brown">
    <?php
    for ($i = 0; $i < $list_count; $i++) {
      $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

      if ($thumb['src']) {
        $img = $thumb['src'];
      } else {
        $img = G5_IMG_URL . '/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
      }
      $img_content = '<img src="' . $img . '" alt="' . $thumb['alt'] . '" >';
      $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>
      <li class="galley_li" style="background:cyan">
        <a href="<?php echo $wr_href; ?>" class="lt_img"><?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?></a>
        <?php
        if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";

        echo "<a href=\"" . $wr_href . "\"> ";
        if ($list[$i]['is_notice'])
          echo "<strong>" . $list[$i]['subject'] . "</strong>";
        else
          echo $list[$i]['subject'];
        echo "</a>";

        if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
        if ($list[$i]['icon_hot']) echo "<span class=\"hot_icon\">H<span class=\"sound_only\">인기글</span></span>";

        // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
        // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

        // echo $list[$i]['icon_reply']." ";
        // if ($list[$i]['icon_file']) echo " <i class=\"fa fa-download\" aria-hidden=\"true\"></i>" ;
        // if ($list[$i]['icon_link']) echo " <i class=\"fa fa-link\" aria-hidden=\"true\"></i>" ;

        if ($list[$i]['comment_cnt'])  echo "
            <span class=\"lt_cmt\">" . $list[$i]['wr_comment'] . "</span>";

        ?>

        <div class="lt_info">
          <span class="lt_nick text-gray-500">내용:<?php echo $list[$i]['content'] ?></span>
          <span class="lt_nick text-gray-500">쓴자:<?php echo $list[$i]['name'] ?></span>
          <span class="lt_date text-gray-500">날짜:<?php echo $list[$i]['datetime2'] ?></span>
        </div>
      </li>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  
    ?>
      <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
  </ul>
  <a href="<?php echo get_pretty_url($bo_table); ?>" class="lt_more"><span class="sound_only"><?php echo $bo_subject ?></span>더보기</a>

</div>