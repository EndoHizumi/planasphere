<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href= "edit.css" type="text/css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src= "app/mypage/edit.js"></script>
</head>
<body>
	<div id="FAnameField">
		<span>{:: $memberLists[0]['ModelNumber'] :}  {:: $memberLists[0]['FAname']  :}</span>
	</div>
	<form action="/plana/upload.php" method="post" enctype="multipart/form-data" id="uploadForm">
	<div id="SelectImageField">
		<p>画像選択</p>
		{: for($i=0;$i<=4;$i++) %then :}
				<div id=uploadBox>
					<img class="imageview" id="posing{::$i:}" src="<?php echo isset($memberLists[0]['position'.$i])?$memberLists[0]['position'.$i]:img/camera.pn ?>" />
					<input id="posing{::$i:}" class="input" type="file" name="file" />
					<input id="mm" type="hidden" name="modelnumber" value="{::$memberLists[0]['ModelNumber'] :}" />
				</div>
		{: %end :}

		<p>JPG/PNG/GIF(GIFアニメは不可)形式のみで、一つの写真当たり2MBまでアップロードできます。</p>
	</div>
	<div id="description">
		<p>
			機体説明
		</p>
		<textarea id="desc">{: include_once(dirname(__file__)."/../../".$memberLists[0]['description']) :}</textarea>
	</div>
	<button id="Submit">投稿する</button>
</form>
</body>
</html>
