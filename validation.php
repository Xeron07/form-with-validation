<html>
<body>
 <script type="text/javascript" src="sweetalert.min.js"></script>

<?php
session_start();
session_unset();
$_SESSION['email']=$_POST['email'];
$_SESSION['job']=$_POST['job'];
$_SESSION['seatNo']=$_POST['seatNo'];
$_SESSION['pass']=0;
$_SESSION['pn']=0;
$_SESSION['bp']=0;

$_SESSION['nid']=0;

$valid=0;




$nid = $_POST["nid"];
if (!preg_match("/^[0-9 ]*$/",$nid)) {
  $nidErr = "Only number allowed in NID"; 
  $_SESSION['nid']=1;
  $_SESSION['nidErr']=$nidErr; 
  $valid=1;
}
elseif (strlen(trim($_POST['nid']))!=12) {
	 $nidErr = "Invalid NID number"; 
  $_SESSION['nid']=1;
  $_SESSION['nidErr']=$nidErr; 
  $valid=1;
}

if(strlen($_POST['bording'])<=3)
{
	$_SESSION['bp']=1;
	$_SESSION['bpErr']="invalid boarding point";
	$value=1;
	
}
if(strlen($_POST['phoneNumber'])<8)
{
	$_SESSION['ph']=1;
	$_SESSION['phErr']="Invalid Phone Number";
	$value=1;
	
}



if(strlen(trim($_POST['psw']))>=6 && strlen(trim($_POST['psw']))<=16 && strlen(trim($_POST['psw-repeat']))>=6 && strlen(trim($_POST['psw-repeat']))<=16)
{
	if(strcmp(trim($_POST['psw']), trim($_POST['psw-repeat']))!=0)
	{
		 $_SESSION['passErr']="Password doesn\'t matched.";
         $_SESSION['pass']=1;
         $valid=1;
	}
}
else{
	$_SESSION['passErr']="Password length must be between 6 to 16";
    $_SESSION['pass']=1;
	$valid=1;
}


// $uname = $_POST["uname"];
// if (!preg_match('/^[A-Za-z.\d]+$/i',trim($uname))) {
//   $unErr = "Wrong user name input (Please avoid \"-,_,@, \'.\' \" and other numeric character)"; 
//   $_SESSION['un']=1;
//   $_SESSION['unErr']=$unErr; 
//   $valid=1;
// }


 
 if($valid==0)
 {
 	$_SESSION['email']=$_POST['email'];
 	$_SESSION['pass']=$_POST['psw'];
 	$_SESSION['nid']=$_POST['nid'];
 	$_SESSION['pn']=$_POST['ip'].$_POST['phoneNumber'];
 	$_SESSION['bp']=$_POST['boarding'];
 	$_SESSION['job']=$_POST['job'];
 	$_SESSION['seatNo']=$_POST['seatNo'];
 	$_SESSION['ds']=$_POST['destination'];
 	$_SESSION['jdate']=$_POST['jdate'];
 	$_SESSION['uname']=$_POST['uname'];
 	header("location:signup.php");
 }
 else
 {
    header("location:form.php?val=1");
   // echo strlen(trim($_POST['nid']));
 	//echo preg_match('/^[A-Za-z.\d]+$/i',trim($uname));
 }

?>

</body>
</html>