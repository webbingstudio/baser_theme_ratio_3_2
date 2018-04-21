<?php
/**
 * フィード：Instagram RSS.stagram対応テンプレート
 */

$this->Feed->saveCachetime();

if ( Configure::read('BcRequest.agent') == 'mobile' ) {
	$charset = 'Shift-JIS';
} else {
	$charset = Configure::read('App.encoding');
}
?>
<!--nocache-->
	<?php $this->Feed->cacheHeader() ?>
<!--/nocache-->

<?php if (!empty($items)): ?>
	<div class="row row-instagram">
	<?php foreach ($items as $key => $item): ?>
		<?php $no = sprintf('%02d', $key + 1) ?>
		<?php if ($key == 0): ?>
			<?php $class = ' class="thumbnail first feed feed-instagram feed-instagram' . $no . '"' ?>
		<?php elseif ($key == count($items) - 1): ?>
			<?php $class = ' class="thumbnail last feed feed-instagram feed-instagram' . $no . '"' ?>
		<?php else: ?>
			<?php $class = ' class="thumbnail feed feed-instagram feed-instagram' . $no . '"' ?>
		<?php endif ?>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
			<div<?php echo $class ?>>
				<?php echo $item['description']['value'] ?>
				<p class="caption"><a href="<?php echo $item['link']['value']; ?>" target="_blank"><?php echo mb_strimwidth( strip_tags( $item['title']['value'] ), 0, 100, '…', $charset )?></a></p>
			</div>
		<!-- /.col-xs-12 col-sm-6 col-md-6 col-lg-4 --></div>
	<?php endforeach; ?>
	<!-- /.row --></div>
<?php else: ?>
<?php endif; ?>
