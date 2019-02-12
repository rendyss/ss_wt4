<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2/12/2019
 * Time: 8:48 AM
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
						<?php the_content(); ?>

						<?php if ( is_active_sidebar( 'right_1' ) ) { ?>
                    </div>
                    <div class="col-sm-4">
                        <div class="sidebars">
							<?php dynamic_sidebar( 'right_1' ); ?>
                        </div>
                    </div>
                </div>
			<?php }
			?>
            </div>
        </div>
    </main>

<?php endwhile;

get_footer();