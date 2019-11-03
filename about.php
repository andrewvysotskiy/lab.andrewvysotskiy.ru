<?php
/*
Template Name: О нас
Template Post Type: post, page, product
*/
?>
<?php get_template_part('template-parts/header/head') ?>
<?php get_template_part('template-parts/header/header') ?>	

	<!-- advantage -->
	<section class="advantage" id="advantage">	
		<div class="container">
			<div class="advantage-main">
				<h2 class="advantage-main__title">
					Преимущества LAB Consult
				</h2>
				<div class="row">
					<div class="col-md-6">
						<p class="advantage-main__text">
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
						</p>
					</div>
					<div class="col-md-6">
						<p class="advantage-main__text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat commodo consequat.
						</p>
					</div>
				</div>
			</div>
			<div class="advantage-list">
				<div class="row">
					<div class="col">
						<div class="advantage-list__element">
							<div class="advantage-list__icon">
								
							</div>
							<div class="advantage-list__text">
								<h3 class="advantage-list__title">
									Первое весомое преимущество
								</h3>
								<p class="advantage-list__par">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
								</p>
							</div>
						</div>
						<div class="advantage-list__element">
							<div class="advantage-list__icon">
		
							</div>
							<div class="advantage-list__text">
								<h3 class="advantage-list__title">
									Второе сильное и мощное преимущество
								</h3>
								<p class="advantage-list__par">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
								</p>
							</div>
						</div>
						<div class="advantage-list__element">
							<div class="advantage-list__icon">
								
							</div>
							<div class="advantage-list__text">
								<h3 class="advantage-list__title">
									Третье и финальное сильное и мощное преимущество
								</h3>
								<p class="advantage-list__par">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- photo -->
	<section class="photo" id="photo">
		<div class="container">
			<h2 class="photo__title">
				Фото наших мощностей
			</h2>
			<div class="row">
				<?php echo do_shortcode('[rl_gallery id="82"]'); ?>
				
			</div>
		</div>
	</section>
<?php get_template_part('template-parts/footer/footer') ?>