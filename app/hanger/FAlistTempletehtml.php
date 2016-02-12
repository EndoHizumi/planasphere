<!DOCTYPE html>
<head>
  <title>機体一覧</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src= "app/hanger/FAlist.js"></script>
</head>
<body>
<div id ="mainContainar">
  <div id="toplogo">
    <img id="pic_logo" src=<?php echo "img/hanger.png"; ?> >
  </div>
  <div id="teamContainar">
    <div id="Alpha" class="team"><img id="pic_t_alpha" src= <?php echo "img/teamAlpha.png"; ?> alt="α部隊"></div>
    <div id="Beta" class="team"><img id="pic_t_beta" src= <?php echo "img/teamBeta.png"; ?> alt="β部隊"></div>
    <div id="Gamma" class="team"><img id="pic_t_gumma" src= <?php echo "img/teamGumma.png"; ?> alt="γ部隊"></div>
    <div id="Others" class="team"><img id="pic_t_others" src= <?php echo "img/teamOthers.png"; ?> alt="アザーズ"></div>
    <div id="Lost" class="team"><img id="pic_t_lost" src= <?php echo "img/teamLost.png"; ?> alt="ロスト"></div>
  </div>
  <div id="teamContent">
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
