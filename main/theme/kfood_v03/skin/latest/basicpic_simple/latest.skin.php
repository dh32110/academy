<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH . '/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="' . $latest_skin_url . '/style.css">', 0);
$thumb_width = 100;
$thumb_height = 70;
// 210,150
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="container-fluid">
<!-- <a href="</?php echo get_pretty_url($bo_table); ?>" class="lt_more">+</a> -->
  <div class="row">
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
    <div class="col-lg-3 col-sm-6 border mb-3">
    <!-- 내용이 있는 경우////////////////////////// -->
      <!-- 썸네일이미지 -->
      <a href="<?php echo $wr_href; ?>" class="lt_img"><?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?></a>

      <!-- wow 제목내용 -->
      <?php
        echo "<a href=\"" . $wr_href . "\"> ";
        echo "+". $list[$i]['subject'];
       echo "</a>";
     ?>
    </div>

      <!--게시물이 없는경우////////////////////////////-->
    <?php }  ?>
       <?php if ($list_count == 0) { //게시물이 없을 때  
    ?>
       <div class="col">게시물이 없습니다.</div>
    <?php }  ?>

 </div><!-- row -->  
</div><!-- container --> 