<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <h1>Show All Reservations</h1>
    <h3>Select Subject</h3>
    <form action="show_reservations.php"method="post">
        <select name="subject" id="">
                    <option  selected disabled value="Please Select One">Please Select One</option>
                    <option value="Machine Learning">Machine Learning</option>
                    <option value="Network 2">Network 2</option>
                    <option value="Software Egineering 2">Software Egineering 2</option>
                    <option value="Data Base 2">Data Base 2</option>
        </select><br><br><br>
        <button>Show All</button>
    </form>
    </center>
</body>
</html>