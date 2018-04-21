<?php
/**
 * 構成要素：ウィジェット：ブログ月別アーカイブ
 * Elements/widgets/blog_monthly_archives.php
 */
if (!isset($view_count)) {
	$view_count = false;
}
if (!isset($limit)) {
	$limit = 12;
}
if (isset($blogContent)) {
	$id = $blogContent['BlogContent']['id'];
} else {
	$id = $blog_content_id;
}
$actionUrl = '/blog/blog/get_posted_months/' . $id . '/' . $limit;
if ($view_count) {
	$actionUrl .= '/1';
}
$data = $this->requestAction($actionUrl);
$postedDates = $data['postedDates'];
$blogContent = $data['blogContent'];
$baseCurrentUrl = $blogContent['BlogContent']['name'] . '/archives/date/';
?>
<?php if( $name && $use_title ): ?>
<div class="panel panel-default widget widget-blog-monthly-archives widget-blog-monthly-archives-<?php echo $id ?> blog-widget">
	<div class="panel-heading">
		<h2 class="panel-title"><?php echo $name ?></h2>
	<!-- /.panel-heading --></div>
<?php else: ?>
<div class="widget widget-blog-monthly-archives widget-blog-monthly-archives-<?php echo $id ?> blog-widget">
<?php endif; ?>

	<?php if (!empty($postedDates)): ?>
		<div class="list-group">
			<?php foreach ($postedDates as $postedDate): ?>
				<?php if (isset($this->params['named']['year']) && isset($this->params['named']['month']) && $this->params['named']['year'] == $postedDate['year'] && $this->params['named']['month'] == $postedDate['month']): ?>
					<?php $class = 'list-group-item active selected' ?>
				<?php elseif ($this->request->url == $baseCurrentUrl . $postedDate['year'] . '/' . $postedDate['month']): ?>
					<?php $class = 'list-group-item active' ?>
				<?php else: ?>
					<?php $class = 'list-group-item' ?>
				<?php endif ?>
				<?php $date_format = date(RATIO32_MONTH_ARCHIVE_FORMAT, strtotime( $postedDate['year'] . '-' . $postedDate['month'] . '-01' ) ); ?>
				<?php if ($view_count): ?>
					<?php $title = $date_format . ' <span class="label label-default">' . $postedDate['count'] . '</span>' ?>
				<?php else: ?>
					<?php $title = $date_format ?>
				<?php endif ?>
				<?php
				$this->BcBaser->link($title, array(
					'admin' => false,
					'plugin' => '',
					'controller' => $blogContent['BlogContent']['name'],
					'action' => 'archives',
					'date', $postedDate['year'], $postedDate['month']
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
