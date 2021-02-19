<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <script type="text/javascript" src="bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="popper.min.js"></script>
</head>
<body>
<div class="container">
  <div class="col-xl-8">
    <form>
      <div class="form-group">
        <label for="username">UserName : </label>
        <input type="text" name="username" id="usernames" class="form-control">
        <h2 id="usercheck"></h2>
      </div>
      <div class="form-group">
        <label for="email">Email : </label>
        <input type="text" name="email" id="emails" class="form-control">
        <h2 id="emailcheck"></h2>
      </div>
      <div class="form-group">
        <label for="passwords">Password : </label>
        <input type="text" name="password" id="passwords" class="form-control">
        <h2 id="passwordcheck"></h2>
      </div>
     <!--  <div class="form-group">
        <label for="conpasswords"> Con. Password : </label>
        <input type="text" name="conpassword" id="conpasswords" class="form-control">
        <h2 id="conpasswordcheck"></h2>
      </div> -->
      <input type="submit" value="Submit" id="submit" class="btn btn-primary">
    </form>
  </div>
</div>
<!-- 9065419426 -->
  <script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#usercheck").hide();
    $("#emailcheck").hide();
    $("#passwordcheck").hide();
    // $("#conpasswordcheck").hide();
    var user_err=true;
    var email_err=true;
    var pass_err=true;
    // var conpass_err=true;

    //for username
    $("#usernames").keyup(function(){
      username_check();
    });
    function username_check()
    {
      var user_val=$("#usernames").val();
      if(user_val.length == '')
      {
        $("#usercheck").show();
        $("#usercheck").html("**Name Must Be Required");
        $("#usercheck").focus();
        $("#usercheck").css("color","red");
        user_err=false;
        return false;
      }
      else
      {
        $("#usercheck").hide();
      }

      if((user_val.length < 3) || (user_val.length > 10))
      {
        $("#usercheck").show();
        $("#usercheck").html("**Name Must Be Between 3 To 10");
        $("#usercheck").focus();
        $("#usercheck").css("color","red");
        user_err=false;
        return false;
      }
      else
      {
        $("#usercheck").hide();
      }
    }


    //for Password
    $("#passwords").keyup(function(){
      password_check();
    });
    function password_check()
    {
      var pass_val=$("#passwords").val();
      if(pass_val.length == '')
      {
        $("#passwordcheck").show();
        $("#passwordcheck").html("**Password Must Be Required");
        $("#passwordcheck").focus();
        $("#passwordcheck").css("color","red");
        pass_err=false;
        return false;
      }
      else
      {
        $("#passwordcheck").hide();
      }

      if((pass_val.length < 3) || (pass_val.length > 10))
      {
        $("#passwordcheck").show();
        $("#passwordcheck").html("**Password Must Be Between 3 To 10");
        $("#passwordcheck").focus();
        $("#passwordcheck").css("color","red");
        pass_err=false;
        return false;
      }
      else
      {
        $("#passwordcheck").hide();
      }
    }

    //for email
    $("#emails").keyup(function(){
      email_check();
    });
    function email_check()
    {
      $("#emailcheck").show();
      var email_val=$("#emails").val();
      if(email_val.length == '')
      {
        $("#emailcheck").show();
        $("#emailcheck").html("**Email Must Be Required");
        $("#emailcheck").focus();
        $("#emailcheck").css("color","red");
        email_err=false;
        return false;
      }
      else
      {
        $("#emailcheck").hide();
      }

      if(email_val.indexOf('@') <=0)
      {
        $("#emailcheck").show();
        $("#emailcheck").html("**@ Position Not Valid");
        $("#emailcheck").focus();
        $("#emailcheck").css("color","red");
        email_err=false;
        return false;
      }
      else
      {
        $("#emailcheck").hide();
      }

      if((email_val.charAt(email_val.length - 4)!='.') && (email_val.charAt(email_val.length - 3)!='.') )
      {
        $("#emailcheck").show();
        $("#emailcheck").html("**Dot Position Not Valid");
        $("#emailcheck").focus();
        $("#emailcheck").css("color","red");
        email_err=false;
        return false;
      }
      else
      {
        $("#emailcheck").hide();
      }
      
    }


    //if click submit button
    $("#submit").click(function(e){
      e.preventDefault();
      user_err=true;
      pass_err=true;
      email_err=true;
      username_check();
      password_check();
      email_check()
      if((user_err==true) && (pass_err==true) && (email_err==true))
      {

        alert("form submit");
        return true;
      }
      else
      {
        return false;
      }
    });




  });
</script>
</body>
</html>
