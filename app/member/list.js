$(document).ready(function(){
$(".team").click(function(){
  $.ajax({
    type:'GET',
    url:'app/member/index.php',
    data:'category='+$(this).attr("class")+'&value='+$(this).attr("id"),
    success: function(data){
      $("#content").html(data);
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
})
