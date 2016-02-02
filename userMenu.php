<?php
require("ServerConfigManeger.php");
$login =  $_COOKIE["logined"];
$userInfo = [["userName"=>"Guest","profileImage"=>"icons/guest.png"]];
if($login == false){
  $clientAdress= $_SERVER["REMOTE_ADDR"];
  $RegistrationAdress= GetIPAdress($clientAdress);//渡されたIPアドレスをもとにDBへ問い合わせるメソッド
  if(isset($RegistrationAdress)){
    $userInfo= GetUserName($_COOKIE["PHPSESSID"]); //渡されたセッションIDをもとにDBへ問い合わせるメソッド(戻り値：ユーザー名とアイコンのURL)
  }
}
 ?>
 <div  id="user" >
 <img class="user_content" id="user_icon" src=<?php echo $userInfo[0]['profileImage'] ?>>
 <span class="user_content" id="user_name"><?php echo mb_strimwidth($userInfo[0]['userName'] ,0,10 )?></span>
 <ul>
   <li id="uList02" class="login_later">マイページ</li>
   <li id="uList04" >ログイン</li>
   <li id="uList05" class="login_later">ログアウト</li>
 </ul>
 </div>
