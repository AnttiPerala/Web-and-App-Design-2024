<?php get_header(); ?>

<main>

    <?php

    $category_id = get_cat_ID('Blog');
    $category_link = get_category_link($category_id);
    $args = array(
        'category' => $category_id,
    'posts_per_page' => 20 
    );

    $posts = get_posts($args);

    //var_dump($posts);

    if ($posts) {
        echo '<ul>';
        foreach ($posts as $post){
            setup_postdata($post);
            echo '<li>' . get_the_title() . '</li>';
        }
        echo '</ul>';
    }

    wp_reset_postdata();

    ?>

</main>

<?php get_footer(); ?>