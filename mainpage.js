$(document).ready(function(){
var ua = navigator.userAgent;
		$("#btn_app01").click(function(){
			window.location.reload();
		  });
			$("#btn_app02").click(function(){	$("#content").load("app/index.php?category=hanger&value=Alpha",function(){//作品一覧ページのリンクをクリックまたはタップしたときの挙動
						if ((ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) || ua.indexOf('iPhone') > 0 || ua.indexOf('Blackberry') > 0 || ua.indexOf('iPad') > 0){
							$("#containar").animate({
								height:"90%"
							});
						}else{
							$("#containar").animate({
								height:"97%"
							});
						}

					});
			});
		$("#btn_app03").click(function(){	$("#content").load("app/index.php?category=team&value=Alpha",function(){//参加メンバー一覧のページのリンクをクリックまたはタップしたときの挙動
					if ((ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) || ua.indexOf('iPhone') > 0 || ua.indexOf('Blackberry') > 0 || ua.indexOf('iPad') > 0){
						$("#containar").animate({
							height:"90%"
						});
					}else{
						$("#containar").animate({
							height:"97%"
						});
					}

				});
		});
		$("#uList02").click(function(){	$("#content").load("app/index.php?category=mypage",function(){//作品投稿ページのリンクをクリックまたはタップしたときの挙動
					if ((ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) || ua.indexOf('iPhone') > 0 || ua.indexOf('Blackberry') > 0 || ua.indexOf('iPad') > 0){
						$("#containar").animate({
							height:"90%"
						});
					}else{
						$("#containar").animate({
							height:"97%"
						});
					}

				});
		});
		$("#btn_app04").click(function(){	$("#content").load("app/reglations/regulations.php",function(){//ルールのリンクをクリックまたはタップしたときの挙動
					if ((ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) || ua.indexOf('iPhone') > 0 || ua.indexOf('Blackberry') > 0 || ua.indexOf('iPad') > 0){
						$("#containar").animate({
							height:"90%"
						});
					}else{
						$("#containar").animate({
							height:"97%"
						});
					}

				});
		});
			$("#btn_app05").click(function(){//プラナスフィアの公式Twiiterへ新しいタブで開く
					window.open("http://twitter.com/planisphere00");
		  });

			$("#uList04").click(function(){
					location.replace("login/login.php");
			});
			$("#uList05").click(function(){
					location.replace("login/logout.php");
			});

			$("#uList03").click(function(){//アップデートログを見るのボタンを押したときの挙動
				$("#wel_content").css("display","none");
				$("#wel_content").animate({left:"-450px"},500);
						$("#welcome").animate({
							width:"100%"
						},500,function(){
									$.ajax({
										url:"app/home/history.html",
											success: function(data) {
												$("#welcome").append(data);
											}
									});
						});
			});

		$("#user").hover(
			function () {//マウスポインタが乗るまたはタップされたとき
				$("#user ul").show();
				$("#user").stop(true,true).animate({
					height:"120px"
				},500);
			},
			function () {//マウスまたは指が離れたとき
				$("#user").animate({
					height:"40px"
				},500,function(){
					$("#user ul").hide();
				});

			}
		);
});
	function loadPage(url){
			$("#content").load(url);
		};

	function clock(mode){
		if (mode=="mobile"){//スマートフォンの場合はTrue
			var now = new Date();

			var hour = now.getHours(); // 時
			var min = now.getMinutes(); // 分
			var sec = now.getSeconds(); // 秒

			// 数値が1桁の場合、頭に0を付けて2桁で表示する指定
			if(hour < 10) { hour = "0" + hour; }
			if(min < 10) { min = "0" + min; }

			var watch1 = hour + ':' + min; // パターン1
			$("#clock").text(watch1);
			setTimeout("clock('mobile')", 1000);

		}else{
			var now = new Date();

			var year = now.getFullYear();
			var month = now.getMonth()+1;
			var date =  now.getDate();
			var hour = now.getHours(); // 時
			var min = now.getMinutes(); // 分
			var sec = now.getSeconds(); // 秒

			// 数値が1桁の場合、頭に0を付けて2桁で表示する指定
			if(hour < 10) { hour = "0" + hour; }
			if(min < 10) { min = "0" + min; }

			var watch1 = hour + ':' + min;
			var watch2 = year + '年' + month +'月'+ date +'日';
			$("#time").text(watch1);
			$("#date").text(watch2);
			setTimeout("clock()", 1000);
		}

		}
