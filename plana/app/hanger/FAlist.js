$("#content").scrollTop(0); 
$(document).ready(function(){
$(".FAteam").click(function(){
  $.ajax({
    type:'GET',
    url:'app/index.php',
    data:'category=hanger'+'&value='+$(this).attr("id"),
    success: function(data){
      $("#content").html(data);
    }
  });
});
$(".item").click(function(){
  $.ajax({
    type:'GET',
    url:'app/index.php',
    data:'category=detail'+'&value='+$(this).attr("id"),
    success: function(data){
      $("#mainFAlistContainar").html(data);
    }
  });
});
$('.no_image').error(function() {
       $(this).attr({
           src: 'img/NoData.png',
           alt: 'no image'
       });
   });
   $('.no_emblem').error(function() {
          $(this).attr({
              src: 'img/zodiac.png',
              alt: 'no emblem'
          });
      });
});
