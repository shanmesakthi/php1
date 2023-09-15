<?php
$server="localhost";
$uname="root";
$pwd="";
$db="sakthi";
$con=mysqli_connect($server,$uname,$pwd,$db) or die("db not connected"); 
$name=$_POST['name'];
$id=$_POST['id'];
$query="insert into sakthitb values('$name','$id')";
if($row=mysqli_query($con,$query))
{
    echo"<script>alert('success');window.location.href='fetch.php';</script>";
}
else
{
    echo"<script>alert('unsuccess');</script>";
}
?>