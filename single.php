<?php get_header(); ?>
		<div id="content" class="group" role="main">
			<div class="main">
				<article id="blogPost">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<header>
								<h2 class="single"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
								<p>Veröffentlicht am <time datetime="<?php the_time('c') ?>"><?php the_time('j. F Y')?></time> von <a href="<?php the_author_meta('user_url')?>"><?php the_author()?></a> | Kategorie(n): <?php the_category(', '); ?></p>
							</header>
							<div class="entry hyphenate">
								<?php the_content(); ?>							
							</div>
					<?php endwhile; endif; ?>
					<div id="articleNavigation">
					<?php previous_post_link(); ?>
					<?php if(previous_post_link(false) && next_post_link(false)){echo ' | ';}?>
					<?php next_post_link(); ?> 
					</div>
					<?php comments_template(); ?>
				</article>
			</div><!-- main -->
			<aside>
			<?php get_sidebar(); ?>
			</aside><!-- sidebar -->
		</div><!-- content -->
		
<?php get_footer(); ?>
