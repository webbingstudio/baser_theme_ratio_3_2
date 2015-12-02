<?php
/**
 * 構成要素：固定ページリスト
 * Elements/page_list.php
 */

$pages = $this->BcBaser->getPageList($categoryId);
$current = str_replace($this->request->base, '', $this->request->here);
?>
<div class="list-group">
	<?php
	if (!empty($pages)) {
		foreach ($pages as $key => $page) {
			$class = '';
			$no = sprintf('%02d', $key + 1);
			$classies = array('page-' . $no);
			if ($key == 0) {
				$classies[] = 'first';
			} elseif ($key == count($pages) - 1) {
				$classies[] = 'last';
			}
			if ($current == $page['url']) {
				$classies[] = 'active';
			}
			if ($classies) {
				$class = 'list-group-item ' . implode(' ', $classies);
			}
			if ($this->request->base == '/index.php' && $page['url'] == '/') {
				echo str_replace( '/index.php', '', $this->BcBaser->getLink( $page['title'], $page['url'], array( 'class' => $class ) ) );
			} else {
				echo $this->BcBaser->getLink( $page['title'], $page['url'], array( 'class' => $class ) );
			}
		}
	}
	?>
</div>