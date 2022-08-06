<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>

<article id="ctt" class="ctt_<?php echo $co_id; ?>">
    <header>
        <h1><?php echo $g5['title']; ?></h1>
    </header>

<!-- /////class 스타일 추가(1)////////////////width:1256px; -->
<style type="text/css">
.contbox {margin:auto;text-transform: uppercase;}/*uppercase; 영어대문자*/
.contbox >.thum_1,.contbox >.thum_2{width:605px;}
.contbox > img{width:100%;margin-bottom:20px;}
.thum_1{float:left;margin:0 26px 26px 0;}
.thum_2{float:right;margin:0 0 26px 26px;}
.contitle_1{color:#ff3333;margin-bottom:50px;} 
.contbox > h1{font-size:30px;}
.contbox > p{font-size:20px;margin-bottom:50px;}
.contbox > hr{clear:both;border:none;margin:90px 0;}
.contbox > br{margin-bottom:100px;}
</style>
<!-- ////////내용은 테마속 스킨 Basic class추가(2) //////////// -->
    <div id="ctt_con" class="contbox">
    <!-- ///////////////////////// -->
    <div class="container">
        <div class="row">
        <div class="col-sm-3 bc1">01</div>
        <div class="col-sm-3 bc2">02</div>
        <div class="col-sm-3 bc1">03</div>
        <div class="col-sm-3 bc2">04</div>
        </div>
    </div>
    <!-- ///////////////////////// -->
        <?php echo $str; ?>  <!-- 내용이니 수정금지 -->
        <!-- ///////////////////////// -->
    <div class="container">
        <div class="row">
        <div class="col-sm-4 bc1">01</div>
        <div class="col-sm-4 bc2">02</div>
        <div class="col-sm-4 bc1">03</div>
        </div>
    </div>
    <!-- ///////////////////////// -->
    </div>
<!-- //////// 내용끝 테마속 스킨 Basic  //////////// -->
</article>