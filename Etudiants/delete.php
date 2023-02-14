<?php include 'connection.php'; 
    $id = $_GET['id'];
    $query = "DELETE FROM etudiants WHERE id='$id'";
    $data = mysqli_query($conn, $query);
    if($data){
        ?>
    <script type="text/javascript">
        alert("Date Deleted Successfully");
           
    </script>    
        <?php
    }
    else{
        ?>
    <script type="text/javascript">
        alert("Please try again");
        
    </script>    
        <?php

    }
?>