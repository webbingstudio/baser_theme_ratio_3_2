<?php
/**
 * 構成要素：ウィジェット：サイト内検索
 * Elements/widgets/search.php
 */

if (!empty($this->passedArgs['num'])) {
	$url = array('plugin' => null, 'controller' => 'contents', 'num' => $this->passedArgs['num']);
} else {
	$url = array('plugin' => null, 'controller' => 'contents');
}
?>
<?php if( $name && $use_title ): ?>
<div class="panel panel-default widget widget-site-search widgetsite-search-<?php echo $id ?>">
	<div class="panel-heading">
		<h2 class="panel-title"><?php echo $name ?></h2>
	<!-- /.panel-heading --></div>
	<div class="panel-body">
<?php else: ?>
<div class="widget widget-site-search widgetsite-search-<?php echo $id ?>">
<?php endif; ?>
		<?php echo $this->BcForm->create('Content', array('type' => 'get', 'action' => 'search', 'url' => $url )); ?>
		<?php if (BcUtil::unserialize($this->BcBaser->siteConfig['content_categories'])) : ?>
		<div class="form-group form-group-sm">
			<?php echo $this->BcForm->input('Content.c', array('type' => 'select', 'options' => BcUtil::unserialize($this->BcBaser->siteConfig['content_categories']), 'empty' => 'カテゴリー： 指定しない　', 'class' => 'form-control')); ?>
		<!-- /.form-group --></div>
		<?php endif; ?>
		<div class="form-inline">
			<div class="form-group form-group-sm">
				<?php echo $this->BcForm->input('Content.q', array('class' => 'form-control')); ?>
				<?php echo $this->BcForm->submit('検索', array('div' => false, 'class' => 'btn btn-default btn-sm')); ?>
			<!-- /.form-group --></div>
		<!-- /.form-inline --></div>
		<?php echo $this->BcForm->end(); ?>
<?php if( $name && $use_title ): ?>
	<!-- /.panel-body --></div>
<!-- /.panel widget --></div>
<?php else: ?>
<!-- /.widget --></div>
<?php endif; ?>
