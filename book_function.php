<?php

$servername="localhost";
$username="root";
$dbpassword="";
$dbname = "hpharma";
$connection=mysqli_connect($servername,$username,$dbpassword,$dbname);

$errors = array();

if(isset($_POST['save'])){
    //POST variables
    $input_FirstName = $_POST['First_name'];
    $input_LastName = $_POST['Last_name'];
    $input_Email = $_POST['Email'];
    $input_datepick = $_POST['date_picked'];
    $input_purpose = $_POST['purpose'];
    $input_time = $_POST['bookingTime'];

    //Sql query to select booking records based on date
    $session_datepick = "SELECT * FROM booking WHERE bookeddate='$input_datepick'";
    $date_result = mysqli_query($connection,$session_datepick);

    //Sql query to select booking records based on time
    $session_time_query = "SELECT * FROM booking WHERE bookedtime='$input_time'";
    $time_result = mysqli_query($connection,$session_time_query);

    //error checking
    if(empty($input_FirstName)){
        $errors['Error_FirstName'] = "Invalid Input";
    }

    if(empty($input_datepick)){
        $errors['Error_datepick'] = "Pick a date";
    } else if(mysqli_num_rows($date_result)&& mysqli_num_rows($time_result)>0){
        $errors['Error_datepick'] = "Session has already been booked";
    }

    if(empty($input_time)){
        $errors['Error_time'] = "Pick a time";
    } else if(mysqli_num_rows($date_result)&& mysqli_num_rows($time_result)>0){
        $errors['Error_time'] = "Time has already been booked";
    }

    //query to insert data into database if there are no errors
    if(count($errors)==0){
        $sql = "INSERT INTO booking (firstname, lastname, email, appointmentfor, bookeddate, bookedtime) VALUES ('$input_FirstName', '$input_LastName', '$input_Email', '$input_purpose', '$input_datepick', '$input_time')";
        $data_inserted = mysqli_query($connection, $sql);
        if($data_inserted){
            echo "<script>alert('Thank You For Booking with Us🙂'); location.href='index.php';</script> ";
        } else{
            echo "<script>alert('Failed to Book a Session'); location.href='book.php';</script>";

        }
    } else{
            echo "<script>alert('Data'); location.href='book.php';</script>";

        }


}


    if($connection) {
        return true;

    } else{
        return false;
        mysqli_connect_error();
    }



mysqli_close($connection);
