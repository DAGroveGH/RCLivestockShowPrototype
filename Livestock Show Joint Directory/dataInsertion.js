function changeData() {
    var t = document.getElementById("tb").value;
    switch(t) {
        case "Exhibitor":
            document.getElementById("atb").setAttribute("value", "Exhibitor");
            document.getElementById("col1").setAttribute("value", "Last Name");
            document.getElementById("col2").setAttribute("value", "First Name");
            document.getElementById("col3").setAttribute("value", "Phone Number");
            document.getElementById("col4").setAttribute("value", "Email");
            document.getElementById("col5").setAttribute("value", "Street Address");
            document.getElementById("col6").setAttribute("value", "City");
            document.getElementById("col7").setAttribute("value", "State");
            document.getElementById("col8").setAttribute("value", "Postal Code");
            document.getElementById("col9").setAttribute("value", "Username");
            document.getElementById("col10").setAttribute("type", "password"");
            document.getElementById("col10").setAttribute("value", "Password"");
            break;
        case "Animal":
            document.getElementById("atb").setAttribute("value", "Animal");
            document.getElementById("col1").setAttribute("value", "Exhibitor_Num");
            document.getElementById("col2").setAttribute("value", "Breed_Num");
            document.getElementById("col3").setAttribute("value", "Breed_Letter");
            document.getElementById("col4").setAttribute("value", "Show_Name");
            document.getElementById("col5").remove();
            document.getElementById("col6").remove();
            document.getElementById("col7").remove();
            document.getElementById("col8").remove();
            document.getElementById("col9").remove();
            document.getElementById("col10").remove();
            break;
        case "Animal_Category":
            document.getElementById("atb").setAttribute("value", "Animal Category");
            document.getElementById("col1").setAttribute("value", "Breed Number");
            document.getElementById("col2").setAttribute("value", "Breed Letter");
            document.getElementById("col3").setAttribute("value", "Breed Name");
            document.getElementById("col4").remove();
            document.getElementById("col5").remove();
            document.getElementById("col6").remove();
            document.getElementById("col7").remove();
            document.getElementById("col8").remove();
            document.getElementById("col9").remove();
            document.getElementById("col10").remove();
            break;
        case "Show":
            document.getElementById("atb").setAttribute("value", "Show");
            document.getElementById("col1").setAttribute("value", "Year");
            document.getElementById("col2").setAttribute("value", "Starting Date");
            document.getElementById("col3").setAttribute("value", "Ending Date");
            document.getElementById("col4").setAttribute("value", "Type");
            document.getElementById("col5").setAttribute("name", "Location");
            document.getElementById("col6").setAttribute("value", "Show Name");
            document.getElementById("col7").setAttribute("value", "Session Number");
            document.getElementById("col8").remove();
            document.getElementById("col9").remove();
            document.getElementById("col10").remove();  
    }    