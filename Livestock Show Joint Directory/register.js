//Name and Password from register form
var username = document.getElementById('username');
var password = document.getElementById('password');

//Storing input from register form
function store() {
    localStorage.setItem('username', username.value);
    localStorage.setItem('password', password.value);
}

//check if stored daata from register-form is equal to entered data in the login-form
function verify() {
    //stored data from the register-form
    var storedUserName = localStorage.getItem('username');
    var storedPassword = localStorage.getItem('password');
    
    //entered data from the login-form
    //compare the entered values with the local storage data
    var userName = document.getElementById('userName').value;
    var userPw = document.getElementById('userPw').value;
    
    //check if stored data from the 
    if(userName.value == storedName && userPw.value == storedPw) {
        alert('You are logged in.');
        window.open("window.html");
    }else {
        alert('ERROR.');
    }
}

function register(){
    var form = document.getElementById("form_id").submit();
    if (form != "") {
        window.open("animal.html");
        console.log("success");
    }
    return;
}
