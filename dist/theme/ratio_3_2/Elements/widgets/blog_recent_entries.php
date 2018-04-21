<?php
/**
 * 構成要素：ウィジェット：ブログ最近の投稿
 * Elements/widgets/blog_recent_entries.php
 */
if (!isset($count)) {
	$count = 3;
}
if (isset($blogContent)) {
	$id = $blogContent['BlogContent']['id'];
} else {
	$id = $blog_content_id;
}
$data = $this->requestAction('/blog/blog/get_recent_entries/' . $id . '/' . $count);
$blogContent = $data['blogContent'];
?>
<?php if( $name && $use_title ): ?>
<div class="panel panel-default widget widget-blog-recent-entries widget-blog-recent-entries-<?php echo $id ?> blog-widget">
	<div class="panel-heading clearfix">
		<h2 class="panel-title"><?php echo $blogContent['BlogContent']['title'] ?></h2>
		<p class="panel-link"><a href="<?php echo $this->BcBaser->getUrl( '/' . $blogContent['BlogContent']['name'] . '/' ); ?>" class="btn btn-sm btn-info"><i class="fa fa-angle-right"></i> 一覧</a></p>
	<!-- /.panel-heading --></div>
	<div class="panel-body">
<?php else: ?>
<div class="widget widget-blog-recent-entries widget-blog-recent-entries-<?php echo $id ?> blog-widget">
<?php endif; ?>

	<?php $this->BcBaser->blogPosts( $blogContent['BlogContent']['name'], $count ) ?>

<?php if( $name && $use_title ): ?>
	<!-- /.panel-body --></div>
<!-- /.panel widget --></div>
<?php else: ?>
<!-- /.widget --></div>
<?php endif; ?>
