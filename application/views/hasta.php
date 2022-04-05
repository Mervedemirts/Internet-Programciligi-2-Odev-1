<?php require_once "includes/header.php"; ?>
<div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
	<div class="container-contact3">
		<div class="wrap-contact3">
			<form class="contact3-form validate-form" action="<?php echo base_url("hasta/insert") ?>" method="POST">
				<span class="contact3-form-title">
					Hasta Kayıt
				</span>
				<div class="wrap-input3 validate-input" data-validate="Name is required">
					<input class="input3" type="text" name="ad" placeholder="Ad">
					<span class="focus-input3"></span>
				</div>

				<div class="wrap-input3 validate-input" data-validate="Surname is required">
					<input class="input3" type="text" name="soyad" placeholder="Soyad">
					<span class="focus-input3"></span>
				</div>
				<div class="wrap-input3 validate-input" data-validate="Tc is required">
					<input class="input3" maxlenght="11" type="text" name="tc" placeholder="Tc">
					<span class="focus-input3"></span>
				</div>

				<div class="container-contact3-form-btn">
					<button class="contact3-form-btn" style="width: 100%;">
						Ekle
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php require_once "includes/footer.php"; ?>