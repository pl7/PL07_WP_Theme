<?php get_header(); ?>
		<div id="content" class="group" role="main">
			<div class="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="blogPost">
						<header>
							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							<p>Veröffentlicht am <time datetime="<?php the_time('c') ?>"><?php the_time('j. F Y')?></time> von <a href="<?php the_author_meta('user_url')?>"><?php the_author()?></a> - <a href="<?php the_permalink() ?>/#kommentare"><?php comments_number( 'keine Kommentare', 'ein Kommentar', '% Kommentare' ); ?></a>.</p>
						</header>
						<div class="entry hyphenate">
							<?php the_content(); ?>
						</div>
						<p class="read_more">
							<a href="<?php the_permalink() ?>">weiterlesen</a>
						</p>
						<footer id="postFooter">
							<p>Kategorien: <?php the_category(' '); ?></p>
						</footer>
					</article><?php endwhile;?><?php  endif; ?>
			</div><!-- main -->
			<aside>
			<?php get_sidebar(); ?>
			</aside><!-- sidebar -->
		</div><!-- content -->
		

<?php get_footer(); ?>
