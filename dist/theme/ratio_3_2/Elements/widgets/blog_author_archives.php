<?php
/**
 * 構成要素：ウィジェット：ブログ投稿者一覧
 * Elements/widgets/blog_author_archives.php
 */
if (empty($view_count)) {
	$view_count = '0';
}
if (isset($blogContent)) {
	$id = $blogContent['BlogContent']['id'];
} else {
	$id = $blog_content_id;
}
$data = $this->requestAction('/blog/blog/get_authors/' . $id . '/' . $view_count);
$authors = $data['authors'];
$blogContent = $data['blogContent'];
$baseCurrentUrl = $blogContent['BlogContent']['name'] . '/archives/';
?>
<?php if( $name && $use_title ): ?>
<div class="panel panel-default widget widget-blog-authors widget-blog-authors-<?php echo $id ?> blog-widget">
	<div class="panel-heading">
		<h2 class="panel-title"><?php echo $name ?></h2>
	<!-- /.panel-heading --></div>
<?php else: ?>
<div class="widget widget-blog-authors widget-blog-authors-<?php echo $id ?> blog-widget">
<?php endif; ?>

<?php if ($authors): ?>
	<div class="list-group">
	<?php foreach ($authors as $author): ?>
		<?php
		if ($this->request->url == $baseCurrentUrl . $author['User']['name']) {
			$class = 'list-group-item active';
		} else {
			$class = 'list-group-item';
		}
		if ($view_count) {
			$title = $this->BcBaser->getUserName($author['User']) . ' (' . $author['count'] . ')';
		} else {
			$title = $this->BcBaser->getUserName($author['User']);
		}

		$this->BcBaser->link($title, array(
			'admin' => false, 'plugin' => '',
			'controller' => $blogContent['BlogContent']['name'],
			'action' => 'archives',
			'author',
			$author['User']['name'],
		), array( 'class' => $class ) );
		?>
	<?php endforeach; ?>
	</div>
<?php endif; ?>

<?php if( $name && $use_title ): ?>
<!-- /.panel widget --></div>
<?php else: ?>
<!-- /.widget --></div>
<?php endif; ?>
