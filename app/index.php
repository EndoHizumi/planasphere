<?php
session_start();
//Controller
 if($_SERVER["REQUEST_METHOD"]=='GET'){
    $category = isset($_GET["category"])?$_GET["category"]:"team";
    $value = isset($_GET["value"])?$_GET["value"]:"Alpha";
    switch ($category) {
     case 'team':
       require("view.php");
       CretatePage($category,$value,"member/listTempletehtml.php","ShowTeamMembers");
     break;
     case 'logout':
       header('location: /plana/login/logout.php');
     break;
     case 'mypage':
       require("view.php");
       CretatePage($category,$_SESSION['TwitterID'],"mypage/mypageTemplate.php","ShowModelNumber");
     break;
     case 'edit':
       require("view.php");
       CretatePage($category,$value,"mypage/edit.php","ShowFAInfo");
     break;
     case 'hanger':
       require("view.php");
       CretatePage($category,$value,"hanger/FAlistTempletehtml.php","ShowFAlist");
     break;
     case 'detail':
       require("view.php");
       CretatePage($category,$value,"hanger/slider.php","ShowFAInfo");
     break;
     default:
       return;
     break;
    }
 }else if($_SERVER["REQUEST_METHOD"]=='POST'){

    switch ($_POST['category']) {
       case 'submit':
         require("model.php");
        $eschtml = escapehtml($_POST['description']);
        $converthtml = nl2br($eschtml);
        $pl=[":modelnumber",":posing1",":posing2",":posing3",":posing4",":posing5",":description",":posing01",":posing02",":posing03",":posing04",":posing05",":description2"];
        $prm=[$_POST['modelnumber'],$_POST['posing1'],$_POST['posing2'],$_POST['posing3'],$_POST['posing4'],$_POST['posing5'],"datas/".$_POST['modelnumber']."/description.html",$_POST['posing1'],$_POST['posing2'],$_POST['posing3'],$_POST['posing4'],$_POST['posing5'],"datas/".$_POST['modelnumber']."/description.html"];
        if(savehtml("../datas/".$_POST["modelnumber"]."/description.html",$converthtml)){//受信した文章をファイルに保存
          $result=RunQuerys("INSERT INTO `garage`(`ModelNumber`, `position0`, `position1`, `position2`, `position3`, `position4`, `description`) VALUES (:modelnumber,:posing1,:posing2,:posing3,:posing4,:posing5,:description) ON DUPLICATE KEY UPDATE `position0`=:posing01,`position1`=:posing02,`position2`=:posing03,`position3`=:posing04,`position4`=:posing05,`description`=:description2",$pl,$prm);
         }else {
           header('HTTP/1.1 500 Failed Upload');
         }
       break;
     }
 }


?>
