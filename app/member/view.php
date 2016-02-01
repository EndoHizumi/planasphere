<?php
function CretatePage($category,$value){
  require("../../Chippai.php");
  require("model.php");
  $memberLists = ShowTeamMembers($value);
  $Chippai = new Chippai();
  $Chippai -> memberLists = $memberLists;
  $Chippai -> show("listTempletehtml.php");
}
 ?>
