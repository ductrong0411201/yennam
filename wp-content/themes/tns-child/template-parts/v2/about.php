<?php

$home_settings = get_field('_theme_home_settings_v2', 'option');
$about         = $home_settings['_about'];
$services      = $about['_services'];
$about_content = $about['_about'];

?>

<section class="about-wrapper-v2">
	<?php if ($services): ?>
		<div class="service-wrapper">
			<div class="container">
				<div class="row">
					<?php foreach ($services as $service): ?>
						<div class="col-lg-4">
							<div class="service-item">
								<div class="icon">
									<?= wp_get_attachment_image($service['_icon']) ?>
								</div>
								<h3 class="service-name"><?= $service['_title'] ?></h3>
								<div class="desc">
									<?= wpautop($service['_desc']) ?>
								</div>
								<div class="service-link-wrapper">
									<a href="<?= $service['_url'] ?>" class="service-link">Xem thêm</a>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<div class="about-container">
		<div class="container">
			<div class="about-content">
				<div class="about-header">
					<div class="about-logo-container">
						<div class="about-logo">
							YENNAM Lawfirm
						</div>
						<svg xmlns="http://www.w3.org/2000/svg" width="123" height="6" viewBox="0 0 123 6" fill="none">
							<ellipse cx="62.3695" cy="2.75445" rx="3.00624" ry="2.44" fill="#CC0066"/>
							<line x1="0.957031" y1="2.25977" x2="52.8013" y2="2.25977" stroke="#707070"/>
							<line x1="70.4297" y1="2.25977" x2="122.274" y2="2.25977" stroke="#707070"/>
						</svg>
					</div>
					<h1>
						<?= $about_content['_subtitle'] ?>
					</h1>
				</div>
				<div class="about-body">
					<h2>
						Lời giới thiệu về quá trình thành lập và hoạt động
					</h2>
					<div>
						<div class="spacer"></div>
					</div>
					<div class="section">
						<h3>
							Uy tín và đội ngũ:
						</h3>
						<div class="desc">
							Văn phòng luật sư Yến Nam được Sở Tư pháp tỉnh An Giang cấp Giấy đăng ký hoạt động số 52.01.0042/TP/ĐKHĐ vào ngày 10/12/2010 do Luật sư Phạm Hồng Nam làm Trưởng Văn phòng. Với hơn 10 năm hình thành và phát triển, đến nay Văn phòng đã tập hợp được đội ngũ thành viên là những Luật sư đã trải qua nhiều vị trí công tác ở các ngành nghề khác nhau, nhưng lại có cùng lý tưởng, coi trọng đạo đức, lẽ phải và niềm tin vào công lý; quyết tâm đoàn kết, cùng nhau xây dựng hình ảnh người Luật sư tận tâm và chuyên nghiệp.
						</div>
					</div>
					<div class="section">
						<div class="flex-container">
							<div class="body-left">
								<h3>
									Thấu hiểu, tận tâm và trách nhiệm:
								</h3>
								<div class="desc">
									Trải qua những năm tháng hành nghề, chúng tôi không chỉ gặp được những số phận éo le, những mãnh đời bất hạnh vì mưu sinh, vì miếng cơm manh áo mà còn có cả những người có vị thế xã hội, có điều kiện kinh tế nhưng do nhận thức pháp luật hạn chế đã tự đẩy mình vào con đường lao lý hoặc phải đánh đổ cả mái ấm hạnh phúc gia đình. Điều này đã thôi thúc tập thể Luật sư chúng tôi thành lập trang Website của Văn phòng luật sư Yến Nam để làm cầu nối cho người dân, doanh nghiệp và tổ chức tiếp cận các chủ trương, chính sách pháp luật của Đảng và Nhà nước; đóng góp một phần nhỏ vào công cuộc tuyên truyền, phổ biến giáo dục pháp luật đến với mọi người, nhằm giúp người dân, doanh nghiệp và tổ chức biết và tuân thủ đúng các quy định pháp luật, tránh các rủi ro pháp lý. Đồng thời, thông qua trang Website của Văn phòng, chúng tôi cũng mong muốn được góp phần quảng bá nghề Luật sư nói chung và hoạt động của Văn phòng luật sư Yến Nam nói riêng, giúp cho mọi người có cái nhìn thân thiện với nghề Luật sư chúng tôi, hạn chế những định kiến không đúng về vị trí, vai trò của Luật sư trong đời sống xã hội.
								</div>
							</div>
							<div class="body-right">
								<?= wp_get_attachment_image($about_content['_img'], 'full') ?>
							</div>
						</div>
					</div>
					<div class="section">
						<h3>
							Bảo mật:
						</h3>
						<div class="desc">
							Với tôn chỉ hoạt động là thượng tôn pháp luật, bảo vệ pháp chế và công lý, nghiêm chỉnh chấp hành Bộ Quy tắc đạo đức và Ứng xử nghề nghiệp luật sư, đảm bảo giữ bí mật thông tin khách hàng, bảo vệ quyền và lợi ích hợp pháp của khách hàng như bảo vệ quyền lợi của chính mình. Chúng tôi rất hy vọng Văn phòng luật sư Yến Nam sẽ là nơi tư vấn, bảo vệ quyền lợi đáng tin cậy để quý khách hàng yên tâm gửi gắm niềm tin, cùng quý khách hàng tháo gỡ vướng mắc, khó khăn trong công việc và mâu thuẫn trong cuộc sống.
						</div>
					</div>
					<div class="section">
						<h3>
							Không chỉ đơn thuần là nơi cung cấp các dịch vụ pháp lý:
						</h3>
						<div class="desc">
						Chúng tôi cũng rất kỳ vọng trong tương lai, trang Website của Văn phòng luật sư Yến Nam sẽ là kênh tuyên truyền, phổ biến pháp luật đến với mọi người; là nơi trao đổi kiến thức nghiệp vụ và chia sẻ kinh nghiệm cho các luật sư đồng nghiệp, những người công tác trong lĩnh vực pháp luật; đồng thời sẽ là nơi hỗ trợ kiến thức thực tiễn cho các em học sinh, sinh viên yêu thích nghề luật.
						</div>
					</div>
					<h2>
						Hình ảnh trụ sở VP
					</h2>
					<div>
						<div class="spacer"></div>
					</div>

					<div class="gallery">
						<div class="row">
							<div class="image square-image"><?= wp_get_attachment_image($about_content['_img'], 'full') ?></div>
							<div class="image retangle-image"><?= wp_get_attachment_image($about_content['_img'], 'full') ?></div>
						</div>
						<div class="row">
							<div class="image square-image"><?= wp_get_attachment_image($about_content['_img'], 'full') ?></div>
							<div class="image square-image"><?= wp_get_attachment_image($about_content['_img'], 'full') ?></div>
							<div class="image square-image"><?= wp_get_attachment_image($about_content['_img'], 'full') ?></div>
						</div>
					</div>
				</div>
				<!-- <div class="about-left">
					<h2 class="about-title"><?= $about_content['_title'] ?></h2>
					<h3 class="about-subtitle"><?= $about_content['_subtitle'] ?></h3>
					<div class="about-desc"><?= wpautop($about_content['_content']) ?></div>
					<a href="<?= $about_content['_url'] ?>" class="about-link">Xem thêm</a>
					<div class="logo-wrapper">
						<?= wp_get_attachment_image($about_content['_logo'], 'full') ?>
					</div>
				</div>
				<div class="about-right">
					<?= wp_get_attachment_image($about_content['_img'], 'full') ?>
				</div> -->
			</div>
		</div>
	</div>
</section>
