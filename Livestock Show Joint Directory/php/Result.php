<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen">
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        
        <title>Results</title>
    </head>
    <body>
        
        <div id="container">
            <header>
                <h1>Results</h1>
                <div id="buttons">
                    <nav>
                        
                            <ul><a href="../index.html">Home</a></ul>
                            <ul><a href="../results.html">Back to Results</a></ul>
                    </nav>
                </div>
            </header>
            
            <thead>                                    <!-- Creates frame for print of database -->
		<tr>
			<th>Exhibitor_Num</th>
			<th>Class(Number)</th>
			<th>Class(Letter)</th>
			<th>Breed</th>
            <th>Show Type</th>
            <th>Rank</th>
		</tr>
	</thead>
            
                
<?php
                
                $table = "Animal";
                $search = $_GET['classSelect'];
              ?>
  <!--      <br> 
            <?php 
            //     echo "Initialization: ".$search;
            ?> 
            <br> 
      -->      
            <?php
            $count = 0;
                
                try{    
            require("connection.php");  //references php file to easily attempt connection
            $sql = "Select * from $table where Breed_Class = $search"; //retrieval 
                    
                    
                    
            }
        catch(PDOException $e){         //Error checking for the try statement
            print "Connection Failed: ". $e ->getMessage();
            die();
            }
                
            ?>
                
            
            <!-- Begin funcionality for judging --> 
            
            <main role="main">
                
                <select id="class_select">  
                    <?php
                         require("connection.php");
                        
                        $sql = "Select * from $table  
                            group by Breed_Num";
                        $stmt = $conn->$prepare($sql)->execute();
                        ?>
                            <select>
                                while($row = $stmt->fetch()){ 
 <!--                               <Option value = "$row['Breed_Letter']"> -->
                                    
                                <option value=""><?php  $row['Breed_Letter'];
                                    ?>
  <!--                              </Option>  -->
                                     

                        }
                        </select>
                        <?php                          
                        $conn= null;
                        ?>            
                    
                    <option value=""></option>
                </select>
                
                <ul id="results_list">
                
                </ul>
            </main>
        </div>
    </body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  