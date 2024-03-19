<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ( '1' === $comments_number ) {
                //printf( esc_html_e( 'One comment on &ldquo;%s&rdquo;', 'textdomain' ), get_the_title() );
            }else {
                //printf(
                    // WPCS: XSS OK.
                    //esc_html( _n( '%1$s comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', $comments_number, 'textdomain' ) ),
                    //number_format_i18n( $comments_number ),
                    //get_the_title()
                //);
            }
            ?>
        </h2>

        <ol class="comment-list">
<?php
                //wp_list_comments( array(
                 //   'style'       => 'ol',
                  //  'short_ping'  => true,
                  //  'avatar_size' => 42,
                //) );
            ?>
        </ol>

        <?php the_comments_navigation(); ?>

    <?php endif; // Check for have_comments(). ?>

    <?php
        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'textdomain' ); ?></p>
    <?php endif; ?>

    <?php
        comment_form();
    ?>

</div><!-- #comments -->