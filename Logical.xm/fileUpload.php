<?php
include_once "LogicalTest.php";


$name= null;
$myfile=null;
if (isset($_POST["btnSubmit"])){
    $myfile= $_FILES["myfile"];
    $name= LogicalTest::fileUpload($myfile);

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<body>

    <br>
    <h2 style="color: purple;">Upload a File Here</h2>

    <form action="" method="post" enctype="multipart/form-data">

    <input type="file" name="myfile">
    <button type="submit" name="btnSubmit" style="color: red;">Upload</button>

    </form>
    <br>

    <img src="uploads/<?php echo $name ?>" alt="">


</body>
</html>


