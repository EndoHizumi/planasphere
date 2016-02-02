<?php
require("ServerConfigManeger.php");
$userInfoDefault = [["userName"=>"Guest","profileImage"=>"icons/guest.png"]];
  $clientAdress= $_SERVER["REMOTE_ADDR"];
  $RegistrationAdress= GetIPAdress($clientAdress);//渡されたIPアドレスが登録されいるかDBへ問い合わせるメソッド
  if(isset($RegistrationAdress)){
    $userInfo= GetUserName($_COOKIE["PHPSESSID"]); //渡されたセッションIDをもとにユーザー情報をDBへ問い合わせるメソッド(戻り値：ユーザー名とアイコンのURL)
    if(isset($userInfo)==false){
      $userInfo=$userInfoDefault;
    }
    var_dump($userInfo);
    $logined = true;
  }
 ?>
 <div  id="user" >
 <img class="user_content" id="user_icon" src=<?php echo $userInfo[0]['profileImage'] ?>>
 <span class="user_content" id="user_name"><?php echo mb_strimwidth($userInfo[0]['userName'] ,0,10 )?></span>
 <?php
 if($logined===true){
   require_once("login.html");
 }else{
   require_once("logout.html");
 }
 ?>

 </div>
