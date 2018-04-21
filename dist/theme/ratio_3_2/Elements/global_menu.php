<?php
/**
 * 構成要素：グローバルメニュー
 * Elements/global_menu.php
 * 
 * usage: $this->BcBaser->globalMenu()
 */
if ( Configure::read('BcRequest.isMaintenance') ) {
	return;
}
if ( empty($menuType) ) {
	$menuType = '';
}
?>
<?php if( $this->BcBaser->getMenus() ): ?>
<nav class="global-nav collapse navbar-collapse" id="navbar-collapse">
	<div class="container">
		<div class="hidden-lg hidden-md hidden-sm">
			<?php
				// widget: header-top-right No.8
				$this->BcBaser->widgetArea(8);
			?>
		</div>

		<?php
		$args = array(
			'ul_class' => 'nav nav-pills nav-justified',
			'li_class' => null,
			'active_class' => 'active',
		);
		echo $this->Ratio32->get_global_menu( $args ); 
		?>
	<!-- /.container --></div>
</nav>
<?php endif; ?>
