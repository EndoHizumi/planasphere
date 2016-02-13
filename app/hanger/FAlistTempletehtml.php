<!DOCTYPE html>
<head>
  <title>機体一覧</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src= "app/hanger/FAlist.js"></script>
</head>
<body>
<div id ="mainFAlistContainar">
  <div id="toplogo">
    <img id="pic_logo" src=<?php echo "img/hanger.png"; ?> >
  </div>
  <ul id="listContainar">
    <li>α部隊</li>
    <li>β部隊</li>
    <li>γ部隊</li>
    <li>アザーズ</li>
    <li>ロスト</li>
  </ul>
  <div id="listContent">
    <?php foreach($memberLists as $memberinfo){?>
      <div id ="<?php echo $memberinfo["ModelNumber"]; ?>" class="item">
        <img class="thumbnail" src="{:: $memberinfo['position0']:}">
        <div class="FAname">{:: $memberinfo['ModelNumber'] :} <br /> {:: $memberinfo['FAname'] :} </div>
      </div>
      <?php } ?>
  </div>
</div>
</body>
</html>
