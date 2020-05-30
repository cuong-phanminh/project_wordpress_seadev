<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-thumbnail">
            <?php basictheme_thumbnail( 'thumbnail' ); ?>
        </div>
        <header class="entry-header">
        <header class="entry-header">
          <?php basictheme_entry_header(); ?>
          <?php basictheme_entry_meta() ?>
        </header>
        </header>
        <div class="entry-content">
          <?php basictheme_entry_content(); ?>
          <?php ( is_single() ? basictheme_entry_tag() : '' ); ?>
        </div>
</article>