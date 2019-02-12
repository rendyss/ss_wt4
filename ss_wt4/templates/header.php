<!DOCTYPE html>
<html lang="en">

<?php wp_head(); ?>
<title><?php wp_title(); ?></title>

<body>

<header id="header">
    <div class="container">
        <div id="logo" class="pull-left">
            <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
        </div>
        <nav id="nav-menu-container">
			<?php wp_nav_menu( array(
					'menu'       => 'main_menu',
					'menu_class' => 'nav-menu',
					'depth'      => 1,
					'container'  => '',
					'walker'     => new SSWT4_Navwalker()
				)
			); ?>
        </nav>
    </div>
</header><!-- #header -->

<?php if ( $is_front_page ) : ?>
    <section id="hero">
        <div class="hero-container">
            <h1>Welcome to Regna</h1>
            <h2>We are team of talanted designers making websites with Bootstrap</h2>
            <a href="#about" class="btn-get-started">Get Started</a>
        </div>
    </section>
<?php endif; ?>