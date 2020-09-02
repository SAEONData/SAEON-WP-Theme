<?php
/**
 * The template for displaying the footer
 */

?>

<footer id="sn-footer" role="contentinfo" >
<div class="sn-container">
    <div class="sn-row">
        <div class="sn-col-4">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 1") ) : ?>
            <?php endif;?>
        </div>
        <div class="sn-col-4">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 1") ) : ?>
            <?php endif;?>
        </div>
        <div class="sn-col-4">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 1") ) : ?>
            <?php endif;?>
        </div>
    </div>
    <p>Copyright <?php echo date("Y"); ?> <?php bloginfo( 'title' ); ?> | Powered by <a href="http://www.saeon.ac.za/" target="_blank">SAEON</a></p>
</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>