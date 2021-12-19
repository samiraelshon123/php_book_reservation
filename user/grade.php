<?php
    session_start();
    if(isset($_POST['grade_1'])){
        $_SESSION['grade']="grade_1";
    }else if(isset($_POST['grade_2'])){
        $_SESSION['grade']="grade_2";
    }else if(isset($_POST['grade_3'])){
        $_SESSION['grade']="grade_3";
    }else if(isset($_POST['grade_4'])){
        $_SESSION['grade']="grade_4";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="page.css">
</head>
<body>
    <center>
        <form action="reserve.php"method="post">
            <h1>Select Operation</h1>
            <button name="reserve1">Reserve</button><br><br><br>
            <button name="show_available1">Show Available</button><br><br><br>
        </form>
    </center>
</body>
</html>