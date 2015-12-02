<?php
/**
 * 構成要素：ブログコメント一覧
 * Elements/blog_commonts.php
 * 
 */
?>
<?php if ($blogContent['BlogContent']['comment_use']): ?>
	<div class="alert alert-danger">
		このテーマは、ブログコメントに対応していません。<br>
		ファイル名の末尾に「_xxx」等を付けて無効化すると、baserCMSの基本のコメントフォームを呼び出すことができます。
	</div>
<?php endif ?>