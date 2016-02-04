$(document).ready(function(){
  $(".ModelNumber").click(function(){
    $.ajax({
      url: "/plana/app/index.php",
      type: "GET",
      data: "category=edit&value="+$(this).attr("modelnumber"),
      success: function(data){
        $("#editView").html(data);
      }
    });
  });
})
