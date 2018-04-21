<?php
/**
 * 構成要素：ウィジェット：PHPテンプレート
 * Elements/widgets/php_template.php
 */
if( !isset( $subDir ) ) {
	$subDir = true;
}
?>
<?php if( $name && $use_title ): ?>
<div class="panel panel-default widget widget-php-template widget-php-template-<?php echo $id ?>">
	<div class="panel-heading">
		<h2 class="panel-title"><?php echo $name ?></h2>
	<!-- /.panel-heading --></div>
	<div class="panel-body">
<?php else: ?>
<div class="widget widget-php-template widget-php-template-<?php echo $id ?>">
<?php endif; ?>

	<?php $this->BcBaser->element('widgets' . DS . $template, array(), array('subDir' => $subDir)) ?>

<?php if( $name && $use_title ): ?>
	<!-- /.panel-body --></div>
<!-- /.panel widget --></div>
<?php else: ?>
<!-- /.widget --></div>
<?php endif; ?>
