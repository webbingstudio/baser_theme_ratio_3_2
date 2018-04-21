<?php
/**
 * レイアウト：１カラム（幅制限なし）
 * Layouts/col1_full.php
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
<body class="layout-col1-full <?php $this->BcBaser->contentsName() ?>">

<?php $this->BcBaser->header() ?>
<?php $this->BcBaser->globalMenu() ?>
<div class="contents">

<?php $this->BcBaser->flash() ?>
<article class="entry">

	<div class="entry-contents">
	<?php $this->BcBaser->content() ?>
	<!-- /.entry-contents --></div>

</article>

<!-- /.contents --></div>
<?php $this->BcBaser->footer() ?>
<?php $this->BcBaser->func() ?>
</body>
</html>
