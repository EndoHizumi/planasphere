<?php
error_reporting(0);
session_start();
//Controller
 if($_SERVER["REQUEST_METHOD"]=='GET'){
    $category = empty($_GET["category"])?"team":$_GET["category"];
    $value = empty($_GET["value"])?"Alpha":$_GET["value"];
    if($category=="mypage")$value=$_SESSION["TwitterID"];

    $functions = [
      "team"=>["member/listTempletehtml.php","ShowTeamMembers"],
      "edit"=>["mypage/edit.php","ShowFAInfo"],
      "hanger"=>["hanger/FAlistTempletehtml.php","ShowFAlist"],
      "detail"=>["hanger/slider.php","ShowFAInfo"],
      "mypage"=> ["mypage/mypageTemplate.php","ShowModelNumber"]
    ];

 require("view.php");
 call_user_func("CretatePage" , $category,$value,$functions[$category][0],$functions[$category][1]);

 }else if($_SERVER["REQUEST_METHOD"]=='POST'){
   $category = empty($_POST["category"])?null:$_POST["category"];
    switch ($_POST['category']) {
       case 'submit':
          require("model.php");
          $eschtml = escapehtml($_POST['description']);
          $converthtml = nl2br($eschtml);

          $placeHolder=[":modelnumber",":posing1",":posing2",":posing3",":posing4",":posing5",":description",":posing01",":posing02",":posing03",":posing04",":posing05",":description2"];
          $parm=[$_POST['modelnumber'],$_POST['posing1'],$_POST['posing2'],$_POST['posing3'],$_POST['posing4'],$_POST['posing5'],"datas/".$_POST['modelnumber']."/description.html",$_POST['posing1'],$_POST['posing2'],$_POST['posing3'],$_POST['posing4'],$_POST['posing5'],"datas/".$_POST['modelnumber']."/description.html"];

        if(savehtml("../datas/".$_POST["modelnumber"]."/description.html",$converthtml)){//受信した文章をファイルに保存
          RunQuerys("INSERT INTO `garage`(`ModelNumber`, `position0`, `position1`, `position2`, `position3`, `position4`, `description`) VALUES (:modelnumber,:posing1,:posing2,:posing3,:posing4,:posing5,:description) ON DUPLICATE KEY UPDATE `position0`=:posing01,`position1`=:posing02,`position2`=:posing03,`position3`=:posing04,`position4`=:posing05,`description`=:description2",$placeHolder,$parm);
         }else {
           header('HTTP/1.1 500 Failed Upload');
         }
       break;
     }
 }
?>
