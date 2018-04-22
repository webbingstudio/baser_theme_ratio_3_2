<!-- BaserPageTagBegin -->
<?php $this->BcBaser->setTitle('ヘッダ・フッタを白にする') ?>
<?php $this->BcBaser->setDescription('') ?>
<?php $this->BcBaser->setPageEditLink(31) ?>
<!-- BaserPageTagEnd -->

<p>このテーマは、ヘッダ・フッタの色をそれぞれ「白」「黒」に変えることができます。<br />
テーマファイルの直接編集が必要となります。心配な場合は必ずコピーを作成してください。</p>

<p>テーマファイル内のConfig/bootstrap.phpをテキストエディタで開いてください。<br />
先頭に以下のように書かれています。</p>

<pre>
// カラー（白系:white 黒系:black）
define(&#39;RATIO32_HEAD_COLOR&#39;, &#39;black&#39;);
define(&#39;RATIO32_FOOT_COLOR&#39;, &#39;black&#39;);</pre>

<p>&#39;black&#39;を&#39;white&#39;に書き換えて保存すると、ヘッダ・フッタがそれぞれ白に変わります。</p>

<div class="well">bootstrap.phpには、新着情報の日付フォーマットも設定されています。PHPのdate関数と同様の記述で、表記を変えることができます。</div>