 <section class="push-top-large">
    <?php if ( have_comments() ) { ?>
        <div class="section-title small">
            <h3 class="heading comment-title">
                <?php
                    printf( _n( 'One Comment on &ldquo;%2$s&rdquo;', '%1$s Comments on &ldquo;%2$s&rdquo;', get_comments_number(), LAYERS_THEME_SLUG ),
                        number_format_i18n( get_comments_number() ),
                        '<span>' . get_the_title() . '</span>' );
                ?>
            </h3>
        </div>

        <div class="row comment-list">
            <?php wp_list_comments( array( 'callback' => 'layers_comment', 'style' => 'div' ) ); ?>
        </div><!-- .commentlist -->

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { // are there comments to navigate through ?>
            <nav id="comment-nav-below" class="pagination" role="navigation">
                <div class="previous"><?php previous_comments_link( __( '&larr;', LAYERS_THEME_SLUG ) ); ?></div>
                <div class="next"><?php next_comments_link( __( '&rarr;', LAYERS_THEME_SLUG ) ); ?></div>
            </nav>
        <?php }; // check for comment navigation ?>

    <?php }
    /* If there are no comments and comments are closed, let's leave a note.
     * But we only want the note on posts and pages that had comments in the first place.
     */
    if ( !is_page() && ! comments_open() && get_comments_number() ) : ?>
        <p class="nocomments"><?php _e( 'Comments are closed.' , LAYERS_THEME_SLUG ); ?></p>
    <?php endif; ?>

    <?php comment_form();  ?>

</section><!-- #comments .comments-area -->