<?php
/**
 * 構成要素：パンくず
 * Elements/crumbs_list.php
 * 
 * usage: $this->BcBaser->element('crumbs_list');
 */
?>
<div class="topicpath">
	<ol class="breadcrumb">
<?php
$crumbs = $this->BcBaser->getCrumbs();
if ( !empty( $crumbs ) ) :
?>
<?php
	$this->BcBaser->addCrumb( '<li>' );
	$this->BcBaser->addCrumb( 'ホーム', $this->BcBaser->getUrl('/') );
	$this->BcBaser->addCrumb( '</li>' );

	foreach ($crumbs as $key => $crumb) {
		if ($this->BcArray->last($crumbs, $key + 1)) {
			if ($crumbs[$key + 1]['name'] == $crumb['name']) {
				continue;
			}
		}
		if ($this->BcArray->last($crumbs, $key)) {
			if ($this->viewPath != 'home' && $crumb['name']) {
				$this->BcBaser->addCrumb('<li class="active">' . $crumb['name'] . '</li>');
			}
		} else {
			$this->BcBaser->addCrumb( '<li>' );
			$this->BcBaser->addCrumb( $crumb['name'], $crumb['url'] );
			$this->BcBaser->addCrumb( '</li>' );
		}
	}
	$this->BcBaser->crumbs('', '');

?>
<?php elseif ( empty( $crumbs ) ) : ?>
<?php

	if ($this->name == 'CakeError') {
		$this->BcBaser->addCrumb('<li class="active">ページが見つかりません</li>');
	}
	$this->BcBaser->crumbs('', '');
?>
<?php endif; ?>
	</ol>
<!-- /.topicpath --></div>
