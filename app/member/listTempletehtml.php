<!DOCTYPE html>
<head>
  <title>メンバーリスト</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src= "app/member/list.js"></script>
</head>
<body>
<div id ="mainContainar">
  <div id="toplogo">
    <img id="pic_logo" src=<?php echo "img/logo.png"; ?> >
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
      <div id ="<?php echo $memberinfo["ID"]; ?>" class="member">
        <img width="48px" height="48px" id="icon" class="no_image" src= <?php require_once("/GetTwitterIcon.php"); echo(GetUsericon($memberinfo["TwitterID"],"normal")); ?>>
        <span id="name" class="upper"><?php echo $memberinfo["Name"]; ?></span>
        <a id="twitterIDAncher" href="http://twitter.com/<?php echo $memberinfo["TwitterID"]; ?>">
          <span id="twitterid" class="under"><?php echo $memberinfo["TwitterID"]; ?></span>
        </a>
        <img width="25px" height="44px" id="emblem" class="no_emblem" src=<?php echo "img/"; echo $memberinfo["emblem"]; ?>>
        <span id="constel" ><?php echo $memberinfo["ConstellationJP"]; ?></span>
        <span id="ModelNumber" class="upper machine" ><?php echo $memberinfo["ModelNumber"]; ?></span>
        <span id="FAname" class="under machine" ><?php echo $memberinfo["FAname"]; ?></span>
      </div>
      <?php } ?>
  </div>
</div>
</body>
</html>
