function validateDashboardForm() {
    let pName = document.getElementById("p_name").value;
    let phone = document.getElementById("phone").value;
    let dName = document.getElementById("d_name").value;
    let date = document.getElementById("app_date").value;

    if (pName.trim() == "" || phone.trim() == "" || dName.trim() == "" || date == "") {
        alert("කරුණාකර සියලුම විස්තර සම්පූර්ණ කරන්න!");
        return false;
    }
    
    if(phone.length < 10) {
        alert("කරුණාකර නිවැරදි දුරකථන අංකයක් ඇතුළත් කරන්න!");
        return false;
    }

    return true;
}