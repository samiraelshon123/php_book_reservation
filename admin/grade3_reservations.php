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
                    <option value="Java FX">Java FX</option>
                    <option value="Data Base">Data Base</option>
                    <option value="Software Engineering">Software Engineering</option>
                    <option value="Network">Network</option>
                    <option value="Modeling">Modeling</option>
        </select><br><br><br>
        <button>Show All</button>
    </form>
    </center>
</body>
</html>