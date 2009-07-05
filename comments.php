<?php
// Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ( __('Please do not load this page directly. Thanks!') );

if (!empty($post->post_password)) { // if there's a password
	if ($_COOKIE['wp-postpass_'.$cookiehash] != $post->post_password) {  // and it doesn't match the cookie
		?>

		<p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments."); ?><p>

		<?php
		return;
	}
}
?>

<?php if ($comments) : ?>
<h3 id="comments"><?php comments_number('0 comments', '1 comment', '% comments'); ?></h3>

<ol class="commentlist">

<?php foreach ($comments as $comment) : ?>
	<li id="comment-<?php comment_ID() ?>" <?php if(function_exists('highlight_comment')) highlight_comment(); ?>>
	<span class="posted"><cite><?php comment_author_link() ?></cite> said on
	<a href="<?php the_permalink() ?>#comment-<?php comment_ID() ?>" title=""><?php comment_date('m.d.y') ?> at <?php comment_time() ?></a>
	<?php edit_comment_link('Edit', $before = ' | '); ?></span>
	<?php comment_text() ?>
	</li>

<?php endforeach; /* end for each comment */ ?>

</ol>

<?php endif; ?>

<?php if ('open' == $post-> comment_status) :

// check if comments need registration and if user is logged in
if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">Log in</a> to post a comment.</p>

<?php
else :

if (function_exists('bnCommentPreviewValidate')) {
	bnCommentPreviewValidate(); // draws the code for the comments form from the ComPreVal plugin
} else { // 'normal' comments form without preview
?>

<div id="postcomment">
<h3 id="respond">Leave a Reply</h3>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<p><label for="comment">Your Comment</label>
<textarea name="comment" id="comment" cols="50" rows="10"></textarea></p>

<?php if ( $user_ID ) : ?>
<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &#187;</a></p>
<?php else : ?>

<p><label for="author">Name*</label><br /><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" /></p>
<p><label for="email">Email*</label><br /><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" /></p>
<p><label for="url">Web</label><br /><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" /></p>

<?php endif; ?>

<p><input name="submitComment" type="submit" id="submitComment" value="Submit Comment" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
<?php do_action('comment_form', $post->ID); ?>
</form>
</div>
<?php } ?>

<?php endif; // if registration required and not logged in ?>

<p>You can follow the discussion through the <?php comments_rss_link('Comments Feed'); ?>.
<?php
if('open' == $post->ping_status) {	
?>
	You can also Pingback or <a href="<?php trackback_url(true); ?>" rel="trackback" title="Trackback URL">Trackback</a> from your own site.
<?php } ?></p>

<?php else : // if comments are closed ?>

	<p class="nocomments">Comments are closed.</p>

<?php endif; ?>
