   function changeData() {
       var t = document.getElementById("tb").value;
       switch(t) {
            case "Exhibitor":
                document.getElementById("etb").setAttribute("name", "Exhibitor");
                document.getElementById("etb").setAttribute("value", "Exhibitor");
                document.getElementById("con1").setAttribute("name", "Exhibitor_Lname");
                document.getElementById("con1").setAttribute("value", "Exhibitor Last Name");
                document.getElementById("con2").setAttribute("name", "Exhibitor_Fname");
                document.getElementById("con2").setAttribute("value", "Exhibitor Fast Name");
                document.getElementById("con3").setAttribute("name", "Phone_Number");
                document.getElementById("con3").setAttribute("type", "tel");
                document.getElementById("con3").setAttribute (pattern, "[0-9]{3}-[0-9]{3}-[0-9]{4}");
                document.getElementById("con3").setAttribute("value", "Exhibitor Phone");
                break;
            case "Animal":
                document.getElementById("etb").setAttribute("value", "Animal");
                document.getElementById("con1").setAttribute("name", "Exhibitor_Num");
                document.getElementById("con1").setAttribute("value", "Exhibitor Number");
                document.getElementById("con2").setAttribute("name", "Breed_Num");
                document.getElementById("con2").setAttribute("value", "Breed Number");
                document.getElementById("con3").setAttribute("name", "Breed_Letter");
                document.getElementById("con3").setAttribute("value", "Breed Letter");
                break;
            case "Show":
                document.getElementById("etb").setAttribute("name", "Show");
                document.getElementById("etb").setAttribute("value", "Show");
                document.getElementById("con1").setAttribute("name", "Show_Name");
                document.getElementById("con1").setAttribute("value", "Show Name");
                document.getElementById("con2").setAttribute("name", "Session_Num");
                document.getElementById("con2").setAttribute("value", "Session Number");
                document.getElementById("con3").setAttribute("name", "Show_Year");
                document.getElementById("con3").setAttribute("value", "Show Year");
                break;
            case "Animal_Category":
                document.getElementById("etb").setAttribute("name", "Animal_Category");
                document.getElementById("etb").setAttribute("value", "Animal_Category");
                document.getElementById("con1").setAttribute("name", "Breed_Num");
                document.getElementById("con1").setAttribute("value", "Breed Number");
                document.getElementById("con2").setAttribute("name", "Breed_Letter");
                document.getElementById("con2").setAttribute("value", "Breed Letter");
                document.getElementById("con3").setAttribute("name", "Breed_Name");
                document.getElementById("con3").setAttribute("value", "Breed Name");   
       }
   }
