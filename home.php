<?php  
/*
Template Name: Главная страница
Template Post Type: post, page, product
*/
?>
<?php get_template_part('template-parts/header/head') ?>
<body>
	<!-- Preloader:start -->
	<!-- js -->
	<div id="page-preloader">
		<!-- css -->
		<div class="cssload-loader">
			<div class="cssload-flipper">
				<div class="cssload-front"></div>
				<div class="cssload-back"></div>
			</div>
		</div>
		<!-- /css -->
	<!-- /js -->
	</div>
	<!-- Preloader:finish -->
	
	<!-- header -->
	<header class="header parallax" id="header" data-type="background" data-speed="5">
		<div class="hat">
	<!-- hat -->
			<div class="container">
				<div class="row d-flex align-items-center ">
					<div class=" col-7 col-sm-7 col-lg-4">
						<a href="<?php echo get_home_url(); ?>" class="logo__link">
							<img class="logo__img" src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="LAB Consulting">
						</a>
					</div>
					<div class="d-none d-lg-block col-lg-6 menu-hamburger">
						<nav class="menu">
							<?php wp_nav_menu( array(
					          'theme_location'  => '',
					          'menu'            => 'Основное',
					          'container'       => false,
					          'container_class' => '',
					          'container_id'    => '',
					          'menu_class'      => 'menu__list d-flex justify-content-between',
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
							<!-- <ul class="menu__list d-flex justify-content-between">
								<li class="menu__item">
									<a class="menu__link" href="about.html">О компании</a>
								</li>
								<li class="menu__item">
									<a class="menu__link" href="#">Пресс-центр</a>
								</li>
								<li class="menu__item">
									<a class="menu__link" href="services.html">Услуги</a>
								</li>
								<li class="menu__item">
									<a class="menu__link" href="#">Отрасли</a>
								</li>
								<li class="menu__item">
									<a class="menu__link" href="contacts.html">Контакты</a>
								</li>
							</ul> -->
						</nav>
					</div>
					<div class="col-5 col-sm-5 col-lg-2 d-flex justify-content-end">
					<!-- button -->
						<button class="button button_hat" type="button">
							<i class="fas fa-phone button__icon button__icon_hat"></i>
							<p class="button__text button__text_hat">
								Заказать звонок
							</p>
						</button>
						<button type="button" class="hamburger">
							<i class="fas fa-bars hamburger__icon"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	<!-- header__bottom -->
		<div class="bottom header__bottom">
			<div class="container">
				<h1 class="bottom__title">
					LAB Consulting
				</h1>
				<p class="bottom__text">
					Ваш надежный партнер в области транспортно-логистического сопровождения
				</p>
				<div class="bottom__links d-flex justify-content-around">
					<a href="#" target="_blank" class="bottom__link">
						<i class="fab fa-facebook-square bottom__icon"></i>
					</a>
					<a href="#" target="_blank" class="bottom__link">
						<i class="fab fa-twitter bottom__icon bottom__icon_twitter"></i>
					</a>
					<a href="#" target="_blank" class="bottom__link">
						<i class="fab fa-telegram-plane bottom__icon bottom__icon_telegram"></i>
					</a>
				</div>
			</div>	
		</div>	
	</header>
	<!-- trust -->
	<section class="trust" id="trust">
		<div class="container trust__container">
			<h2 class="trust__title" >
				Мы заслужили доверие
			</h2>
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="trust__item d-flex align-items-center">
						<div class="trust__icon"></div>
						<h4 class="trust__heading">
							Что мы предлагаем?
						</h4>
						<p class="trust__text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
						</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="trust__item d-flex align-items-center">
						<div class="trust__icon trust__icon_two"></div>
						<h4 class="trust__heading">
							Как мы работаем?
						</h4>
						<p class="trust__text">
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ill
						</p>
					</div>
				</div>
				<div class=" col-lg-4">
					<div class="trust__item d-flex align-items-center">
						<div class="trust__icon trust__icon_three"></div>
						<h4 class="trust__heading">
							Почему мы?
						</h4>
						<p class="trust__text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
						</p>
					</div>
				</div>
				<a href="#mission" class="go-to button button_down d-flex align-items-center" >
					Подробнее
				</a>
			</div>
		</div>
	</section>	
	<!-- offer	 -->
	<section class="offer" id="offer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="offer__item d-flex align-items-center">
						<div class="offer__icon d-flex justify-content-center aling-items-center">L</div>
						<h3 class="offer__title">
							Legal
						</h3>
						<p class="offer__text">
							But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="offer__item d-flex align-items-center">
						<div class="offer__icon d-flex justify-content-center aling-items-center">A</div>
						<h3 class="offer__title">
							Accounting
						</h3>
						<p class="offer__text">
							But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="offer__item d-flex align-items-center">
						<div class="offer__icon d-flex justify-content-center aling-items-center">B</div>
						<h3 class="offer__title">
							Business
						</h3>
						<p class="offer__text">
							But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- mission -->
	<section class="mission" id="mission">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<h3 class="mission__title mission__title_left" >
						Миссия LAB Consulting
					</h3>
					<div class="mission__block d-flex justify-content-between">
						<div class="mission__left">
							<p class="mission__text">
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
							</p>
							<p class="mission__text">
							 	Eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
							</p>
							<a class="button mission__button d-flex align-items-center" target="_blank" href="<?php echo get_page_link(31); ?>">
								
									Узнать больше
								
							</a>
						</div>
						<div class="mission__right">
							<p class="mission__text">
								Eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
							</p>
							<p class="mission__text">
								Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
							</p>
						</div>		
					</div>
				</div>
				<div class="col-lg-3">
					<h3 class="mission__title mission__title_news" >
						Новости
					</h3>
					<div class="news">
						<img class="news__img" src="<?php bloginfo('template_directory') ?>/img/home/truck.jpg" alt="Фото новостей">
						<div class="news__text ">
							<p class="news__par">
								<a href="javascript:void(0)" class="news__link">
									LAB Consulting запускает новое направление в своих услугах
								</a>
							</p>
							<time class="news__time" >02.12.2015</time>
						</div>
					</div>
					<div class="news">
						<img class="news__img" src="<?php bloginfo('template_directory') ?>/img/home/truck.jpg" alt="Фото новостей">
						<div class="news__text ">
							<p class="news__par">
								<a href="javascript:void(0)" class="news__link">
									LAB Consulting запускает новое направление в своих услугах
								</a>
							</p>
							<time class="news__time" >02.12.2015</time>
						</div>
					</div>
					<div class="news">
						<img class="news__img" src="<?php bloginfo('template_directory') ?>/img/home/truck.jpg" alt="Фото новостей">
						<div class="news__text ">
							<p class="news__par">
								<a href="javascript:void(0)" class="news__link">
									LAB Consulting запускает новое направление в своих услугах
								</a>
							</p>
							<time class="news__time" >02.12.2015</time>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/footer/footer') ?>