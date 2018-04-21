<?php
/**
 * ブログ：ブログトップ
 * Blog/index.php
 */

$this->BcBaser->setDescription( $this->Blog->getDescription() );
?>
					<div class="page-header">
						<h1 class="h1"><?php $this->Blog->title(); ?></h1>
					<!-- /.page-header --></div>

					<?php if ($this->Blog->descriptionExists()): ?>
					<div class="lead"><p><?php $this->Blog->description(); ?></p></div>
					<?php endif ?>

					<?php if (!empty($posts)): ?>

					<div class="entry-summary">
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

						<div class="well">
							このコンテンツは準備中です。
						<!-- /.well --></div>

					<!-- /.entry-summary --></div>

					<?php endif; ?>

					<?php $this->BcBaser->pagination(); ?>
