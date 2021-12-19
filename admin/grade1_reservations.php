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
        <select value =""name="subject">
            <option  selected disabled value="Please Select One">Please Select One</option>
            <option value="Technical Writing">Technical Writing</option>
            <option value="Physics">Physics</option>
            <option value="Programming 1">Programming 1</option>
            <option value="Math 0">Math 0</option>
            <option value="Introduction To Computer">Introduction To Computer</option>
        </select><br><br><br>
    <button>Show All</button>
    </form>
    </center>
</body>
</html>