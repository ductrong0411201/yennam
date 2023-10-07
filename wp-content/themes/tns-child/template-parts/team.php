<?php

$home_settings = get_field('_theme_home_settings', 'option');
$team          = $home_settings['_team'];
$members       = $team['_members'];

?>

<section class="team-wrapper">
	<div class="section-header" style="background-image: url(<?= wp_get_attachment_image_url($team['_background'], 'full') ?>)">
		<div class="container">
			<h2 class="section-title"><?= $team['_title'] ?></h2>
			<h3 class="section-subtitle"><?= $team['_subtitle'] ?></h3>
		</div>
	</div>
	<?php if ($members): ?>
		<div class="team-slick-slider-wrapper">
			<div class="container">
				<div class="team-slick-slider">
					<?php foreach ($members as $member): ?>
						<div class="member-item-wrapper">
							<div class="member-item">
								<div class="member-img">
									<?= wp_get_attachment_image($member['_img'], 'medium') ?>
								</div>
								<div class="member-content">
									<h4 class="text-1"><?= $member['_text_1'] ?></h4>
									<h5 class="text-2"><?= $member['_text_2'] ?></h5>
									<div class="desc"><?= wpautop($member['_desc']) ?></div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
</section>
