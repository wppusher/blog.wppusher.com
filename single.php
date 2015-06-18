<?php get_header(); ?>

<div class="container">

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

    <?php the_title(sprintf('<h1 class="lead copy centered"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>

    <br><br>

    <p class="lead centered">
        <?php echo get_the_excerpt(); ?>
    </p>

    <br><br>

</div>

<section class="blue">
    <div class="container">
        <div class="row">
            <div class="col-md-8 content-area">

        <?php get_template_part('content', 'single'); ?>

    <?php endwhile; ?>
    
    <div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'wppusherblog';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

<?php endif; ?>

            </div>
            <div class="col-md-3 col-md-offset-1">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>

<div id="licenses" class="container centered">

    <h2>Stay in the loop</h2>

    <p>Type in your e-mail to receive news and updates about WP Pusher.</p>
    <br>

    <form class="form-inline">
        <div class="form-group">
            <input type="email" class="form-control input-lg">&nbsp;
        </div>
        <input type="submit" class="btn btn-success btn-lg" value="Yes, please!">
    </form>

    <br><br>

</div>

<?php get_footer(); ?>
