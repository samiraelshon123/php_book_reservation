<?php
     $name=$_POST['name'];
     $subject=$_POST['subject'];
     include_once("conn.php");
     session_start();
     if(isset($_POST['Give'])){
         if($_SESSION['grade']=="grade_1"){
            if($subject == "Technical Writing"){
                 $results = mysqli_query($conn, "UPDATE grade_1 SET Technical_Writing = 'recieved' WHERE name = '$name'");
                 echo "<script>alert('Technical Writing is recieved')</script>";
            }else if($subject == "Physics"){
                $results = mysqli_query($conn, "UPDATE grade_1 SET Physics = 'recieved'WHERE name = '$name'");
                echo "<script>alert('Physics is recieved')</script>";
            }else if($subject == "Programming 1"){
                $results = mysqli_query($conn, "UPDATE grade_1 SET Programming_1 = 'recieved'WHERE name = '$name'");
                echo "<script>alert('Programming 1 is recieved')</script>";
            }else if($subject == "Math 0"){
                $results = mysqli_query($conn, "UPDATE grade_1 SET Math_0 = 'recieved'WHERE name = '$name'");
                echo "<script>alert('Math 0 is recieved')</script>";
            }else if($subject == "Introduction To Computer"){
                $results = mysqli_query($conn, "UPDATE grade_1 SET Introduction_To_Computer = 'recieved'WHERE name = '$name'");
                echo "<script>alert('Introduction To Computer is recieved')</script>";
            }
         }else  if($_SESSION['grade']=="grade_2"){
            if($subject == "Programming 2"){
                $results = mysqli_query($conn, "UPDATE grade_2 SET Programming_2 = 'recieved'WHERE name = '$name'");
                echo "<script>alert('Programming 2 is recieved')</script>";
           }else if($subject == "Data Structure"){
               $results = mysqli_query($conn, "UPDATE grade_2 SET Data_Structure = 'recieved'WHERE name = '$name'");
               echo "<script>alert('Data Structure is recieved')</script>";
           }else if($subject == "File Structure"){
               $results = mysqli_query($conn, "UPDATE grade_2 SET File_Structure = 'recieved'WHERE name = '$name'");
               echo "<script>alert('File Structure is recieved')</script>";
           }else if($subject == "Operating System"){
               $results = mysqli_query($conn, "UPDATE grade_2 SET Operating_System = 'recieved'WHERE name = '$name'");
               echo "<script>alert('Operating System is recieved')</script>";
           }else if($subject == "Logic"){
               $results = mysqli_query($conn, "UPDATE grade_2 SET Logic = 'recieved'WHERE name = '$name'");
               echo "<script>alert('Logic is recieved')</script>";
           }
        }else  if($_SESSION['grade']=="grade_3"){
            if($subject == "Java FX"){
                $results = mysqli_query($conn, "UPDATE grade_3 SET Java_FX = 'recieved'WHERE name = '$name'");
                echo "<script>alert('Java FX is recieved')</script>";
           }else if($subject == "Data Base"){
               $results = mysqli_query($conn, "UPDATE grade_3 SET Data_Base = 'recieved'WHERE name = '$name'");
               echo "<script>alert('Data Base is recieved')</script>";
           }else if($subject == "Software Engineering"){
               $results = mysqli_query($conn, "UPDATE grade_3 SET Software_Engineering = 'recieved'WHERE name = '$name'");
               echo "<script>alert('Software Engineering is recieved')</script>";
           }else if($subject == "Network"){
               $results = mysqli_query($conn, "UPDATE grade_3 SET Network = 'recieved'WHERE name = '$name'");
               echo "<script>alert('Network is recieved')</script>";
           }else if($subject == "Modeling"){
               $results = mysqli_query($conn, "UPDATE grade_3 SET Modeling = 'recieved'WHERE name = '$name'");
               echo "<script>alert('Modeling is recieved')</script>";
           }
        }else  if($_SESSION['grade']=="grade_4"){
            if($subject == "Machine Learning"){
                $results = mysqli_query($conn, "UPDATE grade_4 SET Machine_Learning = 'recieved'WHERE name = '$name'");
                echo "<script>alert('Machine Learning is recieved')</script>";
           }else if($subject == "Network 2"){
               $results = mysqli_query($conn, "UPDATE grade_4 SET Network_2 = 'recieved'WHERE name = '$name'");
               echo "<script>alert('Network 2 is recieved')</script>";
           }else if($subject == "Software Egineering 2"){
               $results = mysqli_query($conn, "UPDATE grade_4 SET Software_Egineering_2 = 'recieved'WHERE name = '$name'");
               echo "<script>alert('Software Egineering 2 is recieved')</script>";
           }else if($subject == "Data Base 2"){
               $results = mysqli_query($conn, "UPDATE grade_4 SET Data_Base_2 = 'recieved'WHERE name = '$name'");
               echo "<script>alert('Data Base 2 is recieved')</script>";
           }
        }
     }
?>