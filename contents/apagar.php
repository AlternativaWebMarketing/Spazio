<div class="content">
    <nav class='portfolio-menu'>
        <ul>
            <li><a href="#">link <span></span></a></li>
            <li><a href="#">portfolio grandão <span></span></a></li>
        </ul>
    </nav>
        <?php query_posts('post_type=portfolio'); ?>
        <ul class='portfolio'>
            <li>
                <?php while(have_posts()) : the_post(); ?>
                <figure class='imghvr-shutter-in-out-diag-2'>
                    <img src="<?php the_post_thumbnail_url('project-page-thumb'); ?>" alt="<?php the_title(); ?>">
                    <a href="">
                        <figcaption>
                                <h4><?php the_title(); ?></h4>
                        </figcaption>
                    </a>
                </figure>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php wp_reset_query(); ?>
</div>
