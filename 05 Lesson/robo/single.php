<?php get_header(); ?>

        <main>
            
        

            <section class="singleSection">
              
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <div class="content"><?php the_content(); ?></div>
                <?php endwhile; endif; ?>
            
            </section>
            <aside class="sidebar">
                <?php get_sidebar(); ?>
            </aside>
        </main>

       

<?php get_footer(); ?>