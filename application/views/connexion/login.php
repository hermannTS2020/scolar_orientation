<!-- login area start -->
<div class="login-area">
	<div class="container">
		<div class="login-box ptb--100">
			<form action="<?= base_url('Connexion/Auth')?>" method="post">
				<?php if(isset($error)) { ?>
					<div class="alert alert-warning">
						<button type="button" class="close" data-dismiss="alert" onclick="$(this).parent().hide()"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<?php echo $error ?>
					</div>
				<?php } ?>
				<div class="login-form-head">
					<h4>Authentification</h4>
				</div>
				<div class="login-form-body">
					<div class="form-gp">
<!--						<label for="email">Email address</label>-->
						<input type="email" id="email" name="email" placeholder="Adresse email">
						<i class="ti-email"></i>
						<div class="text-danger"></div>
						<?php echo form_error('email')?>
					</div>
					<div class="form-gp">
<!--						<label for="password">Password</label>-->
						<input type="password" id="password" name="pwd" placeholder="Mot de passe">
						<i class="ti-lock"></i>
						<div class="text-danger"></div>
						<?php echo form_error('pwd')?>
					</div>
					<div class="row mb-4 rmber-area">
						<div class="col-6">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
							</div>
						</div>
						<div class="col-6 text-right">
							<a href="#">Forgot Password?</a>
						</div>
					</div>
					<div class="submit-btn-area">
						<button id="form_submit" type="submit">Connexion<i class="ti-arrow-right bold"></i></button>
<!--						<div class="login-other row mt-4">-->
<!--							<div class="col-6">-->
<!--								<a class="fb-login" href="#">Log in with <i class="fa fa-facebook"></i></a>-->
<!--							</div>-->
<!--							<div class="col-6">-->
<!--								<a class="google-login" href="#">Log in with <i class="fa fa-google"></i></a>-->
<!--							</div>-->
<!--						</div>-->
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- login area end -->

<script>
	$(document).ready(function(){
		<?php if($val = get_flash_data()){
		echo 'setTimeout(function(){
                    alertify.'.$val[0].'("'.$val[1].'");
                }, 750);';
	} ?>

	});
</script>
