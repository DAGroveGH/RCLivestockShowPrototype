<?php 

  
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $street = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $phone = $_POST['phone'];
        $zip_code = $_POST['zipcode'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];


        
        $dbTable = "exhibitor";
        


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $emailErr = "Invalid format and please re-enter valid email"; 
        die();
}

        try{
            
 //           $conn = new PDO('mysql:host=localhost; dbname=Livestock_Show', $dbUser, $dbPass);
                   
            require("connection.php");
            
            $sql ="INSERT INTO Exhibitor (Name, Email, Street, City, State, Postal_Code, Username, Upassword) values ('$fname', '$email', '$street' , '$city', '$state', '$zip_code','$username', '$password');";

/*      $sql= "Select email From test ORDER by id";
        foreach($pdo->query($sql) as $row){
        print $row['email'] . "\n";      
    } 
*/
            
//        $pdo->query($sql);    
        $stmt = $conn->prepare($sql) -> execute([$sql]);
        
        print "Thank you for signing up $email". "\n";
            ?><br>
            <a href = "../animal.html">Continue to register Animal</a><br>
<a href = "../index.html">Return Home</a><br>
                <?php
        $sql_stmt = null;
        $conn = null;//Ends Connection

/*
            $sql_stmt = "INSERT INTO Exhibitor (fname, address, city, state, zipcode, email, username, password) values ('$fname', '$address', '$city' , '$state', '$zip_code', '$email', '$username', '$password')";
    
            $stmt = $conn->prepare('$sql_stmt');
            $conn -> execute($sql_stmt);
                                   
            echo"$fname";
    */        
            
            
            
            exit(1);
            register();
        }
        catch(PDOException $e){
            print "Connection Failed: " . $e->getMessage();
            die();
        }



?>