<?php get_header(); ?>

<div class="container">

    <h1 class="lead copy centered">
        WP Pusher Blog
    </h1>

    <br><br>

    <p class="lead centered">
        Blog about WordPress <strong>deployment</strong>, <strong>work flow</strong> and <strong>best practices</strong>, written by <strong><a href="https://wppusher.com">WPPusher.com</a></strong> &nbsp;-&nbsp; Pain-free deployment for WordPress.

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

<div class="container centered">

    <h2>Stay in the loop</h2>

    <p>Type in your e-mail to receive news and updates about WP Pusher.</p>
    <br>

    <form method="POST" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate action="//wppusher.us9.list-manage.com/subscribe/post?u=514158db7871a8d4e9a558963&amp;id=3baab10369" class="form-inline">
        <div class="form-group">
            <input type="email" value="" name="EMAIL" class="form-control input-lg" id="mce-EMAIL">&nbsp;
        </div>
        <input type="submit" class="btn btn-success btn-lg" value="Yes, please!" name="subscribe" id="mc-embedded-subscribe">
    </form>

    <br><br>

</div>

<?php get_footer(); ?>
