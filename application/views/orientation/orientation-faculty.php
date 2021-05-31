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
	<div class="row justify-content-around">
		<div class="col-md-4">
			<div class="card option <?= $sectionBgcolor ?>">
				<div class="card-body text-lg-center">
					<!--									<img src="--><?//= img('images/estp.jpg')?><!--" class="card-img-absolute rounded" alt="circle-image" height="80%" width="80%"><br><br>-->
					<div class="card-text">
						<h2 class="text-capitalize"><?= $sectionLibelle ?> </h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<div class="row">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-body">
					<div class="card-title">
						<h3 class="text-capitalize bold">description :</h3>
					</div>
					<div class="card-text">
						<p class="bold"> <?= !empty($sectionDescription)?$sectionDescription:'Aucune description renseignée pour le moment' ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br><br>
	<div class="row">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header" style="background:  linear-gradient(to left, #b51b67, #652387)">
					<h3 class="text-white">Les différentes filières de la section <strong class="bold"><?= $sectionLibelle?> </strong></h3>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="datatable" class="table table-hover small table-sm table-bordered w-100">
							<thead>
								<tr>
									<th>Nom</th>
									<th>Condition d'accès</th>
									<th>Diplôme de sortie</th>
									<th>Enseignement professionnel</th>
									<th>Job description</th>
									<th>Débouchés et metiers</th>
									<th>Etablissements</th>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach ($faculty as $f ){?>
										<tr>
											<td><strong><?= $f->libelle ?></strong></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td>
												<a class="btn btn-sm small bg-gradient-warning" href="<?php echo base_url('Orientation/GetSchoolByFaculty'.'/'.$f->filiereId) ?>" title="details"> <i class="fa fa-eye"> Details</i> </a>
											</td>
											<td>
												<a class="btn btn-sm small btn-green" href="<?php echo base_url('Orientation/GetSchoolByFaculty'.'/'.$f->filiereId) ?>" title="consulter"> <i class="fa fa-eye"> Consulter</i> </a>
											</td>
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

<!--</div>-->
<!---->
<!--<div>-->
<!---->
<!--</div>-->

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

	// $(document).ready(function(){
	// 	$("#region, #Arrondissement, #departement").select2({
	// 		// placeholder: "Selectionner le(s) rôle(s)",
	// 		// allowClear: true,
	// 		width: '100%',
	// 		theme: 'bootstrap4'
	// 	});
	// });
	// originalOnload = window.onload;
	// window.onload = function() {
	// 	if (originalOnload) {
	// 		originalOnload();
	// 	}
	// 	$("#region, #arrondissement, #departement, #formation").select2({
	// 		// placeholder: "Selectionner le(s) rôle(s)",
	// 		// allowClear: true,
	// 		width: '100%',
	// 		theme: 'bootstrap4'
	// 	});
	//
	//
	// };
	// const searchButton = document.getElementById('search-button');
	// const searchInput = document.getElementById('search-input');
	// searchButton.addEventListener('click', () => {
	// 	const inputValue = searchInput.value;
	// 	alert(inputValue);
	// });



</script>
