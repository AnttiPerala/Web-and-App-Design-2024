<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest AI Tech</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>

    <div id="container">

        <header>
            <img src="<?php echo get_template_directory_uri(); ?>/img/ailogo.png" alt="Latest.AI Logo">

            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#bottomElement">Talk With Us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="Testimonials.html">Testimonials</a></li>
                    <li><a href="about.html">About Us</a></li>
                </ul>
            </nav>

        </header>

      

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
                <article>

                    <img src="img/iconVideo.png" alt="video icon">
                    
                   <div class="productName">Video Restoration</div>
                
                </article>
                
                <article>

                    <img src="img/iconAudio.png" alt="audio icon">
                
                    <div class="productName">Audio Enhancement</div>
                
                </article>
                
                <article>

                    <img src="img/iconFX.png" alt="effects icon">
                    
                    <div class="productName">Visual Effects</div>
                
                </article>
            
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

        <footer>
            © Copyright 2024 Antti Perälä 
        </footer>

    </div>

    <script src="<?php echo get_template_directory_uri(); ?>/js/scroll.js"></script>
    
</body>
</html>