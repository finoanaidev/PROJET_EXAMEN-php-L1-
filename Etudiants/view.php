<?php
    include 'connection.php';
    
?>
<style>
span {
  font-size: 100px;
}
</style>
<body>
<h1 class="kk">BINVENUE DANS CETTE LISTES D'ETUDIANTS <span>&#128077;</span> </h1>


</body>
</html>







<a class = "koto" href="index.php">Retour</a>
<link rel="stylesheet" type="text/css" href="f.css">


<table class ="toto"border="1px" cellpadding="15px" cellspacing="0">
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Date de naissance</th>
        <th>Genre</th>
        <th>CIN</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Addresse</th>
        <th>Compte Facebook</th>
        <th colspan="2">Actions</th>
        
    </tr>
    <?php
       $query = "SELECT * FROM mdl_etudiants";
       $data = mysqli_query($conn,$query);
       $result = mysqli_num_rows($data);
       if($result){
            while($row=mysqli_fetch_array($data)){
               ?>
                    <tr>
                        <td><?php echo $row['Nom']; ?></td>
                        <td><?php echo $row['Prenom']; ?></td>
                        <td><?php echo $row['Date_de_naissance']; ?></td>
                        <td><?php echo $row['Genre']; ?></td>
                        <td><?php echo $row['CIN']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Telephone']; ?></td>
                        <td><?php echo $row['Addresse']; ?></td>
                        <td><?php echo $row['Compte_Facebook']; ?></td>
                        <td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                        <td><a onclick="return confirm('Are you sure, you want to delete?')" href="delete.php?id=<?php echo $row['id']; ?>">Supprimer</a></td>
                    </tr>
               <?php 
            }
       }
       else{
            ?>
                <tr>
                    <td>No record found</td>
                </tr>
            <?php

       }

    ?>
</table>
<html>
<style>
span {
  font-size: 100px;
}
</style>
<body>
<h1 class="kk">MERCI POUR VOTRE VISITER <span>&#128400;&#127995;</span></h1>


</body>
</html>