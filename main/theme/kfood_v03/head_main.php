<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
  include_once(G5_THEME_MOBILE_PATH . '/head.php');
  return;
}

include_once(G5_THEME_PATH . '/head.sub.php');
include_once(G5_LIB_PATH . '/latest.lib.php');
include_once(G5_LIB_PATH . '/outlogin.lib.php');
include_once(G5_LIB_PATH . '/poll.lib.php');
include_once(G5_LIB_PATH . '/visit.lib.php');
include_once(G5_LIB_PATH . '/connect.lib.php');
include_once(G5_LIB_PATH . '/popular.lib.php');
?>

<!-- 상단 시작 { -->
<div id="hd">
  <h1 id="hd_h1" class="absolute fs-0 lh-0 overflow-hidden"><?php echo $g5['title'] ?></h1>
  <div id="skip_to_container" class="z-100000 absolute top-0 left-0 w-px h-px fs-0 kh-0 overflow-hidden"><a href="#container">본문 바로가기</a></div>

  <?php
  if (defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH . '/newwin.inc.php'; // 팝업레이어
  }
  ?>
</div>

<!-- 상단 메일등 아이콘 공통 / 메인페이지 head_main.php -->
<? include_once(G5_THEME_PATH . '/topbar.php'); ?>

<header id="header" class="sticky top-0 flex items-center">
  <div class="container mx-auto text-black">
    <div x-data="{ open: false }" class="flex flex-col mx-auto lg:items-center justify-between lg:flex-row">
      <div class="p-4 flex flex-row items-center justify-between">
        <a href="<?php echo G5_URL ?>" class="text-lg font-semibold tracking-widest text-indigo-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
          <img src="<?php echo G5_THEME_IMG_URL ?>/logo_1.png" alt="<?php echo $config['cf_title']; ?>" class="logomy">
          <img src="<?php echo G5_THEME_IMG_URL ?>/logo_1.png" alt="<?php echo $config['cf_title']; ?>" class="logomy_m">
        </a>
      </div>
      <style type="text/css">
        /*상단로고*/
        .mo1023{display:none;}
        .logomy{width:200px;display:block;} /*PC*/
        .logomy_m{display:none;} /*Mobile*/
        /*디바이스크기에 맞춘 미디어쿼리 조건문 
        세로 1~ samsung s8 360px ~ iphone XR 414px
        */

         /* 메인 index 아이템 관련 */
        .itemthbox{margin-bottom: 10px;}
        .itemthbox img{width: 100%;}
         /* 메인 index 아이템 관련 */

        .tBox{width:1300px;margin:20px auto;}/*background:pink;*/
        /*//////////////////// 아이템*/
        .gridme4 {
          display: grid;margin:0 auto 20px ;width:1300px;
          grid-template-columns: auto auto auto  auto;
          gap: 5px 10px; 
        }/*background:pink;*/
        .gridme4 > div {
          border: 1px solid black;
           /* background-color: yellow;*/
        }
        /*//////////////////*/

        /* 쿼리문은 인덱스로 이동 */
      </style>

      <? include_once(G5_THEME_PATH . '/nav.php'); ?>

      <!-- 검색 토글 버튼 -->
      <div class="search-icon ml-0 lg:ml-8">
        <div id="search-toggle" class="search-icon cursor-pointer pl-6 flex align-items">
          <svg class="fill-current pointer-events-none text-grey-darkest w-4 h-4 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
          </svg>
        </div>
      </div>

      <button class="hamburger pr-4 lg:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
          <path x-show="!open" x-cloak fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" x-cloak fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
  </div>

  <!-- 검색 입력 -->
  <div class="w-full hidden bg-white shadow-xl z-9999 absolute top-20" id="search-content">
    <div class="container border-t mx-auto py-4 text-black flex justify-center">
      <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
        <input type="hidden" name="sfl" value="wr_subject||wr_content">
        <input type="hidden" name="sop" value="and">
        <label for="sch_stx" class="sr-only">검색어 필수</label>
        <input id="searchfield" type="text" name="stx" id="sch_stx" placeholder="검색어를 입력해주세요" maxlength="20" autofocus="autofocus" class="mr-2 text-grey-800 bg-white transition focus:outline-none p-2 appearance-none leading-normal text-base border">
        <button type="submit" id="sch_submit" value="검색" class="text-lg"><i class="fa fa-search" aria-hidden="true"></i><span class="sr-only">검색</span></button>
      </form>

      <script>
        function fsearchbox_submit(f) {
          if (f.stx.value.length < 2) {
            alert("검색어는 두글자 이상 입력하십시오.");
            f.stx.select();
            f.stx.focus();
            return false;
          }

          // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
          var cnt = 0;
          for (var i = 0; i < f.stx.value.length; i++) {
            if (f.stx.value.charAt(i) == ' ')
              cnt++;
          }

          if (cnt > 1) {
            alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
            f.stx.select();
            f.stx.focus();
            return false;
          }

          return true;
        }
      </script>
    </div>
  </div>

  <script>
    /* Toggle dropdown list */
    /* https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8 */
    var searchMenuDiv = document.getElementById("search-content");
    var searchMenu = document.getElementById("search-toggle");

    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");

    document.onclick = check;

    function check(e) {
      var target = (e && e.target) || (event && event.srcElement);

      //User Menu
      if (!checkParent(target, searchMenuDiv)) {
        // click NOT on the menu
        if (checkParent(target, searchMenu)) {
          // click on the link
          if (searchMenuDiv.classList.contains("hidden")) {
            searchMenuDiv.classList.remove("hidden");
            searchfield.focus();
          } else {
            searchMenuDiv.classList.add("hidden");
          }
        } else {
          // click both outside link and outside menu, hide menu
          searchMenuDiv.classList.add("hidden");
        }
      }
    }

    function checkParent(t, elm) {
      while (t.parentNode) {
        if (t == elm) {
          return true;
        }
        t = t.parentNode;
      }
      return false;
    }
  </script>
</header>
<!-- } 상단 끝 -->
<!-- 메인페이지 head 원본변형  -->
<!-- 콘텐츠 시작 { -->
<div id="container" class="container mx-auto sm:px-4">
  <?php if (!defined("_INDEX_")) { ?><h2 id="container_title" class="relative text-center mt-6"><span title="<?php echo get_text($g5['title']); ?>" class="text-xl font-semibold mb-4 block"><?php echo get_head_title($g5['title']); ?></span></h2><?php }
