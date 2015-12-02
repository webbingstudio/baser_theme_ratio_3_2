<?php
/**
 * ブログ：アーカイブ
 * Blog/archives.php
 */

$this->BcBaser->setDescription( $this->BcBaser->getContentsTitle() . 'のアーカイブ一覧です。' );
?>
					<div class="page-header">
						<h1 class="h1"><?php $this->Blog->title(); ?></h1>
					<!-- /.page-header --></div>

					<?php if (!empty($posts)): ?>
					<div class="entry-summary">

						<div class="entry-summary-header">
							<h2 class="entry-summary-title"><?php $this->BcBaser->contentsTitle() ?></h2>
						<!-- /.entry-summary-header --></div>

						<?php
							$options = array(
								'posts' => $posts,
								'trim' => 100
							);
							$this->BcBaser->element( 'blog_loop_media', $options );
						?>
					<!-- /.entry-summary --></div>
					<?php else: ?>

					<div class="entry-summary">

						<div class="entry-summary-header">
							<h2 class="entry-summary-title"><?php $this->BcBaser->contentsTitle() ?></h2>
						<!-- /.entry-summary-header --></div>

						<div class="well">
							このコンテンツは準備中です。
						<!-- /.well --></div>

					<!-- /.entry-summary --></div>

					<?php endif; ?>

					<?php $this->BcBaser->pagination(); ?>
