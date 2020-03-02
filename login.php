<?php
include "header.php";

// si l'utilisateur aappuie sur le button login
if (isset($_POST['login'])) {

    // et si les champs nom et password ne sont pas vides
    if (isset($_POST['email']) AND isset($_POST['mot_de_passe'])) {

        // recup des données du form
        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];

        // select données db

        $response = $DBserveur->prepare('SELECT id, email, mot_de_passe 
              FROM users
              WHERE email = :email
            ');
        $response->bindValue(':email', $email, PDO::PARAM_STR);
        $response->execute();
        $member = $response->Fetch();
        $response->CloseCursor();

        // si l'ulisateur existe dans la db
        if (!$member) exit('non dispo');

        //comparaison mdp avec celui de la db
        if ($mot_de_passe != $member['mot_de_passe']) exit('error pass');
        header('location:login.php');

        // si tout est OK
        $_SESSION['id'] = $member['id'];
        $_SESSION['email'] = $member['email'];

        // => redirection vers candidats php
        header('location:tables.php');
    }
}


?>
<?php





    echo '
<section>
    <div class="inscription">
        <h2>Connexion</h2>
        <form action="/login.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="mot_de_passe">Mot de passe</label>
                <input type="password" class="form-control" name="mot_de_passe" id="mot_de_passe" placeholder="Mot de passe">
            </div>
            <button type="submit" name="login" class="btn btn-primary">Connexion</button>
        </form>
    </div>
</section>
';

?>

<?php

include "footer.php";
?>

