<?php
/**
 * 構成要素：ブログ記事ループ：メディア
 * Elements/blog_loop_media.php
 * 
 */
?>
<?php foreach ( $posts as $key => $post ): ?>
<?php
	if( !isset( $h ) ) {
		$h = 'h2';
	}
	if( !isset( $imgsize ) ) {
		$imgsize = 'thumb';
	}
	if( !isset( $trim ) ) {
		$trim = 70;
	}

	$class = array( 'media', 'post-' . ( $key + 1 ) );
	if( $this->BcArray->first( $posts, $key ) ) {
		$class[] = 'first';
	} elseif( $this->BcArray->last( $posts, $key ) ) {
		$class[] = 'last';
	}
?>
<div class="<?php echo implode( ' ', $class ) ?>">
	<a href="<?php echo $this->Blog->getPostLinkUrl( $post ); ?>">
		<?php
			$eye_chatch = $this->Blog->getEyeCatch( $post, array( 'link' => false, 'class'=>'media-object', 'imgsize' => $imgsize ) );
		?>
		<?php if( $eye_chatch ): ?>
		<div class="media-left">
			<?php echo $eye_chatch; ?>
		<!-- /.media-left --></div>
		<?php endif; ?>
		<div class="media-body">
			<?php echo '<' . $h . ' class="media-title">'; ?><?php $this->Blog->postTitle( $post, false ) ?><?php echo '</' . $h . '>'; ?>
			<p class="media-date"><?php $this->Blog->postDate( $post, RATIO32_DATE_FORMAT ) ?></p>
			<p class="media-excerpt"><?php $this->Blog->postContent( $post, true, false, $trim ) ?>...</p>
		<!-- /.media-body --></div>
	</a>
<!-- /.media --></div>
<?php endforeach; ?>
