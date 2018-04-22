<?php
/**
 * 構成要素：ウィジェット：ブログタグ一覧
 * Elements/widgets/blog_author_archives.php
 */
$id = '';
?>

<?php if( $name && $use_title ): ?>
<div class="panel panel-default widget widget-blog-tags widget-blog-tags-<?php echo $id ?> blog-widget">
	<div class="panel-heading">
		<h2 class="panel-title"><?php echo $name ?></h2>
	<!-- /.panel-heading --></div>
	<div class="panel-body">
<?php else: ?>
<div class="widget widget-blog-tags widget-blog-tags-<?php echo $id ?> blog-widget">
<?php endif; ?>

	<?php if( $view_count == 1 ): ?>
	<div class="alert alert-danger mt0 mb1">このテーマは、タグの件数表示に対応していません。</div>
	<?php endif; ?>

	<?php
		$this->BcBaser->blogTagList(
			(int) $blog_content_id,
			['postCount' => $view_count]
		);
	?>

<?php if( $name && $use_title ): ?>
	<!-- /.panel-body --></div>
<!-- /.panel widget --></div>
<?php else: ?>
<!-- /.widget --></div>
<?php endif; ?>
