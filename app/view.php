<?php
function CretatePage($category,$value,$templateFilePath){
  require("../Chippai.php");
  require("model.php");
  $memberLists = ShowTeamMembers($value);
  $Chippai = new Chippai();
  $Chippai -> memberLists = $memberLists;
  $decodefilepath= $Chippai -> Chippai_decode($templateFilePath);
  $Chippai -> show($decodefilepath);
}
 ?>
