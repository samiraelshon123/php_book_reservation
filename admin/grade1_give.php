<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <h1>Give A Book</h1><br><br><br>
        <form action="give.php"method="post">
            <input name="name"type="text"placeholder="NAME"><br><br><br>
            <select value =""name="subject">
                <option  selected disabled value="Please Select One">Please Select One</option>
                <option value="Technical Writing">Technical Writing</option>
                <option value="Physics">Physics</option>
                <option value="Programming 1">Programming 1</option>
                <option value="Math 0">Math 0</option>
                <option value="Introduction To Computer">Introduction To Computer</option>
            </select><br><br><br>
            <button name="Give">Give</button>
        </form>
    </center>
</body>
</html>