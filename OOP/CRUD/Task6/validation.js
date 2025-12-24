
function validateSignup() {

    let emailPattern = /^\S+@\S+\.\S+$/;

    let passPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z\d]).{8,}$/;

    let em=document.getElementById("email").value;
    
    let pass=document.getElementById("password").value;

    let com_pass=document.getElementById("confirm").value;


    if (!emailPattern.test(em)) {

        alert("Invalid Email"); return false;
    }

    if (!passPattern.test(pass)) {

        alert("Password must be strong"); return false;

    }

    if (pass !== com_pass) {

        alert("Passwords do not match"); return false;

    }

    return true;


}
