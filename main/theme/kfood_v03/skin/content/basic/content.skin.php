<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>

<article id="ctt" class="ctt_<?php echo $co_id; ?>">
    <header>
        <h1><?php echo $g5['title']; ?></h1>
    </header>
<!-- /////////////////////////스타일/////////////////////////// -->
    <style>
    .contbox {
        /* width: 1256px; */
        /* background: #ddd; */
        margin: auto;
        text-transform: uppercase;
    }

    /* text-transform: uppercase; 영어대문자 표기 */

    .contbox>.thum_1, .contbox>.thum_2{width: 605px;}

    .contbox>img {
        width: 100%;
    }

    .thum_1 {
        float: left;
        margin: 0 26px 26px 0;
    }

    .thum_2 {
        float: right;
        margin: 0 0 26px 26px;
    }

    .contitle_1 {
        color: #b8b3af;
    }

    .contbox h1 {
        font-size: 30px;
        letter-spacing: -1px;
    }

    .contbox p {
        font-size: 18px;
        line-height: 20px;
    }

    .contbox hr {
        clear: both;
        border: none;
    }
</style>
<!-- /////////////////////////////////내용은 테마 속 스킨 basic class 추가////////////////////////////////// -->
    <div id="ctt_con" class="contbox">
       <?php echo $str; ?>
    </div>
<!-- /////////////////////////////////내용은 테마 속 스킨 basic class 추가 ////////////////////////////////// -->

</article>