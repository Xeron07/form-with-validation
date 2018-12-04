<?php
  include("dbConnection.php");
  $email=$_POST['email'];
  $pass=$_POST['psw'];

  $db=new DBConn;

 $db->servername="localhost";
 $db->username="root";
 $db->password="";
 $db->dbname="data";

 if($db->connect()==1)
 	{
 		$sql="select PASSWORD from vehicle where EMAIL='".$email."'";
 		$result = $db->conn->query($sql);

		if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
               $dbPass=$row['PASSWORD'];
		}
	  }
    }
	else{
		die(" DATABASE ERROR");
	}

if(strcmp($pass, $dbPass)==0)
{
	header("location:user.php");
}

?>