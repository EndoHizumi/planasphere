<?php
require("app/model.php");
$userInfoDefault = [["userName"=>"Guest","profileImage"=>"icons/guest.png"]];
  $clientAdress= $_SERVER["REMOTE_ADDR"];
  $logined =  $_SESSION['logined'];

  $RegistrationAdress= GetIPAdress($clientAdress);//渡されたIPアドレスが登録されいるかDBへ問い合わせるメソッド
  if(isset($RegistrationAdress)){
    $userInfo= GetUserName($_COOKIE["PHPSESSID"]); //渡されたセッションIDをもとにユーザー情報をDBへ問い合わせるメソッド(戻り値：ユーザー名とアイコンのURL)
    if(empty($userInfo)){
      $userInfo=$userInfoDefault;
    }else{
      $_SESSION['profileImage']=$userInfo[0]['profileImage'];
      $_SESSION['userName']=$userInfo[0]['userName'];
      if(empty($_SESSION['TwitterID'])){
        $in_twitterID = GetTwitterID($_COOKIE["PHPSESSID"]);
        $_SESSION['TwitterID']=$in_twitterID[0]['TwitterID'];
      }
      $logined = true;
      $_SESSION['logined'] = $logined;
    }
  }else{
    $userInfo=$userInfoDefault;
  }

 ?>
 <div  id="user" >
 <img class="user_content" id="user_icon" src=<?php echo $userInfo[0]['profileImage'] ?>>
 <span class="user_content" id="user_name"><?php echo mb_strimwidth($userInfo[0]['userName'],0,15 )?></span>
 <?php
 if($logined===true){
   require_once("login.html");
 }else{
   require_once("logout.html");
 }
 ?>

 </div>
