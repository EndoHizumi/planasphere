<!DOCTYPE html>
<html>
  <head>
    <title>編集ページ</title>
    <link rel="stylesheet" href= "editpage.css" type="text/css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src= "app/mypage/editpage.js"></script>
  </head>
<body>

  <div id="pictureBox">
    {: for($i=0;$i<=4;$i++) %then :}
      <img id="posing{::$i:}" src="{: [0][position.$i] :}" />
    {: %end :}
  </div>
  <div id="description">
    {: include_once($stringURL) :}
  </div>
</body>
</html>
