<?php

$servername="localhost";
$username="root";
$dbpassword="";
$dbname = "hpharma";
$connection=mysqli_connect($servername,$username,$dbpassword,$dbname);

$errors = array();

if(isset($_POST['save'])){
    // Validate

    $input_FulName = $_POST['fullName'];
    $input_number = $_POST['number'];
    $input_datepick = $_POST['bookingDate'];
    $input_tutor = $_POST['tutor'];
    $input_time = $_POST['bookingTime'];

    $session_date_query = "SELECT * FROM bookings WHERE bookdate='$input_datepick'";
    $date_result = mysqli_query($connection,$session_date_query);

    $session_time_query = "SELECT * FROM bookings WHERE booktime='$input_time'";
    $time_result = mysqli_query($connection,$session_time_query);


    if(empty($input_FullName)){
        $errors['Error_FullName'] = "Name cannot be blank";
        $errors['Error_field'] = "Input Error: 'A Field is empty'";
    } 
    
    if(empty($input_number)){
        $errors['Error_number'] = "Number cannot be blank";
        $errors['Error_field'] = "Input Error: 'A Field is empty.'";
    }
    
    if(empty($input_datepick)){
        $errors['Error_datepick'] = "Pick a date";
    } else if(mysqli_num_rows($date_result)&& mysqli_num_rows($time_result)>0){
        $errors['Error_datepick'] = "Date has already been booked";
        $errors['Error_field'] = "Input Error: 'Date has already been booked'";
    }

    if(empty($input_time)){
        $errors['Error_time'] = "Pick a time";
        $errors['Error_field'] = "Input Error: 'A Field is empty.'";
    } else if(mysqli_num_rows($date_result)&& mysqli_num_rows($time_result)>0){
        $errors['Error_time'] = "Time has already been booked";
        $errors['Error_field'] = "Input Error: 'Time has already been booked'";
    }

        
    if(count($errors)==0){
        $sql = "INSERT INTO bookings (user_fname, phone_number, bookdate, tutor, booktime) VALUES ('$input_FullName', '$input_number', '$input_datepick', '$input_tutor', '$input_time')";
        $data_inserted = mysqli_query($connection, $sql);
        if($data_inserted){
            echo "<script>alert('Hello, $input_FullName, your booking details:\\n\\nPhone: $input_number\\n\\nDate Booked: $input_datepick\\n\\nTime Booked: $input_time\\n\\nTutor: $input_tutor\\n\\nThank You For Booking with Us🙂'); location.href='bookings.php';</script> ";
        } else{
            echo "<script>alert('Failed to Book a Session'); location.href='bookings.php';</script>";

        }
    } else{
        echo "<script>alert('Data Error'); location.href='bookings.php';</script>";
    }

     
    
}


    if($connection) {
        return true;

    } else{
        return false;
        mysqli_connect_error();
    }



mysqli_close($connection);

?>