<?php include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>PHP CRUD</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Registration Etudiants
        </div>

        <div class="form">
            <div class="input_field">
                <label>Nom :</label>
                <input type="text" class="input" name="Nom">
            </div>
            <div class="input_field">
                <label>Prenom :</label>
                <input type="text" class="input" name="Prenom">
            </div>
            <div class="input_field">
                <label>Date_de_naissance :</label>
                <input type="date" class="input" name="Date_de_naissance">
            </div>
            <div class="input_field">
                <label>Genre</label>
                <div class="custom_select">
                    <select name="Genre">
                        <option values="Non selecte">Select</option>
                        <option values="fille">Fille</option>
                        <option values="garçon">Garçon</option>
                    </select>
                </div>
            </div>
            <div class="input_field">
                <label>CIN :</label>
                <input type="text" class="input" name="CIN">
            </div>
            <div class="input_field">
                <label>Email :</label>
                <input type="mail" class="input" name="Email">
            </div>
            <div class="input_field">
                <label>Telephone :</label>
                <input type="mail" class="input" name="Telephone">
            </div>
            <div class="input_field">
                <label>Addresse :</label>
                <textarea class="textarea" name="Addresse"></textarea>
            </div>
            <div class="input_field">
                <label>Compte_Facebook :</label>
                <input type="text" class="input" name="Compte_Facebook">
            </div>
            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <p>Accepte le terme et les conditions</p>
            </div>
                <div class="input_field">
                    <input type="submit" value="Registre" class="btn" name="save_btn">
                </div>
        </div>
        <button><a href="view.php">Envoyer</a></button>
        </form>
    </div>
    <?php
    if(isset($_POST['save_btn']))
    {
        $Nom                    = $_POST['Nom'];
        $Prenom                 = $_POST['Prenom'];
        $Date_de_naissance      = $_POST['Date_de_naissance'];
        $Genre                  = $_POST['Genre'];
        $CIN                    = $_POST['CIN'];
        $Email                  = $_POST['Email'];
        $Telephone              = $_POST['Telephone'];
        $Addresse               = $_POST['Addresse'];
        $Compte_Facebook        = $_POST['Compte_Facebook'];

        $query="INSERT INTO etudiants(Nom,Prenom,Date_de_naissance,Genre,CIN,Email,Telephone,Addresse,Compte_Facebook) VALUES('$Nom','$Prenom','$Date_de_naissance','$Genre','$CIN', '$Email','$Telephone','$Addresse','$Compte_Facebook')";
        $data=mysqli_query($conn,$query);

        if($data){
           ?>
                <script type="text/javascript">
                    alert("Data Saved Successfully");
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
    }
?>    

</body>
</html>

