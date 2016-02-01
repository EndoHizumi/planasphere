<?php
//Controller
 if($_SERVER["REQUEST_METHOD"]=='GET'){
    $category = $_GET["category"];
    $value = $_GET["value"];
    if(empty($category))$category="team";
    if(empty($value))$value="Alpha";
    switch ($category) {
     case 'team':
       require("view.php");
       CretatePage($category,$value);
     break;
     case 'page':

     break;
     default:

       return;
     break;
    }
 }else {
   # code...
 }


?>
