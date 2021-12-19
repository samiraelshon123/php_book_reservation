<?php
    $subject = $_POST['subject'];
    include_once("conn.php");
    session_start();
    if(isset($_POST['Available'])){
        if($_SESSION['grade']=="grade_1"){
            if($subject == "Technical Writing"){
                 $results = mysqli_query($conn, "UPDATE books1 SET Technical_Writing = 'Available'");
                 echo "<script>alert('Technical Writing is available')</script>";

            }else if($subject == "Physics"){
                $results = mysqli_query($conn, "UPDATE books1 SET Physics = 'Available'");
                echo "<script>alert('Physics is available')</script>";
            }else if($subject == "Programming 1"){
                $results = mysqli_query($conn, "UPDATE books1 SET Programming_1 = 'Available'");
                echo "<script>alert('Programming 1 is available')</script>";
            }else if($subject == "Math 0"){
                $results = mysqli_query($conn, "UPDATE books1 SET Math_0 = 'Available'");
                echo "<script>alert('Math 0 is available')</script>";
            }else if($subject == "Introduction To Computer"){
                $results = mysqli_query($conn, "UPDATE books1 SET Introduction_To_Computer = 'Available'");
                echo "<script>alert('Introduction To Computer is available')</script>";
            }
         }else  if($_SESSION['grade']=="grade_2"){
            if($subject == "Programming 2"){
                $results = mysqli_query($conn, "UPDATE books2 SET Programming_2 = 'Available'");
                echo "<script>alert('Programming is available')</script>";
           }else if($subject == "Data Structure"){
               $results = mysqli_query($conn, "UPDATE books2 SET Data_Structure = 'Available'");
               echo "<script>alert('Data Structure is available')</script>";
           }else if($subject == "File Structure"){
               $results = mysqli_query($conn, "UPDATE books2 SET File_Structure = 'Available'");
               echo "<script>alert('File Structure is available')</script>";
           }else if($subject == "Operating System"){
               $results = mysqli_query($conn, "UPDATE books2 SET Operating_System = 'Available'");
               echo "<script>alert('Operating System is available')</script>";
           }else if($subject == "Logic is available"){
               $results = mysqli_query($conn, "UPDATE books2 SET Logic = 'Available'");
               echo "<script>alert('Logic is available')</script>";
           }
        }else  if($_SESSION['grade']=="grade_3"){
            if($subject == "Java FX"){
                $results = mysqli_query($conn, "UPDATE books3 SET Java_FX = 'Available'");
                echo "<script>alert('Java FX is available')</script>";
           }else if($subject == "Data Base"){
               $results = mysqli_query($conn, "UPDATE books3 SET Data_Base = 'Available'");
               echo "<script>alert('Data Base is available')</script>";
           }else if($subject == "Software Engineering"){
               $results = mysqli_query($conn, "UPDATE books3 SET Software_Engineering = 'Available'");
               echo "<script>alert('Software Engineering is available')</script>";
           }else if($subject == "Network"){
               $results = mysqli_query($conn, "UPDATE books3 SET Network = 'Available'");
               echo "<script>alert('Network is available')</script>";
           }else if($subject == "Modeling"){
               $results = mysqli_query($conn, "UPDATE books3 SET Modeling = 'Available'");
               echo "<script>alert('Modeling is available')</script>";
           }
        }else  if($_SESSION['grade']=="grade_4"){
            if($subject == "Machine Learning"){
                $results = mysqli_query($conn, "UPDATE books4 SET Machine_Learning = 'Available'");
                echo "<script>alert('Machine Learning is available')</script>";
           }else if($subject == "Network 2"){
               $results = mysqli_query($conn, "UPDATE books4 SET Network_2 = 'Available'");
               echo "<script>alert('Network 2 is available')</script>";
           }else if($subject == "Software Egineering 2 is available"){
               $results = mysqli_query($conn, "UPDATE books4 SET Software_Egineering_2 = 'Available'");
               echo "<script>alert('Software Egineering 2 is available')</script>";
           }else if($subject == "Data Base 2"){
               $results = mysqli_query($conn, "UPDATE books4 SET Data_Base_2 = 'Available'");
               echo "<script>alert('Data Base 2 is available')</script>";
           }
        }
    }else if(isset($_POST['Not_Available'])){
        if($_SESSION['grade']=="grade_1"){
            if($subject == "Technical Writing"){
                 $results = mysqli_query($conn, "UPDATE books1 SET Technical_Writing = 'Not_Available'");
                 echo "<script>alert('Technical Writing is not available')</script>";
            }else if($subject == "Physics"){
                $results = mysqli_query($conn, "UPDATE books1 SET Physics = 'Not_Available'");
                echo "<script>alert('Physics is not available')</script>";
            }else if($subject == "Programming 1"){
                $results = mysqli_query($conn, "UPDATE books1 SET Programming_1 = 'Not_Available'");
                echo "<script>alert('Programming 1 is not available')</script>";
            }else if($subject == "Math 0"){
                $results = mysqli_query($conn, "UPDATE books1 SET Math_0 = 'Not_Available'");
                echo "<script>alert('Math 0 is not available')</script>";
            }else if($subject == "Introduction To Computer"){
                $results = mysqli_query($conn, "UPDATE books1 SET Introduction_To_Computer = 'Not_Available'");
                echo "<script>alert('Introduction To Computer is not available')</script>";
            }
         }else  if($_SESSION['grade']=="grade_2"){
            if($subject == "Programming 2"){
                $results = mysqli_query($conn, "UPDATE books2 SET Programming_2 = 'Not_Available'");
                echo "<script>alert('Programming 2 is not available')</script>";
           }else if($subject == "Data Structure"){
               $results = mysqli_query($conn, "UPDATE books2 SET Data_Structure = 'Not_Available'");
               echo "<script>alert('Data Structure is not available')</script>";
           }else if($subject == "File Structure"){
               $results = mysqli_query($conn, "UPDATE books2 SET File_Structure = 'Not_Available'");
               echo "<script>alert('File Structure is not available')</script>";
           }else if($subject == "Operating System"){
               $results = mysqli_query($conn, "UPDATE books2 SET Operating_System = 'Not_Available'");
               echo "<script>alert('Operating System is not available')</script>";
           }else if($subject == "Logic"){
               $results = mysqli_query($conn, "UPDATE books2 SET Logic = 'Not_Available'");
               echo "<script>alert('Logic is not available')</script>";
           }
        }else  if($_SESSION['grade']=="grade_3"){
            if($subject == "Java FX"){
                $results = mysqli_query($conn, "UPDATE books3 SET Java_FX = 'Not_Available'");
                echo "<script>alert('Java FX is not available')</script>";
           }else if($subject == "Data Base"){
               $results = mysqli_query($conn, "UPDATE books3 SET Data_Base = 'Not_Available'");
               echo "<script>alert('Data Base is not available')</script>";
           }else if($subject == "Software Engineering"){
               $results = mysqli_query($conn, "UPDATE books3 SET Software_Engineering = 'Not_Available'");
               echo "<script>alert('Software Engineering is not available')</script>";
           }else if($subject == "Network"){
               $results = mysqli_query($conn, "UPDATE books3 SET Network = 'Not_Available'");
               echo "<script>alert('Network is not available')</script>";
           }else if($subject == "Modeling"){
               $results = mysqli_query($conn, "UPDATE books3 SET Modeling = 'Not_Available'");
               echo "<script>alert('Modeling is not available')</script>";
           }
        }else  if($_SESSION['grade']=="grade_4"){
            if($subject == "Machine Learning"){
                $results = mysqli_query($conn, "UPDATE books4 SET Machine_Learning = 'Not_Available'");
                echo "<script>alert('Machine Learning is not available')</script>";
           }else if($subject == "Network 2"){
               $results = mysqli_query($conn, "UPDATE books4 SET Network_2 = 'Not_Available'");
               echo "<script>alert('Network 2 is not available')</script>";
           }else if($subject == "Software Egineering 2"){
               $results = mysqli_query($conn, "UPDATE books4 SET Software_Egineering_2 = 'Not_Available'");
               echo "<script>alert('Software Egineering 2 is not available')</script>";
           }else if($subject == "Data Base 2"){
               $results = mysqli_query($conn, "UPDATE books4 SET Data_Base_2 = 'Not_Available'");
               echo "<script>alert('Data Base 2 is not available')</script>";
           }
        }
    }
