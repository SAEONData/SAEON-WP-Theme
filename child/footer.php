<?php
/**
 * The template for displaying the footer
 */

?>


<footer id="edu-footer" role="contentinfo" >
    <div class="edu-container">
        <div class="edu-row">
            <div class="edu-col-md-3">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 1") ) : ?>
                <?php endif;?>
            </div>
            <div class="edu-col-md-3">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 2") ) : ?>
                <?php endif;?>
            </div>
            <div class="edu-col-md-3">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 3") ) : ?>
                <?php endif;?>
            </div>
            <div class="edu-col-md-3">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 4") ) : ?>
                <?php endif;?>
            </div>
        </div>
        
    </div>
    <div class="edu-bg-dark">
    <div class="edu-container">
        <div class="edu-row">
            <div class="edu-col-md-6">
            <p>Copyright <?php echo date("Y"); ?> SAEON | Education Outreach</p>
            </div>
            <div class="edu-col-md-6 txt-right">
            <p>Powered by <a href="http://www.saeon.ac.za/" target="_blank">SAEON</a></p>
            </div>
         </div>
    </div>
    </div>

</footer>

		<?php wp_footer(); ?>

	</body>
</html>