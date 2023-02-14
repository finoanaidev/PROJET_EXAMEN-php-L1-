<?php 
    include_once 'header.php';
    include_once './helpers/session_helper.php';
?>

    <h1 class="header">Veuillez vous s'inscrire</h1>

    <?php flash('register') ?>

    <form method="post" action="./controllers/Users.php">
        <input type="hidden" name="type" value="register">
        <input type="text" name="usersName" 
        placeholder="Nom complet...">
        <input type="text" name="usersEmail" 
        placeholder="Email...">
        <input type="text" name="usersUid" 
        placeholder="Pseudo...">
        <input type="password" name="usersPwd" 
        placeholder="Mot de passe...">
        <input type="password" name="pwdRepeat" 
        placeholder="Confirmer le mot de passe">
        <button type="submit" name="submit">S'inscrire</button>
    </form>
    
<?php 
    include_once 'footer.php'
?>