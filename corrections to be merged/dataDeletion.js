   function changeData() {
                var t = document.getElementById("tb").value;
                var fm = document.createElement("FORM");
                fm.setAttribute(“id”, “editTb”);
                fm.setAttribute(“action”, “dataUpdate.php”);
                fm.setAttribute(“method”, “POST”);
                document.main.appendChild(fm);
                var pt = document.createElement("INPUT");
                pt.setAttribute(“type”, “text”);
                pt.setAttribute(“name”, t);
                pt.setAttribute(“value”, t);
                document.getElementById("editTb").appendChild(pt);
                document.getElementById("editTb").submit();
   }