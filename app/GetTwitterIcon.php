<?php
if(isset($_GET["name"])){
  $query_id=$_GET["name"];
  $query_size=$_GET["category"];
  echo GetUsericon($query_id,$query_size);
}

function GetUsericon($ID,$size){
  if(isset($ID)!=true)return;
  if(isset($size)!=true)$size="normal";
  $SourceURL = "http://furyu.nazo.cc/twicon/$ID/$size";
return $SourceURL;
}
