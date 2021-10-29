<?php
  if (isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];

  $connection= mysqli_connect('localhost','root','', 'loginapp1');
  if($connection)
  {
      echo "connected to database";}
 else{
      echo "not connected";
  }
$query= "INSERT INTO users(username,password)";
$query .="VALUES('$username','$password')";
$result = mysqli_query($connection,$query);
    if(!$result)
    {
        die('Query FAILED' .mysqli_error($connection));
    }
  

  echo $username;
  echo $password;
  }

  ?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="col-xs-6">
            <form action ="login.php" method="post">
                <div class="form-group">
                    <label for ="username">Username></label>
                    <input type="text" name="username" class = "form-control">
</div>
<label for ="password">Password></label>
<input type="text" name="password" class = "form-control">



    </div>
    <input type="submit" name="submit" value="Submit">

</body>
</html>