<?php
/**
 * 構成要素：ウィジェット：ローカルナビ
 * Elements/widgets/local_navi.php
 */
if (!isset($this->BcPage)) {
	return;
}
$pageCategory = $this->BcPage->getCategory();
if (!$pageCategory) {
	return;
}
?>
<?php if( $name && $use_title ): ?>
<div class="panel panel-primary widget widget-local-navi widget-local-navi-<?php echo $id ?>">
	<div class="panel-heading">
		<h2 class="panel-title"><?php echo $pageCategory['title'] ?></h2>
	<!-- /.panel-heading --></div>
<?php else: ?>
<div class="widget widget-local-navi widget-local-navi-<?php echo $id ?>">
<?php endif; ?>

	<?php $this->BcBaser->element('page_list', array('categoryId' => $pageCategory['id'])) ?>

<?php if( $name && $use_title ): ?>
<!-- /.panel widget --></div>
<?php else: ?>
<!-- /.widget --></div>
<?php endif; ?>
