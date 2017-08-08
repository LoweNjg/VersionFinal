<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
				Menu <i class="fa fa-bars"></i>
			</button>
            <a class="navbar-brand page-scroll" href="#page-top">
                <i class="fa fa-handshake-o "></i> <span class="light"></span>
                <?= $utilisateurs->prenom.' '.$utilisateurs->nom ?>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#competences">COMPÉTENCES</a>
                </li>
                <li>
                    <a class="page-scroll" href="#formations">FORMATIONS</a>
                </li>
                <li>
                    <a class="page-scroll" href="#realisation">RÉALISATIONS</a>
                </li>
                <li>
                    <a class="page-scroll" href="#loisir">LOISIRS</a>
                </li>
                <li>
                    <a class="page-scroll" href="#download">MON CV PAPIER</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">CONTACT</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Intro Header -->
<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading">
                        <?= $utilisateurs->prenom.' '.$utilisateurs->nom ?>
                    </h1>
                    <h2>
                        <?= $titres->accroche ?>
                    </h2>
                    <a href="<?= $this->assetUrl('fichier/cedricCV.pdf');?>" class="btn btn-default btn-lg" download>Mon CV</a>
                    <a href="https://github.com/LoweNjg" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-github fa-fw"></i></a>
                    <a href="https://www.linkedin.com/in/cedricnjonang/" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-linkedin-square fa-fw"></i></a><br><br>
                    <a href="#competences" class="btn btn-circle page-scroll">
                        <i class="fa fa-arrow-down animated"></i>
                    </a>
                </div>


            </div>
        </div>
    </div>
</header>

<!-- competences Section -->
<section id="competences" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="three columns header-col">
                <h1><span>COMPÉTENCES</span></h1>
            </div>
            <div class="bars">
                <ul class="skills">
                    <?php foreach ($competences as $competence):?>
                    <li><span class="bar-expand <?= $competence->competence?>" style="width:<?= $competence->niveau?>%;"></span><em><?= $competence->competence?></em></li>
                    <?php endforeach; ?>
                </ul>

            </div>
            <!-- end skill-bars -->
        </div>
    </div>
</section>

<!-- Formation -->
<section id="formations" class="container content-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 text-center">
                <h2 class="section-heading">Formations / Expériences professionnelles</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="timeline">
                    <ul>
                        <?php foreach ($expererienceFormation as $eF): ?>
                        <li>
                            <div>
                                <time class="text-uppercase"><?= $eF->dates ?></time>
                                <h4 class="subheading">
                                    <?= $eF->intitule ?>
                                </h4>
                                <h4 class="subheading">
                                    <?= $eF->localisation ?>
                                </h4>
                                <p class="text-muted">
                                    <p>
                                        <?= $eF->description ?>
                                    </p>
                                </p>
                                <span><?= $eF->sous_titre ?></span>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</section>

<!-- realisation selection -->

<section id="realisation" class="content-section text-center">
    <div class="container">
        <!-- Container -->
        <div class="section-title text-center center">
            <h2>Mes réalisations</h2>
        </div>
        <div class="row">
            <div class="portfolio-items">
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 lorem">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="<?= $this->assetUrl('img/cedriccv.png');?>" title="Project description" rel="prettyPhoto">
                                <div class="hover-text">
                                    <h4>Mon site CV</h4>
                                </div>
                                <img src="<?= $this->assetUrl('img/cedriccv.png');?>" class="img-responsive" alt="Project Title"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- loisir selection -->

    <section id="loisir" class="content-section text-center">
        <div class="loisir-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Mes loisirs</h2>

                    <div class="loisirs">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="logo-loisir text-center">
                                    <?php foreach ($loisirs as $loisir):?>
                                    <div class="col-md-offset-1 col-md-2">
                                        <img src="<?= $loisir->photo ?>" alt="<?= $loisir->intitule ?>" width="70">
                                        <p>
                                            <?= $loisir->intitule ?>
                                        </p>
                                        <hr>
                                        <p>
                                            <?= $loisir->loisir ?>
                                        </p>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Mon CV papier</h2>
                    <p>Pour télécharger mon CV</p>
                    <a href="<?= $this->assetUrl('fichier/cedricCV.pdf');?>" class="btn btn-default btn-lg" download>Télécharger</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Me Contacter</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" method="post">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" placeholder="Nom" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="phone">Numero de telephone</label>
                                <input type="tel" class="form-control" placeholder="Numero de telephone" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="message">Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                            </div>
                        </div>
                    </form><br><br>
                    <a href="https://github.com/LoweNjg" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-github fa-fw"></i></a>
                    <a href="https://www.linkedin.com/in/cedricnjonang/" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-linkedin-square fa-fw"></i></a><br><br>
                </div>
            </div>
        </div>
    </section>

    <?php $this->stop('main_content') ?>
