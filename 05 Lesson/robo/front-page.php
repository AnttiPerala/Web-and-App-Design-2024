
<?php
//handle our custom contact form

if (isset($_POST['submit'])){
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);
    $captcha = sanitize_text_field($_POST['captcha']);

    //simple CAPTCHA validation
    if ($captcha == '7'){
        $to = 'antti.perala@tuni.fi';
        $headers = 'From: ' . $email . "\r\n";
        $email_subject = "New Latest.AI contact form submission: $subject";
        $email_body = "You have received a message from $name. \n\n Here is the message: \n $message";
        wp_mail($to, $email_subject, $email_body, $headers);
        echo '<p>Thank you for your message!</p>';
    } else {
        echo '<p>Incorrect CAPTCHA answer. Please try again.</p>';
    }


}
?>

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

            <form id="contactForm" action="<?php echo esc_url($_SERVER['REQUEST_URI']) ?>" method="post">
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
                <div class="form-group">
                    <label for="captcha">What is 3 + 4?</label>
                    <input type="text" id="captcha" name="captcha" required>
                </div>
                

                <button type="submit" class="button-29">Send Message</button>

            </form>

        </div>

<?php get_footer(); ?>