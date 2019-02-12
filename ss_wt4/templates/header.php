<!DOCTYPE html>
<html lang="en">

<?php wp_head(); ?>
<title><?php wp_title(); ?></title>

<body <?php echo ! $is_front_page ? "class=\"generic\"" : ""; ?>>

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