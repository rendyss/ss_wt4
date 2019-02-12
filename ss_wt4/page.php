<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2/12/2019
 * Time: 8:50 AM
 */

get_header();

while ( have_posts() ) : the_post(); ?>

    <main>
        <div class="container">
            <div class="content">
				<?php the_content(); ?>
            </div>
        </div>
    </main>

<?php endwhile;

get_footer();