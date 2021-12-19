<?php
    session_start();
    $_SESSION['grade']="null";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Select Grade</h1>
        <h2>Grade:</h2>
        <form action="grade.php"method="post">
            <button name="grade_1">Grade 1</button><br><br>
            <button name="grade_2">Grade 2</button><br><br>
            <button name="grade_3">Grade 3</button><br><br>
            <button name="grade_4">Grade 4</button><br><br>
        </form>
    </center>
</body>
</html>