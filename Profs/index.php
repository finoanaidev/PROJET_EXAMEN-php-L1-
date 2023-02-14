<?php 
    include_once 'header.php'
?>

    <h1 id="index-text">Bienvenue <?php if(isset($_SESSION['usersId'])){
        echo explode(" ", $_SESSION['usersName'])[0];
    }else{
        echo '';
    } 
    ?> </h1>
    

<?php 
    include_once 'footer.php'
?>