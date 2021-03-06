$(document).ready(function(){
  $(".input").change(function(){
    var file= $(this).prop("files")[0];
    var targetimg= $(this).attr("id");
    console.log(targetimg);
    upload(file,targetimg);
  });

$('.imageview').error(function() {
       $(this).attr({
           src: 'img/camera.png',
           alt: 'no image'
       });
   });

  $("#uploadForm").submit(function(){
    var indata ={
      category: "submit",
      posing1: $("#posing0").attr("src"),
      posing2: $("#posing1").attr("src"),
      posing3: $("#posing2").attr("src"),
      posing4: $("#posing3").attr("src"),
      posing5: $("#posing4").attr("src"),
      modelnumber:$("#mm").val(),
      description: $("#desc").val()
    };
    console.log($("#posing0").val());
    $.ajax({
      url: "/plana/app/index.php",
      type: "POST",
      data: indata,
      datatype:"json",
      success: function(data){
        console.log(data);
        $('#editView').html("<div id='complete'>機体登録が完了しました</div>");
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
        alert( errorThrown );
      }
    });
    return false;
  });

  function upload(file,targetimg) {
            $form = $('#uploadForm');
            fd = new FormData();
            fd.append( "file", file );
            fd.append("modelnumber",$("#mm").val());
            $.ajax(
                '/plana/upload.php',
                {
                type: 'post',
                processData: false,
                contentType: false,
                data: fd,
                dataType: "text",
                success: function(data) {
                    $('#' + targetimg).attr("src",data);
                },
                error: function(XMLHttpRequest, textStatus, errorThrown,data) {
                    alert( errorThrown );
                }
            });
            return false;
        }
});
