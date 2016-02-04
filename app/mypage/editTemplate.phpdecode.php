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
    <?php for($i=0;$i<=4;$i++) { ?>
      <img id="posing<?php echo$i?>" src="<?php [0][position.$i] ?>" />
    <?php } ?>
  </div>
  <div id="description">
    <?php include_once($stringURL) ?>
  </div>
</body>
</html>
