<?php
/**
 * レイアウト：ブログ
 * Layouts/blog.php
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
<body class="layout-blog <?php $this->BcBaser->contentsName() ?>">

<?php $this->BcBaser->header() ?>
<?php $this->BcBaser->globalMenu() ?>
<div class="contents">

	<div class="section section-01 pt0 pb0">
		<div class="container">

			<div class="row-2col">
				<div class="col-main">

					<div class="widget-area-wrapper">
					<?php
						// widget: common top No.6
						$this->Ratio32->widget_edit_link(6);
						$this->BcBaser->widgetArea(6);
					?>
					<!-- /.widget-area-wrapper --></div>

					<?php $this->BcBaser->flash() ?>
					<?php $this->BcBaser->content() ?>

					<div class="widget-area-wrapper">
					<?php
						// widget: common bottom No.7
						$this->Ratio32->widget_edit_link(7);
						$this->BcBaser->widgetArea(7);
					?>
					<!-- /.widget-area-wrapper --></div>

				<!-- /.col-main --></div>
				<div class="col-sub">

					<div class="widget-area-wrapper">
					<?php
						// widget: blog sidebar No.2
						$this->Ratio32->widget_edit_link(2);
						$this->BcBaser->widgetArea(2);
					?>
					<!-- /.widget-area-wrapper --></div>

				<!-- /.col-sub --></div>
			<!-- /.row-2col --></div>
		<!-- /.container --></div>
	<!-- /.section section-01 --></div>

<!-- /.contents --></div>
<?php $this->BcBaser->footer() ?>
<?php $this->BcBaser->func() ?>
</body>
</html>
