<!-- BaserPageTagBegin -->
<?php $this->BcBaser->setTitle('baserCMSテーマ ratio_3_2') ?>
<?php $this->BcBaser->setDescription('ratio_3_2テーマは、個人事業主・小規模店舗向けに、不要な機能を取り払い、コンテンツと更新の負荷軽減を考慮したテーマです。テーマ内のすべての画像が3：2で統一されています。') ?>
<?php $this->BcBaser->setPageEditLink(1) ?>
<style>
/* メインビジュアルの文字の体裁 */

.mainvisual .jumbotron .h1,
.mainvisual .jumbotron h1 {
    top: 15%;
    font-size: 22px;
}

.mainvisual .jumbotron .jumbotron-caption {
    bottom: 10%;
    font-size: 12px;
}

@media (min-width: 480px) {

.mainvisual .jumbotron .h1,
.mainvisual .jumbotron h1 {
    font-size: 32px;
}
    
}

@media (min-width: 600px) {

.mainvisual .jumbotron .h1,
.mainvisual .jumbotron h1 {
    font-size: 48px;
}

.mainvisual .jumbotron .jumbotron-caption {
    font-size: 14px;
}
    
}

@media (min-width: 992px) {

.mainvisual .jumbotron .h1,
.mainvisual .jumbotron h1 {
    font-size: 44px;
}

}

@media (min-width:1200px) {

.mainvisual .jumbotron .h1,
.mainvisual .jumbotron h1 {
    font-size: 56px;
}

.mainvisual .jumbotron .jumbotron-caption {
    font-size: 18px;
}
    
}

</style>
<!-- BaserPageTagEnd -->

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