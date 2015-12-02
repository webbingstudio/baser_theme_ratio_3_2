<?php
/**
 * 構成要素：ウィジェット：ブログカテゴリー一覧
 * Elements/widgets/blog_category_archives.php
 */
App::uses('BlogHelper', 'Blog.View/Helper');
if (empty($view_count)) {
	$view_count = '0';
}
if (empty($limit)) {
	$limit = '0';
}
if (!isset($by_year)) {
	$by_year = null;
}
if (isset($blogContent)) {
	$id = $blogContent['BlogContent']['id'];
} else {
	$id = $blog_content_id;
}
if (empty($depth)) {
	$depth = 1;
}
$actionUrl = '/blog/blog/get_categories/' . $id . '/' . $limit . '/' . $view_count . '/' . $depth;
if ($by_year) {
	$actionUrl .= '/year';
}
$data = $this->requestAction($actionUrl);
$categories = $data['categories'];
$this->viewVars['blogContent'] = $data['blogContent'];
$this->Blog = new BlogHelper($this);
?>
<?php if( $name && $use_title ): ?>
<div class="panel panel-default widget widget-blog-categories-archives widget-blog-categories-archives-<?php echo $id ?> blog-widget">
	<div class="panel-heading">
		<h2 class="panel-title"><?php echo $name ?></h2>
	<!-- /.panel-heading --></div>
	<div class="panel-body">
<?php else: ?>
<div class="widget widget-blog-categories-archives widget-blog-categories-archives-<?php echo $id ?> blog-widget">
<?php endif; ?>

	<?php if ($by_year): ?>
		<ul>
			<?php foreach ($categories as $key => $category): ?>
				<li class="category-year"><span><?php $this->BcBaser->link($key . '年', array('plugin' => null, 'controller' => $blogContent['BlogContent']['name'], 'action' => 'archives', 'date', $key)) ?></span>
						<?php echo $this->Blog->getCategoryList($category, $depth, $view_count, array('named' => array('year' => $key))) ?>
				</li>
			<?php endforeach ?>
		</ul>
	<?php else: ?>
		<?php echo $this->Blog->getCategoryList($categories, $depth, $view_count) ?>
	<?php endif ?>

<?php if( $name && $use_title ): ?>
	<!-- /.panel-body --></div>
<!-- /.panel widget --></div>
<?php else: ?>
<!-- /.widget --></div>
<?php endif; ?>
