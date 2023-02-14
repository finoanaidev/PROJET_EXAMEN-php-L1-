<?php include 'connection.php'; 
 $id=$_GET['id'];
 $select="SELECT * FROM fiderana WHERE id='$id'";
 $data = mysqli_query($conn,$select);
 $row = mysqli_fetch_array($data);
?>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="container">
        <form action="#" method="POST">
        <div class="title">
            Registration Etudiants
        </div>

        <div class="form">
            <div class="input_field">
                <label>Nom :</label>
                <input value="<?php echo $row['Nom']?>" type="text" class="input" name="Nom">
            </div>
            <div class="input_field">
                <label>Prenom :</label>
                <input value="<?php echo $row['Prenom']?>"type="text" class="input" name="Prenom">
            </div>
            <div class="input_field">
                <label>Date_de_naissance :</label>
                <input value="<?php echo $row['Date_de_naissance']?>"type="date" class="input" name="Date_de_naissance">
            </div>
            <div class="input_field">
                <label>Genre</label>
                <div class="custom_select">
                    <select value="<?php echo $row['Genre']?>"name="Genre">
                        <option values="Non selecte">Select</option>
                        <option values="fille">Fille</option>
                        <option values="garçon">Garçon</option>
                    </select>
                </div>
            </div>
            <div class="input_field">
                <label>CIN :</label>
                <input value="<?php echo $row['CIN']?>"type="text" class="input" name="CIN">
            </div>
            <div class="input_field">
                <label>Email :</label>
                <input value="<?php echo $row['Email']?>"type="mail" class="input" name="Email">
            </div>
            <div class="input_field">
                <label>Telephone :</label>
                <input value="<?php echo $row['Telephone']?>"type="mail" class="input" name="Telephone">
            </div>
            <div class="input_field">
                <label >Addresse :</label>
                <textarea value="<?php echo $row['Addresse']?>" class="textarea" name="Addresse"></textarea>
            </div>
            <div class="input_field">
                <label>Compte_Facebook :</label>
                <input value="<?php echo $row['Compte_Facebook']?>"type="text" class="input" name="Compte_Facebook">
            </div>
            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <p>Accepte le terme et les conditions</p>
            </div>
                <div class="input_field">
                    <input type="submit" value="Update" class="btn" name="update_btn">
                </div>
        </div>
        <button><a href="view.php">Retour</a></button>
        </form>
    </div>
    <?php
    if(isset($_POST['update_btn']))
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

        $update="UPDATE  mdl_etudiants SET Nom='$Nom', Prenom='$Prenom'
        , Date_de_naissance='$Date_de_naissance', Genre='$Genre', CIN='$CIN', Email='$Email'
        , Telephone='$Telephone', Addresse='$Addresse', Compte_Facebook='$Compte_Facebook' WHERE id='$id'";
        $data=mysqli_query($conn,$update);

        if($data){
           ?>
                <script type="text/javascript">
                    alert("Data Update Successfully");
                    window.open("http://localhost/Etudiants/update.php",
                    "_self");
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