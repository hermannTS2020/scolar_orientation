<!DOCTYPE html>
<html lang="en">

<?php include_once "head_admin.php" ?>
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
	<!-- page container area start -->
	<div class="page-container">
		<!-- sidebar menu area start -->

		<!-- sidebar menu area end -->

		<!-- main content area start -->
		<div class="main-content">
			<!-- header area start -->
			<div class="header-area">
				<div class="row align-items-center">
					<!-- nav and search button -->
					<div class="col-md-6 col-sm-8 clearfix">
						<div class="nav-btn pull-left">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
				</div>
			</div>
			<!-- header area end -->
			<!-- page title area start -->
			<div class="page-title-area">
				<div class="row align-items-center">
					<div class="col-sm-6">
						<div class="breadcrumbs-area clearfix">
							<h4 class="page-title pull-left"><?= $titre?></h4>
							<?php
//							$breadcrumb = $data['breadcrumb'];
//							breadcrumb($breadcrumb);
							?>
						</div>
					</div>
					<div class="col-sm-6 clearfix">
						<div class="user-profile pull-right">
							<img class="avatar user-thumb" src="<?= img('images/testi_01.png')?>" >
							<h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?= $this->session->userdata('prenom').' '.$this->session->userdata('nom') ?> <i class="fa fa-angle-down"></i></h4>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Message</a>
								<a class="dropdown-item" href="#">Settings</a>
								<a class="dropdown-item" href="#">Log Out</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- page title area end -->
