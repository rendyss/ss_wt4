<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2/12/2019
 * Time: 8:52 AM
 */

get_header(); ?>

    <main>
        <div class="container">
            <div class="content">
                <h2>Search result for: "<?php echo $s; ?>"</h2>
				<?php if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						global $ssWT4template;

						echo $ssWT4template->render( 'search-list', array(
							'post_type' => $post->post_type
						) );
					endwhile;
				else:
					echo "<p>Data not found</p>";
				endif; ?>

            </div>
        </div>
    </main>

<?php get_footer(); ?>