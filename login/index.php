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

  $userID= $user -> id;
  $userName = $user -> name;
  $TwitterID = $user -> screen_name;
  $sessionID = session_id();
  $ipadress = $_SERVER["REMOTE_ADDR"];
  $profileImage = $user -> profile_image_url;

  require_once("../app/model.php");
  $result= RunQueryLite("INSERT INTO users (userID,userName,TwitterID,sessionID,ipadress,profileImage) VALUES($userID,'$userName','$TwitterID','$sessionID','$ipadress','$profileImage')");
  $Chippai = new Chippai();
  $Chippai -> icon = $user -> profile_image_url;
  $Chippai -> Name = $user -> name;
  $Chippai -> mode = $mode;
  $decodefilepath= $Chippai -> Chippai_decode("welcome.php");
  $Chippai -> show($decodefilepath);
    echo("<script> setTimeout(forward,10000);
    function forward(){
      $(\".bootlogo\").fadeOut(\"slow\",function(){
        if ((ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) || ua.indexOf('iPhone') > 0 || ua.indexOf('Blackberry') > 0 || ua.indexOf('iPad') > 0){
          location.replace(\"/plana/mobile_main.php\");
        }else{
          location.replace(\"/plana/main.php\");
        }
    }
     </script>");

 ?>
