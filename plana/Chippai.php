<?php
class Chippai
{
    function show($tpl_file_path)
    {
        extract((array)$this);
        include($tpl_file_path);
    }

    function Chippai_decode($tpl_file_path)
    {
      $search =["{::","{:","%then","%end",":}"];
      $replace =["<?php echo","<?php","{","}","?>"];
      $decodeSource= file_get_contents($tpl_file_path);
      $decodeFilePath= $tpl_file_path."decode.php";
      $AfterDecodeString= str_replace($search,$replace,$decodeSource);
      $DecodeResult = file_put_contents($decodeFilePath,$AfterDecodeString);
      return $decodeFilePath;
    }
}
?>
