<?php

$servername="localhost";
$username="root";
$dbpassword="";
$dbname = "hpharma";
$connection=mysqli_connect($servername,$username,$dbpassword,$dbname);

$errors = array();

if(isset($_POST['save'])){
    // Validate

    $input_FirstName = $_POST['First_name'];
    $input_LastName = $_POST['Last_name'];
    $input_Email = $_POST['Email'];
    $input_datepick = $_POST['date_picked'];
    $input_purpose = $_POST['purpose'];
    $input_time = $_POST['bookingTime'];

    if($input_FirstName===""){
        $errors['Error_FirstName'] = "Invalid Input";
    } 


        
    if(count($errors)==0){
        $sql = "INSERT INTO booking (firstname, lastname, email, appointmentfor, bookeddate, bookedtime) VALUES ('$input_FirstName', '$input_LastName', '$input_Email', '$input_purpose', '$input_datepick', '$input_time')";
        $data_inserted = mysqli_query($connection, $sql);
        if($data_inserted){
            echo "<script>alert('Thank You For Booking with Us🙂'); location.href='index.php';</script> ";
        } else{
            echo "<script>alert('Failed to Book a Session'); location.href='book.php';</script>";

        }
    } else{
        echo "<script>alert('Data Error'); location.href='book.php';</script>";
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