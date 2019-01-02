	var count = 0;
	var limit = 11;
	var ua = navigator.userAgent;

	window.onload = function Show_emblems(){

			$("#progress").bind("animationend webkitAnimationEnd oAnimationEnd",function(){
				$(".bootlogo").fadeOut("slow",function(){
					if ((ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) || ua.indexOf('iPhone') > 0 || ua.indexOf('Blackberry') > 0 || ua.indexOf('iPad') > 0){
						location.replace("main_mobile.php");
					}else{
						location.replace("main.php");
					}
				});

			});
			var Element  = document.getElementById("logo");
			var width = document.defaultView.getComputedStyle(Element, null).width;
			var move = function() {
        			if(count <= limit) {
            				setTimeout(move, 580);
        			}

     			 var source = ["Capricornusa.png","aquariusa.png","piscesa.png","Ariesa.png","taurusa.png","geminia.png","cancera.png","leoa.png","virgoa.png","ribraa.png","scorpioa.png","sagittariusa.png","porarisa.png"];
    	 		var element = document.createElement('img');
    	 		element.className="emblems";
   			 element.id = "icons1";
    			 element.src = "img/"+source[count];

    	  		var objBody = document.getElementById("icons");
    	  		objBody.appendChild(element);

			count+=1;
		};
		move();
	};
