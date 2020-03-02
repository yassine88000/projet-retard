<?php include("header.php") ?>

<?php include("menu.php") ?>

<div class="col-md-10">

    <div class="row">
        <div class="col-md-6">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">BAUDON Alan Tel: 06.27.87.38.17</div>

                    <div class="panel-options">
                        <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Dates et Heures</th>
                            <th>Motif</th>
                            <br>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <?php
                                $getutilisateur = $DBserveur->query('SELECT date_heure FROM `retards` WHERE id_user LIKE "1"');
                                $getutilisateur->execute();
                                $getutilisateur->setFetchMode(PDO::FETCH_ASSOC);
                                foreach ($getutilisateur->fetchAll() as $key => $utilisateur) {

                                    echo $utilisateur["date_heure"] . '<br>';

                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                $getutilisateur = $DBserveur->query('SELECT motif FROM `retards` WHERE id_user LIKE "1"');
                                $getutilisateur->execute();
                                $getutilisateur->setFetchMode(PDO::FETCH_ASSOC);
                                foreach ($getutilisateur->fetchAll() as $key => $utilisateur) {

                                    echo  $utilisateur['motif'] . '<br>';

                                }
                                ?>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">EL MAZGHY Abdessamad Tel: 06.63.43.15.23</div>

                    <div class="panel-options">
                        <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Dates et Heures</th>
                            <th>Motif</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <?php
                                $getutilisateur = $DBserveur->query('SELECT date_heure FROM `retards` WHERE id_user LIKE "2"');
                                $getutilisateur->execute();
                                $getutilisateur->setFetchMode(PDO::FETCH_ASSOC);
                                foreach ($getutilisateur->fetchAll() as $key => $utilisateur) {

                                    echo $utilisateur["date_heure"] . '<br>';

                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                $getutilisateur = $DBserveur->query('SELECT motif FROM `retards` WHERE id_user LIKE "2"');
                                $getutilisateur->execute();
                                $getutilisateur->setFetchMode(PDO::FETCH_ASSOC);
                                foreach ($getutilisateur->fetchAll() as $key => $utilisateur) {

                                    echo  $utilisateur['motif'] . '<br>';

                                }
                                ?>

                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">NOIRIEL Alexandre Tel:06.47.01.06.02</div>

                    <div class="panel-options">
                        <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Dates et Heures</th>
                            <th>Motif</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <?php
                                $getutilisateur = $DBserveur->query('SELECT date_heure FROM `retards` WHERE id_user LIKE "3"');
                                $getutilisateur->execute();
                                $getutilisateur->setFetchMode(PDO::FETCH_ASSOC);
                                foreach ($getutilisateur->fetchAll() as $key => $utilisateur) {

                                    echo $utilisateur["date_heure"] . '<br>';

                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                $getutilisateur = $DBserveur->query('SELECT motif FROM `retards` WHERE id_user LIKE "3"');
                                $getutilisateur->execute();
                                $getutilisateur->setFetchMode(PDO::FETCH_ASSOC);
                                foreach ($getutilisateur->fetchAll() as $key => $utilisateur) {

                                    echo  $utilisateur['motif'] . '<br>';

                                }
                                ?>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">SALI Yassine Tel:06.83.51.73.43</div>

                    <div class="panel-options">
                        <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Dates et Heures</th>
                            <th>Motif</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <?php
                                $getutilisateur = $DBserveur->query('SELECT date_heure FROM `retards` WHERE id_user LIKE "4"');
                                $getutilisateur->execute();
                                $getutilisateur->setFetchMode(PDO::FETCH_ASSOC);
                                foreach ($getutilisateur->fetchAll() as $key => $utilisateur) {

                                    echo $utilisateur["date_heure"] . '<br>';

                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                $getutilisateur = $DBserveur->query('SELECT motif FROM `retards` WHERE id_user LIKE "4"');
                                $getutilisateur->execute();
                                $getutilisateur->setFetchMode(PDO::FETCH_ASSOC);
                                foreach ($getutilisateur->fetchAll() as $key => $utilisateur) {

                                    echo  $utilisateur['motif'] . '<br>';

                                }
                                ?>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">SZUBARGA Julien Tel:07.69.71.49.71</div>

                    <div class="panel-options">
                        <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Dates et Heures</th>
                            <th>Motif</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <?php
                                $getutilisateur = $DBserveur->query('SELECT date_heure FROM `retards` WHERE id_user LIKE "5"');
                                $getutilisateur->execute();
                                $getutilisateur->setFetchMode(PDO::FETCH_ASSOC);
                                foreach ($getutilisateur->fetchAll() as $key => $utilisateur) {

                                    echo $utilisateur["date_heure"] . '<br>';

                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                $getutilisateur = $DBserveur->query('SELECT motif FROM `retards` WHERE id_user LIKE "5"');
                                $getutilisateur->execute();
                                $getutilisateur->setFetchMode(PDO::FETCH_ASSOC);
                                foreach ($getutilisateur->fetchAll() as $key => $utilisateur) {

                                    echo  $utilisateur['motif'] . '<br>';

                                }
                                ?>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">VASSEUR Marvin Tel: 06.11.84.05.77</div>

                    <div class="panel-options">
                        <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Dates et Heures</th>
                            <th>Motif</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <?php
                                $getutilisateur = $DBserveur->query('SELECT date_heure FROM `retards` WHERE id_user LIKE "6"');
                                $getutilisateur->execute();
                                $getutilisateur->setFetchMode(PDO::FETCH_ASSOC);
                                foreach ($getutilisateur->fetchAll() as $key => $utilisateur) {

                                    echo $utilisateur["date_heure"] . '<br>';

                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                $getutilisateur = $DBserveur->query('SELECT motif FROM `retards` WHERE id_user LIKE "6"');
                                $getutilisateur->execute();
                                $getutilisateur->setFetchMode(PDO::FETCH_ASSOC);
                                foreach ($getutilisateur->fetchAll() as $key => $utilisateur) {

                                    echo  $utilisateur['motif'] . '<br>';

                                }
                                ?>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">YIGIT Bilgin Tel:07.80.55.18.17</div>

                <div class="panel-options">
                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Dates et Heures</th>
                        <th>Motif</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <?php
                            $getutilisateur = $DBserveur->query('SELECT date_heure FROM `retards` WHERE id_user LIKE "7"');
                            $getutilisateur->execute();
                            $getutilisateur->setFetchMode(PDO::FETCH_ASSOC);
                            foreach ($getutilisateur->fetchAll() as $key => $utilisateur) {

                                echo $utilisateur["date_heure"] . '<br>';

                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            $getutilisateur = $DBserveur->query('SELECT motif FROM `retards` WHERE id_user LIKE "7"');
                            $getutilisateur->execute();
                            $getutilisateur->setFetchMode(PDO::FETCH_ASSOC);
                            foreach ($getutilisateur->fetchAll() as $key => $utilisateur) {

                                echo  $utilisateur['motif'] . '<br>';

                            }
                            ?>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php") ?>
