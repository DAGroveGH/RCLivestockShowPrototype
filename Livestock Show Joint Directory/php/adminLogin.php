<!DOCTYPE html>
<?php

$username = $_POST['username'];
$password = $_POST['password'];



try{
   require("Connection.php");
    $dbTable = "Admin";
    
    $sql = "Select Email from $dbTable where Username = '$username' AND Password = '$password' ;";
                                                        //Prints the email retrieve from the database
    foreach($conn->query($sql) as $row){
        print "Welcome ".$row['Email'] . "\n";
    
    $sql = null;
    }

}catch(PDOException $e){
    print "Connection Failed: ". $e ->getMessage();
    die();
}
?>


    <head>
    </head>
    <body>
        <li><a href="../admininfo.html">Continue</a></li>
    </body>
</html>