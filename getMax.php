<?php
    $connection = mysqli_connect('localhost', 'root', ''); //The Blank string is the password
    mysqli_select_db($connection,'game');

    $result1='';
    
    $query = "SELECT * FROM best"; //You don't need a ; like you do in SQL
    $result = mysqli_query($connection,$query);

    

    while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
        #$result1=$result1. "<tr><td>" . $row['Plecare'] ."</td><td>" . $row['Sosire'] ."</td></tr>";  //$row['index'] the index here is a field name
        $nr=$row['Nr'];
    }

    echo $nr;
    
    #$result1=$result1."</table>"; //Close the table in HTML
    
    //echo $result1;
    
    #echo $result1;
    mysqli_close($connection); //Make sure to close out the database connection
?>