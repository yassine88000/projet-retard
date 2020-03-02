<?php include("header.php") ?>

<?php include("menu.php") ?>

<?php
$motif = $_POST['motif'];
$stagiaire = $_POST['utilisateur'];
$insertData = $DBserveur->prepare("INSERT INTO retards (id_user,date_heure,motif) VALUES(?,now(),?)");
$insertData->execute(array($stagiaire, $motif));
print $DBserveur->lastInsertId();
?>
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-6">
                <div class="content-box-large">
                    <div class="panel-heading">
                        <div class="panel-title">Formulaire de retard</div>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="post">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
                                    <?php
                                    $getusers = $DBserveur->query('select prenom, nom,id from users');
                                    $getusers->execute();
                                    $getusers->setFetchMode(PDO::FETCH_ASSOC);
                                    foreach ($getusers->fetchAll() as $key => $user) {
                                        echo '<input type="radio" id="utilisateur" name="utilisateur" value="'. $user["id"] .'">';
                                        echo $user["id"] . ' ' . $user["prenom"] . ' ' . $user["nom"] . '<br>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div>
                                <h4>Date:</h4>
                                <p>
                                <div class="bfh-datepicker" id="date" name="date" data-format="d-m-y"
                                     data-date="today"></div>
                                </p>
                            </div>
                            <div>
                                <h4>Heure:</h4>
                                <p>
                                <div class="bfh-timepicker" id="heure" name="heure" data-mode="24h"></div>
                                </p>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Motif:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="motif" name="motif" placeholder="Textarea"
                                              rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" name="valider" value="submit" class="btn btn-primary">Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </fieldset>
        </div>
        <ul class="pager wizard">
            <li class="previous first disabled" style="display:none;"><a href="javascript:void(0);">First</a></li>
            <li class="previous disabled"><a href="javascript:void(0);">Previous</a></li>
            <li class="next last" style="display:none;"><a href="javascript:void(0);">Last</a></li>
            <li class="next"><a href="javascript:void(0);">Next</a></li>
        </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <!--  Page content -->
    </div>

<?php include("footer.php") ?>