<!-- Used to Verify Credentials exist on DB -->
<?php 

$username = $_POST['user'];
$password = $_POST['password'];

        $dbUser = "root";
        $dbPass = "";
        $dbTable = "exhibitor";
        $server = "mysql:host=localhost; dbname=Livestock_Show";


try{
    $pdo= new PDO($server, $dbUser, $dbPass);
    $sql = "Select Email from $dbTable WHERE 
        Username = '$username' AND
        UPassword = '$password'";
        
    $stmt = $pdo->query($sql);
    
    $row = $stmt->fetchObject();
    if($row){
    echo "Logged in as: ".$row->Email;
?>
<br>
<a href = "../animal.html">Continue to register Animal</a><br>
<a href = "../index.html">Return Home</a><br>

<?php
        
        
}else
    echo "Login Credentials Do Not Match";
    $pdo= null;
    
    
    
}catch(PDOException $e){
    print"Connection error". $e->getMessage();
    die();
}


?>