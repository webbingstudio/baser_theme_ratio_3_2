<?php
/**
 * 構成要素：ウィジェット：ローカルナビ
 * Elements/widgets/local_navi.php
 */
if(empty($this->request->params['Content'])) {
	return;
}
if($this->request->params['Content']['type'] == 'ContentFolder') {
	$parentId = $this->request->params['Content']['id'];
	$title = $this->request->params['Content']['title'];
	$siteRoot = $this->request->params['Content']['site_root'];
} else {
	$parent = $this->BcContents->getParent($this->request->params['Content']['id']);
	$parentId = $parent['Content']['id'];
	$title = $parent['Content']['title'];
	$siteRoot = $parent['Content']['site_root'];
}
if($siteRoot) {
	return;
}
?>
<?php if( $name && $use_title ): ?>
<div class="panel panel-primary widget widget-local-navi widget-local-navi-<?php echo $id ?>">
	<div class="panel-heading">
		<h2 class="panel-title"><?php echo $title ?></h2>
	<!-- /.panel-heading --></div>
<?php else: ?>
<div class="widget widget-local-navi widget-local-navi-<?php echo $id ?>">
<?php endif; ?>

	<?php $this->BcBaser->contentsMenu($parentId, 1, $this->request->params['Content']['id']) ?>

<?php if( $name && $use_title ): ?>
<!-- /.panel widget --></div>
<?php else: ?>
<!-- /.widget --></div>
<?php endif; ?>
