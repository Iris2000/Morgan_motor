<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- formLayout.css -->
    <link rel="stylesheet" href="formLayout.css">
    <!-- font-family -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,700|Prata" rel="stylesheet">

    <title>Morgan Motor</title>
  </head>
  <body>

  <section id="home_bg" class="min-vh-100">
    <div class="d-flex justify-content-center container">
      <div class="col-sm-4 form-content" style="width: 100%;">
        
      </div>
    </div>
  </section>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">

      $(document).ready(function() {
        $(".form-content").html(
          '<form method="post" action="" class="justify-content-center" id="transparent_box">' +
            '<div>' +
              '<img src="images/morgan_logo.png" alt="Morgan_Motor_Logo" style="width: 100%">' +
            '</div>' +
            '<div>' +
              '<div class="form-group">' +
                '<label for="loginUsername">Username</label>' +
                '<input type="text" class="label" id="loginUsername" name="loginUsername" required>' +
              '</div>' +
              '<div class="form-group">' +
                '<label for="loginPassword">Password</label>' +
                '<input type="password" class="label" id="loginPassword" name="loginPassword" required>' +
              '</div>' +
              '<div>' +
                '<button type="submit" class="btn button login" style="margin-top: 20px">Login</button>' +
              '</div>' +
              '<div>' +
                '<input type="button" class="btn button" style="margin-top: 20px" id="register" value="Register">' +
              '</div>' +
              '<div style="margin-top: 20px">' +
                '<span class="regMessage"></span>' +
              '</div>' +
            '</div>'+
          '</form>');
      });

      $("body").on('click','#register',function() {
        $(".form-content").html(
          '<form method="post" action="" class="justify-content-center regForm" id="transparent_box">' +
            '<div>' +
              '<img src="images/morgan_logo.png" alt="Morgan_Motor_Logo" style="width: 100%">' +
            '</div>' +
            '<div>' +
              '<div class="form-group">' +
                '<label for="regUsername">Username</label>' +
                '<input type="text" class="label" id="regUsername" name="regUsername" required>' +
              '</div>' +
              '<div class="form-group">' +
                '<label for="regPassword">Password</label>' +
                '<input type="password" class="label" id="regPassword" name="regPassword" required>' +
              '</div>' +
              '<div class="form-group">' +
                '<label for="rePassword">Confirm Password</label>' +
                '<input type="password" class="label" id="rePassword" name="rePassword" placehoder="" required>' +
              '</div>' +
              '<div>' +
                '<button type="submit" class="btn button" style="margin-top: 20px" id="regSubmit">Submit</button>' +
              '</div>' +
              '<div>' +
                '<input type="button" class="btn button" style="margin-top: 20px" id="backLogin" value="Login">' +
              '</div>' +
              '<div style="margin-top: 20px">' +
                '<span class="regMessage"></span>' +
              '</div>' +
            '</div>' +
          '</form>');
      });

      $("body").on('click','.login',function() {
        event.preventDefault();
        if($("#loginUsername").val() && $("#loginPassword").val()) {
          var loginUsername = $("#loginUsername").val();
          var loginPassword = $("#loginPassword").val();

          $.post("loginCheck.php",
              {username:loginUsername, password:loginPassword}, function(data) {
                if (data == "Username or Password is incorrect") {
                  $(".regMessage").html(
                    '<div class="alert alert-info" role="alert">' +
                      "Username or Password is incorrect" +
                    '</div>');
                } else if (data == "Successful") {
                  window.location.replace("MainPage.php");
                } 
              });
        }
      });

      $("body").on('click','#regSubmit',function() {
        event.preventDefault();
        if($("#regUsername").val() && $("#regPassword").val() && $("#rePassword").val()) {
          var regUsername = $("#regUsername").val();
          var regPassword = $("#regPassword").val();
          var rePassword = $("#rePassword").val();

          if(rePassword != regPassword) {
              $(".regMessage").html(
                '<div class="alert alert-danger" role="alert">' +
                  "Confirm Password must same as Password." +
                '</div>');
          } else {
              $.post("regCheck.php",
              {username:regUsername, password:regPassword}, function(data) {
                if (data == "Username existed") {
                  $(".regMessage").html(
                    '<div class="alert alert-info" role="alert">' +
                      "Username existed" +
                    '</div>');
                } else {
                  $(".regMessage").html(
                    '<div class="alert alert-success" role="alert">' +
                      "Account has been registered sucessfully." +
                    '</div>');
                }
              });
          } 
        } else {
            $(".regMessage").html(
              '<div class="alert alert-info" role="alert">' +
                "Please complete the form." +
              '</div>');
          }
      });

      $("body").on('click','#backLogin',function() {
        $(".form-content").html(
          '<form method="post" action="" class="justify-content-center" id="transparent_box">' +
            '<div>' +
              '<img src="images/morgan_logo.png" alt="Morgan_Motor_Logo" style="width: 100%">' +
            '</div>' +
            '<div>' +
              '<div class="form-group">' +
                '<label for="loginUsername">Username</label>' +
                '<input type="text" class="label" id="loginUsername" name="loginUsername" required>' +
              '</div>' +
              '<div class="form-group">' +
                '<label for="loginPassword">Password</label>' +
                '<input type="password" class="label" id="loginPassword" name="loginPassword" required>' +
              '</div>' +
              '<div>' +
                '<button type="submit" class="btn button login" style="margin-top: 20px">Login</button>' +
              '</div>' +
              '<div>' +
                '<input type="button" class="btn button" style="margin-top: 20px" id="register" value="Register">' +
              '</div>' +
              '<div style="margin-top: 20px">' +
                '<span></span>' +
              '</div>' +
            '</div>'+
          '</form>');
      });

    </script>
  </body>
</html>