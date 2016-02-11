$(document).ready(function(){
  $(".thumbnails").click(function(){
    if($(this).attr("src")!="/plana/img/camera.png"){
      $("#view").attr("src",($(this).attr("src")));
    }
  });
  $("#back").click(function(){
    $.ajax({
      type:'GET',
      url:'app/index.php',
      data:'category=hanger&value='+$("#teams").val(),
      success: function(data){
        $("#mainContainar").html(data);
      }
    });
  });
});
