<?php
/**
 * 構成要素：ナビゲーションバー（デスクトップ用）
 * Elements/navbar.php
 * 
 * usage: $this->BcBaser->element('navbar')
 */
?>
<nav class="global-nav collapse navbar-collapse" id="navbar-collapse">
	<div class="container">
		<div class="hidden-lg hidden-md hidden-sm">
			<?php
				// widget: header-top-right No.8
				$this->BcBaser->widgetArea(8);
			?>
		</div>

		<?php $this->BcBaser->globalMenu(); ?>

	<!-- /.container --></div>
</nav>
