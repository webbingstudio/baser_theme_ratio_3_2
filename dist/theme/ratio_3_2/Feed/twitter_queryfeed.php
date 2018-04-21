<?php
/**
 * フィード：Twitter Queryfeed対応テンプレート
 */

$this->Feed->saveCachetime();
?>
<!--nocache-->
	<?php $this->Feed->cacheHeader() ?>
<!--/nocache-->

<?php if (!empty($items)): ?>
	<?php foreach ($items as $key => $item): ?>
		<?php $no = sprintf('%02d', $key + 1) ?>
		<?php if ($key == 0): ?>
			<?php $class = ' class="media first feed feed-twitter feed-twitter' . $no . '"' ?>
		<?php elseif ($key == count($items) - 1): ?>
			<?php $class = ' class="media last feed feed-twitter feed-twitter' . $no . '"' ?>
		<?php else: ?>
			<?php $class = ' class="media feed feed-twitter feed-twitter' . $no . '"' ?>
		<?php endif ?>
		<div<?php echo $class ?>>
			<a href="<?php echo $item['link']['value']; ?>" target="_blank">
				<div class="media-body">
					<p class="media-excerpt">
						<?php echo strip_tags( $item['description']['value'] ); ?><br>
						<?php echo preg_replace( '/^\@/', '$1', $item['title']['value'] ) . ' : ' . date( 'Y-m-d H:i:s', strtotime( $item['pubDate']['value'] ) ); ?>
					</p>
				<!-- /.media-body --></div>
			</a>
		<!-- /.media --></div>
	<?php endforeach; ?>
<?php else: ?>
<?php endif; ?>
