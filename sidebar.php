<?php
/**
 * @package WordPress
 * @subpackage PL07
 * @since PL07 1.0
 */
?>

			<?php /* if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : */?>
			<section  style="display:none">
				<h3>Suche</h3>
				<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				   <input type="text" value="<?php echo esc_html( $s );?>" name="s" id="s" />
				   <input type="submit" id="search_submit" value="Suchen" />
				</form>
			</section>
			<section>
				<h3>Kategorien</h3>
				<ul>
					<?php wp_list_categories('orderby=name&order=ASC&title_li='); ?>
				</ul>
			</section>
			<section>
				<h3>Blog-Archiv</h3>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</section>
			<?php /* endif; */?>