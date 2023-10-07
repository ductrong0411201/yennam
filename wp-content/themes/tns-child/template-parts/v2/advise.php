<?php

$home_settings = get_field('_theme_home_settings_v2', 'option');
$advise        = $home_settings['_advise'];

?>

<section class="advise-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="google-maps-wrapper">
					<?= $advise['_google_maps_iframe'] ?>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-wrapper">
					<h2 class="form-title"><?= $advise['_title'] ?></h2>
					<?= do_shortcode($advise['_form_shortcode']) ?>
				</div>
			</div>
		</div>
	</div>
</section>
