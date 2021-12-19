<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css">
</head>
<body>
    <h1>Available Books : </h1>
</body>
</html>
<?php 
$result;
include_once("connection.php");
session_start();
if (isset($_POST['reserve1'])){
    if(($_SESSION['grade']=="grade_1")){
        header('location: grade1.php');
    }else if(($_SESSION['grade']=="grade_2")){
        header('location: grade2.php');
    }else if(($_SESSION['grade']=="grade_3")){
        header('location: grade3.php');
    }else if(($_SESSION['grade']=="grade_4")){
        header('location: grade4.php');
    }   
}else if(isset($_POST['show_available1'])){
    if(($_SESSION['grade']=="grade_1")){
        $result = mysqli_query($conn, "SELECT * FROM books1");
        while ($row = mysqli_fetch_array($result)){
            if($row['Technical_Writing']=='Available'){
                 echo "<h2 style='font-size: 40px;color: black;'>Technical Writing</h2><br>";
            }
            if($row['Physics']=='Available'){
                echo "<h2 style='font-size: 40px;color: black;'>Physics</h2><br>";
            }
            if($row['Programming_1']=='Available'){
                echo "<h2 style='font-size: 40px;color: black;'>Programming 1</h2><br>";
            }
            if($row['Math_0']=='Available'){
                echo "<h2 style='font-size: 40px;color: black;'>Math 0</h2><br>";
            }
            if($row['Introduction_To_Computer']=='Available'){
                echo "<h2 style='font-size: 40px;color: black;'>Introduction To Computer</h2><br>";
            }
        }
    }else if(($_SESSION['grade']=="grade_2")){
        $result = mysqli_query($conn, "SELECT * FROM books2");
        while ($row = mysqli_fetch_array($result)){
            if($row['Programming_2']=='Available'){
                 echo "<h2 style='font-size: 40px;color: black;'>Programming 2</h2><br>";
            }
            if($row['Data_Structure']=='Available'){
                echo "<h2 style='font-size: 40px;color: black;'>Data Structure</h2><br>";
            }
            if($row['File_Structure']=='Available'){
                echo "<h2 style='font-size: 40px;color: black;'>File Structure</h2><br>";
            }
            if($row['Operating_System']=='Available'){
                echo "<h2 style='font-size: 40px;color: black;'>Operating System</h2><br>";
            }
            if($row['Logic']=='Available'){
                echo "<h2 style='font-size: 40px;color: black;'>Logic</h2><br>";
            }
        }
    }else if(($_SESSION['grade']=="grade_3")){
        $result = mysqli_query($conn, "SELECT * FROM books3");
        while ($row = mysqli_fetch_array($result)){
            if($row['Java_FX']=='Available'){
                 echo "<h2 style='font-size: 40px;color: black;'>Java FX</h2><br>";
            }
            if($row['Data_Base']=='Available'){
                echo "<h2 style='font-size: 40px;color: black;'>Data Base</h2><br>";
            }
            if($row['Software_Engineering']=='Available'){
                echo "<h2 style='font-size: 40px;color: black;'>Software Engineering</h2><br>";
            }
            if($row['Network']=='Available'){
                echo "<h2 style='font-size: 40px;color: black;'>Network</h2><br>";
            }
            if($row['Modeling']=='Available'){
                echo "<h2 style='font-size: 40px;color: black;'>Modeling</h2><br>";
            }
        }
    }else if(($_SESSION['grade']=="grade_4")){
        $result = mysqli_query($conn, "SELECT * FROM books4");
        while ($row = mysqli_fetch_array($result)){
            if($row['Machine_Learning']=='Available'){
                 echo "<h2 style='font-size: 40px;color: black;'>Machine Learning</h2><br>";
            }
            if($row['Network_2']=='Available'){
                echo "<h2 style='font-size: 40px;color: black;'>Network 2</h2><br>";
            }
            if($row['Software_Engineering_2']=='Available'){
                echo "<h2 style='font-size: 40px;color: black;'>Software Engineering 2</h2><br>";
            }
            if($row['Data_Base_2']=='Available'){
                echo "<h2 style='font-size: 40px;color: black;'>Data Base 2</h2><br>";
            }
        }
    }   
}