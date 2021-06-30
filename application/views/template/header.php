<!DOCTYPE html>
<html lang="en">

<?php include_once "head.php" ?>
<body class="host_version">



	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->

	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
<!--					<img src="--><?//= img('images/logo.png')?><!--" alt="" />-->
					<h2 style="color: white">LOGO</h2>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php $active = $data['active']; ?>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item <?= ($active === 'accueil')?"active": ""?>"><a class="nav-link text-uppercase" href="<?= base_url()?>">Accueil</a></li>
						<li class="nav-item <?= ($active === 'orientation')?'active':'' ?>"><a class="nav-link" href="<?= base_url('Orientation')?>">ORIENTATION</a></li>

<!--						<li class="nav-item dropdown">-->
<!--							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">OFFRE DE FORMATION </a>-->
<!--							<div class="dropdown-menu" aria-labelledby="dropdown-a">-->
<!--								<a class="dropdown-item" href="blog.html">Blog </a>-->
<!--								<a class="dropdown-item" href="blog-single.html">Blog single </a>-->
<!--							</div>-->
<!--						</li>-->
						<li class="nav-item <?= ($active === 'offre_formation')?'active':'' ?>"><a class="nav-link" href="<?= base_url()?>">OFFRE DE FORMATION</a></li>
						<li class="nav-item <?= ($active === 'metiers')?'active':'' ?>"><a class="nav-link text-uppercase" href="<?= base_url('Structure')?>">structure d'aide</a></li>
						<li class="nav-item <?= ($active === 'etablissements')?'active':'' ?>"><a class="nav-link" href="<?= base_url('School')?>">ETABLISSEMENTS</a></li>
						<li class="nav-item <?= ($active === 'contact')?'active':'' ?>"><a class="nav-link" href="<?= base_url()?>">Contact</a></li>
						<li class="nav-item <?= ($active === 'connexion')?'active':'' ?>"><a class="nav-link" href="<?= base_url('Connexion')?>">Connexion</a></li>
					</ul>

				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

