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

  require_once("../app/model.php");
  $result= RunQueryLite("INSERT INTO users (userID,userName,TwitterID,sessionID,ipadress) VALUES($userID,'$userName','$TwitterID','$sessionID','$ipadress')");
  $Chippai = new Chippai();
  $Chippai -> icon = $user -> profile_image_url;
  $Chippai -> Name = $user -> name;
  $Chippai -> mode = $mode;
  $decodefilepath= $Chippai -> Chippai_decode("welcome.php");
  $Chippai -> show($decodefilepath);

  $result = setcookie('logined',true,time()+3600*24*7);
  if($result===true){
    echo("<script>location.replace('/plana/main.php');</script>");
  }

 ?>
