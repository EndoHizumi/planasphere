<?php

function ShowTeamMembers($teamname){
  return RunQuery("SELECT * FROM members WHERE Team=:team",":team",$teamname);
}

function RunQuery($query,$placeHolder,$param){
  require("../Common.php");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo -> prepare($query);
  $stmt -> bindParam($placeHolder,$param);
  $stmt -> execute();
  $listmembers=$stmt -> fetchALL(PDO::FETCH_ASSOC);
  return $listmembers;
}

?>
