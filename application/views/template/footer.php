		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-xs-12">
						<div class="widget clearfix">
							<div class="widget-title">
								<a class="navbar-brand" href="index.html">
<!--									<img src="--><?//= img('images/logo.png')?><!--" alt="" />-->
									<h2 class="text-white">LOGO</h2>
								</a>
							</div>

						</div><!-- end clearfix -->
					</div><!-- end col -->

					<div class="col-lg-3 col-md-4 col-xs-12">
						<div class="widget clearfix">
							<div class="widget-title">
								<h3>Orientations</h3>
							</div>
							<ul class="footer-links">
<!--								<li><a href="#">Home</a></li>-->
<!--								<li><a href="#">Blog</a></li>-->
<!--								<li><a href="#">Pricing</a></li>-->
<!--								<li><a href="#">About</a></li>-->
<!--								<li><a href="#">Contact</a></li>-->
							</ul><!-- end links -->
						</div><!-- end clearfix -->
					</div><!-- end col -->

					<div class="col-lg-3 col-md-4 col-xs-12">
						<div class="widget clearfix">
							<div class="widget-title">
								<h3>Enseignements</h3>
							</div>
							<ul class="footer-links">
<!--								<li><a href="#">Home</a></li>-->
<!--								<li><a href="#">Blog</a></li>-->
<!--								<li><a href="#">Pricing</a></li>-->
<!--								<li><a href="#">About</a></li>-->
<!--								<li><a href="#">Contact</a></li>-->
							</ul><!-- end links -->
						</div><!-- end clearfix -->
					</div><!-- end col -->

					<div class="col-lg-3 col-md-4 col-xs-12">
						<div class="widget clearfix">
							<div class="widget-title">
								<h3>Aide à l'emploi</h3>
							</div>

							<ul class="footer-links">
<!--								<li><a href="mailto:#">info@yoursite.com</a></li>-->
<!--								<li><a href="#">www.yoursite.com</a></li>-->
<!--								<li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>-->
<!--								<li>+61 3 8376 6284</li>-->
							</ul><!-- end links -->
						</div><!-- end clearfix -->
					</div><!-- end col -->

				</div><!-- end row -->

			</div><!-- end container -->
		</footer><!-- end footer -->

<!--		<div class="container">-->
<!--			<div class="row">-->
<!--				<div class="col-lg-3">-->
<!--					<button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning" style="border-radius: 50%; height: 50px; width: 50px">-->
<!---->
<!--					</button>-->
<!--				</div>-->
<!--				<div class="col-lg-3">-->
<!--					<button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning" style="border-radius: 50%; height: 50px; width: 50px">-->
<!---->
<!--					</button>-->
<!--				</div>-->
<!--				<div class="col-lg-3">-->
<!--					<button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning" style="border-radius: 50%; height: 50px; width: 50px">-->
<!---->
<!--					</button>-->
<!--				</div>-->
<!--				<div class="col-lg-3">-->
<!--					<button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning" style="border-radius: 50%; height: 50px; width: 50px">-->
<!---->
<!--					</button>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->

		<div class="copyrights">
			<div class="container">
				<div class="footer-distributed">
					<div class="footer-center footer-links-soi">
						<span class="footer-company-name">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart" aria-hidden="true"></i> <a href="#">LOGO</a></span>
					</div>
				</div>
			</div><!-- end container -->
		</div><!-- end copyrights -->

		<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

		<!-- ALL JS FILES -->
<!--		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>-->



		<script src="<?= js('js/all') ?>">

		<script src="<?php echo  js('vendors/js/jquery-3.6.0.min'); ?>"></script>
		<!-- datatable -->
		<script src="<?= js('vendors/datatables/jquery.dataTables.min') ?>"></script>
		<script src="<?= js('vendors/datatables/dataTables.bootstrap4.min') ?>"></script>
		<script src="<?= js('vendors/datatables/datatables.min') ?>"></script>
		<script src="<?= js('vendors/datatables/pdfmake-0.1.32/pdfmake.min') ?>"></script>
		<script src="<?= js('vendors/datatables/pdfmake-0.1.32/vfs_fonts') ?>"></script>
		<!-- ALL PLUGINS -->
		<script src="<?= js('js/custom') ?>"></script>
		<script src="<?= js('js/timeline.min') ?>"></script>
		<script src="<?= js('js/bootstrap.min') ?>"></script>
		<!-- custom js -->
		<script src="<?php echo  js('vendors/select2/select2.min'); ?>" defer></script>
		<script src="<?php echo js('vendors/select2/select2.full') ?>" defer></script>
		<script src="<?php echo js('vendors/select2/select2.full') ?>" defer></script>
		<!-- fakeloader -->
		<script src="<?= js('vendors/transition-pages-fakeloader/src/fakeloader') ?>"></script>

		<script type="text/javascript">
			window.FakeLoader.init({
				auto_hide:true,
				fade_timeout: 500,
				overlay_id:'fakeloader-overlay'

			});
			timeline(document.querySelectorAll('.timeline'), {
				forceVerticalMode: 700,
				mode: 'horizontal',
				verticalStartPosition: 'left',
				visibleItems: 4
			});

			var initdTable=false;

			function initDataTable($element,$page,$button){

				initdTable = true;
				$($element).dataTable({

					pageLength: $page,
					// buttons:  [
					// 	'copy', 'excel',{
					// 		extend: 'pdfHtml5',
					// 		orientation: 'landscape',
					// 		pageSize: 'LEGAL'
					// 	}, 'colvis'
					// ],
					buttons: $button,
					columnDefs: [
						{targets: 'hidden-column', visible: false}
					],
					"language": {
						"decimal": ".",
						"thousands": ",",
						'sProcessing': 'Traitement en cours...',
						'sLengthMenu': 'Afficher _MENU_ lignes',
						'sZeroRecords': 'Aucun résultat trouvé',
						'sEmptyTable': 'Aucune donnée disponible',
						'sInfo': 'Affiche de _START_ à _END_ sur _TOTAL_ ligne(s)',
						'sInfoEmpty': 'Aucune ligne affichée',
						'sInfoFiltered': '(Filtre un maximum de _MAX_ lignes)',
						'sInfoPosFix': '',
						'sSearch': 'Rechercher : ',
						'sUrl': '',
						'sInfoThousands': ',',
						'sLoadingRecords': 'Chargement...',
						'oPaginate': {
							'sFirst': 'Premier',
							'sLast': 'Dernier',
							'sNext': 'Suivant',
							'sPrevious': 'Précédent'
						},
						'oAria': {
							'aSortAscending': ': Trier par ordre croissant',
							'sSortDescending': ': Trier par ordre décroissant'
						}
					},
					dom: 'Bfrtip',
					drawCallback: function () {
						$('button.buttons-print span').text('Imprimer');
						$('button.buttons-colvis span').text('Colonnes à afficher');
						$('button.buttons-copy span').text('Copier');
						$('.dt-button').addClass('btn btn-secondary dtable-button mb-2');
						$('.dtable-button').removeClass('dt-button');
						$('[data-toggle="popover"]').popover({
							"html": true,
							trigger: 'hover',
							placement: 'left'
						})

						$('button.buttons-colvis').on('click', function(){
							console.log('Clicked on button.buttons-colvis');
							$('.dt-button').addClass('btn btn-secondary dtable-button mb-2');
							$('.dtable-button').removeClass('dt-button');
						});
					}
				});
			}

			jQuery(document).ready(function($){

				if (initdTable === false)
					initDataTable($('#datatable'), 25, ['pdf', 'excel']);
			});
		</script>
	</body>
</html>
