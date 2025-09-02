<?PHP
include_once "LogicalTest.php";

$mark=null;
$result=null;

if(isset($_GET["btn_submit"])){
$mark= $_GET["mark"];

$result= LogicalTest::result($mark);

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>


<body>

<fieldset style="background-color:lightgreen; width: fit-content;">
<legend><h1>Results</h1></legend>

<form action="result.php" method="GET">

<label for="m"> <b>Inter your Mark: </b></label>
<input type="text" name="mark"> <br><br>
<button type="submit" name="btn_submit" >Submit</button>

<h3>Obtained Grade:  <?php echo $result ?></h3>

</form>
</fieldset>


</body>
</html>