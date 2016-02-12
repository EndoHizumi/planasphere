<?php
session_start();
$filename= mb_convert_encoding($_FILES['file']['tmp_name'],"utf-8");
$Directorypath = "datas/".$_POST["modelnumber"]."/";
$fileType= pathinfo($_FILES['file']['name']);

if($fileType['extension']=="png"||$fileType['extension']=="jpeg"||$fileType['extension']=="jpg"||$fileType['extension']=="gif"||$fileType['extension']=="html"||$fileType['extension']=="3gp"||$fileType['extension']=="mp4"){

  if (is_uploaded_file($filename)) {
    if(!file_exists($Directorypath)){
      try {
        mkdir($Directorypath,0777);
      } catch (Exception $e) {
        var_dump($e -> getMessage());
      }

    }
    if (move_uploaded_file($filename, $Directorypath . $_FILES['file']['name'])) {
      chmod($Directorypath . $_FILES['file']['name'], 0777);
      echo $Directorypath.$_FILES['file']['name'];
    } else {
      header('HTTP/1.1 500 Failed Upload');
    }
  } else {
      header('HTTP/1.1 500 No Select File');
  }
}else{
    header('HTTP/1.1 500 Invalid File Type');
}
?>
