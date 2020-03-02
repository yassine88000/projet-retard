<?php include("header.php") ?>
<?php include("menu.php") ?>
<?php include("footer.php") ?>

<?php


$requser = $DBserveur->query('SELECT id, nom, email FROM users WHERE id=' . $_SESSION['id'] . '');
$requser->execute();
$userinfo = $requser->fetch();
/*echo '<pre>';
var_dump ($userinfo);
echo '</pre>';*/

$reqretard = $DBserveur->query('SELECT motif, date_heure FROM retards WHERE id_user=' . $_SESSION['id'] . '');
$reqretard->execute();
$reqretard->fetchAll();
?>


    <html>
    <head>
        <title>PROFIL</title>
        <meta charset="utf-8">
    </head>
<body>
<div align="center">
    <h2>Profil de <?php echo $userinfo['nom']; ?></h2>
    <br/><br/>
    Nom : <?php echo $userinfo['nom']; ?>

    <br>
    Mon adresse mail : <?php echo $userinfo['email'] ?>

    Mon suivi :  <?php foreach ($reqretard->fetchAll() as $key => $value ){
        echo ''.$value['motif'].'' ;
        echo ''.$value['date_heure'].'' ;
    }   ?>
    <br/>

<?php
if (isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
    ?>
    <br/>

    <a href="logout.php">Se déconnecter</a>
    </div>
    </body>
    </html>
    <?php
}
?>