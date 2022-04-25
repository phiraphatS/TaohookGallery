<?php
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['book_order'])){
            $cus_name = mysqli_real_escape_string($conn, $_POST['flname']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $tel = mysqli_real_escape_string($conn, $_POST['tel']);
            $date = mysqli_real_escape_string($conn, $_POST['date']);

            if (empty($cus_name)) {
                array_push($errors, "กรุณาใส่ชื่อและนามสกุล");
            }
            if (empty($email)){
                array_push($errors, "กรุณาใส่อีเมล");
            }
            if (empty($tel)){
                array_push($errors, "กรุณาใส่เบอร์โทร");
            }
            if (empty($date)){
                array_push($errors, "กรุณาใส่วันที่และเวลา");
            }
        
        $user_check_query = "SELECT * FROM book_db WHERE time_book = '$date'";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) {
            if ($result['time_book'] === $date) {
                array_push($errors, "ช่วงเวลานี้มีคนจองแล้ว โปรดจองเวลาอื่น");
            }
        }
        if(count($errors) == 0){
            $sql = "INSERT INTO book_db (cus_fullname, cus_email, cus_tel, time_book) VALUES ('$cus_name','$email','$tel','$date')";
            mysqli_query($conn, $sql);

            $_SESSION['success'] = "จองคิวสำเร็จ";
            header('location: book.php');
        }else{
            array_push($errors, "ช่วงเวลานี้ไม่ว่าง");
            $_SESSION['error'] = "จองคิวไม่สำเร็จ โปรดเลือกจองช่วงเวลาอื่น";
            header("location: book.php");
        }
    }
    
?>