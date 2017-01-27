<div class="outer-footer">
<div class="container">
<div class="footer-widget-area">
        <?php
        /* A sidebar in the footer? Yep. You can can customize
         * your footer with four columns of widgets.
         */
        get_sidebar('footer');
        ?>
		</div>
    </div>
	</div>
<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
				<?php if (get_theme_mod('footertext','') != '') { ?>
		<span class="copyright"><?php echo esc_html(get_theme_mod('footertext','')); ?></span> 
			<?php } else { ?>
                    <p><a href="<?php echo esc_url('yesup.com'); ?>"><?php _e('Red door beauty spa', 'novellite'); ?></a> <?php _e('Powered By ', 'novellite'); ?><a href="http://www.wordpress.org"><?php _e(' alexsun@yesupmail.com', 'novellite'); ?></a></p>
					<?php } ?>
			                </div>
                    </div>
        </div>
    </footer>
	<?php wp_footer(); ?>
</body>
</html>