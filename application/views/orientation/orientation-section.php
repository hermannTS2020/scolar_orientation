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
		<div class="col-md-12 ">
<!--			<div class="card" >-->
<!--				<div class="card-header" style="background: linear-gradient(to left, #00CC00, #36d278); ">-->
<!--					<h3 class="text-white text-capitalize bold">enseignement technique et professionnel </h3>-->
<!--				</div>-->
<!--				<div class="card-body " style="background: mediumspringgreen">-->
<!--					<p class="text-center bold" style="font-size: 1.2rem">L’enseignement technique et professionnel (ESTP) permet l’acquisition des connaissances,-->
<!--						des compétences et d’attitudes qui allient la maîtrise des techniques et des sciences,-->
<!--						et la connaissance du monde du travail en vue de l’insertion professionnelle des jeunes.-->
<!--					</p>-->
<!--				</div>-->
<!--			</div>-->
		</div>
	</div>
	<br><br>
	<div class="row">
		<div class="col-sm-12  align-self-center">
			<?php
			breadcrumb($breadcrumb);
			?>
		</div>
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header" style="background: linear-gradient(to left, #b51b67, #652387); ">
					<h3 class="text-white">Les sections de l'option  <strong class="bold text-capitalize"><?= $libelleOpt?></strong>  de <strong class="text-capitalize bold"><?= $libelleEns?></strong>  </h3>
				</div>
				<div class="card-body">
					<div class="row justify-content-around custom-line">
						<div class="col-md-4 ">
							<a href="<?=base_url('Orientation/GetSectionBySortie'.'/'.$idEns.'/'.$idOpt.'/'.'1') ?>">
								<div class="card option-item" style="background: linear-gradient(to left, #00CC00, #36d278); height: 150px">
									<div class="card-body text-lg-center">
										<!--									<img src="--><?//= img('images/estp.jpg')?><!--" class="card-img-absolute rounded" alt="circle-image" height="80%" width="80%"><br><br>-->
										<div class="card-text">
											<h2 class="text-capitalize">Après l'école primaire </h2>
											<p class="text-uppercase "><strong class="">cep | fslc </strong></p>
										</div>

									</div>
								</div>
							</a>

						</div>
						<div class="col-md-4">
							<a href="<?=base_url('Orientation/GetSectionBySortie'.'/'.$idEns.'/'.$idOpt.'/'.'2') ?>">
								<div class="card option-item bg-gradient-primary" style="height: 150px">
									<div class="card-body text-lg-center">
										<div class="card-text">
											<h2 class="text-capitalize">Après le premier cycle secondaire et technique</h2>
											<p class="text-uppercase "><strong class="">bepc | gce o level | cap </strong></p>
										</div>

									</div>
								</div>
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<br><br>
	<div class="row">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header" style="background: linear-gradient(to left, #b51b67, #652387); ">
					<h3 class="text-white">Correspondances entre les spécialitésdu 1er et 2nd cycle des  <strong class="bold text-capitalize"><?= $libelleOpt?></strong>  de <strong class="text-capitalize bold"><?= $libelleEns?></strong>  </h3>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="datatable" class="table small table-hover table-sm table-bordered w-100">
							<thead>
							<tr>
								<th>Sections </th>
								<th>premier cycle</th>
								<th>second cycle</th>
							</tr>
							</thead>
							<tbody>

							</tbody>

						</table>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!--	<div class="row justify-content-around custom-line">-->
	<!--		<div class="col-md-4 ">-->
	<!--			<div class="card bg-warning enseignement">-->
	<!--				<div class="card-body text-lg-center">-->
	<!--					<img src="--><?//= img('images/estp.jpg')?><!--" class="card-img-absolute rounded" alt="circle-image" height="80%" width="80%"><br><br>-->
	<!--					<a href=""><h2 class="text-capitalize">orientation <strong class="">enseignement technique et professionnel </strong> </h2></a>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--		<div class="col-md-4">-->
	<!--			<div class="card bg-info enseignement">-->
	<!--				<div class="card-body text-lg-center">-->
	<!--					<a href=""><h2 class="text-capitalize">orientation <strong class="">enseignement général </strong> </h2></a>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--		<div class="col-md-12 col-md-10 offset-md-">-->
	<!--			<div class="card" style="background: linear-gradient(to left, #b51b67, #652387); ">-->
	<!--				<div class="card-body">-->
	<!--					<div class="input-group rounded">-->
	<!--						<input id="search-input" type="search" class="form-control rounded" placeholder="Rechercher les formations, les diplômes" aria-label="Search"-->
	<!--							   aria-describedby="search-addon" />-->
	<!--						<button id="search-button" type="button" class="btn " style="background: mediumspringgreen">-->
	<!--							<i class="fa fa-search"></i>-->
	<!--						</button>-->
	<!--					</div>-->
	<!--					<br>-->
	<!--					<fieldset class="scheduler-border">-->
	<!--						<legend class="scheduler-border text-white">Options de filtrage</legend>-->
	<!--						<div class="row">-->
	<!--							<div class="col-sm-6">-->
	<!--								<div class="">-->
	<!--									<label for="region" class="l-100 text-white">Région</label>-->
	<!--									<select name="region" class="form-control region" id="region" required>-->
	<!--										<option value="0">Littoral</option>-->
	<!--										<option value="1">Adamaoua</option>-->
	<!--									</select>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--							<div class="col-sm-6 mb-1">-->
	<!--								<div class="">-->
	<!--									<label for="departement" class="l-200 text-white">Département</label>-->
	<!--									<select name="departement" class="form-control" id="departement" required>-->
	<!--										<option value="0" >Haut plateau</option>-->
	<!--										<option value="1">Wouri</option>-->
	<!--									</select>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--						<div class="row">-->
	<!--							<div class="col-sm-6">-->
	<!--								<div class="">-->
	<!--									<label for="arrondissement" class="l-100 text-white">Arrondissement</label>-->
	<!--									<select name="arrondissement" class="form-control arrondissement" id="arrondissement" required>-->
	<!--										<option value="0">Djérem</option>-->
	<!--										<option value="1">Haute-Sanaga</option>-->
	<!--									</select>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--							<div class="col-sm-6 mb-1">-->
	<!--								<div class="">-->
	<!--									<label for="formation" class="l-100 text-white">Filière</label>-->
	<!--									<select name="formation" class="form-control formation" id="formation" required>-->
	<!--										<option value="0">Informatique</option>-->
	<!--										<option value="1">Biologie</option>-->
	<!--									</select>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--						</div>-->
	<!---->
	<!--					</fieldset>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
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

</script>
