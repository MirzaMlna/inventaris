import "./bootstrap";

// Login Show Password Start
document.getElementById("showPassword").addEventListener("change", function () {
    const passwordInput = document.getElementById("passwordInput");
    if (this.checked) {
        console.log("Password Ditampilkan");
        passwordInput.type = "text";
    } else {
        console.log("Password Disembunyikan");
        passwordInput.type = "password";
    }
});
// Login Show Password End
