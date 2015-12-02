<?php
/**
 * 構成要素：ヘッダ
 * Elements/footer.php
 * 
 * usage: $this->BcBaser->footer()
 */

$navbar_class = RATIO32_FOOT_COLOR == 'black' ? ' navbar-inverse' : ' navbar-default';
?>
<footer id="footer" class="navbar<?php echo $navbar_class; ?>">
	<div class="container">
		<div class="navbar-copyright">
			<small>Copyright (C)<?php echo date('Y'); ?> <?php echo '<a href="' . Configure::read('BcEnv.siteUrl') . '">' . $this->BcBaser->siteConfig['name'] . '</a>'; ?> All rights Reserved.</small>
		<!-- /.footer-copyright --></div>
	<!-- /.container --></div>
</footer>