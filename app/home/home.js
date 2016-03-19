$(document).ready(function(){;
	$("#welcome").fadeIn("slow");

	$("#btn_cross").click(function(){
		$("#history").hide();
		$("#welcome").animate({
			width:"31%",opacity:"0"
		},500,function(){
				$("welcome").hide();
				});
	});


	$("#btn_history").click(function(){
		$("#wel_content").css("display","none");
		$("#wel_content").animate({left:"-450px"},500);
				$("#welcome").animate({
					width:"95%"
				},500,function(){
							$.ajax({
								url:"app/home/history.html",
								success: function(data) {
								$("#welcome").append(data);
								}
							});
				});
	});
});
