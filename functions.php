<?php

    // ativando menus dinamicos
    function menus() {
        register_nav_menus(
            array(
                    'header-menu' => __('Menu do Topo'),
                    'portfolio-menu' => __('Menu do Portfolio')
                )
            );
    }
    add_action('init', 'menus');

    //thumb sizes
    function thumb_size(){
        add_theme_support('post-thumbnails');
        add_image_size('portfolio-thumb', 256, 150, true);
        add_image_size('project-page-thumb', 288, 291, true);
        }
    add_action('after_setup_theme', 'thumb_size');

    // post types
    function my_post_types(){
        // home description
        register_post_type('home',
            array(
                'labels' => array(
                    'name' => __('About me')
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-admin-users',
                'supports' => array('title', 'editor')
            ));
            // portfolio
            register_post_type('portfolio',
                array(
                    'labels' => array(
                        'name' => __('Portfolio')
                    ),
                    'public' => true,
                    'has_archive' => true,
                    'menu_icon' => 'dashicons-nametag',
                    'supports' => array('title', 'editor', 'thumbnail')
                ));
    }
    add_action('init', 'my_post_types');



function listPortfolio() {

	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(
        'post_type'             =>  'portfolio' ,
        'posts_per_page'        =>  5,
        'orderby'               =>  'title',
        'order'                 =>  'ASC',
        'paged'                 =>  $paged
);


    $exec = new WP_Query($args);

    if($exec->have_posts()):
        echo '<ul class="portfolio">';
        while($exec->have_posts()):
            $exec->the_post();
            $categories = get_the_category($post->ID);
            echo "<li>";
                    echo '<figure class="imghvr-shutter-in-out-diag-2">';
                        echo the_post_thumbnail('project-page-thumb');                
                        echo '<a href="'. get_the_permalink() .'">';
                            echo '<figcaption>';
                                echo '<h4>';
                                    echo the_title();
                                echo '</h4>';
                            echo '</figcaption>';
                        echo '</a>';
                    echo '</figure>';
                echo "</li>";
        endwhile;
        echo '</ul>';

    endif;
}

function portfolioSingle() {

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(
        'post_type'             =>  'portfolio' ,
        'posts_per_page'        =>  3,
        'orderby'               =>  'title',
        'order'                 =>  'ASC',
        'paged'                 =>  $paged
);

    /* Added $paged variable */

    $exec = new WP_Query($args);
    
    if($exec->have_posts()):
        echo '<ul class="single-store">';
        while($exec->have_posts()):
            $exec->the_post();
            $categories = get_the_category($post->ID);
                echo "<li class='store-box'>";
                    echo '<a href=" '. get_the_permalink() .' ">';
                        echo '<h1>';
                            echo the_title();
                        echo '</h1>';
                    echo "</a>";

                    echo '<div class="store-info-box">';
                        echo '<span>';
                            echo '<i class="fa fa-map-marker" aria-hidden="true"></i>';
                            echo the_field('localizacao');
                        echo '</span>';
                        echo '<span>';
                            echo $categories[0]->name;
                        echo '</span>';
                    echo '</div>';
                    
                echo "</li>";
        endwhile;
        echo '</ul>';
        if (function_exists(custom_pagination)) {
            custom_pagination($exec->max_num_pages,"",$paged);
        }
    endif;
}
