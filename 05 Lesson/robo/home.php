<?php get_header(); ?>

<!-- Home.php styles the blog roll -->

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
        echo '<ul class="blogRollList">';
        foreach ($posts as $post){
            setup_postdata($post);
            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }
        echo '</ul>';
    }

    wp_reset_postdata();

    ?>

</main>

<?php get_footer(); ?>