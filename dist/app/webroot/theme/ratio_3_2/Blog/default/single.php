<?php
/**
 * ブログ：記事詳細ページ
 * Blog/single.php
 */

$this->BcBaser->setDescription( $this->Blog->getPostContent( $post, true, false, 120 ) . '...' );
?>

					<div class="page-header">
						<h1 class="h1"><?php $this->Blog->title(); ?></h1>
					<!-- /.page-header --></div>

					<article class="entry entry-blog">

						<div class="entry-header">
							<div class="entry-category"><?php $this->Blog->category($post, array( 'class' => 'label label-info' ) ); ?></div>

							<h2 class="entry-title"><?php $this->BcBaser->contentsTitle(); ?></h2>

							<div class="entry-meta">

								<div class="entry-tag"><?php $this->BcBaser->element( 'blog_tag', array( 'post' => $post ) ) ?></div>
								<div class="entry-date"><?php $this->Blog->postDate( $post, RATIO32_DATE_FORMAT . ' ' . RATIO32_TIME_FORMAT ); ?></div>

							<!-- /.entry-meta --></div>

						<!-- /.entry-header --></div>

						<div class="entry-contents">

							<?php
								$eye_catch = $this->Blog->getEyeCatch( $post, array( 'imgsize' => 'thumb', 'link' => false ) );
								if( !empty( $eye_catch ) ) :
							?>
							<div class="entry-eyecatch eye-catch">
								<div class="entry-eyecatch-inner">
									<?php echo $eye_catch; ?>
								<!-- /.entry-eyecatch-inner --></div>
							<!-- /.entry-eyecatch --></div>
							<?php endif; ?>

							<div class="entry-contents-body">
								<?php $this->Blog->postContent($post) ?>
							<!-- /.entry-contents-body --></div>

						<!-- /.entry-contents --></div>

						<div class="entry-footer">

							<?php
								$share_title = urlencode( $this->BcBaser->getContentsTitle() . ' | ' . $this->BcBaser->siteConfig['name'] );
								$share_url = urlencode( $this->BcBaser->getUrl( '', true ) );
							?>

							<ul class="entry-share list-inline">
								<li class="entry-share-twitter">
									<a class="btn btn-twitter" href="http://twitter.com/share?text=<?php echo $share_title; ?>&amp;url=<?php echo $share_url; ?>" target="_blank" rel="nofollow">
										<i class="fa fa-twitter"></i>
										<span class="entry-share-label size-sm">ツイート</span>
									</a>
								</li>
								<li class="entry-share-facebook">
									<a class="btn btn-facebook" href="http://www.facebook.com/sharer.php?u=<?php echo $share_url; ?>&amp;t=<?php echo $share_title; ?>" target="_blank" rel="nofollow">
										<i class="fa fa-facebook"></i>
										<span class="entry-share-label size-sm">シェア</span>
									</a>
								</li>
							</ul>

							<nav class="serial-nav serial-nav-single">
								<ul class="pager">
									<li class="next"><?php $this->Blog->prevLink($post, '', array( 'arrow' => '' ) ) ?></li>
									<li class="previous"><?php $this->Blog->nextLink($post, '', array( 'arrow' => '' ) ) ?></li>
								</ul>
							</nav>
							<?php $this->BcBaser->element('crumbs_list'); ?>

						<!-- /.entry-footer --></div>

					</article>

					<!-- /Elements/blog_related_posts.php -->
					<?php $this->BcBaser->element('blog_related_posts') ?>

					<!-- /Elements/blog_comennts.php -->
					<?php $this->BcBaser->element('blog_comments') ?>

