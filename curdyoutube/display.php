<?php

include 'conn.php';

    // $username = $_POST['username'];
    // $password = $_POST['password'];
    $q = "select * from crudtable";

    $query = mysqli_query($con , $q);
    
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

<div class="container">    
<div class="col-lg-12"><br>
  <h1 class="text-center text-warning"> Display Table Data</h1><br>
   <table class="table table-striped table-hover table-bordered">
     <tr class= "text-center">
         <th>ID</th>  
         <th>USERNAME</th>  
         <th>PASSWORD</th>
         <th>IMAGE</th>
         <th>DELETE</th>
         <th>UPDATE</th>
     </tr>

 <?php

    include 'conn.php';
    $q = "select * from crudtable";
    $query = mysqli_query($con , $q);
    
    while($res = mysqli_fetch_array($query))
    {

?>


      <tr class="bg-dark text-center text-white">
         <td><?php echo $res['id']; ?></td>  
         <td><?php echo $res['username']; ?></td>  
         <td><?php echo $res['password']; ?></td>
         <td><img src="<?php echo $res['picsource']; ?>"  height="50" width= "50"alt=""style="padding:0;margin:0;" ></td>
         <td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id'];?>" class="text-light" >Delete</a> </button> </td>  
         <td><button class="btn-info btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-light" >Update</a> </button> </td>  
         
     </tr>

   <?php
    }
   ?>






   
   </table>


</div>
</div>

</body>
</html>