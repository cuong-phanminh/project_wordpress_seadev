<?php 
/**
* Template Name: Front Page
*
* @package WordPress
* @subpackage Basic theme
* @since Basic theme 1.0
*/

get_header(); ?>
 
<div class="content">
 
<section id="main-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>
                <?php basictheme_pagination(); ?>
        <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>
</section>
        <section id="sidebar">
 
        </section>
 
</div>
 
<?php get_footer(); ?>