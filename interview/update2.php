<?php
$server="localhost";
$uname="root";
$pwd="";
$db="sakthi";
$con=mysqli_connect($server,$uname,$pwd,$db) or die("db not connected");
$name=$_POST['name'];
$id=$_POST['id'];
$que="update sakthitb set name='$name',id='$id' where name='$name'";
if($res=mysqli_query($con,$que))
{
    echo"<script>alert('update success');
    window.location.herf='fetch.php';</script>";
}
else{
    echo"<script>alert('not updated');</script>";
}
?>