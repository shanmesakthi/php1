<?php
$server="localhost";
$uname="root";
$pwd="";
$db="sakthi";
$con=mysqli_connect($server,$uname,$pwd,$db) or die("db not connected");
$id=$_GET['id'];
$que="delete from sakthitb where id=$id";
if($res=mysqli_query($con,$que))
{
    echo"<script>alert('delete success');
    window.location.href='fetch';</script>";

}
else{
    echo"<script>alert('delete unsuccess');
    window.location.herf='fetch.php';</script>";
}