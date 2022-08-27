<!DOCTYPE html>
<html>
  
<body>
<a href="Teacher.csv" download rel="noopener noreferrer" target="_blank"> Download CSV File</a>
    <center>
        <h1>Teachers All Data</h1>
  
        <?php
        echo "<html><body><center><table>\n\n";
  
        // Open a file
        $file = fopen("Teacher.CSV", "r");
  
        // Fetching data from csv file row by row
        while (($data = fgetcsv($file)) !== false) {
  
            // HTML tag for placing in row format
            echo "<tr>";
            foreach ($data as $i) {
                echo "<td>" . htmlspecialchars($i) 
                    . "</td>";
            }
            echo "</tr> \n\n";
			
        }
  
        ?>
    </center>
</body>




