<?php
require("ServerConfigManeger.php");
$login =  $_SESSION["login"];
$userInfo = ["Guest","icons/guest.png"];
if($login == false){
  $clientAdress= $_SERVER["REMOTE_ADDR"];
  $RegistrationAdress= GetIPAdress($clientAdress);//渡されたIPアドレスをもとにDBへ問い合わせるメソッド
  if(isset($RegistrationAdress)){
    $userInfo= GetUserName($_cookie["phpsessionid"]); //渡されたセッションIDをもとにDBへ問い合わせるメソッド(戻り値：ユーザー名とアイコンのURL)
    $_SESSION["login"]==true;
  }
}
 ?>
 <div  id="user" >
 <img class="user_content" id="user_icon" src=<?php echo $userInfo[1] ?>>
 <span class="user_content" id="user_name"><?php echo $userInfo[0] ?></span>
 <?php require("menu.html"); ?>
 </div>
