<?php
/**
 * ブログ：ブログ記事一覧
 * Blog/default/posts.php
 * 
 * usage: $this->BcBaser->blogPosts(contents_name, show_number)
 */
?>
<?php if( $posts ): ?>
<?php
	$options = array(
		'posts' => $posts,
	);
	$this->BcBaser->element( 'blog_loop_media', $options );
?>
<?php endif ?>
