<?php require '../connexion/connexion.php' ?>
<?php
session_start();
if (isset($_SESSION['connexion']) && $_SESSION['connexion'] == 'connecté') {
    $id_utilisateur=$_SESSION['id_utilisateur'];
    $prenom = $_SESSION['prenom'];
    $nom = $_SESSION['nom'];
    echo $_SESSION['nom'];
}else {
    header('location: login.php');
}
if(isset($_GET['quitter'])){
    $_SESSION['connexion']='';
    $_SESSION['id_utilisateur']='';
    $_SESSION['prenom']='';
    $_SESSION['nom']='';


    unset($_SESSION['connexion']);
    session_destroy();

    header('location:    login.php');
}
?>
<?php $connecter =  $_SESSION['id_utilisateur']; ?>
<?php
if (isset($_POST['competence'])) {
    if ($_POST['competence']!=null) {
        $competence = addslashes($_POST['competence']);
        $pdoCV->exec("INSERT INTO t_competences VALUES ( NULL, '$competence', '$connecter')");// mettre $id_utilisateur quand on l'aura en variable de SessionHandler
        header("location: index.php");
        exit();
    }

}
if (isset($_POST['loisir'])) {
    if ($_POST['loisir']!=null) {
        $loisir = addslashes($_POST['loisir']);
        $pdoCV->exec("INSERT INTO t_loisirs VALUES ( NULL, '$loisir', '$connecter')");// mettre $id_utilisateur quand on l'aura en variable de SessionHandler
        header("location: index.php");
        exit();
    }

}
if (isset($_POST['type'])) {
    if ($_POST['type']!=null) {
        $type = addslashes($_POST['type']);
        $dates = addslashes($_POST['dates']);
        $intitule = addslashes($_POST['intitule']);
        $localisation = addslashes($_POST['localisation']);
        $description = addslashes($_POST['description']);
        $pdoCV->exec("INSERT INTO t_experiences_formations VALUES ( NULL, '$type','$dates','$intitule','$localisation', '$description', '$connecter')");// mettre $id_utilisateur quand on l'aura en variable de SessionHandler
        header("location: index.php");
        exit();
    }
}

if (isset($_POST['titre_r'])) {
    if ($_POST['titre_r']!=null) {
        $titre_r = addslashes($_POST['titre_r']);
        $sous_titre_r = addslashes($_POST['sous_titre_r']);
        $dates_r = addslashes($_POST['dates_r']);
        $description_r = addslashes($_POST['description_r']);
        $pdoCV->exec("INSERT INTO t_realisations VALUES ( NULL, '$titre_r','$sous_titre_r','$dates_r','$description_r', '$connecter')");// mettre $id_utilisateur quand on l'aura en variable de SessionHandler
        header("location: index.php");
        exit();

    }
}
?>
<?php
if (isset($_GET['id_competence'])) {
    $effaceCompetence = $_GET['id_competence'];
    $sql = "DELETE FROM t_competences WHERE id_competence = '$effaceCompetence'";
    $pdoCV -> query($sql);
    header("location: index.php");
    exit();
}
if (isset($_GET['id_loisir'])) {
    $effaceLoisir = $_GET['id_loisir'];
    $sql = "DELETE FROM t_loisirs WHERE id_loisir = '$effaceLoisir'";
    $pdoCV -> query($sql);
    header("location: index.php");
    exit();
}
if (isset($_GET['id_experience_formation'])) {
    $effaceExeperience_formation = $_GET['id_experience_formation'];
    $sql = "DELETE FROM t_experiences_formations WHERE id_experience_formation = '$effaceExeperience_formation'";
    $pdoCV -> query($sql);
    header("location: index.php");
    exit();
}
if (isset($_GET['id_realisation'])) {
    $effaceRealisation = $_GET['id_realisation'];
    $sql = "DELETE FROM t_realisations WHERE id_realisation = '$effaceRealisation'";
    $pdoCV -> query($sql);
    header("location: index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    $sql = $pdoCV->query(" SELECT * FROM t_utilisateurs WHERE id_utilisateur= '$connecter' ");
    $ligne = $sql->fetch();// va chercher !
    ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?='<strong>'.$ligne['prenom'].' '.$ligne['nom'].'</strong>';?></title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="//cdn.ckeditor.com/4.7.1/basic/ckeditor.js"></script>

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Mon Profil</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->

                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#competence">competence</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Loisirs">Loisirs</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#experience">Experience / Formation</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#titre_cv">Titre Cv</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#realisation">Realisation</a>
                    </li>
                    <li>
                        <a href="index.php?quitter=oui">Déconnection</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="profil" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Mon profil</h1>
            <?php
            $sql = $pdoCV->query("SELECT * FROM t_utilisateurs WHERE id_utilisateur = '$connecter'");
            $allProfil = $sql->fetchAll();// va chercher !
            ?><br>
            <?php foreach ($allProfil as $profil) :?>
                        <p class="bg-info">Votre email est : <?=$profil['email']?></p><br>
                        <p class="bg-info">Votre telephone est : <?=$profil['telephone']?></p><br>
                        <p class="bg-info">Votre pseudo est : <?=$profil['pseudo']?></p><br><br>
                        <p class="bg-info"> Photo profil </p><br>
                        <img class="bg-info" src="img/<?=$profil['avatar']?>"></img><br><br>
                        <p class="bg-info">Votre adresse est : <?=$profil['adresse']?></p><br>
                        <p class="bg-info">Votre code postal est : <?=$profil['code_postal']?></p><br>
                        <p class="bg-info">Votre ville est : <?=$profil['ville']?></p><br>
                        <p class="bg-info">Votre pays est : <?=$profil['pays']?></p><br>
                        <a href="modif_profil.php?
                        id_utilisateur=<?= $profil['id_utilisateur']?>"><span class="glyphicon glyphicon-pencil" ></span></a>
                <?php endforeach; ?>
    </section>
    <section id="competence" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Compétences</h2>
                    <?php
                    $sql = $pdoCV->prepare("SELECT * FROM t_competences WHERE utilisateur_id = '$connecter'");
                    $sql->execute();
                    $nbr_competence = $sql->rowCount();
                    ?>
                    <p>Il y a <?= $nbr_competence ?> compétences dans la table pour <?= '<strong>'.$ligne['prenom'].' '.$ligne['nom'].'</strong>'; ?></p>
                    <table class="table table-striped">
                        <?php
                        $sql = $pdoCV->query("SELECT * FROM t_competences WHERE utilisateur_id = '$connecter'");
                        $allCompetence = $sql->fetchAll();// va chercher !
                        ?>
                        <tbody>
                            <tr>
                                <th scope="col">compétences</th>
                                <th scope="col">Modifier</th>
                                <th scope="col">Supprimer</th>
                            </tr>
                            <?php foreach ($allCompetence as $competence) :?>
                                <tr>
                                    <td><?=$competence['competence']?></td>
                                    <td><a href="modif_competence.php?id_competence=<?= $competence['id_competence']?>"><span class="glyphicon glyphicon-pencil" ></span></a></td>
                                    <td><a class="supr" href="index.php?id_competence=<?= $competence['id_competence']?>"><span class="glyphicon glyphicon-trash" ></span></a></td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <form class="form-horizontal" method="post">
            <fieldset>
                <h3>Ajouter une compétence</h3>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="competence">competence</label>
                    <div class="col-md-4">
                        <input id="competence" name="competence" type="text" placeholder="competence" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="envoyer"></label>
                    <div class="col-md-4">
                        <button  type="submit" id="envoyer" class="btn btn-primary">envoyer</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </section>


    <!-- About Section -->
    <section id="Loisirs" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Loisirs Section</h1>
                    <?php
                    $sql = $pdoCV->prepare("SELECT * FROM t_loisirs WHERE utilisateur_id = '1'");
                    $sql->execute();
                    $nbr_loisir = $sql->rowCount();
                    ?>
                    <p>Il y a <?= $nbr_loisir ?> loisirs dans la table pour <?= '<strong>'.$ligne['prenom'].' '.$ligne['nom'].'</strong>'; ?></p>
                    <table class="table table-striped">
                        <?php
                        $sql = $pdoCV->query("SELECT * FROM t_loisirs WHERE utilisateur_id = '$connecter'");
                        $allLoisir = $sql->fetchAll();// va chercher !
                        ?>
                        <tbody>
                            <tr>
                                <th scope="col">loisirs</th>
                                <th scope="col">Modifier</th>
                                <th scope="col">Supprimer</th>
                            </tr>
                            <?php foreach ($allLoisir as $loisir) :?>
                                <tr>
                                    <td><?=$loisir['loisir']?></td>
                                    <td><a href="modif_loisir.php?id_loisir=<?= $loisir['id_loisir']?>"><span class="glyphicon glyphicon-pencil" ></span></a></td>
                                    <td><a class="supr" href="index.php?id_loisir=<?= $loisir['id_loisir']?>"><span class="glyphicon glyphicon-trash" ></span></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <form class="form-horizontal" method="post">
                        <fieldset>
                            <h3>Ajouter un loisir</h3>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="loisir">loisir</label>
                                <div class="col-md-4">
                                    <input id="loisir" name="loisir" type="text" placeholder="loisir" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="envoyer"></label>
                                <div class="col-md-4">
                                    <button  type="submit" id="envoyer" class="btn btn-primary">envoyer</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="experience" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Experience / Formation Section</h1>
                    <?php
                    $sql = $pdoCV->prepare("SELECT * FROM t_experiences_formations WHERE utilisateur_id = '$connecter'");
                    $sql->execute();
                    $nbr_experience_formation = $sql->rowCount();
                    ?>
                    <p>Il y a <?= $nbr_experience_formation ?> Experiences et formations dans la table pour <?= '<strong>'.$ligne['prenom'].' '.$ligne['nom'].'</strong>'; ?></p>
                </div>
            </div>
        </div>
        <table class="table table-striped">
            <?php
            $sql = $pdoCV->query("SELECT * FROM t_experiences_formations WHERE utilisateur_id = '$connecter'");
            $allExperienceFormation = $sql->fetchAll();// va chercher !
            ?>
            <tbody>
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col">Date</th>
                    <th scope="col">Intitule</th>
                    <th scope="col">localisation</th>
                    <th scope="col">Description</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
                <?php foreach ($allExperienceFormation as $experienceFormation) :?>
                    <tr>
                        <td><?=$experienceFormation['type']?></td>
                        <td><?=$experienceFormation['dates']?></td>
                        <td><?=$experienceFormation['intitule']?></td>
                        <td><?=$experienceFormation['localisation']?></td>
                        <td><?=$experienceFormation['description']?></td>
                        <td><a href="modif_experience_formation.php?id_experience_formation=<?= $experienceFormation['id_experience_formation']?>"><span class="glyphicon glyphicon-pencil" ></span></a></td>
                        <td><a class="supr" href="index.php?id_experience_formation=<?= $experienceFormation['id_experience_formation']?>"><span class="glyphicon glyphicon-trash" ></span></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <form class="form-horizontal" method="post">
            <fieldset>

                <!-- Form Name -->
                <legend>Ajouter une experience / formation</legend>


                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Type</label>
                    <div class="col-md-4">
                        <select id="type" name="type" class="form-control">
                            <option value="experience">Experience</option>
                            <option value="formation">Formation</option>
                          </select>
                        </div>
                      </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="date">Dates</label>
                    <div class="col-md-4">
                        <input id="dates" name="dates" type="text" placeholder="dates" class="form-control input-md">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="intitule">intitule</label>
                    <div class="col-md-4">
                        <input id="intitule" name="intitule" type="text" placeholder="intitule" class="form-control input-md">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="localisation">localisation</label>
                    <div class="col-md-4">
                        <input id="localisation" name="localisation" type="text" placeholder="localisation" class="form-control input-md">
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="description">description</label>
                    <div class="col-md-4">
                        <textarea class="form-control" id="description" name="description"></textarea>
                        <script>
                        CKEDITOR.replace( 'description' );
                        </script>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="envoyer"></label>
                    <div class="col-md-4">
                        <button  type="submit" id="envoyer" class="btn btn-primary">envoyer</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </section>

    <!-- Contact Section -->
    <section id="titre_cv" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Titre Section</h1>
                    <?php
                    $sql = $pdoCV->prepare("SELECT * FROM t_titres_cv WHERE utilisateur_id = '$connecter'");
                    $sql->execute();
                    $nbr_titre = $sql->rowCount();
                    ?>
                    <p>Il y a <?= $nbr_titre ?> Titre dans la table pour <?= '<strong>'.$ligne['prenom'].' '.$ligne['nom'].'</strong>'; ?></p>
                </div>
            </div>
        </div>
        <table class="table table-striped">
            <?php
            $sql = $pdoCV->query("SELECT * FROM t_titres_cv WHERE utilisateur_id = '$connecter'");
            $allTitre = $sql->fetchAll();// va chercher !
            ?>
            <tbody>
                <tr>
                    <th scope="col">titre</th>
                    <th scope="col">accroche</th>
                    <th scope="col">logo</th>
                    <th scope="col">Modifier</th>
                </tr>
                <?php foreach ($allTitre as $titre) :?>
                    <tr>
                        <td><?=$titre['titre_cv']?></td>
                        <td><?=$titre['accroche']?></td>
                        <td><?=$titre['logo']?></td>
                        <td><a href="modif_titre_cv.php?id_titre_cv=<?= $titre['id_titre_cv']?>"><span class="glyphicon glyphicon-pencil" ></span></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
    <!-- Contact Section -->
    <section id="realisation" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Realisation Section</h1>
                    <?php
                    $sql = $pdoCV->prepare("SELECT * FROM t_realisations WHERE utilisateur_id = '$connecter'");
                    $sql->execute();
                    $nbr_realisation = $sql->rowCount();
                    ?>
                    <p>Il y a <?= $nbr_realisation ?> Realisation dans la table pour <?= '<strong>'.$ligne['prenom'].' '.$ligne['nom'].'</strong>'; ?></p>
                </div>
            </div>
        </div>
        <table class="table table-striped">
            <?php
            $sql = $pdoCV->query("SELECT * FROM t_realisations WHERE utilisateur_id = '$connecter'");
            $allRealisations = $sql->fetchAll();// va chercher !
            ?>
            <tbody>
                <tr>
                    <th scope="col">titre</th>
                    <th scope="col">Sous-titre</th>
                    <th scope="col">date</th>
                    <th scope="col">description</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
                <?php foreach ($allRealisations as $realisation) :?>
                    <tr>
                        <td><?=$realisation['titre_r']?></td>
                        <td><?=$realisation['sous_titre_r']?></td>
                        <td><?=$realisation['dates_r']?></td>
                        <td><?=$realisation['description_r']?></td>
                        <td><a href="modif_realisation.php?id_realisation=<?= $realisation['id_realisation']?>"><span class="glyphicon glyphicon-pencil" ></span></a></td>
                        <td><a class="supr" href="index.php?id_realisation=<?= $realisation['id_realisation']?>"><span class="glyphicon glyphicon-trash" ></span></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <form class="form-horizontal" method="post">
            <fieldset>

                <!-- Form Name -->
                <legend>Ajouter une realisation</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="titre">titre</label>
                    <div class="col-md-4">
                        <input id="titre_r" name="titre_r" type="text" placeholder="titre" class="form-control input-md">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="sousTitre">sousTitre</label>
                    <div class="col-md-4">
                        <input id="sous_titre_r" name="sous_titre_r" type="text" placeholder="sous-titre" class="form-control input-md">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="date">date</label>
                    <div class="col-md-4">
                        <input id="dates_r" name="dates_r" type="text" placeholder="date" class="form-control input-md">
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="description">description</label>
                    <div class="col-md-4">
                        <textarea class="form-control" id="description_r" name="description_r"></textarea>
                        <script>
                        CKEDITOR.replace( 'description_r' );
                        </script>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="envoyer"></label>
                    <div class="col-md-4">
                        <button  type="submit" id="envoyer" class="btn btn-primary">envoyer</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/js.js"></script>

</body>

</html>
