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
	</div>
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
									<th>Débouchés et metiers</th>
									<th>Job description</th>
									<th>Enseignement professionnel</th>
									<th>Etablissements</th>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach ($faculty as  $index => $f ){?>
										<tr>
											<td class="align-middle"><strong><?= $f->libelle ?></strong> <br> <label>Spécialité du <strong><?= $f->cycle ?></strong></label></td>
											<td class="align-middle"></td>
											<td class="align-middle"><strong><?= $f->diplome ?></strong></td>
											<td>
												<strong>Débouchés: &nbsp;&nbsp;</strong>
												<?php
												if(isset($f->debouches)){
													foreach ($f->debouches as $d){
														echo $d->libelle.' ; ';
													}
												}
												?>
												<br><br>
												<strong>Métiers:  &nbsp;&nbsp;</strong>
												<?php
												if(isset($f->metiers)){
													foreach ($f->metiers as $m){
														echo $m->intitule.' ; ';
													}
												}
												?>
											</td>
											<td>
												<a href="#" class="btn btn-sm btn-pink detail-job" data-index="<?= $index ?>" data-toggle="modal" data-target="#job-details">Afficher</a>
											<td>
												<a href="#" class="btn btn-sm btn-primary detail-cours" data-index="<?= $index ?>" data-toggle="modal" data-target="#cours-details">Détails</a>
											</td>
											<td>
												<a class="btn btn-sm small btn-green text-white" href="<?php echo base_url('Orientation/GetSchoolByFaculty'.'/'.$f->filiereId) ?>" title="consulter">Consulter </a>
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
<!-- Modal cours-->
<div class="modal fade" id="cours-details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="detail-title"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="details-body">
				<div class="table-responsive">
					<table id="detailsTable" class="table table-hover small table-sm table-bordered w-100">
						<thead>
						<tr>
							<td>Numéro</td>
							<td>Cours</td>
						</tr>
						</thead>
						<tbody id="details-tbody">

						</tbody>
					</table>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div>
<table class="d-none">
	<tr class="property-row property-template">
		<td class="property-name"></td>
		<td class="property-value"></td>
	</tr>
</table>


<!--Modal job-->
<div class="modal fade" id="job-details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="detailJob-title"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="details-body">
				<div class="table-responsive">
					<table id="detailsJobTable" class="table table-hover small table-sm table-bordered w-100">
						<thead>
						<tr>
							<td>Numéro</td>
							<td>Intitule</td>
						</tr>
						</thead>
						<tbody id="detailsJob-tbody">

						</tbody>
					</table>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div>
<table class="d-none">
	<tr class="property-row property-template2">
		<td class="property-name"></td>
		<td class="property-value"></td>
	</tr>
</table>
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
	const faculty=<?= json_encode($faculty) ?>

	originalOnload = window.onload;
	window.onload = function() {
		if (originalOnload) {
			originalOnload();
		}
		console.log(faculty);
		$(document).on('click', '.detail-cours', function (e){
			e.preventDefault();
			const $detailButton = $(this);
			const $index = $detailButton.data('index');

			const $CoursFaculty = faculty[Number.parseInt($index)]['cours'];
			const $filiere = faculty[Number.parseInt($index)];
			console.log($CoursFaculty);
			const $detailsBody = $('#details-tbody');
			$('#detailsTable').DataTable().clear().destroy();
			$detailsBody.empty();
			$('#detail-title').text(`Détails sur les cours de la filière  ${$filiere.libelle}`);
			for (let $key in $CoursFaculty){
				if ($CoursFaculty.hasOwnProperty($key)){
					const $row = $('.property-template')
							.clone()
							.removeClass('property-template');
					$row.find('.property-name').first().text(parseInt($key)+1);
					$row.find('.property-value').first().text($CoursFaculty[$key].intitule);
					$detailsBody.append($row);
				}
			}
			initDataTable('#detailsTable', 10, ['pdf', 'excel']);
		});
		$(document).on('click', '.detail-job', function (e){
			e.preventDefault();
			const $detailButton = $(this);
			const $index = $detailButton.data('index');

			const $JobFaculty = faculty[Number.parseInt($index)]['job'];
			const $filiere = faculty[Number.parseInt($index)]; //pour avoir les infos sur la filiere
			console.log($JobFaculty);
			const $detailsBody = $('#detailsJob-tbody');
			$('#detailsJobTable').DataTable().clear().destroy();
			$detailsBody.empty();
			$('#detailJob-title').text(`Détails sur les job de la filière  ${$filiere.libelle}`);
			for (let $key in $JobFaculty){
				if ($JobFaculty.hasOwnProperty($key)){
					const $row = $('.property-template')
							.clone()
							.removeClass('property-template');
					$row.find('.property-name').first().text(parseInt($key)+1);
					$row.find('.property-value').first().text($JobFaculty[$key].libelle);
					$detailsBody.append($row);
				}
			}
			initDataTable('#detailsJobTable', 10, ['pdf', 'excel']);
		});

	};
	const searchButton = document.getElementById('search-button');
	const searchInput = document.getElementById('search-input');
	searchButton.addEventListener('click', () => {
		const inputValue = searchInput.value;
		alert(inputValue);
	});
</script>
