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
  <div id="listContainar">
    <div id="Alpha" class="FAteam"><img id="pic_t_alpha" src= <?php echo "img/teamAlpha.png"; ?> alt="α部隊"></div>
    <div id="Beta" class="FAteam"><img id="pic_t_beta" src= <?php echo "img/teamBeta.png"; ?> alt="β部隊"></div>
    <div id="Gamma" class="FAteam"><img id="pic_t_gumma" src= <?php echo "img/teamGumma.png"; ?> alt="γ部隊"></div>
    <div id="Others" class="FAteam"><img id="pic_t_others" src= <?php echo "img/teamOthers.png"; ?> alt="アザーズ"></div>
    <div id="Lost" class="FAteam"><img id="pic_t_lost" src= <?php echo "img/teamLost.png"; ?> alt="ロスト"></div>
  </div>
  <div id="listContent">
    <?php foreach($memberLists as $memberinfo){?>
      <div id ="<?php echo $memberinfo["ModelNumber"]; ?>" class="item">
        <img class="thumbnail" src="<?php echo $memberinfo['position0']?>">
        <div class="FAname"><?php echo $memberinfo['ModelNumber'] ?> <br /> <?php echo mb_strimwidth($memberinfo['FAname'],0,18,"...","UTF-8"  ) ?> </div>
      </div>
      <?php } ?>
  </div>
</div>
</body>
</html>
