
<?php
include 'config.php';
session_start();

// ලොගින් නොවී මෙම පිටුවට පැමිණීම වැළැක්වීමට
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

// දැනට ඇති appointments ලබා ගැනීම (Table එකේ පෙන්වීමට)
$query = "SELECT * FROM appointments ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="dash_style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<nav class="navbar">
    <div class="logo"><h1>Medical Center</h1></div>
    <div class="user-info">
        Welcome <span><?php echo $_SESSION['user']; ?></span>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</nav>

<div class="container">
    <div class="form-section">
        <h3>Book an Appointment</h3>
        <form id="appForm" action="save_appointment.php" method="post" onsubmit="return validateDashboardForm()">
            <input type="text" name="p_name" id="p_name" placeholder="Patient Name">
            <input type="text" name="phone" id="phone" placeholder="Phone Number">
            <input type="text" name="d_name" id="d_name" placeholder="Doctor Name">
            <input type="date" name="app_date" id="app_date">
            <button type="submit" name="submit">Save Appointment</button>
        </form>
    </div>

    <div class="table-section">
        <h3>Recent Appointments</h3>
        <table>
            <thead>
                    <th>Patient</th>
                    <th>Doctor</th>
                    <th>Date</th>
                </tr>
            </thead>
            
            
                    <tbody>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr> <td><i class="fas fa-user-circle"></i> <?php echo $row['patient_name']; ?></td>
            <td><i class="fas fa-user-md"></i> <?php echo $row['doctor_name']; ?></td>
            <td><i class="fas fa-calendar-alt"></i> <?php echo $row['appointment_date']; ?></td>
            <td>
                <a href="delete_appointment.php?id=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('මකා දැමීමට අවශ්‍ය බව සහතිකද?')">
                    Delete
                </a>
            </td>
        </tr> <?php endwhile; ?>


</tbody>

</td>
                
<td>
    <a href="delete_appointment.php?id=<?php echo $row['id']; ?>" 
       onclick="return confirm('ඔබට විශ්වාසද මෙම record එක මැකීමට අවශ්‍ය බව?')" 
       style="color: red; text-decoration: none;"></a>
</td>
    
                
            </tbody>
        </table>
    </div>
</div>

<script src="dash_script.js"></script>
 </body>
</html>