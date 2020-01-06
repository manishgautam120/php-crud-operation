<?php

include 'conn.php';
if(isset($_POST['done']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "student/".$filename;
    move_uploaded_file($tempname,$folder);


    if($username !="" && $password !="" && $filename !="")
    {
        $q = "INSERT INTO `crudtable`(`username`, `password`, `picsource`) VALUES (' $username' , '$password' , '$folder')";

        $query = mysqli_query($con , $q);

         if($query)
         {
             echo "data has been inserted successfully";

         }
    }
     else
     {
        echo "check your field again and make sure all fields filled";
     }


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud operation</title>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
<div class="col-lg-6 m-auto">
<form action="" method="post" enctype ="multipart/form-data">
<br><div class="card">
<div class="card-header bg-dark">
<h1 class="text-white text-center">Insert operation</h1>
</div>
<br><label><b>Username</b></label>
    <input  class="form-control" type="text" placeholder="Enter user name" name="username" required>

    <br><label ><b>Password</b></label>
    <input  class="form-control" type="password" placeholder="Enter Password" name="password" required>
  
    <br>
    <div>
   <label ><b>Image upload</b></label><br>
   <input type="file" name = "uploadfile" value=""/>
    </div>
    <br> <button class="btn btn-success" type="submit" name="done" >Submit</button>

</div>

</form>

</div>


</body>
</html>

