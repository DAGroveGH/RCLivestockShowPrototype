    
    <table border="1" cellspacing="5" cellpadding="5" width="100%">
	<thead>
		<tr>
			<th>No.</th>
            <th>Exhibitor</th>
			<th>Breed_Num</th>
			<th>Breed_Letter</th>
            <th>Class</th>
            <th>Descript</th> 
			<th>Show</th>
			<th>Rank</th>
		</tr>
        </thead>
       
        <?php

        
		require_once('connection.php');
                        //Selects all the data from desired Table from the DB and sorts them by their gorup and by their ranks within the groups
		$result = $conn->prepare("SELECT * FROM Animal Group By Breed_Num ORDER BY Rank ASC");
		$result->execute();
                        //For loop to print out the table
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<tr>
			<td><label><?php echo $row['Breed_Num']; ?></label></td>
			<td><label><?php echo $row['Breed_Letter']; ?></label></td>
			<td><label><?php echo $row['Name']; ?></label></td>
            <td><label><?php echo $row['Color']; ?></label></td>
      <?  }
?>        </tr>
        
        
</table>
