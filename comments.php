<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>
<?php die('Die Datei "comments.php" kann nicht direkt aufgerufen werden.'); ?>
<?php endif; ?>

<section id="kommentar_formular">
 
<h3 id="respond" class="dropdown_form" onclick="dropdownElement('commentform')" >Kommentar schreiben</h3>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="displayed_on">
   <p>
      <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1"/>
      <label  for="author">Name</label>
   </p>
 
   <p>
      <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
      <label  for="email">Email <small>(wird nicht veröffentlicht)</small></label>
   </p>
 
   <p>
      <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
      <label  for="url">Webseite</label>
   </p>
	<div style="float: right;"><?php do_action('comment_form', $post->ID); ?>
	</div>
	<p>
      <strong>Kommentar</strong>
      <textarea name="comment" id="comment" style="width: 100%;" rows="10" tabindex="4"></textarea>
   </p>
   <p>
      <input name="submit" type="submit" id="submit" tabindex="5" value="Kommentar abschicken" />
      <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
   </p>
</form>
</section> <!-- kommentar_formular -->

<section id="kommentare">
	<?php ?>
	<h3><?php comments_number('Keine Kommentare','Ein Kommentar','% Kommentare');?></h3>
   	<?php foreach ($comments as $comment) : ?>
   	<article class="comment" id="comment-<?php comment_ID() ?>">
		<header>
			<small class="commentmetadata"><?php comment_author_link() ?> <strong>|</strong> am <time datetime="comment_date(c)"><?php comment_date('j. F Y') ?> um <?php comment_time('H:i') ?></time></small>
		</header>
		<p><?php comment_text() ?></p>
		<?php if ($comment->comment_approved == '0') : ?>
		<strong>Achtung: Dein Kommentar muss erst noch freigegeben werden.</strong><br />
		<?php endif; ?>
	</article>
   <?php endforeach; /* end for each comment */ ?>
</section><!-- kommentare -->