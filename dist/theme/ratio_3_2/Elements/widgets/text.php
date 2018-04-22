<?php
/**
 * 構成要素：ウィジェット：テキスト
 * Elements/widgets/text.php
 */
?>
<?php if( $name && $use_title ): ?>
<div class="panel panel-default widget widget-text widget-text-<?php echo $id ?>">
	<div class="panel-heading">
		<h2 class="panel-title"><?php echo $name ?></h2>
	<!-- /.panel-heading --></div>
	<div class="panel-body">
<?php else: ?>
<div class="widget widget-text widget-text-<?php echo $id ?>">
<?php endif; ?>

	<?php echo $text ?>

<?php if( $name && $use_title ): ?>
	<!-- /.panel-body --></div>
<!-- /.panel widget --></div>
<?php else: ?>
<!-- /.widget --></div>
<?php endif; ?>
