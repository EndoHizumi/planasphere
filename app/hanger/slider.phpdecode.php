<html>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="app/hanger/slider.js"></script>

</head>
<body>
  <div id="detail_title">
    <img id="back" src="/plana/img/right.png" />
    <span id="FAinfo"><?php echo $memberLists[0]['ModelNumber'] ?> <?php echo $memberLists[0]['FAname'] ?></span>

    <span id="username" class="userinfo" >開発者:<?php echo $memberLists[0]['Name'] ?></span>
  </div>
  <div class="slider">
    <div id="viewArea">
      <img id="view" src="<?php echo '/plana/'.$memberLists[0]['position1'] ?>"/>
    </div>
    <div id="thumbnail">
      <img class=thumbnails src="<?php echo '/plana/'.$memberLists[0]['position1'] ?>" />
      <img class=thumbnails src="<?php echo '/plana/'.$memberLists[0]['position2'] ?>" />
      <img class=thumbnails src="<?php echo '/plana/'.$memberLists[0]['position3'] ?>" />
      <img class=thumbnails src="<?php echo '/plana/'.$memberLists[0]['position4'] ?>" />
      <img class=thumbnails src="<?php echo '/plana/'.$memberLists[0]['position5'] ?>" />
    </div>
  </div>
  <div id="description">
    <?php include_once(dirname(__file__)."/../../".$memberLists[0]['description']) ?>
  </div>
</body>
</html>
