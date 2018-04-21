<?php
/**
 * レイアウト：１カラム
 * Layouts/col1.php
 */
?>
<?php $this->BcBaser->docType('html5') ?>
<html lang="ja">
<head>
<?php $this->BcBaser->charset() ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php $this->BcBaser->title() ?>
<?php $this->BcBaser->metaDescription() ?>
<?php $this->BcBaser->metaKeywords() ?>
<?php $this->BcBaser->icon() ?>

<?php $this->BcBaser->element('meta_extra'); ?>

<?php $this->BcBaser->css(array(
'bootstrap.min',
'font-awesome.min',
'style.min',
)) ?>
<?php $this->BcBaser->js(array(
'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
'bootstrap.min',
)); ?>
<?php $this->BcBaser->scripts() ?>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php $this->BcBaser->googleAnalytics() ?>
</head>
<body class="layout-col1 <?php $this->BcBaser->contentsName() ?>">

<?php $this->BcBaser->header() ?>
<?php $this->BcBaser->globalMenu() ?>
<div class="contents">

	<div class="section section-01">
		<div class="container">

			<div class="widget-area-wrapper">
			<?php
				// widget: common top No.6
				$this->Ratio32->widget_edit_link(6);
				$this->BcBaser->widgetArea(6);
			?>
			<!-- /.widget-area-wrapper --></div>

			<?php $this->BcBaser->flash() ?>
			<?php if ( $this->BcBaser->isCategoryTop() ) : ?>
			<div class="page-header">
				<h1 class="h1"><?php $this->BcBaser->contentsTitle(); ?></h1>
			</div>
			<?php else : ?>
			<div class="page-header page-header-children">
				<h1 class="h1"><?php $this->BcBaser->contentsTitle(); ?></h1>
			</div>
			<?php endif; ?>
			<article class="entry">

				<div class="entry-contents">
				<?php $this->BcBaser->content() ?>
				<!-- /.entry-contents --></div>

				<div class="entry-footer">
					<?php $this->BcBaser->element('contents_navi') ?>
					<?php $this->BcBaser->element('crumbs_list'); ?>
				<!-- /.entry-footer --></div>

			</article>

		<!-- /.container --></div>
	<!-- /.section section-01 --></div>

	<?php
		// widget: common bottom No.7
		// 有効なウィジェットがひとつもなければ、このセクションは表示されません
		$show_section = false;
		$widget_data_array = $this->requestAction('/widget_areas/get_widgets/' . 7);
		foreach ( $widget_data_array as $widget_data ) {
			foreach ( $widget_data as $widget ) {
				if( $widget['status'] == 1 ){
					$show_section = true;
				}
			}
		}
	?>
	<?php if( $show_section ) : ?>
		<div class="section section-02">
			<div class="container">

				<div class="widget-area-wrapper">
				<?php
					$this->Ratio32->widget_edit_link(7);
					$this->BcBaser->widgetArea(7);
				?>
				<!-- /.widget-area-wrapper --></div>

			<!-- /.container --></div>
		<!-- /.section section-02 --></div>
	<?php endif; ?>

<!-- /.contents --></div>
<?php $this->BcBaser->footer() ?>
<?php $this->BcBaser->func() ?>
</body>
</html>
