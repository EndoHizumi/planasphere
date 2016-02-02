<?php
require("app/model.php");
function GetUserName($sessionID){
 return RunQuery("SELECT userName,profileImage FROM users WHERE sessionid=:sessionid",":sessionid",$sessionID);
}

function GetIPAdress($value){
 return RunQuery("SELECT ipadress from users WHERE ipadress= :ipadress",":ipadress",$value);
}
 ?>
