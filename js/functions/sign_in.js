$(function(){
  $("#submit_signin").on("click",()=>{
    $username= $("#user_signin").val();  $password=$("#pass_signin").val();
    if($username == ''|| $password==''){
       $("#formSignin .alert").removeClass("hidden");
       $("#formSignin .alert").html("User name or pass is not blank");
    }else {
      $.ajax({
        url:"signin.php",
        type:"POST",
        data:{
          username:$username,
          password:$password
        },
        success:function(data){
          $("#formSignin .alert").html(data);
        }
      });
    }
  });
});