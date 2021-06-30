<div id="carouselExampleControls" class="carousel slide bs-slider box-slider2" data-ride="carousel" data-pause="hover" data-interval="false" >
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleControls" data-slide-to="1"></li>
		<li data-target="#carouselExampleControls" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<div id="home" class="first-section" style="background-image:url(<?=base_url('assets/images/telecharger.png') ?>);">
				<div class="dtab">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 text-right">
								<div class="big-tagline">
									<h2><strong>Orientation </strong> etablissements</h2>
									<p class="lead"></p>
								</div>
							</div>
						</div><!-- end row -->
					</div><!-- end container -->
				</div>
			</div><!-- end section -->
		</div>
		<div class="carousel-item">
			<div id="home" class="first-section" style="background-image:url(<?=base_url('assets/images/slider-03.jpg') ?>);">
				<div class="dtab">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 text-center">
								<div class="big-tagline">
									<h2 data-animation="animated zoomInRight"><strong>Formation</strong> après BAC</h2>
									<p class="lead" data-animation="animated fadeInLeft"></p>

								</div>
							</div>
						</div><!-- end row -->
					</div><!-- end container -->
				</div>
			</div><!-- end section -->
		</div>
		<!-- Left Control -->
		<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="fa fa-angle-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<!-- Right Control -->
		<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="fa fa-angle-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<br><br><br><br>

<div class="container">
	<div class="row">
		<div class="col-sm-12  align-self-center">
			<?php
			breadcrumb($breadcrumb);
			?>
		</div>
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header" style="background: linear-gradient(to left, #b51b67, #652387); ">
					<h3 class="text-white"> <strong><?php echo $titre ?></strong></h3>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12 ">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table id="datatable" class="table table-hover table-sm table-bordered w-100">
											<thead>
											<tr>
												<th>Nom de l'établissement </th>
												<th>Region</th>
												<th>Département</th>
												<th>Arrondissement</th>
												<th>Localité</th>

											</tr>
											</thead>
											<tbody>
											<?php
											foreach ($etab as $e ){?>
												<tr>
													<td><strong><?= $e->name?></strong></td>
													<td><?= $e->reg?></td>
													<td><?= $e->dept?></td>
													<td><?= $e->arron?></td>
													<td><?= $e->localite?></td>
												</tr>
												<?php
											}
											?>
											</tbody>

										</table>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>









<div id="overviews" class="section wb">
	<div class="container actualite">
		<div class="section-title row text-center">
			<div class="col-md-8 offset-md-2">
				<h3></h3>
				<p class="lead"></p>
			</div>
		</div><!-- end title -->
	</div><!-- end container -->
</div><!-- end section -->

<hr>
<br>
<script>

</script>
