$(document).ready(function(){
  $(".thumbnails").click(function(){
    $("#view").attr("src",($(this).attr("src")));
  });
  $("#back").click(function(){
    $.ajax({
      type:'GET',
      url:'app/index.php',
      data:'category=hanger&value=Alpha',
      success: function(data){
        $("#mainContainar").html(data);
      }
    });
  });
});
