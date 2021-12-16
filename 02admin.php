<?php session_start();

    if(!isset($_SESSION['UserData']['Username']))
    {
        header("location:login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Done</title>
</head>
<body>
    <h1>You successfully loged in.</h1>
</body>
</html>



