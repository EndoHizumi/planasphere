<?php
try {
$pdo = new PDO('mysql:host=127.0.0.1;dbname=planasphere;charset=utf8','root','php1850',
array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
 echo('データベース接続失敗。'.$e->getMessage());
 return;
}

function ShowTeamMembers($teamname){
  return RunQuery("SELECT * FROM members WHERE Team=:team",":team",$teamname);
}

function RunQueryLite($query){
  global $pdo;
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    $stmt = $pdo -> prepare($query);
    $stmt -> execute();
    $listmembers=$stmt -> fetchALL(PDO::FETCH_ASSOC);
    return $listmembers;
  } catch (PDOException $e) {
    $exceptionArray = ["Error"=>"PDOException","ErrorMsg"=>$e->getMessage()]
   return $exceptionArray;
  }

}

function RunQuery($query,$placeHolder,$param){
  global $pdo;
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo -> prepare($query);
  $stmt -> bindParam($placeHolder,$param);
  try {
  $stmt -> execute();
} catch (PDOException $e) {
  $exceptionArray = ["Error"=>"PDOException","ErrorMsg"=>$e->getMessage()]
 return $exceptionArray;
}
  $listmembers=$stmt -> fetchALL(PDO::FETCH_ASSOC);
  return $listmembers;
}

?>
