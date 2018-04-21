<?php
/**
 * 構成要素：ブログタグ
 * Elements/blog_tag.php
 */
?>
<?php if (!empty($this->Blog->blogContent['tag_use'])): ?>
	<?php if (!empty($post['BlogTag'])) : ?>
		<p>タグ：<span class="label label-default"><?php $this->Blog->tag( $post, '</span> <span class="label label-default">' ); ?></span></p>
	<?php endif ?>
<?php endif ?>
