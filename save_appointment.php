<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $p_name = $_POST['p_name'];
    $phone = $_POST['phone'];
    $d_name = $_POST['d_name'];
    $date = $_POST['app_date'];

    $sql = "INSERT INTO appointments (patient_name, phone_number, doctor_name, appointment_date) 
            VALUES ('$p_name', '$phone', '$d_name', '$date')";

    if (mysqli_query($conn, $sql)) {
        echo "Appointment එක සාර්ථකව ඇතුළත් කළා! <a href='dashbord.php'>ආපසු යන්න</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>