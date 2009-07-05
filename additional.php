<?php
/* this last modified function is based on Last Modified plugin by Nick Momrik
[http://mtdewvirus.com/code/wordpress-plugins/], [http://dev.wp-plugins.org/browser/last-modified/]*/
	function last_modified($format='') {
	global $wpdb, $id;

	$post_mod_date = $wpdb->get_var("SELECT post_modified FROM $wpdb->posts WHERE id = $id");

	if (empty($format))
		$format = get_settings('date_format') . ' @ ' . get_settings('time_format');

	echo mysql2date($format, $post_mod_date);
}
?>

<?php 
/* this highlight comment function is based on Lucid Options by Matt Read
[http://www.mattread.com/gravelbox/lucid/], small fixs by Sparanoid */
function highlight_comment ()
{
	global $comment, $user_email, $comment_author_email, $posts;
	$authordata = get_userdata($posts[0]->post_author);
	get_currentuserinfo();

	if ( ($comment->comment_author_email) AND (get_comment_type() == 'comment') )
	{
		if ( $comment->comment_author_email == $authordata->user_email ) //highlight author
			echo 'class="author-comment"';

		elseif ( $comment->comment_author_email == $user_email ) //highlight user if not author
			echo 'class="user-comment"';

		elseif ( $comment->comment_author_email == $comment_author_email ) //highlight commenter if not user
			echo 'class="user-comment"';
	}

	if (get_comment_type() != 'comment')
		echo 'class="ping-comment"';
}
?>

<?php
/* this counts the number of total (puslished) posts function is based on MsgCount plugin by Anders Holte Nielsen, [http://andersdrengen.dk/projects] */
function MsgCount() {
global $wpdb;
$s = "SELECT COUNT(*) FROM $wpdb->posts WHERE post_status = 'publish'";
print $wpdb->get_var($s);
}
?>

<?php
/* this counts the number of comments function is based on ComCount plugin by Anders Holte Nielsen, [http://andersdrengen.dk/projects] */
function ComCount($a=false) {
global $wpdb;
$s = "SELECT COUNT(*) FROM $wpdb->comments WHERE comment_approved = '1'";
 if ($a)
   { $s .= " AND comment_post_ID=$a"; }
print $wpdb->get_var($s);
}
?>