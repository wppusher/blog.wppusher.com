<?php get_header(); ?>

<div class="container">

    <h1 class="lead copy centered">
        WP Pusher Blog
    </h1>

    <br><br>

    <p class="lead centered">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet augue ex, ut egestas ligula blandit in. Vestibulum eu magna posuere, volutpat augue nec, ultrices massa. Fusce faucibus metus quis nisl ullamcorper molestie.
    </p>

    <br><br>

</div>

<section class="blue">
    <div class="container">
        <div class="row">
            <div class="col-md-8 content-area">

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <?php get_template_part('content', get_post_format()); ?>

                <?php endwhile; ?>

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
