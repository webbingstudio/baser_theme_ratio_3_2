<?php
/**
 * 構成要素：ウィジェット：ブログ年別アーカイブ
 * Elements/widgets/blog_yearly_archives.php
 */
if (!isset($view_count)) {
	$view_count = false;
}
if (!isset($limit)) {
	$limit = false;
}
if (isset($blogContent)) {
	$id = $blogContent['BlogContent']['id'];
} else {
	$id = $blog_content_id;
}
$actionUrl = '/blog/blog/get_posted_years/' . $id;
if ($limit) {
	$actionUrl .= '/' . $limit;
} else {
	$actionUrl .= '/0';
}
if ($view_count) {
	$actionUrl .= '/1';
} else {
	$actionUrl .= '/0';	
}
$data = $this->requestAction($actionUrl, ['entityId' => $id]);
$postedDates = $data['postedDates'];
$blogcontent = $data['blogContent'];
$baseCurrentUrl = $this->BcBaser->getBlogContentsUrl($id) . 'archives/date/';
?>
<?php if( $name && $use_title ): ?>
<div class="panel panel-default widget widget-blog-yearly-archives widget-blog-yearly-archives-<?php echo $id ?> blog-widget">
	<div class="panel-heading">
		<h2 class="panel-title"><?php echo $name ?></h2>
	<!-- /.panel-heading --></div>
<?php else: ?>
<div class="widget widget-blog-yearly-archives widget-blog-yearly-archives-<?php echo $id ?> blog-widget">
<?php endif; ?>

	<?php if (!empty($postedDates)): ?>
		<div class="list-group">
			<?php foreach ($postedDates as $postedDate): ?>
				<?php if (isset($this->params['named']['year']) && $this->params['named']['year'] == $postedDate['year']): ?>
					<?php $class = 'list-group-item active selected' ?>
				<?php elseif ($this->request->here == $baseCurrentUrl . $postedDate['year']): ?>
					<?php $class = 'list-group-item active' ?>
				<?php else: ?>
					<?php $class = 'list-group-item' ?>
				<?php endif ?>
				<?php $date_format = date(RATIO32_YEAR_ARCHIVE_FORMAT, strtotime( $postedDate['year'] . '-01-01' ) ); ?>
				<?php if ($view_count): ?>
					<?php $title = $date_format . ' <span class="label label-default">' . $postedDate['count'] . '</span>' ?>
				<?php else: ?>
					<?php $title = $date_format ?>
				<?php endif ?>
				<?php
				$this->BcBaser->link(
					$title,
					$this->BcBaser->getBlogContentsUrl($id) . 'archives/date/' . $postedDate['year'],
					array( 'class' => $class )
				)
				?>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>

<?php if( $name && $use_title ): ?>
<!-- /.panel widget --></div>
<?php else: ?>
<!-- /.widget --></div>
<?php endif; ?>
