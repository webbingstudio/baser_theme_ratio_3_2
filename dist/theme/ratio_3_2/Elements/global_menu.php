<?php
/**
 * 構成要素：グローバルメニュー
 * Elements/global_menu.php
 * 
 * usage: $this->BcBaser->globalMenu()
 */
?>
<?php
if (isset($tree)) {

	$args = array(
		'ul_class' => 'nav nav-pills nav-justified',
		'li_class' => null,
		'active_class' => 'active',
	);
	echo $this->Ratio32->get_global_menu( $tree, $currentId, $args );

}
?>