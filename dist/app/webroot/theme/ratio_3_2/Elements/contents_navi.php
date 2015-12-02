<?php
/**
 * 構成要素：コンテンツナビ
 * Elements/contents_navi.php
 * 
 * usage: $this->BcBaser->element('contents_navi')
 */

if (!isset($this->BcPage) || !$this->BcPage->contentsNaviAvailable()) {
	return;
}
?>

<nav class="contents-nav">
	<ul class="pager">
		<li class="next"><?php $this->BcPage->nextLink( '', array('class' => '', 'arrow' => '') ) ?></li>
		<li class="previous"><?php $this->BcPage->prevLink( '', array('class' => '', 'arrow' => '') ) ?></li>
	</ul>
</nav>
