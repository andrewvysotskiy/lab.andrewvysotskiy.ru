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
	<header class="header header__inner" id="header">
		<div class="hat hat_grey">
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
					          'menu_class'      => 'menu__list',
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
	<!-- header-nav -->
		<div class="header-nav">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-4">
						<h1 class="header-nav__title">
							<?php the_title(); ?>
						</h1>
						<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
					</div>
					<div class="col-lg-8">
						<nav class="nav">
							<ul class="nav__list">
								<?php wp_list_pages(array (
						            'child_of' => get_the_ID(),
						            'title_li' => 0
								        )
								); ?>
							</ul>
						</nav>
					</div>
				</div>
			</div>	
		</div>	
	</header>