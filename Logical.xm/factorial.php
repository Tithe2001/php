<?PHP
include_once "LogicalTest.php";
$number=null;
$result=null;
if (isset($_GET['btn_submit'])) {
    $number = $_GET['number'];
    $result= LogicalTest::facterial($number);
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <h1>Find The Factorial</h1>

    <form action=""  method="$_GET">

        <label for="n">Give the number: </label><br>
        <input type="text" id="n" name="number" value="<?php echo "$number";  ?>"><br><br>

        <button type="submit" name="btn_submit">Submit</button>
    </form>

    <?PHP
    echo "<h1>Factarial of $number is $result </h1>";
    ?>

</body>
</html>