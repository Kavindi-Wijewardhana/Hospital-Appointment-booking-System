function validateForm() {
    // පළමුව මෙවැනි Alert එකක් එනවාදැයි බලන්න
    alert("JavaScript පරීක්ෂා කරයි...");

    let uname = document.forms["loginForm"]["username"].value;
    let pass = document.forms["loginForm"]["password"].value;

    if (uname.trim() == "" || pass.trim() == "") {
        alert("කරුණාකර Username සහ Password ඇතුළත් කරන්න!");
        return false; 
    }
    return true; 
}