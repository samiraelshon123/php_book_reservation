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
            <select name="subject" id="">
                    <option  selected disabled value="Please Select One">Please Select One</option>
                    <option value="Programming 2">Programming 2</option>
                    <option value="Data Structure">Data Structure</option>
                    <option value="File Structure">File Structure</option>
                    <option value="Operating System">Operating System</option>
                    <option value="Logic">Logic</option>
            </select><br><br><br>
            <button name="Give">Give</button>
        </form>
    </center>
</body>
</html>