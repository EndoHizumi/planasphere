<?php

function ShowTeamMembers($teamname){
  require("../Common.php");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo -> prepare("SELECT * FROM members WHERE Team=:team");
  $stmt -> bindParam(":team",$teamname);
  $stmt -> execute();
  $listmembers=$stmt -> fetchALL(PDO::FETCH_ASSOC);
  return $listmembers;
}


?>
