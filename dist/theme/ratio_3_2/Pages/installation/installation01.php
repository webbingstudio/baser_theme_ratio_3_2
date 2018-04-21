<!-- BaserPageTagBegin -->
<?php $this->BcBaser->setTitle('1. テーマの初期データを読み込む') ?>
<?php $this->BcBaser->setDescription('') ?>
<?php $this->BcBaser->setPageEditLink(13) ?>
<!-- BaserPageTagEnd -->

<div class="thumbnail"><img align="" alt="ratio_3_2_install.jpg" class="img-responsive" src="../theme/ratio_3_2/img/default/ratio_3_2_install__large.jpg" /></div>

<p>管理画面の「テーマ管理 &gt; テーマ一覧」へ移動し、「ratio_3_2」テーマを有効にしてください。</p>

<p>このテーマは、ふたつの初期データを持っています。<br />
「default」には、テーマの紹介やこの導入手順が書かれています。テーマをいろいろと試してみたいときに読み込んでください。<br />
もう作成するサイトが決まっている場合は、余分なデータが入っていない<strong>「blank」</strong>を読み込んでください。</p>

<h2>「default」データで使用されている画像について</h2>

<p>ページ内の画像は、「スマートURL」がオフになっていると表示されません。<br />
以下のいずれかの手順で修正してください。</p>

<h3>1）スマートURLをオンにする</h3>

<p>管理画面の「システム設定 &gt; サイト基本設定」で、「スマートURL」をオンにした後、「サーバーキャッシュ削除」を行うか、ページを何度か再読み込みしてください。</p>

<h3>2）img要素のパスを変更する</h3>

<p>画像が表示されていないimg要素のsrc属性の「相対パス」を一階層深くなるよう変更してください。</p>

<p>例：<br />
../theme/ratio_3_2/img/default/&hellip;<br />
&rarr;　<strong>../../theme/ratio_3_2/img/default/&hellip;</strong></p>

<h2>バナーについて</h2>

<p>サイドメニューの「べっしー」のバナーは、baserCMSをサーバーのルートディレクトリ以外に設置していると表示されません。<br />
管理画面の「ウィジェット管理」で、バナーを差し替えるか、バナーのimg要素のsrc属性の「相対パス」を一階層深くなるよう変更してください。</p>

<p>例：<br />
/app/webroot/theme/ratio_3_2/&hellip;<br />
&rarr;　<strong>/[baserCMSを設置した階層]/app/webroot/theme/ratio_3_2/&hellip;</strong></p>