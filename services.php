<?php
/*
Template Name: Услуги
Template Post Type: post, page, product
*/
?>
<?php get_template_part('template-parts/header/head') ?>
<?php get_template_part('template-parts/header/header') ?>	

<!-- law-->
	<section class="law" id="law">
		<div class="law-top">
			<div class="container">
				<div class="row ">
					<div class="col-md-4 col-lg-3">
						<img class="law-top__img" src="<?php bloginfo('template_directory') ?>/img/services/services-img.png" alt="Юридическое сопровождение">
					</div>
					<div class="col-md-8 col-lg-4">
						<h2 class="law-top__title">
							Юридическое<br> сопровождение
						</h2>
						<p class="law-top__text">
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
						</p>
					</div>
					<div class="d-none d-lg-block offset-lg-1 col-lg-4">
						<div class="law-top__links">
							<div class="law-top__item">
								<div class="law-top__aarow">
									&rarr;
								</div>
								<a href="#" target="_blank" class="law-top__link">
									Подкатегория услуг первая
								</a>
							</div>
							<div class="law-top__item">
								<div class="law-top__aarow">
									&rarr;
								</div>
								<a href="#" target="_blank" class="law-top__link">
									Вторая подкатегория
								</a>
							</div>	
							<div class="law-top__item">
								<div class="law-top__aarow">
									&rarr;
								</div>
								<a href="#" target="_blank" class="law-top__link">
									Маленькая услуга
								</a>
							</div>	
							<div class="law-top__item">
								<div class="law-top__aarow">
									&rarr;
								</div>
								<a href="#" target="_blank" class="law-top__link">
									Довольно длинная и замысловатая
								</a>
							</div>	
							<div class="law-top__item">
								<div class="law-top__aarow">
									&rarr;
								</div>
								<a href="#" target="_blank" class="law-top__link">
									Ещё одна
								</a>
							</div>	
							<div class="law-top__item">
								<div class="law-top__aarow">
									&rarr;
								</div>
								<a href="#" target="_blank" class="law-top__link">
									И ещё одна в конце
								</a>
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- law-bot -->
		<div class="law-bot" id="law-bot">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="category">
							<h2 class="category__title">
								Вторая подкатегория
							</h2>
							<p class="category__text">
								But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.
							</p>
							<p class="category__text">
								To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
							</p>
							<p class="category__text">
								To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
							</p>
							<p class="category__text">
								Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.
							</p>
							<p class="category__text">
								To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
							</p>
							<p class="category__text">
								No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. 
							</p>
						</div>
						<div class="advice" id="advice">
							<h3 class="advice__title">
								Нужна бесплатная консультация?
							</h3>
							<div class="advice__string">
								<button class="advice__button" type="button">
									Оставить заявку
								</button>
								<a class="advice__phone" href="tel:+380487542356">+38 (048) 754-23-56</a>
							</div>
							<p class="advice__text">
								Наши консультанты свяжутся с Вами максимально быстро и ответят на все интересующие Вас вопросы
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<aside class="aside">
							<div class="side">
								<h3 class="side__title">
									Навигация
								</h3>
								<?php wp_nav_menu( array(
						          'theme_location'  => '',
						          'menu'            => 'услуги-боковое',
						          'container'       => false,
						          'container_class' => '',
						          'container_id'    => '',
						          'menu_class'      => 'side__list',
						          'menu_id'         => '',
						          'echo'            => true,
						          'fallback_cb'     => 'wp_page_menu',
						          'before'          => '',
						          'after'           => '',
						          'link_before'     => '',
						          'link_after'      => '',
						          'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						          'depth'           => 0,
						          'walker'          => '',
					        	) ); ?>
							</div>
							<div class="review">
								<h3 class="review__title">
									Отзывы
								</h3>
								<div class="slider">
									<div class="slider__element">
										<img class="slider__photo" src="<?php bloginfo('template_directory') ?>/img/services/user-img.png" alt="Фото пользователя">
										<p class="slider__heading">
											Валерий Цукерберг
										</p>
										<p class="slider__text">
											al exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy
										</p>
										<i class="fab fa-facebook-f slider__icon"></i>
									</div>
									<div class="slider__element">
										<img class="slider__photo" src="<?php bloginfo('template_directory') ?>/img/services/user-img2.png" alt="Фото пользователя">
										<p class="slider__heading">
											Билл Гейтс
										</p>
										<p class="slider__text">
											al exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy
										</p>
										<i class="fab fa-windows slider__icon"></i>
									</div>
									<div class="slider__element">
										<img class="slider__photo" src="<?php bloginfo('template_directory') ?>/img/services/user-img3.png" alt="Фото пользователя">
										<p class="slider__heading">
											Павел Дуров
										</p>
										<p class="slider__text">
											al exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy
										</p>
										<i class="fab fa-telegram slider__icon slider__icon_t"></i>
									</div>
								</div>
							</div>
						</aside>	
					</div>
				</div>
			</div>
		</div>
	</section>


<?php get_template_part('template-parts/footer/footer') ?>