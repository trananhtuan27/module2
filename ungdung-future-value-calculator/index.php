<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <div class="login">
        <h2>Future Value Calculator</h2>
        Inventment Amount: <input type="text" name="luongtiendautubandau"><br>
        Yearly Interest Rate: <input type="text" name="laixuatnam"><br>
        Number of Years: <input type="text" name="sonamdautu"><br>
        <input type="submit" value="Cacularto">
    </div>
</form>

<?php
$_SERVER["REQUEST_METHOD" == "POST"];
$ten1 = $_POST["luongtiendautubandau"];
$ten2 = $_POST["laixuatnam"];
$ten3 = $_POST["sonamdautu"];

$x = $ten1 + $ten3 * $ten2;
echo $x . "%"
?>

</body>
</html>

