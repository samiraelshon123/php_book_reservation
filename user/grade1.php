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
             <select value =""name="select_book">
                <option  selected disabled value="Please Select One">Please Select One</option>
                <option value="Technical Writing">Technical Writing</option>
                <option value="Physics">Physics</option>
                <option value="Programming 1">Programming 1</option>
                <option value="Math 0">Math 0</option>
                <option value="Introduction To Computer">Introduction To Computer</option>
            </select><br><br><br>
            <button name="reserve2">Reserve</button><br><br><br>
        </form>
    </center>
</body>
</html>
