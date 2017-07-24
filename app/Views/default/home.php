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
			<i class="fa fa-play-circle"></i> <span class="light"></span><?= $utilisateurs->prenom.' '.$utilisateurs->nom ?>
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
				<a class="page-scroll" href="#competences">COMPETENCES</a>
			</li>
			<li>
				<a class="page-scroll" href="#formations">FORMATIONS</a>
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
				<h1 class="brand-heading"><?= $utilisateurs->prenom.' '.$utilisateurs->nom ?></h1>
				<p class="intro-text"><?= $titres->accroche ?></p>
					<a href="#competences" class="btn btn-circle page-scroll">
						<i class="fa fa-angle-double-down animated"></i>
					</a>
				</div>


			</div>
		</div>
	</div>
</header>

<!-- About Section -->
<section id="competences" class="container content-section text-center">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<div class="three columns header-col">
				<h1><span>COMPETENCES</span></h1>
			</div>
			<div class="bars">
				<ul class="skills">
					<?php var_dump($competences) ?>
					<?php foreach ($competences as $competence):?>
					<li><span class="bar-expand <?= $competence->competence?>" style="width:<?= $competence->niveau?>%;"></span><em><?= $competence->competence?></em></li>
					<?php endforeach; ?>
				</ul>

			</div><!-- end skill-bars -->
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
								<h4 class="subheading"><?= $eF->intitule ?></h4>
								<h4 class="subheading"><?= $eF->localisation ?></h4>
								<p class="text-muted"><p><?= $eF->description ?></p>
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

<!-- Experience selection -->

<section id="loisir" class="content-section text-center">
<div class="loisir-section">
<div class="container">
	<div class="col-lg-8 col-lg-offset-2">
		<h2>Mes loisirs</h2>
		<div class="loisirs">



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
		<a href="https://www.linkedin.com/in/cedricnjonang/" class="btn btn-default btn-lg"></a>
	</div>
</div>
</div>
</section>

<!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">CONTACT</h2>
                    <h3 class="section-subheading text-muted">Mon profil vous interrese ? n'hesite pas a me contacter !</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><br>

<?php $this->stop('main_content') ?>
