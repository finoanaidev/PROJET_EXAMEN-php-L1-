
<?php 
    include_once 'header.php';
    include_once './helpers/session_helper.php';
?>
    <h1 class="header">Changer mot de passe </h1>

    <?php flash('reset') ?>

    <form method="post" action="./controllers/ResetPasswords.php">
        <input type="hidden" name="type" value="send" />
        <input type="text" name="usersEmail" 
        placeholder="Email...">
        <button type="submit" name="submit">Recevoir par Email</button>
    </form>
    
<?php 
    include_once 'footer.php'
?>