var attempt = 3;

function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    
    if(username == "John" && password == "Test") {
        alert("Login successful");
        window.location = "adminInfo.html";
        return false;
    } else {
        attempt--;
        alert("You have "+attempt+"attempts left");
        if(attempt == 0) {
            document.getElementById("username").disabled=true;
            document.getElementById("password").disabled=true;
            document.getElementById("submit").disabled=true;
            return false;
        }
    }
}
