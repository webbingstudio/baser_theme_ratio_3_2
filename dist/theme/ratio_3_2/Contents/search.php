<?php
/**
 * コンテンツ：サイト内検索結果
 * Contents/search.php
 */
?>
					<?php if (!empty($this->Paginator)): ?>
					<div class="lead">
						<?php echo $this->Paginator->counter( array( 'format' => '<strong>' . implode(' ', $query) . '</strong> の検索結果 <strong>%start%〜%end%</strong>件目 / %count% 件' ) ); ?>
					<!-- /.lead --></div>
					<?php endif ?>

					<?php $this->BcBaser->element('list_num') ?>

					<?php if ($datas): ?>
					<div class="entry-summary">
						<?php foreach ($datas as $data): ?>
						<div class="media">
							<a href="<?php echo $data['Content']['url']; ?>">

								<div class="media-body">
									<h2 class="media-title"><?php echo $this->BcBaser->mark( $query, $data['Content']['title'] ) ?></h2>
									<p class="media-excerpt">
										<?php echo $this->BcBaser->mark($query, $this->Text->truncate($data['Content']['detail'], 100)) ?>...<br>
										<span class="size-sm"><?php echo fullUrl( $data['Content']['url'] ); ?></span>
									</p>
								<!-- /.media-body --></div>
							</a>
						</div>
						<?php endforeach ?>
					<!-- /.entry-summary --></div>
					<?php else: ?>
					<div class="entry-summary">

					<div class="well">
						該当するコンテンツが見つかりませんでした。
					</div>

					<!-- /.entry-summary --></div>
					<?php endif ?>

					<?php $this->BcBaser->pagination( 'default', array(), array( 'subDir' => false ) ); ?>
