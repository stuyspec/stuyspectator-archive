<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.<p>

			<?php
			return;
		}
	}
	
	/* This variable is for alternating comment background */
	$oddcomment = 'class="alternate" ';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>


	
	<ol id="commentlist">

	<?php foreach ($comments as $comment) : ?>

		<li id="comment-<?php comment_ID() ?>">
		
		<div class="commentcont">

			<div class="fright"><?php echo get_avatar( $comment, $size = '40' ); ?></div>
							
			<?php comment_text() ?>
				
				<p>
					<?php if ($comment->comment_approved == '0') : ?>
				
					<em>Your comment is awaiting moderation.</em>
					
					<?php endif; ?>
				</p>
		
		</div>
		
		<cite>
		
		Posted by <span class="commentauthor"><?php comment_author_link() ?></span> | <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F j, Y') ?>, <?php comment_time() ?></a> <?php edit_comment_link('edit','| ',''); ?>						
		
		</cite>
		
		
		</li>
		
	<?php
	/* Changes every other comment to a different class */
	$oddcomment = ( empty( $oddcomment ) ) ? 'class="alternate" ' : '';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="none">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<div id="comment-form">

<h2 id="respond" class="post_comm2">Post a comment</h2>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>

</div>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

<?php else : ?>

<fieldset>

	<p>
		<label for="author" class="com">Name <?php if ($req) echo "*"; ?></label>
		<input class="comtext" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
	</p>

	<p>
		<label for="email" class="com">E-mail <?php if ($req) echo "*"; ?></label>
		<input class="comtext" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
	</p>

	<p>
		<label for="url" class="com">Web site</label>
		<input class="comtext" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
	</p>


<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->

	<p>
		<label for="comment" class="com">Comment</label>
		<textarea class="comtext" name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>
	</p>
	
</fieldset>

<fieldset>

	<p>
		<input name="submit" type="submit" id="submit" tabindex="5" class="comsubmit" value="Submit Comment" />
		<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	</p>

<?php do_action('comment_form', $post->ID); ?>

</fieldset>

</form>

</div>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
