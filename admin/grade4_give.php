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
                    <option value="Machine Learning">Machine Learning</option>
                    <option value="Network 2">Network 2</option>
                    <option value="Software Egineering 2">Software Egineering 2</option>
                    <option value="Data Base 2">Data Base 2</option>
            </select><br><br><br>
            <button name="Give">Give</button>
        </form>
    </center>
</body>
</html>