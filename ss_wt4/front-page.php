<?php get_header(); ?>

<?php $ssWT4template = new SSWT4_Template( get_template_directory() . '/templates' );
echo $ssWT4template->render( 'front-masthead' );
echo $ssWT4template->render( 'front-team' );
?>
<?php get_footer();