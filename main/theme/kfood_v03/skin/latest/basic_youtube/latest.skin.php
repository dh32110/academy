<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
// include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 540;
$thumb_height = 300;
//320 180
$imgwidth = 540; //표시할 이미지의 가로사이즈
$imgheight = 300; //표시할 이미지의 세로사이즈

/**
 * Get Video ID
 * 유투브 주소에서 Video ID를 추출합니다. http://blog.grotesq.com/post/426
 *
 * @access  public
 * @param   string
 * @return  string
 */
if ( ! function_exists( 'get_video_id' ) )
{
    function get_video_id( $str )
    {
        if( substr( $str, 0, 4 ) == 'http' )
        {
            if( strpos( $str, 'youtu.be' ) )
            {
                return array_pop( explode( '/', $str ) );
            }
            else if( strpos( $str, '/embed/' ) )
            {
                return array_pop( explode( '/', $str ) );
            }
            else if( strpos( $str, '/v/' ) )
            {
                return array_pop( explode( '/', $str ) );
            }
            else
            {
                $params = explode( '&', array_shift( explode( '#', array_pop( explode( '?', $str ) ) ) ) );
                foreach( $params as $data )
                {
                    $arr = explode( '=', $data );
                    if( $arr[ 0 ] == 'v' )
                    {
                        return $arr[ 1 ];
                    }
                }
            }
        }
        else
        {
            return $str;
        }
 
        return '';
    }
}
 
/**
 * Get Thumbnail URL
 * 썸네일 주소를 가져옵니다. 기본값은 default 입니다.
 *
 * @param $url_or_id
 * @param $type
 * @return string
 */
if ( ! function_exists( 'get_yt_thumb' ) )
{
    function get_yt_thumb( $url_or_id, $type )
    {
        switch( $type )
        {
            case '0' :
                return '//img.youtube.com/vi/'.get_video_id( $url_or_id ).'/0.jpg';
                break;
            case '1' :
                return '//img.youtube.com/vi/'.get_video_id( $url_or_id ).'/1.jpg';
                break;
            case '2' :
                return '//img.youtube.com/vi/'.get_video_id( $url_or_id ).'/2.jpg';
                break;
            case '3' :
                return '//img.youtube.com/vi/'.get_video_id( $url_or_id ).'/3.jpg';
                break;
            case 'hq' :
                return '//img.youtube.com/vi/'.get_video_id( $url_or_id ).'/hqdefault.jpg';
                break;
            case 'mq' :
                return '//img.youtube.com/vi/'.get_video_id( $url_or_id ).'/mqdefault.jpg';
                break;
            case 'sd' :
                return '//img.youtube.com/vi/'.get_video_id( $url_or_id ).'/sddefault.jpg';
                break;
            case 'maxres' :
                return '//img.youtube.com/vi/'.get_video_id( $url_or_id ).'/maxresdefault.jpg';
                break;
            default :
                return '//img.youtube.com/vi/'.get_video_id( $url_or_id ).'/default.jpg';
        }
    }
}
?>
<!-- <?php //echo $bo_subject; ?> 최신글 시작 { -->
<style type="text/css">
    
    @media only screen and (max-width: 320px) {
        .thumb img{width:98%;height:auto;}
    }
</style>
<div class="skinmall skinmall-default">

    <div class="skinmall-body">
    <!-- <ul class="row"> -->
    <?php
    for ($i=0; $i<count($list); $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    ?>
        <!-- <li class="col-xs-6 col-sm-3"> -->
            <div class="thumb">
            <a href="<?php echo $list[$i]['href'] ?>" class="lt_img"><?php
    // 동영상
    // 링크 : https://www.youtube.com/watch?v=Xc1KaePfc6Q
    $v = "";
    $daumpot_limit = "";
    $mov_link = "";
    $img_content = "";
    $mov_link = $list[$i]['wr_10'];
    $youtube_url = parse_url($mov_link);
    parse_str($youtube_url['query']);
    // 다음팟 http://tvpot.daum.net/v/vf1f9xx6oCXBCGGx8GJRC8t
    $daum_find = "daum";
    if(strpos($mov_link, $daum_find)){
        $daumpot_limit = parse_url($daumpot_url, PHP_URL_PATH);
        $daumpot_limit = str_replace("/v/", "", $daumpot_limit);
    }
    if($v){
        $img_content = '<img src="'.get_yt_thumb( 'http://youtu.be/'.$v, 'mq' ).'" alt="'.$list[$i]['subject'].'" width="'.$imgwidth.'" height="'.$imgheight.'" />';
        //default 기본이미지 maxresdefault 최대이미지  mqdefault 최적이미지 87줄 Case를 변경해야함
    } elseif($daumpot_limit) {
        // 다음팟은 아직 불완전 http://1sam.kr/xe_tips/52304
        $img_content = '<img src="http://i1.daumcdn.net/svc/image/U03/tvpot_thumb/'.$daumpot_limit.'/thumb.png" alt="'.$list[$i]['subject'].'" width="'.$imgwidth.'" height="'.$imgheight.'">';
    }
                        if(!$img_content) {
                            $img_content = '<span style="width:'.$imgwidth.'px;height:'.$imgheight.'px"><img src="'.$img.'" alt="'.$thumb['alt'].'" ></span>';
                        }
                        echo $img_content;

                     ?></a>
            <?php

 
            //echo "<center><a href=\"".$list[$i]['href']."\"> ";
            //if ($list[$i]['is_notice'])
                //echo "<strong>".$list[$i]['subject']."</strong>";
            //else
                //echo $list[$i]['subject'];



            //echo "</a></center>";

            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

             //echo $list[$i]['icon_reply']." ";
           // if ($list[$i]['icon_file']) echo " <i class=\"fa fa-download\" aria-hidden=\"true\"></i>" ;
            //if ($list[$i]['icon_link']) echo " <i class=\"fa fa-link\" aria-hidden=\"true\"></i>" ;

            //if ($list[$i]['comment_cnt'])  echo "
            //<span class=\"lt_cmt\">+ ".$list[$i]['wr_comment']."</span>";

            ?>
        </div>
       <!--  </li> -->
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <!-- <li>게시물이 없습니다.</li> -->
    <?php }  ?>
    <!-- </ul> -->
    </div>
</div>
<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->