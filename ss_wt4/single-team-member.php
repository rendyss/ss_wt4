<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2/12/2019
 * Time: 2:17 PM
 */

get_header();

while ( have_posts() ) : the_post(); ?>

    <main>
        <div class="container">
            <div class="content">
				<?php if ( is_active_sidebar( 'right_1' ) ) { ?>
                <div class="row">
                    <div class="col-sm-8">
						<?php } ?>

                        <h2><?php the_title(); ?></h2>
                        <p>You can show individual team member's detail here, but i choose shortcode from the plugin
                            instead</p>
						<?php echo do_shortcode( '[ss_teammember id=' . get_the_ID() . ' use_bootstrap=true]' ); ?>
                        <p>In case we really need to display individual field, so here's the name: <?php the_title(); ?>
                            , position: <?php echo get_post_meta( get_the_ID(), 'ssteammember_position', true ); ?>,
                            email: <?php echo get_post_meta( get_the_ID(), 'ssteammember_email', true ); ?>,
                            website: <?php echo get_post_meta( get_the_ID(), 'ssteammember_website', true ); ?>, and so
                            on.</p>

						<?php if ( is_active_sidebar( 'right_1' ) ) { ?>
                    </div>
                    <div class="col-sm-4">
                        <div class="sidebars">
							<?php dynamic_sidebar( 'right_1' ); ?>
                        </div>
                    </div>
                </div>
			<?php } ?>
            </div>
        </div>
    </main>

<?php endwhile;

get_footer(); ?>
