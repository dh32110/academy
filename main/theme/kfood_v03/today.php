<marquee style="width:320px;">
<span style="font-weight:900;">
<? echo date("Y-m-d"); ?>
</span>

<!--  년월일 시간 분 초 Y-m-d H:i:s월일 대문자표기는 영문 -->
<span style="margin:0 10px;color:#fc4ef4"><? 
$weekString = array( "토요일", "일요일", "월요일", "화요일", "수요일", "목요일", "금요일");
echo($weekString[date('w', strtotime($day))]);
?></span>

<? echo date("H시 i분"); ?>
<span style="color:orange"><? echo date("[l]"); ?> </span>
</marquee>