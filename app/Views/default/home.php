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
			<i class="fa fa-play-circle"></i> <span class="light"></span><?= $titres->titre_cv ?>
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
				<h1 class="brand-heading"><?= $titres->titre_cv ?></h1>
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
					<li><span class="bar-expand photoshop"></span><em>Photoshop</em></li>
					<li><span class="bar-expand illustrator"></span><em>Illustrator</em></li>
					<li><span class="bar-expand wordpress"></span><em>Wordpress</em></li>
					<li><span class="bar-expand css"></span><em>CSS</em></li>
					<li><span class="bar-expand html5"></span><em>HTML5</em></li>
					<li><span class="bar-expand jquery"></span><em>jQuery</em></li>
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
						<?php foreach ($formations as $formation): ?>
						<li>
							<div>
								<time class="text-uppercase"><?= $formation->date_f ?></time>
								<h4 class="subheading"><?= $formation->titre_f ?></h4>
								<p class="text-muted"><p><?= $formation->description_f ?></p>
							</p>
							<span><?= $formation->sous_titre_f ?></span>
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
		<p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
		<a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
	</div>
</div>
</div>
</section>

<!-- Contact Section -->
<section id="contact" class="container content-section text-center">
<div class="row">
<div class="col-lg-8 col-lg-offset-2">
	<h2>Contact Start Bootstrap</h2>
	<p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
	<p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
	</p>
	<ul class="list-inline banner-social-buttons">
		<li>
			<a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
		</li>
		<li>
			<a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-linkedin-square fa-fw"></i> <span class="network-name">LinkedIn</span></a>
		</li>
	</ul>
</div>
</div>
</section>
<?php $this->stop('main_content') ?>
