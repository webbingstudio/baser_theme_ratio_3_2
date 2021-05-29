<?php
/**
 * レイアウト：ホーム
 * Layouts/home.php
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
<body class="layout-default <?php $this->BcBaser->contentsName() ?>">

<?php $this->BcBaser->header() ?>
<?php $this->BcBaser->element('navbar'); ?>
<div class="contents">

<div class="section section-02">

    <div class="mainvisual">
        <div class="container">
            <div class="pop">
                <div class="row">
                    <div class="mainvisual-col-01"><?php $this->Ratio32->get_main_image( array( 'num' => 1, 'type' => 'jumbotron', 'h' => 'h1' ) ); ?></div>
                    <div class="mainvisual-col-02"><?php $this->Ratio32->get_main_image( array( 'num' => 2, 'type' => 'thumbnail' ) ); ?></div>
                <!-- /.row --></div>
            <!-- /.pop --></div>
        <!-- /.container --></div>
    <!-- /.mainvisual --></div>

    <div class="pickup">
        <div class="container">
            <div class="pop">
                <div class="row">
                    <div class="col-md-4"><?php $this->Ratio32->get_main_image( array( 'num' => 3, 'type' => 'thumbnail', 'more' => true ) ); ?></div>
                    <div class="col-md-4"><?php $this->Ratio32->get_main_image( array( 'num' => 4, 'type' => 'thumbnail', 'more' => true ) ); ?></div>
                    <div class="col-md-4"><?php $this->Ratio32->get_main_image( array( 'num' => 5, 'type' => 'thumbnail', 'more' => true ) ); ?></div>
                <!-- /.row --></div>
            <!-- /.pop --></div>
        <!-- /.container --></div>
    <!-- /.pickup --></div>

<!-- /.section section-02 --></div>

<?php
    // page content
    $this->BcBaser->content();
?>

<div class="section section-01 pt0 pb0">
    <div class="container">
        <div class="row-2col">
            <div class="col-main">

                <div class="widget-area-wrapper">
                <?php
                    // widget: home middle-left No.3
                    $this->Ratio32->widget_edit_link(3);
                    $this->BcBaser->widgetArea(3);
                ?>
                <!-- /.widget-area-wrapper --></div>

            <!-- /.col-main --></div>
            <div class="col-sub">

                <div class="widget-area-wrapper">
                <?php
                    // widget: home middle-right No.4
                    $this->Ratio32->widget_edit_link(4);
                    $this->BcBaser->widgetArea(4);
                ?>
                <!-- /.widget-area-wrapper --></div>

            <!-- /.col-sub --></div>
        <!-- /.row-2col --></div>
    <!-- /.container --></div>
<!-- /.section section-01 --></div>

<?php
    // widget: home bottom No.5
    // 有効なウィジェットがひとつもなければ、このセクションは表示されません
?>
<?php if( $this->Ratio32->isWidgetAvailable(5) ) : ?>
    <div class="section section-02">
        <div class="container">

            <div class="widget-area-wrapper">
            <?php
                $this->Ratio32->widget_edit_link(5);
                $this->BcBaser->widgetArea(5);
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
