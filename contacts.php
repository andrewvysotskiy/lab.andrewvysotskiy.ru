<?php
/*
Template Name: Контакты
Template Post Type: post, page, product
*/
?>
<?php get_template_part('template-parts/header/head') ?>
<?php get_template_part('template-parts/header/header') ?>
	<section class="yandex-map">
		<div class="container-fluid container-fluid_stretched">
			<div class="row">
				<div class="col">
					<div id="map" style=" height: 445px"></div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="baloon">
						<div class="baloon__top">
							<h3 class="baloon__header">
								LAB Consulting
							</h3>
							<div class="baloon__links">
								<a href="#" target="_blank" class="baloon__link">
									<i class="fab fa-facebook-square baloon__icon baloon__icon_f"></i>
								</a>
								<a href="#" target="_blank" class="baloon__link">
									<i class="fab fa-twitter baloon__icon baloon__icon_tw"></i>
								</a>
								<a href="#" target="_blank" class="baloon__link">
									<i class="fab fa-telegram-plane baloon__icon baloon__icon_t baloon__icon_right"></i>
								</a>
							</div>
						</div>
						<div class="baloon__bot">
							<div class="contact">
								<div class="contact__phone">
									<i class="fas fa-phone-alt contact__icon"></i>
									<a href="tel:+380487562354" target="_blank" class="contact__link">
										+38 (048) 756-23-54
									</a>
								</div>
								<div class="contact__phone">
									<i class="fas fa-phone-alt contact__icon"></i>
									<a href="tel:+380487562354" target="_blank" class="contact__link">
										+38 (048) 756-23-54
									</a>
								</div>
								<div class="contact__adress">
									<i class="fas fa-location-arrow contact__icon"></i>
										<p class="contact__text">
											65000,<br>
											Украина, г. Одесса<br>
											Ул Базарная, 36
										</p>
								</div>
								<div class="contact__mail ">
									<i class="fas fa-envelope contact__icon"></i>
										<a href="mailto:info@lab-consult.com" target="_blank" class="contact__link">
											info@lab-consult.com
										</a>
								</div>
							</div>
							<div class="baloon__right">
								<p class="baloon__text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<p class="baloon__text">
									Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</p>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_template_part('template-parts/footer/footer') ?>