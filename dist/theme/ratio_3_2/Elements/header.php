<?php
/**
 * 構成要素：ヘッダ
 * Elements/header.php
 * 
 * usage: $this->BcBaser->header()
 */

$WS_navbar_class = RATIO32_HEAD_COLOR == 'black' ? ' navbar-inverse' : ' navbar-default';
?>
<header id="header" class="navbar<?php echo $WS_navbar_class; ?>">
	<div class="container">

		<div class="navbar-header">

			<?php if( $this->BcBaser->getMenus() ): ?>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
				<i class="fa fa-bars"></i><span class="navbar-toggle-text">メニュー</span>
			</button>
			<?php endif; ?>

			<?php if ( $this->BcBaser->isHome() ){ echo '<h1>'; } ?>

			<?php
				$WS_theme_config = ClassRegistry::init('ThemeConfig');
				$WS_theme_config_data = $WS_theme_config->findExpanded();
				if( ( !empty( $WS_theme_config_data['logo'] ) ) && ( empty( $WS_theme_config_data['logo_alt'] ) ) ) {
					$this->BcBaser->logo(array( 'alt' => $this->BcBaser->siteConfig['name'], 'class' => 'navbar-brand'));
				} elseif ( !empty ($WS_theme_config_data['logo'] ) ) {
					$this->BcBaser->logo(array( 'alt' => '', 'class' => 'navbar-brand'));
				}
				if( !empty( $WS_theme_config_data['logo_alt'] ) ) {
					echo '<a class="navbar-brand" href="' . $this->BcBaser->getUrl('/') . '">' . $WS_theme_config_data['logo_alt'] . '</a>';
				}
			?>

			<?php if ( $this->BcBaser->isHome() ){ echo '</h1>'; } ?>
		</div>

		<div class="navbar-sub navbar-right visible-lg visible-md visible-sm">
			<?php
				// widget: header-top-right No.8
				$this->BcBaser->widgetArea(8);
			?>
		</div>

	<!-- /.container --></div>
</header>
