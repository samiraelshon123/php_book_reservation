<?php
    include_once('connection.php');
    session_start();
    $name = $_POST['name'];
    if(isset($_POST['reserve2'])){
        $reserved = $_POST['select_book'];
    }
    $book1='not reserved';
    $book2='not reserved';
    $book3='not reserved';
    $book4='not reserved';
    $book5='not reserved';
        if(($_SESSION['grade']=="grade_1")){
            if($reserved=="Technical Writing"){
                $book1='reserved';
                $sql_state = mysqli_query($conn,"INSERT INTO grade_1(name, Technical_Writing, Physics, Programming_1, Math_0, Introduction_To_Computer)
                VALUES('$name', '$book1', '$book2', '$book3', '$book4', '$book5')");
                
            }else if($reserved=="Physics"){
                $book2='reserved';
                $sql_state = mysqli_query($conn,"INSERT INTO grade_1(name, Technica_Writing, Physics, Programming_1, Math_0, Introduction_To_Computer)
                VALUES('$name', '$book1', '$book2', '$book3', '$book4', '$book5')");
                
            }else if($reserved=="Programming 1"){
                $book3='reserved';
                $sql_state = mysqli_query($conn,"INSERT INTO grade_1(name, Technical_Writing, Physics, Programming_1, Math_0, Introduction_To_Computer)
                VALUES('$name', '$book1', '$book2', '$book3', '$book4', '$book5')");
                
            }else if($reserved=="Math 0"){
                $book4='reserved';
                $sql_state = mysqli_query($conn,"INSERT INTO grade_1(name, Technical_Writing, Physics, Programming_1, Math_0, Introduction_To_Computer)
                VALUES('$name', '$book1', '$book2', '$book3', '$book4', '$book5')");
                
            }else if($reserved=="Introduction To Computer"){
                $book5='reserved';
                $sql_state = mysqli_query($conn,"INSERT INTO grade_1(name, Technical_Writing, Physics, Programming_1, Math_0, Introduction_To_Computer)
                VALUES('$name', '$book1', '$book2', '$book3', '$book4', '$book5')");
                
            }else{
                echo "<script>alert('this book not found')</script>";
            }
            
            if(isset($sql_state)){
                echo "<script>alert('book is reserved')</script>";
            }else{
                echo "<script>alert('book is not reserved')</script>";
            }

        }else if(($_SESSION['grade']=="grade_2")){
            if($reserved=="Programming 2"){
                $book1='reserved';
                $sql_state = mysqli_query($conn,"INSERT INTO grade_2(name, Programming_2, Data_Structure, File_Structure, Operating_System, Logic)
                VALUES('$name', '$book1', '$book2', '$book3', '$book4', '$book5')");
            }else if($reserved=="Data Structure"){
                $book2='reserved';
                $sql_state = mysqli_query($conn,"INSERT INTO grade_2(name, Programming_2, Data_Structure, File_Structure, Operating_System, Logic)
                VALUES('$name', '$book1', '$book2', '$book3', '$book4', '$book5')");
            }else if($reserved=="File Structure"){
                $book3='reserved';
                $sql_state = mysqli_query($conn,"INSERT INTO grade_2(name, Programming_2, Data_Structure, File_Structure, Operating_System, Logic)
                VALUES('$name', '$book1', '$book2', '$book3', '$book4', '$book5')");
            }else if($reserved=="Operating System"){
                $book4='reserved';
                $sql_state = mysqli_query($conn,"INSERT INTO grade_2(name, Programming_2, Data_Structure, File_Structure, Operating_System, Logic)
                VALUES('$name', '$book1', '$book2', '$book3', '$book4', '$book5')");
            }else if($reserved=="Logic"){
                $book5='reserved';
                $sql_state = mysqli_query($conn,"INSERT INTO grade_2(name, Programming_2, Data_Structure, File_Structure, Operating_System, Logic)
                VALUES('$name', '$book1', '$book2', '$book3', '$book4', '$book5')");
            }else{
                echo "<script>alert('this book not found')</script>";
            }
            
            if(isset($sql_state)){
                echo "<script>alert('book is reserved')</script>";
            }else{
                echo "<script>alert('book is not reserved')</script>";
            }
        }else if(($_SESSION['grade']=="grade_3")){
            if($reserved=="Java FX"){
                $book1='reserved';
                $sql_state = mysqli_query($conn,"INSERT INTO grade_3(name, Java_FX, Data_Base, Software_Engineering, Network, Modeling)
                VALUES('$name', '$book1', '$book2', '$book3', '$book4', '$book5')");
            }else if($reserved=="Data Base"){
                $book2='reserved';
                $sql_state = mysqli_query($conn,"INSERT INTO grade_3(name, Java_FX, Data_Base, Software_Engineering, Network, Modeling)
                VALUES('$name', '$book1', '$book2', '$book3', '$book4', '$book5')");
            }else if($reserved=="Software Engineering"){
                $book3='reserved';
                $sql_state = mysqli_query($conn,"INSERT INTO grade_3(name, Java_FX, Data_Base, Software_Engineering, Network, Modeling)
                VALUES('$name', '$book1', '$book2', '$book3', '$book4', '$book5')");
            }else if($reserved=="Network"){
                $book4='reserved';
                $sql_state = mysqli_query($conn,"INSERT INTO grade_3(name, Java_FX, Data_Base, Software_Engineering, Network, Modeling)
                VALUES('$name', '$book1', '$book2', '$book3', '$book4', '$book5')");
            }else if($reserved=="Modeling"){
                $book5='reserved';
                $sql_state = mysqli_query($conn,"INSERT INTO grade_3(name, Java_FX, Data_Base, Software_Engineering, Network, Modeling)
                VALUES('$name', '$book1', '$book2', '$book3', '$book4', '$book5')");
            }else{
                echo "<script>alert('this book not found')</script>";
            }
            
            if(isset($sql_state)){
                echo "<script>alert('book is reserved')</script>";
            }else{
                echo "<script>alert('book is not reserved')</script>";
            }
        }else if(($_SESSION['grade']=="grade_4")){
            if($reserved=="Machine Learning"){
                $book1='reserved';
                $sql_state = mysqli_query($conn,"INSERT INTO grade_4(name, Machine_Learning, Network_2, Software_Engineering_2, Data_Base_2)
                VALUES('$name', '$book1', '$book2', '$book3', '$book4')");
            }else if($reserved=="Network 2"){
                $book2='reserved';
                $sql_state = mysqli_query($conn,"INSERT INTO grade_4(name, Machine_Learning, Network_2, Software_Engineering_2, Data_Base_2)
                VALUES('$name', '$book1', '$book2', '$book3', '$book4')");
            }else if($reserved=="Software Egineering 2"){
                $book3='reserved';
                $sql_state = mysqli_query($conn,"INSERT INTO grade_4(name, Machine_Learning, Network_2, Software_Engineering_2, Data_Base_2)
                VALUES('$name', '$book1', '$book2', '$book3', '$book4')");
            }else if($reserved=="Data Base 2"){
                $book4='reserved';
                $sql_state = mysqli_query($conn,"INSERT INTO grade_4(name, Machine_Learning, Network_2, Software_Engineering_2, Data_Base_2)
                VALUES('$name', '$book1', '$book2', '$book3', '$book4')");
            }else{
                echo "<script>alert('this book not found')</script>";
            }
            
            if(isset($sql_state)){
                echo "<script>alert('book is reserved')</script>";
            }else{
                echo "<script>alert('book is not reserved')</script>";
            }
        }