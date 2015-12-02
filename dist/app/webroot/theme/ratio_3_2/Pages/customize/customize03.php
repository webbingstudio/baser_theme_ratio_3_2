<!-- BaserPageTagBegin -->
<?php $this->BcBaser->setTitle('メイン画像1の文字体裁を変える') ?>
<?php $this->BcBaser->setDescription('') ?>
<?php $this->BcBaser->setPageEditLink(32) ?>
<!-- BaserPageTagEnd -->

<div class="thumbnail"><img align="" alt="ratio_3_2_mainimg.jpg" class="img-responsive" src="../../theme/ratio_3_2/img/default/ratio_3_2_mainimg__large.jpg" /></div>

<p>メイン画像によっては、上に乗っている文字の位置や色が合わないことがあります。<br />
スタイルシートの知識があれば、管理画面から調整することができます。</p>

<h2>位置を変える</h2>

<p>管理画面の固定ページ一覧から、トップページ（カテゴリーなしの「index」ページ）の編集画面へ移動してください。<br />
ページ下部の「オプション」をクリックすると、「コード」欄に文字位置のスタイルシート定義が書かれています。</p>

<p>文字サイズを変える場合は「font-size」を、文字位置を変える場合は「top」「bottom」の数字を変更してください。「width」や「left」を追加すると左右を空けることもできます。<br />
なお、「top」「bottom」「width」は必ず、<strong>パーセント単位</strong>としてください。画面が伸縮したときにずれてしまいます。</p>

<h2>色を変える</h2>

<p>「コード」欄に以下のように追記すると、文字が白黒反転します。</p>

<pre>
<code>.mainvisual .jumbotron .h1,
.mainvisual .jumbotron h1 {
&nbsp;&nbsp; &nbsp;color: #333333;
&nbsp;&nbsp; &nbsp;text-shadow: 0px 1px 6px rgba( 255, 255, 255, .75 );
}

.mainvisual .jumbotron:visited .h1,
.mainvisual .jumbotron:hover .h1,
.mainvisual .jumbotron:focus .h1,
.mainvisual .jumbotron:active .h1,
.mainvisual .jumbotron:visited h1,
.mainvisual .jumbotron:hover h1,
.mainvisual .jumbotron:focus h1,
.mainvisual .jumbotron:active h1 {
&nbsp;&nbsp; &nbsp;color: #333333;
}

.mainvisual .jumbotron .jumbotron-caption {
&nbsp;&nbsp; &nbsp;background: rgba( 255, 255, 255, .3 );
&nbsp;&nbsp; &nbsp;color: #333333;
}

.mainvisual .jumbotron:visited .jumbotron-caption,
.mainvisual .jumbotron:hover .jumbotron-caption,
.mainvisual .jumbotron:focus .jumbotron-caption,
.mainvisual .jumbotron:active .jumbotron-caption {
&nbsp;&nbsp; &nbsp;color: #333333;
}</code></pre>