<?php
include('dbConnection.php');
 session_start();
 

 $db=new DBConn;

 $db->servername="localhost";
 $db->username="root";
 $db->password="";
 $db->dbname="data";

 if($db->connect()==1)
 	{
 		$sql="insert into vehicle (NAME,EMAIL,PASSWORD,NID,PHONE,PROFFESSION,NUMOFPASS,DESTINATION,BOARDING,DATE) values('".$_SESSION['uname']."','".$_SESSION['email']."','".$_SESSION['pass']."','".$_SESSION['nid']."','".$_SESSION['pn']."','".$_SESSION['job']."','".$_SESSION['seatNo']."','".$_SESSION['ds']."','".$_SESSION['bp']."','".$_SESSION['jdate']."');";
 		if ($db->conn->query($sql) === TRUE) {
            header('location:login.php?val=xll200');
 		}
 	}




?>