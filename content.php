<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

<?php the_excerpt(); ?>

<p><a href="<?php echo esc_url(get_permalink()); ?>">&raquo; Read article</a></p>
