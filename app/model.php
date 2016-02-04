<?php
$pdo=null;
function connect(){
  try {
    global $pdo;
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=planasphere;charset=utf8','root','php1850',
    array(PDO::ATTR_EMULATE_PREPARES => false));
  } catch (PDOException $e) {
    echo('データベース接続失敗。'.$e->getMessage());
    return;
  }
}

function ShowTeamMembers($teamname){
  return RunQuery("SELECT * FROM plana_members WHERE Team=:team",":team",$teamname);
}

function ShowFAname($ModelNumber){
  return RunQuery("SELECT `FAname` FROM plana_members WHERE ModelNumber=:name",":name",$ModelNumber);
}

function ShowModelNumber($username){
  return RunQuery("SELECT `ModelNumber` FROM plana_members WHERE TwitterID=:name",":name","@".$username);
}

function ShowFAInfo($ModelNumber){
  return RunQuery("SELECT * FROM garage WHERE ModelNumber=:name",":name",$ModelNumber);
}

function escapehtml($htmlcode){
  return strip_tags($htmlcode ,"<br>");
}

function linefeedcode2br($str){
    return str_replace(PHP_EOL,"<br />".PHP_EOL,$str);
}

function savehtml($path,$data){
  return file_put_contents($path, $data);
}

function RunQuerys($query,$placeHolder,$param){
  $count1 = count($placeHolder);
  if($count1!=count($param)) return $exceptionArray=["Error"=>"Exception","ErrorMsg"=>"invalid paramerters."];
  global $pdo;
  connect();
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo -> prepare($query);
  for ($i=0;$i<=$count1-1;$i++) {
    $stmt -> bindParam($placeHolder[$i],$param[$i]);
  }
  try {
  $stmt -> execute();
  $listmembers=$stmt -> fetchALL(PDO::FETCH_ASSOC);
  return $listmembers;
} catch (PDOException $e) {
  $exceptionArray = ["Error"=>"PDOException","ErrorMsg"=>$e->getMessage()];
 return $exceptionArray;
}
      $stmt-> closeCursor();
  }


function RunQueryLite($query){
  global $pdo;
  connect();
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    $stmt = $pdo -> prepare($query);
    $stmt -> execute();
    $listmembers=$stmt -> fetchALL(PDO::FETCH_ASSOC);
    return $listmembers;
  } catch (PDOException $e) {
    $exceptionArray = ["Error"=>"PDOException","ErrorMsg"=>$e->getMessage()];
   return $exceptionArray;
  }

}

function RunQueryNR($query,$placeHolder,$param){
  global $pdo;
  connect();
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo -> prepare($query);
  $stmt -> bindParam($placeHolder,$param);
  try {
  $stmt -> execute();
} catch (PDOException $e) {
  $exceptionArray = ["Error"=>"PDOException","ErrorMsg"=>$e->getMessage()];
 return $exceptionArray;
}
      $stmt-> closeCursor();
  }

function RunQuery($query,$placeHolder,$param){
  global $pdo;
  connect();
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo -> prepare($query);
  $stmt -> bindParam($placeHolder,$param);
  try {
  $stmt -> execute();
} catch (PDOException $e) {
  $exceptionArray = ["Error"=>"PDOException","ErrorMsg"=>$e->getMessage()];
 return $exceptionArray;
}
  $listmembers=$stmt -> fetchALL(PDO::FETCH_ASSOC);
  $stmt -> closeCursor();
  return $listmembers;
}

?>
