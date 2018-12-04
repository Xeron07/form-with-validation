
<!DOCTYPE html>
 <html>
 <head><title>Sign In</title>
   <script type="text/javascript" src="sweetalert.min.js">import swal from 'sweetalert';
    </script>
 <link rel="stylesheet" href="login-style.css">
 <link href="validation.min.css" rel="stylesheet">

 </head>


 <?php
   if(isset($_GET['val']))
   {
     if(strcmp($_GET['val'],'xll200')==0)
     {
       echo'<script>setTimeout(function() {swal("Congratulation!","Registration successfully done.","success") }, 200);</script>';
     }
   }
 ?>








 <body>
   <fieldset >
    <legend > <center><h1>Sign In</h1></center></legend>
 <form name="form" action="loginCheck.php" method="POST">
  <div class="imgcontainer">
    <img src="avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input class="validate form-control" type="text" placeholder="Enter Email" name="email" data-validate="required,emails" required>

    <label for="psw"><b>Password</b></label>
    <input class="validate form-control" type="password" placeholder="Enter Password" name="psw" data-validate="required" required>

    <button type="submit" >Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form> 
</fieldset>

 <script src="validation.min.js"></script>
  <script>
    validation.init("form");
   
  </script>
</body>
</html>