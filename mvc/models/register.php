<?php
include("DB.php");
$obj=new db();
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$location=$_POST['location'];
$address=$_POST['address'];
$uname=$_POST['uname'];
$password=$_POST['pwd'];

$insert="insert into login values(NULL,'$uname','$password','user',1)";
$obj->exe($insert);
$select="select max(logid) from login";
$res=$obj->exe($select);
$row=mysqli_fetch_array($res);
$logid=$row[0];
$insert1="insert into register values(NULL,'$name','$email','$gender',$phone,'$address','$location','$uname',$logid,1)";


$obj->exe($insert1);


//$obj->exe($insert2);
?>
<script>
alert(' Sucessfully Details Added');
window.location="login/index.php";

</script>