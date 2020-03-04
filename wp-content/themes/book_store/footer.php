<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Book
 */

?>
    <div class="container-fluid">
        <footer id="colophon" class="site-footer">
            <div class="site-info">
                    <?php
                    printf( esc_html__( 'Theme: %1$s by %2$s.', 'book' ), 'book', '<a href="http://Krishnaharishrestha.com.np">Krishna Hari Shrestha</a>' );
                    ?>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
    </body>
</html>
