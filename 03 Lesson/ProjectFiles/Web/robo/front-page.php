<?php get_header(); ?>

        <main>
            <aside class="borderContainer">
                <img id="robotHand" class="horizontalFlip" src="<?php echo get_template_directory_uri(); ?>/img/robotHandCropped.png" alt="Robot hand">
            </aside>

            <article class="callToAction">
                <a href="#contact">
                    <h1>Let's talk!</h1>
                </a>
            </article>


            <section class="products">

            <?php
            $products_query = new WP_Query(
                array(
                    'category_name' => 'products',
                    'posts_per_page' => 9
                )
            );

            if ($products_query->have_posts()) : while ($products_query->have_posts()) : $products_query->the_post();

            ?>

                <article>

                    <?php the_content(); ?>
                    
                   <div class="productName"><?php the_title(); ?></div>
                
                </article>
                
                <?php endwhile; endif; ?>
            
            </section>
        </main>

        <div id="contact">

            <form id="contactForm">
                <h2>Contact Us</h2>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>

                <button type="submit" class="button-29">Send Message</button>

            </form>

        </div>

<?php get_footer(); ?>