<h2>Latest Articles</h2>

<?php query_posts('showposts=5'); ?>
<ul class="sidebar-nav">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
<?php endwhile; endif; ?>
</ul>

<h2>Topics</h2>

<ul class="sidebar-nav">
<?php foreach (get_categories() as $category) { ?>
    <li><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></li>
<?php } ?>
</ul>
