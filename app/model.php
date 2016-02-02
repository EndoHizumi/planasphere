<?php

function ShowTeamMembers($teamname){
  return RunQuery("SELECT * FROM members WHERE Team=:team",":team",$teamname);
}

function RunQueryLite($query){
  require("../Common.php");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    $stmt = $pdo -> prepare($query);
    $stmt -> execute();
    $listmembers=$stmt -> fetchALL(PDO::FETCH_ASSOC);
    return $listmembers;
  } catch (PDOException $e) {
   //echo('データベース接続失敗。'.$e->getMessage());
   return;
  }

}

function RunQuery($query,$placeHolder,$param){
  require("../Common.php");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo -> prepare($query);
  $stmt -> bindParam($placeHolder,$param);
  try {
  $stmt -> execute();
} catch (PDOException $e) {
 //echo('データベース接続失敗。'.$e->getMessage());
 return;
}
  $listmembers=$stmt -> fetchALL(PDO::FETCH_ASSOC);
  return $listmembers;
}

?>
