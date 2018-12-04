<!DOCTYPE html>
<?php
 session_start();

?>

<html>
<head>
    <title>Registraion</title>
    <link rel="stylesheet" href="form-style.css">
    <link href="validation.min.css" rel="stylesheet">
    <link href="modal-style.css" rel="stylesheet">
     <link href="select-style.css" rel="stylesheet">
     

    <script type="text/javascript" src="js/sweetalert.min.js">import swal from 'sweetalert';
    </script>

 <!-- php code goes here-->

    <?php 
         $nidErr="" ;$bpErr="" ; $phErr="" ;$passErr="";$unErr="";
          if(isset($_GET['val']))
               {
                if($_GET['val']==1)
                {
                  if(isset($_SESSION['nidErr']))
                  {
                    $nidErr=$_SESSION['nidErr'];
                  }
                  if(isset($_SESSION['bpErr']))
                  {
                    $bpErr=$_SESSION['bpErr'];
                  }
                  if(isset($_SESSION['phErr']))
                  {
                    $phErr=$_SESSION['phErr'];
                  }
                  if(isset($_SESSION['passErr']))
                  {
                    $passErr=$_SESSION['passErr'];
                  }
                  if(isset($_SESSION['unErr']))
                  {
                    $unErr=$_SESSION['unErr'];
                  }
                 
                 $str='\n\n  '.$unErr.'\n\n   '.$nidErr.'\n\n    '.$bpErr.'\n\n  '.$passErr.'\n\n  '.$phErr;
                echo "<script>setTimeout(function() {
                        swal('Oops!','".$str."','error');
                      }, 200);</script>";
                }
               }

    ?>

  <!-- php code end here -->

  <!-- js -->
     <script type="text/javascript" >
      var modal;
        function limit(element)
            {
              var max_chars = 8;
              var x;
              if(element.value.length > max_chars) {
                  document.getElementById('ph').value=x;
                  swal("Oops!","please enter 8 digit only","warning");
              }
             
            }
       window.onload=function(){
               modal=document.getElementById("myModal"); 

             document.getElementById("terms").addEventListener("click",function()
             {
              modal.style.display = "block";
            });

             document.getElementById("close").addEventListener("click",function(){
               modal.style.display = "none";
             });

     }

       window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
  }

     </script>

  <!-- js -->
   </head>

<body background="cl.jpg">
  <!-- fieldset -->
  <fieldset style="background-color: #aaa69d">
              <legend style="background-color: #006266"> <center ><h1 style="color: #079992">Sign Up</h1></center></legend>

         <!-- form start here -->

            <form action="validation.php" method="POST" name="form">
            <div class="container" style="background-color: #aaa69d" >
            
              <p>Please fill in this form to create an account.</p>
              <hr>
              <label for="username"><b>Your Name:</b></label>
              <input id='un' class="validate form-control"  type="text" placeholder="Enter name" name="uname" data-validate="required" >
              </br>

              <label for="email"><b>Email</b></label>
              <input class="validate form-control"  type="text" placeholder="Enter Email" name="email" data-validate="required,emails" >
              </br>

              <label for="psw"><b>Password</b></label>
              <input class="validate form-control" type="password" placeholder="Enter Password" name="psw" data-validate="required" ></br></br>
              


              <label for="psw-repeat"><b>Repeat Password</b></label>
             
              <input class="validate form-control" type="password" placeholder="Repeat Password" name="psw-repeat" data-validate="required" >
             
             


              <label for="national-id"><b>National Id:</b></label>
              <input class="validate form-control"  type="text" placeholder="Enter National Id" name="nid" data-validate="required" ></br></br>
              

             <table  width="100%">
              <tr >
              <td width="50%"><b style="float: left">Phone Number:</b>&nbsp </td>
               <td width="20%"><div class="dropdown" style="margin-left: 0%; width: 100%;float: left;background-color: #0a3d62"> 
                <select name="ip" class="dropdown-select"  >
                    <option>015</option>
                    <option>016</option>
                    <option>017</option>
                    <option>018</option>
                    <option>019</option>
                </select> 
                 </div></td>
               <td> <input class="validate form-control" type="number" name="phoneNumber" max="99999999" id="ph" size="7" onkeyup="limit(this)" style="padding: 6px;margin-left: 0%;border: 1px solid #5b7c67;float:left;background: #f1f1f1;border-radius: 5px;" data-validate="required"></td>
              </tr>
              </table>
              
              <table width="100%">
              <tr>
              <td><b>Passenger's Profession:</b></td>
                   <td width="50%"><div class="dropdown" style="margin-left: 0%; width: 100%;float: left;"> 
                       <select class="dropdown-select" name="job" id="job" >
                              <option>Student</option>
                              <option>Pvt. Job Holder</option>
                              <option>Govt. Job Holder</option>
                              <option>Retired</option>
                              <option>Bussiness</option>
                    </select></div></td></tr></br>
              </table>
              

               <table  width="100%">
                <tr>
                  <td><b>No. Of Passengers:</b></td>
                        <td width="50%"><div class="dropdown" style="margin-left: 0%; width: 100%;float: left;"> 
                            <select class="dropdown-select" name="seatNo" id="seat">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                          </select></div></td>
                </tr></br>
                </table>

               <table  width="100%">
                <tr>
                  <td><b>Destination:</b>&nbsp</td>
                  <td width="50%"><div class="dropdown" style="margin-left: 0%; width: 100%;float: left;"> 
                     <select class="dropdown-select" name="destination" id="destination" >
                            <option>Bogra</option>
                            <option>Sirajgonj</option>
                        </select></div>
                  </td>
                </tr>
              </table></br></br>

               <label for="boarding"><b>Boarding Point:</b></label>
              <input class="validate form-control" type="text" placeholder="Enter Boarding Point" name="boarding" data-validate="required" ></br></br>


              <label for="boarding"><b>Journey Date:</b></label>
              <input class="validate form-control" type="date" placeholder="Enter Journey Date" name="jdate" data-validate="required"></br></br>

              <input class="validate form-control" type="checkbox"  name="remember" style="margin-bottom:15px" data-validate="required">By creating an account you agree to our <a href="#" style="color:dodgerblue" id="terms">Terms & Privacy</a>.
            

              <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
              </div>
            </div>
          </form>
      
         <!-- form end here -->
     </fieldset>
   
    <!-- fieldset end here -->

 <script src="validation.min.js"></script>
  <script>
    validation.init("form");
  
  </script>


 <!-- Modal -->
 <div id="myModal" class="modal">
  <!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
    <span class="close" id="close">&times;</span>
    <h2>Term & Condition</h2>
  </div>
  <div class="modal-body">
    <p>Term And Condition will go here</p>
    <p>Some other text...</p>
  </div>
  <div class="modal-footer">
    <h3>Footer</h3>
  </div>
</div>
</div>

</body>
</html>

