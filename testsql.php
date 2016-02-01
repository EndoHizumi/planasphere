<?php

 require("Common.php");
 $teamname="遠藤ヒズミ";
 $table = "members";
 $team = "name";
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $query = "SELECT * FROM $table WHERE $team=:team";
 $stmt = $pdo -> prepare($query);
 $stmt -> bindParam(":team",$teamname);
 $stmt -> execute();
 $listmembers=$stmt -> fetchALL(PDO::FETCH_ASSOC);
 var_dump( $listmembers);
