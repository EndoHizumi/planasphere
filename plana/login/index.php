<?php

  session_start();
  require_once 'setting.php';
  require_once 'twitteroauth/autoload.php';
  use Abraham\TwitterOAuth\TwitterOAuth;

  require("../Chippai.php");
  $access_token = $_SESSION['access_token'];
  $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
  $user = $connection->get("account/verify_credentials");
  $mode = empty($_GET['mode'])?"login":"logout";

if($mode=="login"){
  $userID= $user -> id;
  $userName = $user -> name;
  $TwitterID = $user -> screen_name;
  $sessionID = session_id();
  $ipadress = $_SERVER["REMOTE_ADDR"];
  $profileImage = $user -> profile_image_url;
  $_SESSION['TwitterID']=$TwitterID;
  require_once("../app/model.php");
  $result= RunQueryLite("INSERT INTO users (userID,userName,TwitterID,sessionID,ipadress,profileImage) VALUES($userID,'$userName','$TwitterID','$sessionID','$ipadress','$profileImage')");
}else {
  require("../app/model.php");
  $value=$_SESSION['TwitterID'];
  $_SESSION['logined']=false;
  unset($_SESSION['TwitterID']);
  RunQueryNR("delete from users where TwitterID=:name",":name",$value);
}
  $Chippai = new Chippai();
  $Chippai -> icon = $user -> profile_image_url;
  $Chippai -> Name = $user -> name;
  $Chippai -> mode = $mode;
  $decodefilepath= $Chippai -> Chippai_decode("welcome.php");
  $Chippai -> show($decodefilepath);

    echo("<script> setTimeout(forward,5000);
    function forward(){
      var ua = navigator.userAgent;
      $(\"#containar\").fadeOut(\"slow\",function(){
        if ((ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) || ua.indexOf('iPhone') > 0 || ua.indexOf('Blackberry') > 0 || ua.indexOf('iPad') > 0){
          location.replace(\"/plana/main_mobile.php\");
        }else{
          location.replace(\"/plana/main.php\");
        }
      });
    }
     </script>");

 ?>
