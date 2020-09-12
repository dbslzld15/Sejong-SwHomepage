<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$outlogin_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$outlogin_skin_url.'/font-awesome-4.7.0/css/font-awesome.min.css?ver='.G5_CSS_VER.'">',0);
?>

<!-- 로그인 후 아웃로그인 시작 { -->
<div class="outlogin_wrap">
  <div class="panel panel-default">
    <div class="panel-heading">
      <strong><i class="fa fa-user-o fa-fw"></i><?php echo $nick ?>님</strong>
      <?php if ($is_admin == 'super' || $is_auth) {  ?><a href="<?php echo G5_ADMIN_URL ?>"> [Admin] </a><?php }  ?>
    </div>
    <table class="table">
      <tr>
        <td>
          <a href="<?php echo G5_BBS_URL ?>/memo.php" target="_blank" id="ol_after_memo" class="win_memo">
            <span class="sound_only">안 읽은 </span><i class="fa fa-envelope-o fa-fw"></i>:
            <?php echo $memo_not_read ?></a>
        </td>
        <td>
          <a href="<?php echo G5_BBS_URL ?>/point.php" target="_blank" id="ol_after_pt" class="win_point">
            <i class="fa fa-product-hunt fa-fw"></i>: <?php echo $point ?>p</a>
        </td>
        <td>
          <a href="<?php echo G5_BBS_URL ?>/scrap.php" target="_blank" id="ol_after_scrap" class="win_scrap"><i class="fa fa-share fa-fw"></i>스크랩</a>
        </td>
      </tr>
    </table>
  </div>

  <div class="login_btn_wrap2">
    <div class="btn-group btn-group-justified">
      <div class='btn-group'>
        <a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=register_form.php" id="ol_after_info" class="btn btn-primary">정보수정</a>
      </div>
      <div class='btn-group'>
        <a href="<?php echo G5_BBS_URL ?>/logout.php" id="ol_after_logout" class="btn btn-default"><i class="fa fa-power-off fa-fw"></i> 로그아웃</a>
      </div>
    </div>
  </div>

</div>

<script>
// 탈퇴의 경우 아래 코드를 연동하시면 됩니다.
function member_leave()
{
    if (confirm("정말 회원에서 탈퇴 하시겠습니까?"))
        location.href = "<?php echo G5_BBS_URL ?>/member_confirm.php?url=member_leave.php";
}
</script>
<!-- } 로그인 후 아웃로그인 끝 -->
