<!DOCTYPE html>
<html>
  <head>
    <title>マイページ</title>
    <link rel="stylesheet" href= "mypage.css" type="text/css">
    <link rel="stylesheet" href= "edit.css" type="text/css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src= "app/mypage/mypage.js"></script>
  </head>
<body>
  <div id="mypagecontainar">
    <div id="FAlist">
      <div id="userBox">
        <img id="icon" src ="{:: $_SESSION['profileImage'] :}" />
        <span>機体情報登録画面</span>
      </div>
      <ul>
        {: foreach($memberLists as $number) %then :}
        <li class="ModelNumber" modelNumber="{:: $number['ModelNumber'] :}">
          {:: $number['ModelNumber'] :}
        </li>
        {: %end :}
      </ul>
    </div>
    <div id="editView">

    </div>
  </div>
</body>
</html>
