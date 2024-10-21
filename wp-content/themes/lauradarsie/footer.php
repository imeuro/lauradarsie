<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package darsie
 */

?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<small>Copyright &copy; 2019-<?php echo date("Y"); ?> - Laura Darsié - Tutti i diritti riservati - <a href="/informazioni/" class="privacylink">Informazioni sui contenuti del sito</a> - <a href="/privacy-policy/" class="privacylink">Privacy e Cookie Policy</a></small>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149336414-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149336414-1');
</script>
</body>
</html>
