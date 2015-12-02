<?php
/**
 * 構成要素：追加METAタグ
 * Elements/meta_extra.php
 * 
 * usage: $this->BcBaser->element('meta_extra')
 */
?>
<meta property="og:site_name" content="<?php echo $this->BcBaser->siteConfig['name']; ?>" />

<?php if ( $this->BcBaser->isHome() ) : ?>
<meta property="og:type" content="website" />
<?php else : ?>
<meta property="og:type" content="article" />
<?php endif; ?>

<meta property="og:url" content="<?php echo $this->BcBaser->getUrl( '', true ); ?>" />

<meta name="twitter:card" content="summary" />
<meta name="twitter:domain" content="<?php echo $this->BcBaser->siteConfig['name']; ?>"/>

<?php
// og:image, twitter:image
if ( ( $this->BcBaser->isBlogSingle() ) && ( !empty( $post['BlogPost']['eye_catch'] ) ) ) {
	$eye_chache_url = $this->BcBaser->getUrl( '/', true ) . 'files/blog/news/blog_posts/' . $post['BlogPost']['eye_catch'];
	echo $this->Html->meta(array(
		'property' => 'og:image',
		'content' => $eye_chache_url
	));
	echo $this->Html->meta(array(
		'name' => 'twitter:image',
		'content' => $eye_chache_url
	));
}
?>
