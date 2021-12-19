<?php
    include_once("conn.php");
    session_start();
    $book = $_POST['subject'];
    $results;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <h1>All Reservations Of <?php echo "$book"; ?></h1>
     <?php 
        if($_SESSION['grade']=="grade_1"){
            if($book == "Technical Writing"){
                $results = mysqli_query($conn, "SELECT * FROM grade_1 WHERE Technical_Writing='reserved'");
                while($row = mysqli_fetch_array($results)){?>
                    <h3 style="font-size: 60px;color: black;"><?php echo $row['name']; ?></h3><br><br>
                <?php
                }
            }else if($book == "Physics"){
                $results = mysqli_query($conn, "SELECT * FROM grade_1 WHERE Physics='reserved'");
                while($row = mysqli_fetch_array($results)){?>
                    <h3 style="font-size: 60px;color: black;"><?php echo $row['name']; ?></h3><br><br>
                <?php
                }
            }else if($book == "Programming 1"){
                $results = mysqli_query($conn, "SELECT * FROM grade_1 WHERE Programming_1='reserved'");
                while($row = mysqli_fetch_array($results)){?>
                    <h3 style="font-size: 60px;color: black;"><?php echo $row['name']; ?></h3><br><br>
                <?php
                }
            }else if($book == "Math 0"){
                $results = mysqli_query($conn, "SELECT * FROM grade_1 WHERE Math_0='reserved'");
                while($row = mysqli_fetch_array($results)){?>
                    <h3 style="font-size: 60px;color: black;"><?php echo $row['name']; ?></h3><br><br>
                <?php
                }
            }else if($book == "Introduction To Computer"){
                $results = mysqli_query($conn, "SELECT * FROM grade_1 WHERE Introduction_To_Computer='reserved'");
                while($row = mysqli_fetch_array($results)){?>
                    <h3 style="font-size: 60px;color: black;"><?php echo $row['name']; ?></h3><br><br>
                <?php
                }
            }else{
                echo "not book";
            }
        }else if($_SESSION['grade']=="grade_2"){
            if($book == "Programming 2"){
                $results = mysqli_query($conn, "SELECT * FROM grade_2 WHERE Programming_2='reserved'");
                while($row = mysqli_fetch_array($results)){?>
                    <h3 style="font-size: 60px;color: black;"><?php echo $row['name']; ?></h3><br><br>
                <?php
                }
            }else if($book == "Data Structure"){
                $results = mysqli_query($conn, "SELECT * FROM grade_2 WHERE Data_Structure='reserved'");
                while($row = mysqli_fetch_array($results)){?>
                    <h3 style="font-size: 60px;color: black;"><?php echo $row['name']; ?></h3><br><br>
                <?php
                }
            }else if($book == "File Structure"){
                $results = mysqli_query($conn, "SELECT * FROM grade_2 WHERE File_Structure='reserved'");
                while($row = mysqli_fetch_array($results)){?>
                    <h3 style="font-size: 60px;color: black;"><?php echo $row['name']; ?></h3><br><br>
                <?php
                }
            }else if($book == "Operating System"){
                $results = mysqli_query($conn, "SELECT * FROM grade_2 WHERE Operating_System='reserved'");
                while($row = mysqli_fetch_array($results)){?>
                    <h3 style="font-size: 60px;color: black;"><?php echo $row['name']; ?></h3><br><br>
                <?php
                }
            }else if($book == "Logic"){
                $results = mysqli_query($conn, "SELECT * FROM grade_2 WHERE Logic='reserved'");
                while($row = mysqli_fetch_array($results)){?>
                    <h3 style="font-size: 60px;color: black;"><?php echo $row['name']; ?></h3><br><br>
                <?php
                }
            }
        }else if($_SESSION['grade']=="grade_3"){
            if($book == "Java FX"){
                $results = mysqli_query($conn, "SELECT * FROM grade_3 WHERE Java_FX='reserved'");
                while($row = mysqli_fetch_array($results)){?>
                    <h3 style="font-size: 60px;color: black;"><?php echo $row['name']; ?></h3><br><br>
                <?php
                }
            }else if($book == "Data Base"){
                $results = mysqli_query($conn, "SELECT * FROM grade_3 WHERE Data_Base='reserved'");
                while($row = mysqli_fetch_array($results)){?>
                    <h3 style="font-size: 60px;color: black;"><?php echo $row['name']; ?></h3><br><br>
                <?php
                }
            }else if($book == "Software Engineering"){
                $results = mysqli_query($conn, "SELECT * FROM grade_3 WHERE Software_Engineering='reserved'");
                while($row = mysqli_fetch_array($results)){?>
                    <h3 style="font-size: 60px;color: black;"><?php echo $row['name']; ?></h3><br><br>
                <?php
                }
            }else if($book == "Network"){
                $results = mysqli_query($conn, "SELECT * FROM grade_3 WHERE Network='reserved'");
                while($row = mysqli_fetch_array($results)){?>
                    <h3 style="font-size: 60px;color: black;"><?php echo $row['name']; ?></h3><br><br>
                <?php
                }
            }else if($book == "Modeling"){
                $results = mysqli_query($conn, "SELECT * FROM grade_3 WHERE Modeling='reserved'");
                while($row = mysqli_fetch_array($results)){?>
                    <h3 style="font-size: 60px;color: black;"><?php echo $row['name']; ?></h3><br><br>
                <?php
                }
            }
        }else if($_SESSION['grade']=="grade_4"){
            if($book == "Machine Learning"){
                $results = mysqli_query($conn, "SELECT * FROM grade_4 WHERE Machine_Learning='reserved'");
                while($row = mysqli_fetch_array($results)){?>
                    <h3 style="font-size: 60px;color: black;"><?php echo $row['name']; ?></h3><br><br>
                <?php
                }
            }else if($book == "Network 2"){
                $results = mysqli_query($conn, "SELECT * FROM grade_4 WHERE Network_2='reserved'");
                while($row = mysqli_fetch_array($results)){?>
                    <h3 style="font-size: 60px;color: black;"><?php echo $row['name']; ?></h3><br><br>
                <?php
                }
            }else if($book == "Software Egineering 2"){
                $results = mysqli_query($conn, "SELECT * FROM grade_4 WHERE Software_Egineering_2='reserved'");
                while($row = mysqli_fetch_array($results)){?>
                    <h3 style="font-size: 60px;color: black;"><?php echo $row['name']; ?></h3><br><br>
                <?php
                }
            }else if($book == "Data Base 2"){
                $results = mysqli_query($conn, "SELECT * FROM grade_4 WHERE Data_Base_2='reserved'");
                while($row = mysqli_fetch_array($results)){?>
                    <h3 style="font-size: 60px;color: black;"><?php echo $row['name']; ?></h3><br><br>
                <?php
                }
            }
        }else{
            echo "not grade";
        }?>
    </center>
</body>
</html>