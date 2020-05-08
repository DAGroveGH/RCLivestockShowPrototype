<html lang="en">
<?php       //Connection for DB
    $username = $_GET['user'];
    $password = $_GET['password'];
    $breed = $_GET['breed'];
    $color = $_GET['color'];
    $show_type = $_GET['show'];


    $dbUser = "root";
    $dbPass = "";
    $dbTable = "exhibitor";
    $server = "mysql:host=localhost; dbname=Livestock_Show";

try{
    require("php/connection.php");
//    $pdo = new PDO($server, $dbUser, $dbPass);
    
    $sql = "Select username from $dbTable where username = $username AND
    where password = $password ";
    
    $stmt = $conn->prepare($sql) -> execute([$sql]);
    
    echo "Retrieved login: ". $username;

    $conn = null;

    exit(1);
    
}catch(PDOException $e){
    print "Connection Failed: ". $e ->getMessage();
    die();
}

?>
</html>