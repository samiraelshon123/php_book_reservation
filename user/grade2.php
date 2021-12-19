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
                <option value="Programming 2">Programming 2</option>
                <option value="Data Structure">Data Structure</option>
                <option value="File Structure">File Structure</option>
                <option value="Operating System">Operating System</option>
                <option value="Logic">Logic</option>
            </select><br><br><br>
            <button name="reserve2">Reserve</button><br><br><br>
        </form>
    </center>
</body>
</html>