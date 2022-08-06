<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH . '/head_main.php');
?>

<h2 class="sr-only">메인 페이지</h2>
</div>
<!-- Container End -->

<!-- <div class="Vis_sub">
  //테마속 head   .... 이하 콘텐츠 Start
</div> -->


<!-- ///////////////////////////////////////////// -->
<!-- Carousel -->
<div id="Sam" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#Sam" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#Sam" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#Sam" data-bs-slide-to="2"></button>
    </div>
    <!-- 
  The slideshow/carousel 
  // KFood슬라이드관련  head.sub.php  55~56 CSS,js연동 
  // 테마속 img 경로 G5_THEME_IMG_URL
  // 테마속 인덱스 루트경로 G5_THEME_URL
  -->
    <style>
    @import url(//fonts.googleapis.com/earlyaccess/nanumpenscript.css);

    .nanumpenscript * {
        font-family: 'Nanum Pen Script', cursive;
    }

    .NPS {
        font-family: 'Nanum Pen Script', cursive;
        color: #68383c;
        font-size: 50pt;
        margin: 0px;
        letter-spacing: -3px;
    }
    </style>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo G5_THEME_IMG_URL ?>/slide_im01.jpg" alt="Los Angeles" class="d-block"
                style="width:100%">
            <div class="carousel-caption">
                <h1 class="NPS">대표 한식 비빔밥</h1>
                <p>섞고 비비는 한국적 요리미학</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo G5_THEME_IMG_URL ?>/slide_im02.jpg" alt="Chicago" class="d-block" style="width:100%">
            <div class="carousel-caption">
                <h1 class="NPS">버섯나물</h1>
                <p>맛있는 버섯나물</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo G5_THEME_IMG_URL ?>/slide_im03.jpg" alt="New York" class="d-block" style="width:100%">
            <div class="carousel-caption">
                <h1 class="NPS">한식 대표 찌개 김치찌개</h1>
                <p>김치를 기반으로 하는 김치 요리의 대표</p>
            </div>
        </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#Sam" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#Sam" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<div class="container">
    <? include_once(G5_THEME_PATH . '/ad.html'); ?>
</div>
<? include_once(G5_THEME_PATH . '/scrolltop.html'); ?>
<!-- BS5 그리드 ///////////////////////////////////// -->
<!-- container-fluid 100%  container 1320px -->
<div class="container mt-3">
    <style type="text/css">
    * {
        box-sizing: border-box;
    }

    .itemthbox {
        border: 2px solid #ddd;
        border-radius: 10px;
        padding: 10px 10px 0 10px;
        filter: grayscale(100%);
        transition: filter 2s;
        cursor: pointer;
    }

    .itemthbox:hover {
        filter: grayscale(0%);
    }
    </style>
    <!-- Or let Bootstrap automatically handle the layout -->
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="itemthbox">
                <img src="<?php echo G5_THEME_IMG_URL ?>/item_00.png" alt="봄" class="itemth">
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-12">
            <div class="itemthbox">
                <img src="<?php echo G5_THEME_IMG_URL ?>/item_01.png" alt="여름" class="itemth">
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 mo844">
            <div class="itemthbox">
                <img src="<?php echo G5_THEME_IMG_URL ?>/item_02.png" alt="가을" class="itemth">
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 mo844">
            <div class="itemthbox">
                <img src="<?php echo G5_THEME_IMG_URL ?>/item_03.png" alt="겨울" class="itemth">
            </div>
        </div>
    </div>

    <br>

    <!--   
<div class="row">
    <div class="col-xl-4 bg-primary text-white">4</div>
    <div class="col-xl-8 bg-dark text-white">8</div>
</div>
  <br> 
-->

    <div class="row">
        <div class="col-lg-4">
            <!--  col-md-12 mo844_full -->
            <? echo latest("theme/basicRW","notice", 4, 25); ?>
        </div>
        <div class="col-lg-8">
            <!--  col-md-12 mo844_full -->
            <? echo latest("theme/picRW","gallery", 4, 18); ?>
        </div>
    </div>

</div>
<!-- ///////////////////////////////////////////////////////////////////////// -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.utbox {
    position: relative;
    width: 100%;
    overflow: hidden;
    padding-top: 56.25%;
    /* 16:9 Aspect Ratio */
}

.responsive-iframe {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 100%;
    border: none;
    border-radius: 20px;
}
</style>

<div style="height:100px"></div>
<div class="container">
    <div style="height:100px;"></div>
    <div class="row">
        <div class="col-lg-6">
            <!--  col-md-12 mo844_full -->
            <div class="utbox">
                <iframe class="responsive-iframe" src="https://www.youtube.com/embed/GG7lARqZ4XY"></iframe>
            </div>
        </div>

        <div class="col-lg-6">
            <!--  col-md-12 mo844_full -->
            <h2>한식레시피 영상</h2>
            <p>모두가 요리할 수 있는 한식레시피 영상을 보러 오세요.</p>
            <? echo latest("theme/basicOne","notice", 2, 18); ?>
            <hr>
            <h2>Today Q&A</h2>
            <? echo latest("theme/basicOne","qa", 2, 18); ?>
        </div>
    </div>
</div>
<!-- <div class="container">
 
        <div class="row mg-3">
            <div class="col-lg-3 col-sm-6 col-12 bg-success">111</div>
            <div class="col-lg-3 col-sm-6 col-12 bg-warning">222</div>
            <div class="col-lg-3 col-sm-6 col-12 bg-success">333</div>
            <div class="col-lg-3 col-sm-6 col-12 bg-warning">444</div>
        </div>
  </div> -->

<!-- /////////////////////////////////////////////////////////////////////////// -->
<style>
body {
    font-family: Arial;
}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    height: 300px;
}

/*
https://cdn.pixabay.com/photo/2018/02/28/23/00/bear-3189349__340.png
https://cdn.pixabay.com/photo/2018/07/21/07/27/cat-3552048__340.png
*/
#KContab_1,
#KContab_2,
#KContab_3 {
    padding-top: 20px;
}
#KContab_1 {
    background: #e7e0c2 url('<?php echo G5_THEME_IMG_URL ?>/bg_00.jpg') no-repeat right bottom;
}

#KContab_2 {
    background: #e7e0c2 url('<?php echo G5_THEME_IMG_URL ?>/bg_01.png') no-repeat right bottom;
}

#KContab_3 {
    background: #e7e0c2 url('<?php echo G5_THEME_IMG_URL ?>/bg_01.png ') no-repeat right bottom;
}

.tabimg {
    margin-top: 10px;
    margin-left: 50px;
    height: -300px;
}

/* background:url('</?php echo G5_THEME_IMG_URL ?>/tap_context_00.png') no-repeat center bottom; height: 255px; width: 580px; */
.nomalcont {
    width: 100%;
    max-width: 940px;
    background: rgba(250, 250, 250, 0.0);
}



.fsnomal,
.tabimg {
    color: red;
    font-size: 16px;
    line-height: 18px;
}

/* letter-spacing: 자간 0 -2px; line-height: 줄간격 보통글씨크기+2px; */
/* ////////////////////////////////////////////////////////head main 에서 이동 */
@media (max-width:1023px) {

    #KContab_1,
    #KContab_2,
    #KContab_3 {
        background-size: 100% 100%;
        letter-spacing: 1px;
    }

    body {}

    /* background:red; */
    .mo1023 {
        display: block;
    }

}

@media (max-width:1000px) {
    body {}

    /* background:cyan;*/
    .mo844 {
        margin-top: 20px;
    }
}

@media (max-width:844px) {
    body {}

    /*background:cyan;*/
    .mo844 {
        margin-top: 20px;
    }

    .mo844_full {
        width: 100%;
    }

    /* 탭 높이 증가 */
    #KContab_1,
    #KContab_2,
    #KContab_3 {
        height: -320px;
    }

    .tabimg {
        margin: 0px;
        display: block;
        padding: 0px;
        height: -150px;
        width: 100%;
        font-size: 90%;
    }

    /*background:#f00;*/
    .tap_context_img {
        width: 400px;
    }

    .nomalcont {
        width: 100%;
    }

    /*background: pink;*/
}

@media(max-width:414px) {
    body {}

    /* background:yellow; */
    .logomy {
        display: none;
    }

    /*PC*/
    .logomy_m {
        display: block;
    }

    /*Mobile*/
    .tBox {
        width: 100%;
    }

    .gridme4 {
        grid-template-columns: auto;
        width: 100%;
        max-width: 320px;
    }

    .gridme4>div {
        width: 100%;
        max-width: 320px;
    }

    /* 탭 높이 증가 */
    #KContab_1,
    #KContab_2,
    #KContab_3 {
        height: 580px;
    }
}
</style>
<div class="container">
    <h1>웹진형(이미지, 제목, 내용)</h1>
<? echo latest("theme/basicPic_card","gallery", 6, 18); ?>
<h1>일반보드 게시판(제목)</h1>
<? echo latest("theme/basicOne","gallery", 2, 18); ?>
<h1>유튜브(board) 연동 최신글</h1>
<? echo latest("theme/basic_youtube","gallery", 1, 18); ?>
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'KContab_1')" id="defaultOpen">한식의 분류</button>
        <button class="tablinks" onclick="openCity(event, 'KContab_2')">메뉴판</button>
        <button class="tablinks" onclick="openCity(event, 'KContab_3')">커뮤니티</button>
    </div>

    <div id="KContab_1" class="tabcontent">
        <!-- //////////////////////////////////////////////////////////////// -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-sm-6 fsnomal">
                    <h3>한식의 분류</h3>
                    <p>한식의 종류를 소개합니다.</p>
                    <? echo latest("theme/basicOne","notice", 4, 25); ?>
                </div>
                <div class="col-lg-7 col-sm-6">
                    <!-- H2-배경유지 바로가기 -->

                    <div class="tabimg">
                        <h3>Korean food</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis. </p>
                    </div>

                    <img src="<?php echo G5_THEME_IMG_URL ?>/tap_context_00.png" class="tabimg" class="tap_context_img">
                </div>
                <!-- col은 한줄만 이하 미포함 -->
            </div> <!-- row -->
        </div>
    </div>

    <div id="KContab_2" class="tabcontent">
        <div class="nomalcont fsnomal">
            <h3>메뉴판</h3>
            <p>다양한 한식의 사진을 소개합니다.</p>
            <? echo latest("theme/basicpic_simple","gallery", 4, 18); ?>
        </div>
    </div>

    <div id="KContab_3" class="tabcontent">
        <div class="nomalcont fsnomal">
            <h3>커뮤니티</h3>
            <p>다양한 의견을 교환할 수 있습니다.</p>
            <? echo latest("theme/basicpic_simple","gallery_1", 4, 18); ?>
        </div>
    </div>

    <script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>
</div>

<!-- https://pixabay.com/ko/music/search/theme/%EB%B0%B0%EA%B2%BD%20%EC%9D%8C%EC%95%85/?movement=%EB%AC%B4%EA%B2%81%EA%B3%A0%20%EA%B9%8A%EC%9D%80&mood=%ED%8E%B8%EC%95%88%ED%95%9C -->
<audio autoplay>
    <source
        src="https://cdn.pixabay.com/download/audio/2022/03/01/audio_737bd87d5f.mp3?filename=light-trap-groove-21826.mp3">
</audio>
<? include_once(G5_THEME_PATH . '/tail.php'); ?>