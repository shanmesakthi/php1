<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
            $server="localhost";
            $uname="root";
            $pwd="";
            $db="sakthi";
            $con=mysqli_connect($server,$uname,$pwd,$db) or die("db not connected");
            $id=$_GET['id'];
            $que="select * from sakthitb where id=$id";
            $res=mysqli_query($con,$que);
            if($row=mysqli_fetch_array($res))
            {
                ?>
                <div class="row">
                <form method="post" action="update2.php">
                 <label>name</label>
                 <input type="type" name="name" class="form-control">
                 <label>id</label>
                 <input type="text" name="id" class="form-control">
                 <input type="submit" name="submit" value="submit" class="btn btn-success">
                 <input type="reset" name="cancle" value="cancle" class="btn btn-danger">
                </form>
            
            <?php
            }
            ?>
            </div>
        </div>
</body>
</html>