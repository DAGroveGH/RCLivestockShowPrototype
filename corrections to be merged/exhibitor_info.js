function exhibitorData() {
    var x = document.getElementById("ex").value;
    var f = document.createElement("FORM");
    f.setAttribute("id", "info");
    f.setAttribute("action", "dataUpdate.php");
    f.setAttribute("method", "POST");
    document.main.appendChild(f);
    
    var y = document.createElement("INPUT");
    y.setAttribute("type", "text");
    y.setAttribute("name", x);
    y.setAttribute("value", x);
    document.getElementById("info").appendChild(y);
    document.getElementById("info").submit();
}