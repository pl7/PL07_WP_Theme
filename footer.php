		<footer>
			<div>
				<section id="about">
					<header>
						<h3>&Uuml;ber diesen Blog</h3>
					</header>
					<p>Hallo, mein Name ist Pascal und du siehst
						hier meinen Blog mit eigenem Template.</p>
				</section>
				<section id="pages"  style="display:none">
					<header>
						<h3>Seiten</h3>
					</header>
					<ul>
					   <?php wp_list_pages('title_li='); ?>
					</ul>
				</section>
				<section id="blogroll">
					<header>
						<h3>Blogroll</h3>
					</header>
					<ul>
						<?php wp_list_bookmarks('categorize=0&title_before=&title_after=&title_li='); ?>
					</ul>
				</section>
				<section id="popular" style="display:none">
					<header>
						<h3>Popular (ToDo)</h3>
					</header>
					<ul>
						<li><a href="#">This is the title of a blog post</a></li>
						<li><a href="#">Lorem ipsum dolor sit amet</a></li>
						<li><a href="#">Consectetur adipisicing elit, sed do eiusmod</a></li>
						<li><a href="#">Duis aute irure dolor</a></li>
						<li><a href="#">Excepteur sint occaecat cupidatat</a></li>
						<li><a href="#">Reprehenderit in voluptate velit</a></li>
						<li><a href="#">Officia deserunt mollit anim id est laborum</a></li>
						<li><a href="#">Lorem ipsum dolor sit amet</a></li>
					</ul>
				</section>
			</div>
		</footer><!-- footer -->
	 
	<?php wp_footer(); ?>
	 
	<!-- Statistik/Analyse-Tool einbauen -->
</body>
</html>

