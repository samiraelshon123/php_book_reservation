<?php
    session_start();
    if(isset($_POST['Show_Reservations'])){
        if(($_SESSION['grade']=="grade_1")){
            header('location: grade1_reservations.php');
        }else if(($_SESSION['grade']=="grade_2")){
            header('location: grade2_reservations.php');
        }else if(($_SESSION['grade']=="grade_3")){
            header('location: grade3_reservations.php');
        }else if(($_SESSION['grade']=="grade_4")){
            header('location: grade4_reservations.php');
        }
    }else if(isset($_POST['Give_A_Book'])){
        if(($_SESSION['grade']=="grade_1")){
            header('location: grade1_give.php');
        }else if(($_SESSION['grade']=="grade_2")){
            header('location: grade2_give.php');
        }else if(($_SESSION['grade']=="grade_3")){
            header('location: grade3_give.php');
        }else if(($_SESSION['grade']=="grade_4")){
            header('location: grade4_give.php');
        }
    }else if(isset($_POST['Make_A_Book_A_Available'])){
        if(($_SESSION['grade']=="grade_1")){
            header('location: grade1_available.php');
        }else if(($_SESSION['grade']=="grade_2")){
            header('location: grade2_available.php');
        }else if(($_SESSION['grade']=="grade_3")){
            header('location: grade3_available.php');
        }else if(($_SESSION['grade']=="grade_4")){
            header('location: grade4_available.php');
        }
    }
?>