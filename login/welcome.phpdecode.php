<!DOCTYPE html>
<head>
  <link rel="stylesheet" href= "callbackTemplete.css" type="text/css">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
  <?php if($mode=="login") { ?>
  <div id="containar" class="login">
    <img id="Usericon" src="<?php echo $icon ?>">
    <div id="msg_welcome" class="message">ようこそ　<?php echo $Name ?></div>
    <img id="loaderImage" src="../img/spinner.gif">
    <div id="status" class="message">planOSにログインしています...</div>
  </div>
  <?php } else {  ?>
  <div id="containar" class="logout">
    <img id="loaderImage" src="../img/spinner.gif">
    <div id="status" class="message">ログアウトしています...</div>
  </div>
  <?php } ?>
  <script src="anim.js"></script>
</body>
</html>
