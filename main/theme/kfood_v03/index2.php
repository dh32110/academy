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
    <button type="button" data-bs-target="#Sam" data-bs-slide-to="3"></button>
  </div>
  <!-- 
  The slideshow/carousel 
  // KFood슬라이드관련  head.sub.php  55~56 CSS,js연동 
  // 테마속 img 경로 G5_THEME_IMG_URL
  // 테마속 인덱스 루트경로 G5_THEME_URL
  -->
<style>
@import url(//fonts.googleapis.com/earlyaccess/nanumpenscript.css);
.nanumpenscript * {font-family: 'Nanum Pen Script', cursive;}
.NPS{font-family: 'Nanum Pen Script', cursive;color:#68383c;font-size:50pt;margin:0px;letter-spacing:-3px;}
</style>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo G5_THEME_IMG_URL ?>/Vis_main_01.jpg" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h1 class="NPS">Los Angeles</h1>
        <p>We had such a great time in LA!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo G5_THEME_IMG_URL ?>/Vis_main_02.jpg" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h1 class="NPS">Chicago</h1>
        <p>Thank you, Chicago!</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="<?php echo G5_THEME_IMG_URL ?>/Vis_main_03.jpg" alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h1 class="NPS">New York</h1>
        <p>We love the Big Apple!</p>
      </div>  
    </div>
    <div class="carousel-item">
      <img src="<?php echo G5_THEME_IMG_URL ?>/Vis_main_04.jpg" alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h1 class="NPS">New York2</h1>
        <p>We love the Big Apple!</p>
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

<!-- BS5 그리드 ///////////////////////////////////// -->
<!-- container-fluid 100%  container 1320px -->
<div class="container mt-3">
  <style type="text/css">
    .itemthbox{border:2px solid #ddd;margin-right:10px;border-radius:10px;padding:10px;}
  </style>
  <!-- Or let Bootstrap automatically handle the layout -->
  <div class="row">
    <div class="col-sm itemthbox">
      <img src="<?php echo G5_THEME_IMG_URL ?>/itemth_01.jpg" alt="아이템1" class="itemth">
      <h3>아이템1</h3>
      <p>아이템1에 대한 간단한 설명</p>
      <span>바로가기</span>
    </div>
    <div class="col-sm itemthbox">
      <img src="<?php echo G5_THEME_IMG_URL ?>/itemth_01.jpg" alt="아이템1" class="itemth">
      <h3>아이템2</h3>
      <p>아이템1에 대한 간단한 설명</p>
      <span>바로가기</span>
    </div>
    <div class="col-sm itemthbox">
      <img src="<?php echo G5_THEME_IMG_URL ?>/itemth_01.jpg" alt="아이템1" class="itemth">
      <h3>아이템3</h3>
      <p>아이템1에 대한 간단한 설명</p>
      <span>바로가기</span>
    </div>
    <div class="col-sm itemthbox">
      <img src="<?php echo G5_THEME_IMG_URL ?>/itemth_01.jpg" alt="아이템1" class="itemth">
      <h3>아이템4</h3>
      <p>아이템1에 대한 간단한 설명</p>
      <span>바로가기</span>
    </div>
  </div>
  <br>
    
  <div class="row">
    <div class="col-xl-4 bg-primary text-white">4</div>
    <div class="col-xl-8 bg-dark text-white">8</div>
  </div>
  <br>

  <div class="row">
    111
    <div class="col-sm-4">
    <? echo latest("theme/basicRW","notice", 3, 18); ?>
    </div>
    <div class="col-sm-8">
    <? echo latest("theme/pic_block","notice", 4, 18); ?>
    </div>
  </div>

</div>
<!-- //////////////// -->
<div class="container">
  <h1>웹진형</h1>
<p>최신글 중 추가한 이미지는 갤러리, 글은 제목 형태로 보이는 스킨을 이미지/제목/내용 3개요소를 보이게 하는 웹매거진의 잡지같은 형태의 최신글 게시물스킨이다. pic_block을 개조해야 한다. 개발명 ozwebzin_01 </p>
<? echo latest("theme/ozwebzin_01","notice", 3, 18); ?>
</div>

<!-- ///////////////////////////////////////////// -->
<!-- 최근게시물 시킨명, 게시판ID, 갯수, 제목제한위치 : theme/고유 테마명/skin/latest-->
<style type="text/css">
  .latest_Box{width:1320px;margin:auto;background:#eee;}
  .latest_Box>div{border:1px #f00 solid;margin-bottom:20px;}
</style>
<!-- //////////////////////// -->
<div class="latest_Box">
  <div><? echo latest("theme/basic","notice", 3, 50); ?></div>
  <div><? echo latest("theme/pic_block","gallery", 4, 18); ?></div>
</div>
<hr style="clear:both;margin:50px auto;border-bottom:2px #aaa dotted">
<hr>
<!-- 최근게시물 //-->


<section id="transactions">
  <div class="mt-8 mb-10 bg-white" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center">
        <h2 class="text-sm font-extrabold py-1 px-4 m-0 bg-indigo-100 text-indigo-500 inline-block uppercase rounded-xl">Transactions</h2>
      </div>
      <p class="mt-4 text-xl sm:text-2xl leading-8 font-semibold tracking-tight text-gray-900 text-left lg:text-center">
        A better way to send money
      </p>
      <p class="mt-4 max-w-2xl text-lg sm:text-xl text-gray-500 lg:mx-auto text-left lg:text-center">
        Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.
      </p>

      <div class="mt-10" data-aos="fade-up" data-aos-delay="100">
        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
          <div class="relative" data-aos="fade-up" data-aos-delay="100">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/globe-alt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Competitive exchange rates</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
            </dd>
          </div>

          <div class="relative" data-aos="fade-up" data-aos-delay="100">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/scale -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">No hidden fees</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
            </dd>
          </div>

          <div class="relative" data-aos="fade-up" data-aos-delay="100">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/lightning-bolt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Transfers are instant</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
            </dd>
          </div>

          <div class="relative" data-aos="fade-up" data-aos-delay="100">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/annotation -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Mobile notifications</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
            </dd>
          </div>
        </dl>
      </div>
    </div>
  </div>
</section>

<section id="about" class="about bg-gray-100 py-12 overflow-hidden">
  <div class="container mx-auto px-4 sm:px-0" data-aos="fade-up">
    <div class="text-center pb-8">
      <h2 class="text-sm font-extrabold py-1 px-4 m-0 bg-indigo-100 text-indigo-500 inline-block uppercase rounded-xl">About</h2>
      <h3 class="font-semibold text-xl sm:text-2xl mt-4 text-gray-900">Find Out More <span class="text-indigo-900">About Us</span></h3>
      <p class="mt-4 mr-auto mb-0 ml-auto w-full lg:w-1/2 text-lg sm:text-xl text-gray-500">Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
    </div>
    <div class="space-y-10 lg:space-y-0 grid grid-cols-1 lg:grid-cols-2 lg:gap-x-8">
      <div class="" data-aos="fade-right" data-aos-delay="100">
        <img src="<?php echo G5_THEME_IMG_URL ?>/about.jpg" class="w-full" alt="">
      </div>
      <div class="content pt-4 lg:pt-0 flex flex-col justify-center" data-aos="fade-up" data-aos-delay="100">
        <h3 class="text-lg leading-6 font-medium text-gray-900">Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
        <p class="text-base text-gray-500">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
        <ul>
          <li class="flex items-start mb-8 first: mt-8">
            <i class="bi bi-shop bg-transparent shadow text-3xl p-6 mr-4 text-indigo-500 rounded-full"></i>
            <div>
              <h5 class="text-lg leading-6 font-medium text-gray-900">Ullamco laboris nisi ut aliquip consequat</h5>
              <p class="text-base text-gray-500">Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
            </div>
          </li>
          <li class="flex items-start mb-8">
            <i class="bi bi-images bg-transparent shadow text-3xl p-6 mr-4 text-indigo-500 rounded-full"></i>
            <div>
              <h5 class="text-lg text-gray-900 font-medium">Magnam soluta odio exercitationem reprehenderi</h5>
              <p class="text-base text-gray-500">Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
            </div>
          </li>
        </ul>
        <p class="last: mb-0 text-base text-gray-500">
          Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum
        </p>
      </div>
    </div>
  </div>
</section>

<section id="new-idea">
  <div class="flex bg-white new-idea">
    <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
      <div data-aos="fade-right" data-aos-delay="100">
        <h2 class=" text-3xl font-semibold text-gray-900 md:text-4xl">Build Your New <span class="text-indigo-600">Idea</span></h2>
        <div class="mt-2 text-sm text-gray-500 md:text-base" style="text-align:left;">
          <? echo latest("theme/basic","notice", 3, 50); ?>
        </div>
        <div class="flex justify-center lg:justify-start mt-6">
          <a class="px-4 py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800" href="#">Get Started</a>
          <a class="mx-4 px-4 py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400" href="#">Learn More</a>
        </div>
      </div>
    </div>
    <div class="hidden lg:block lg:w-1/2" data-aos="fade-up" data-aos-delay="100" style=" clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
      <div class="h-full object-cover" style="background-image: url(https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80)">
        <div class="h-full bg-black opacity-25"></div>
      </div>
    </div>
  </div>
</section>

<section id="testimonials" class="testimonials py-20 relative">
  <div class="container mx-auto px-4 sm:px-0" data-aos="zoom-in">
    <div class="testimonials-slider swiper-container w-full h-80 sm:h-64 md:h-60" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">
        <div class="swiper-slide text-center text-base">
          <div class="testimonial-item text-center text-white">
            <? echo latest("theme/basic","qa", 1, 50); ?>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide text-center text-base">
          <div class="testimonial-item text-center text-white">
            <? echo latest("theme/basic","free", 1, 50); ?>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item text-center text-white">
          <? echo latest("theme/basic","notice", 1, 50); ?>
          </div>
        </div><!-- End testimonial item -->
      </div>
      <div class="swiper-pagination mt-6"></div>
    </div>
  </div>
</section>

<?php
include_once(G5_THEME_PATH . '/tail.php');
