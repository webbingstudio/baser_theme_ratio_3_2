<?php
/**
 * 構成要素：ウィジェット：サイト内検索
 * Elements/widgets/search.php
 */

if (Configure::read('BcRequest.isMaintenance')) {
	return;
}
$siteId = 0;
if(!empty($this->request->params['Site']['id'])) {
	$siteId = $this->request->params['Site']['id'];
}
if (!empty($this->passedArgs['num'])) {
	$url = ['plugin' => null, 'controller' => 'search_indices', 'action' => 'search', 'num' => $this->passedArgs['num']];
} else {
	$url = ['plugin' => null, 'controller' => 'search_indices', 'action' => 'search'];
}
$folders = $this->BcContents->getContentFolderList($siteId, ['excludeId' => $this->BcContents->getSiteRootId($siteId)]);
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
		<?php echo $this->BcForm->create('SearchIndex', ['type' => 'get', 'url' => $url]) ?>
		<?php if($folders): ?>
		<div class="form-group form-group-sm">
			<?php echo $this->BcForm->label('SearchIndex.f', __d('baser', 'カテゴリ')) ?><br>
			<?php echo $this->BcForm->input('SearchIndex.f', ['type' => 'select', 'options' => $folders, 'empty' => __d('baser', '指定しない'), 'escape' => false]) ?><br>
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
