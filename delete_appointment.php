<?php
include 'config.php'; // Database connection එක ලබා ගැනීමට

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // දත්තය මැකීම සඳහා වන SQL විධානය
    $sql = "DELETE FROM appointments WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        // මැකීම සාර්ථක නම් නැවත Dashboard එකට යයි
        header("Location: dashbord.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>