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

/*jQuery(document).ready(function() {
    Parse.$=jQuery;
    Parse.initialize("...","...");
    
    $('.form-logout').on('submit', function(e)) {
        //Prevent default submit event
        e.preventDefault();    
    }
    
    console.log("Performing submit");
    
    //logout current user
    
    if(Parse.User.current()) {
        Parse.User.logOut();
    }

    // check if really logged out
    
    if (Parse.User.current())
        console.log("Failed to log out!");
    }

    // do redirect
    //window.location.replace("Sign_In.html");
    // or
    window.location.href = "/index(V2).html";
    });
});*/