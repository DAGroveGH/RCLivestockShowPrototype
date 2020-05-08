<!DOCTYPE html>
<html lang="en">
    <head>
	    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <title>Home</title>
    </head>
    <body>   
            
    <table border="1" cellspacing="5" cellpadding="5" width="100%">
<!--	<thead>                                    <!-- Creates frame for print of database 

        <tr>
			<th>Name</th>
			<th>Email</th>
			<th>Street</th>
			<th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>Username</th>
			<th>Password</th>
		</tr>
	</thead>
	-->
        
        <tbody>
        
        <?php     
                                                //Retrieves value of desired table
            $table = $_POST['TableSelect'];
               echo "Initialization: ".$table;
            $count = 0;
        
        try{    
            require("connection.php");  //references php file to easily attempt connection
            $sql = "Select * from $table"; //retrieval 
            }
        catch(PDOException $e){         //Error checking for the try statement
            print "Connection Failed: ". $e ->getMessage();
            die();
            }
            
    //Error Checking        echo "// After Try-Catch: ".$table; 
               
            $stmt = $conn->prepare($sql); //Prepares to establish connection;

            $stmt->execute(); //Executes the prepared code
               
    //Error Checking        echo "// After Execute: ".$table;
            
//        if($table = "Admin" ){ 
            
 /*           if($table = "Admin")          //Thries to create jump to correct location. DOES NOT CURRENTLY WORK
                goto Admin;
            else if($table = "Animal")
                   goto Animal;
            else if($table = "Exhibitor")
                goto Exhibitor;
               */
               
Admin:              //Call for Admin Table
               
               for($i = 0; $row = $stmt->fetch(); $i++){
                   if($table != "Admin")
                       break;
			         ?>
                    <tr>
                    <td><label><?php echo $row['id']; ?></label></td>
                    <td><label><?php echo $row['Username']; ?></label></td>
                    <td><label><?php echo $row['Email']; ?> </label></td>
                    <td><label><?php echo $row['FirstName']; ?></label></td>
                    <td><label><?php echo $row['LastName']; ?></label></td>
                    <td><label><?php echo $row['Password']; ?></label></td>    
        
                    <input type = "Checkbox" value = "$row['id']" name= "Element">
                    </tr>
                
 <?php          }    
            echo "FINISHED (From Admin)"; //<!-- Error Check purposes -->
//            goto finish; <!-- Jumps to the end -->
 //       }  

 Breed:       
               
                echo "In Breed";
 //<!--       if($table = "Animal" ){  -->
            for($i = 0; $row = $stmt ->fetch(); $i++){
                if($table != "breeds")
                    break;
                ?>
                <tr>
			         <td><label><?php echo $row['Breed_Num']; ?></label></td>
			         <td><label><?php echo $row['Breed_Letter']; ?></label></td>
                    <td><label><?php echo $row['Grouping']; ?></label></td>
			         <td><label><?php echo $row['Name']; ?></label></td>
			         <td><label><?php echo $row['Color']; ?></label></td>
			         
                    <input type = "Checkbox" value = "$row['Breed_Num']" name= "Element">
		          </tr>
        
             
<?php       }
            echo "FINISHED From Breed";
//            goto finish; //<!-- Jumps to the end -->
            
Exhibitor:             

                echo "In Exhibitor";
 //       if($table = "Exhibitor"){ -->
                for($i = 0; $row = $stmt->fetch(); $i++){ 
                if($table != "Exhibitor")
                    break;
                    ?>  
                    <tr>
                        
                    <td><label><?php echo $row['Exhibitor_Num']; ?></label></td>
                    <td><label><?php echo $row['Name']; ?></label></td>
			         <td><label><?php echo $row['Email']; ?></label></td>
			         <td><label><?php echo $row['Street']; ?></label></td>
			         <td><label><?php echo $row['City']; ?></label></td>
			         <td><label><?php echo $row['State']; ?></label></td>
                    <td><label><?php echo $row['Postal_Code']; ?></label></td>
                    <td><label><?php echo $row['Username']; ?></label></td>
                    <td><label><?php echo $row['Upassword']; ?></label></td>
                    <input type = "Checkbox" value = "$row['Exhibitor_Num']" name= "Element">
		          </tr>
                 
               
<?php }
            echo "FINISHED from Exhibitor";
            goto finish; // ; <!--Once more, goes to the end -->


/*  <!--      $statement = "Drop from table $table Where Exhibitor_Num = 'Element' ";

        $stmt = $conn->prepare($statement); 
            // execute([$sql]);

        $stmt->execute(); 
   -->       
*/
                
finish: //<!-- Labels where the "End" is  -->
          
        echo "Change Applied";                                
            $conn = null;  // Ends the conncetion
            exit(1);
        ?>
            </tbody>
        </table>
    </body>
</html>