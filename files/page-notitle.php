<?php get_header(); ?>

<?php 

/* Template Name: Page No Title

*/

if(have_posts()):
    while(have_posts()): the_post();?>
    <h3>This is my Static Title</h3>
    <small> Posted On: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>

    <p> <?php the_content();?></p>
    <hr>

    <?php endwhile;


endif;
?>
<?php get_footer(); ?>