<?PHP
include_once "LogicalTest.php";
$number=null;
$result=null;
if (isset($_GET['btn_submit'])) {
    $number = $_GET['number'];
    $result= LogicalTest::IsPrime($number);


$result=  $result ? "is a Prime Number": "is Not a Prime Number";

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
    <h1>Find The Prime Number</h1>

    <form action=""  method="$_GET">

        <label for="n">Give the number: </label><br>
        <input type="text" id="n" name="number" value="<?php echo "$number";  ?>"><br><br>

        <button type="submit" name="btn_submit">Submit</button>
    </form>

    <?PHP
    echo "<h1> $number $result </h1>";
    ?>

</body>
</html>