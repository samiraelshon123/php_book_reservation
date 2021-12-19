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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <form action="third_page.php"method="post">
            <h1>Select Operation</h1>
            <button name="Show_Reservations">Show Reservations</button><br><br><br>
            <button name="Give_A_Book">Give A Book</button><br><br><br>
            <button name="Make_A_Book_A_Available">Make A Book A Available</button><br><br><br>
        </form>
    </center>
</body>
</html>