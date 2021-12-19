<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css">
</head>
<body>
     <center>
         <h1>Select Grade</h1>
         <form action="reserved.php"method="post">
             <input name="name"type="text"placeholder="NAME"><br><br><br>
             <select name="select_book" id="">
                <option  selected disabled value="Please Select One">Please Select One</option>
                <option value="Java FX">Java FX</option>
                <option value="Data Base">Data Base</option>
                <option value="Software Engineering">Software Engineering</option>
                <option value="Network">Network</option>
                <option value="Modeling">Modeling</option>
            </select><br><br><br>
            <button name="reserve2">Reserve</button><br><br><br>
        </form>
    </center>
</body>
</html>