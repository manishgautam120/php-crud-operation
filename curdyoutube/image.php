<?php 
error_reporting(0);
?>

<html>
<body>
<form action="" method="post" enctype ="multipart/form-data">
    <input type="file" name = "uploadfile" value=""/>
    <input type="submit" name = "submit" value="Upload file"/>

</form>

</body>
</html>
<?php 

$_FILES["uploadfile"];
                            // print_r($_FILES["uploadfile"]);
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "student/".$filename;

move_uploaded_file($tempname,$folder);
echo "<img src='$folder' height='100' width='100' >";


// $_FILES["uploadfile"]["error"];
// $_FILES["uploadfile"]["size"];

?>
