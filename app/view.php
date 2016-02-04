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

function CretatePage2($category,$value,$templateFilePath){
  require("../Chippai.php");
  require("model.php");
  $memberLists = ShowModelNumber($value);
  $Chippai = new Chippai();
  $Chippai -> numberlist = $memberLists;
  $decodefilepath= $Chippai -> Chippai_decode($templateFilePath);
  $Chippai -> show($decodefilepath);
}

function CretatePage3($category,$value,$templateFilePath){
  require("../Chippai.php");
  require("model.php");
  $memberLists = ShowFAInfo($value);
  $Chippai = new Chippai();
  $Chippai -> FAInfolist = $memberLists;
  $decodefilepath= $Chippai -> Chippai_decode($templateFilePath);
  $Chippai -> show($decodefilepath);
}

function CretatePage4($category,$value,$templateFilePath){
  require("../Chippai.php");
  require("model.php");
  $memberLists = ShowFAname($value);
  $Chippai = new Chippai();
  $Chippai -> FAname = $memberLists[0]['FAname'];
  $Chippai -> ModelNumber = $value;
  $decodefilepath= $Chippai -> Chippai_decode($templateFilePath);
  $Chippai -> show($decodefilepath);
}
 ?>
