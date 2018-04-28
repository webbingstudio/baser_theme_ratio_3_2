<?php
/**
 * サイト内検索結果
 * SearchIndices/search.php
 * Core: lib/Baser/View/SearchIndices/search.php
 */
?>
<?php if (!empty($this->Paginator)): ?>
<div class="lead">
	<?php echo $this->Paginator->counter(['format' => sprintf(__d('baser', '<strong>%s</strong> の検索結果 <strong>%%start%%〜%%end%%</strong>件目 / %%count%% 件'), implode(' ', $query))]) ?>
<!-- /.lead --></div>
<?php endif ?>

<?php $this->BcBaser->element('list_num') ?>

<?php if ($datas): ?>
<div class="entry-summary">
	<?php foreach ($datas as $data): ?>
	<div class="media">
		<a href="<?php echo $data['SearchIndex']['url']; ?>">

			<div class="media-body">
				<h2 class="media-title"><?php echo $this->BcBaser->mark($query, $data['SearchIndex']['title']) ?></h2>
				<p class="media-excerpt">
					<?php echo $this->BcBaser->mark($query, $this->Text->truncate($data['SearchIndex']['detail'], 100)) ?>...<br>
					<span class="size-sm"><?php echo fullUrl(urldecode($data['SearchIndex']['url'])) ?></span>
				</p>
			<!-- /.media-body --></div>
		</a>
	</div>
	<?php endforeach ?>
<!-- /.entry-summary --></div>
<?php else: ?>
<div class="entry-summary">

<div class="well">
	<?php echo __d('baser', '該当する結果が存在しませんでした。')?>
</div>

<!-- /.entry-summary --></div>
<?php endif ?>

<?php $this->BcBaser->pagination( 'default', array(), array( 'subDir' => false ) ); ?>
