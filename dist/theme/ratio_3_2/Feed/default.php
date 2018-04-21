<?php
/**
 * フィード：その他のフィードテンプレート
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
	<?php foreach ($items as $key => $item): ?>
		<?php $no = sprintf('%02d', $key + 1) ?>
		<?php if ($key == 0): ?>
			<?php $class = ' class="media first feed feed-default feed-default' . $no . '"' ?>
		<?php elseif ($key == count($items) - 1): ?>
			<?php $class = ' class="media last feed feed-default feed-default' . $no . '"' ?>
		<?php else: ?>
			<?php $class = ' class="media feed feed-default feed-default' . $no . '"' ?>
		<?php endif ?>
		<div<?php echo $class ?>>
			<a href="<?php echo $item['link']['value']; ?>" target="_blank">
				<div class="media-body">
					<p class="media-title"><?php echo $item['title']['value']; ?></p>
					<p class="media-date"><?php echo date( 'Y-m-d', strtotime( $item['pubDate']['value'] ) ); ?></p>
					<p class="media-excerpt">

						<?php echo mb_strimwidth( strip_tags( $item['description']['value'] ), 0, 800, '…', $charset )?>

					</p>
				<!-- /.media-body --></div>
			</a>
		<!-- /.media --></div>
	<?php endforeach; ?>
<?php else: ?>
<?php endif; ?>
