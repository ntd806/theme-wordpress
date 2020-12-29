<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-thumbnail">
        	<?php themelight_thumbnail( 'thumbnail' ); ?>
        </div>
        <header class="entry-header">
        	<?php themelight_entry_header(); ?>
        	<?php themelight_entry_meta() ?>
        </header>
        <div class="entry-content">
        	<?php themelight_entry_content(); ?>
            <?php ( is_single() ? themelight_entry_tag() : '' ); ?>
        </div>
</article>