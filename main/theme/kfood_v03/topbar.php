<style>
  .afff:hover{
    color: red;
  }
</style>
<!-- default.css 스타일규정 afff -->
<section id="topbar" class="bg-indigo-500 text-white py-2 text-base" style="background:black;">
  <div class="container mx-auto flex justify-between px-2 lg:px-0">
    <div class="hidden lg:block">
      <i class="bi bi-envelope inline-flex items-center"><a href="mailto:dh32110@naver.com" style="text-decoration: none;"><span class="pl-1 afff">dh32110@naver.com</span></a></i>
      <i class="bi bi-phone inline-flex items-center ml-4">
        <a href="sms:010-5029-6162" style="text-decoration: none;">
        <span class="afff"> 010-5029-6162</span></a></i>
    </div>
    <!-- 태블릿 1023px -->
    <div class="mo1023">
    <i class="bi bi-envelope-fill"></i>
    </div>
    <!-- 태블릿 1023px //-->
    <div class="w-full lg:w-1/2 flex justify-end items-center">
      <?php if ($is_member) {  ?>
        <a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php" class="pl-4 afff">정보수정</a>
        <a href="<?php echo G5_BBS_URL ?>/logout.php" class="pl-4 afff">로그아웃</a>
        <?php if ($is_admin) {  ?>
          <a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>" class="pl-4 afff">관리자님</a>
        <?php }  ?>
      <?php } else {  ?>
        <a href="<?php echo G5_BBS_URL ?>/register.php" class="afff">회원가입</a>
        <a href="<?php echo G5_BBS_URL ?>/login.php" class="pl-4 afff">로그인</a>
      <?php }  ?>
    </div>
  </div>
</section>