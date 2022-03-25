
  $("#submit_create_note").on("click",
  function(){
    $note_title= $("#title_create_note").val();
    $note_body= $("#body_create_note").val();
  if($note_title==''||$note_body==''){
     $("#formCreateNote .alert").removeClass("hidden");
    $("#formCreateNote .alert").html("Title or body is not empty");
  }else {
    $.ajax({
      type:'POST',
      url:'note.php',
      data:{
        note_title:$note_title,
        note_body:$note_body,
        ac:"create"
      },
      success:function(data){
        $("#formCreateNote .alert").removeClass("hidden");
        $("#formCreateNote .alert").html(data);

      }
    });
  }
});