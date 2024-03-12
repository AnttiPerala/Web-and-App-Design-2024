<?php get_header(); ?>

        <main>
            

            

            <section class="mainsection">
              
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <div class="content"><?php the_content(); ?></div>
                <?php endwhile; endif; ?>
            
            </section>
        </main>

       

<?php get_footer(); ?>