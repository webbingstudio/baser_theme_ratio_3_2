<!-- BaserPageTagBegin -->
<?php $this->BcBaser->setTitle('6. SNSアイコンを設定する') ?>
<?php $this->BcBaser->setDescription('') ?>
<?php $this->BcBaser->setPageEditLink(20) ?>
<!-- BaserPageTagEnd -->

<p>このテーマは、ヘッダに「お問い合わせアイコン」「SNSアイコン」を表示することができます。ここを作成するサイトに合わせて修正していきましょう。</p>

<h2>ウィジェット編集画面へ移動する</h2>

<p>管理画面「ウィジェットエリア管理 &gt; ウィジェットエリア一覧」へ移動してください。<br />
一覧に「ヘッダ::サブメニュー」というエリアがあるので、クリックして編集画面へ移動してください。</p>

<div class="thumbnail"><img align="" alt="ratio_3_2_sns.jpg" class="img-responsive" src="../../theme/ratio_3_2/img/default/ratio_3_2_sns__large.jpg" /></div>

<h3>「アイコンメニュー」ウィジェットについて</h3>

<p>「ヘッダ::サブメニュー」は、アイコンの編集専用のエリアです。以下の3つのウィジェットが登録されています。</p>

<h4>アイコンメニュー</h4>

<p>対応しているすべてのSNSアイコンが入っています。通常はこちらを利用します。「default」データでは、このウィジェットの「利用する」にチェックが入っています。</p>

<h4>アイコンメニュー（メールのみ）</h4>

<p>SNSを利用する予定がない場合は、こちらを利用します。「blank」データでは、このウィジェットの「利用する」にチェックが入っています。</p>

<h4>アイコンメニュー（バックアップ）</h4>

<p>公開後にSNSアイコンを追加するときのために、アイコンメニューの初期状態を複製を残しています。<strong>通常は「利用する」のチェックは外したままにしておき、削除はしないでください。</strong></p>

<h3>アイコンメニューを編集する</h3>

<p>利用するアイコンメニューの内容を、以下のとおり編集してください。</p>

<h4>メール</h4>

<p>先頭に書かれています。お問い合わせフォームが「contact」ではないときのみ、リンク先（赤太字）を修正してください。</p>

<pre>
<code>&lt;li&gt;&lt;a href=&quot;<strong class="text-danger">/contact</strong>&quot; class=&quot;btn btn-round btn-mail&quot;&gt;
&lt;i class=&quot;fa fa-envelope&quot;&gt;&lt;/i&gt;&lt;span class=&quot;sr-only&quot;&gt;お問い合わせ&lt;/span&gt;
&lt;/a&gt;&lt;/li&gt;</code></pre>

<p>※ひとつ下のフォルダにbaserCMSを設置したときも、ここのリンクがつながっていません。「http://」からはじまる完全URLに修正してください。</p>

<h4>メール以外</h4>

<p>1セットずつ、改行で区切って書かれています。利用していないサービスは、<strong>&lt;li&gt;〜&lt;/li&gt;を削除してください。</strong>利用している場合は、各サービスのリンク先（赤太字）を、誘導したいアカウントのトップページURLに修正してください。<br />
Twitterの場合は、以下のとおりになります。</p>

<pre>
<code>&lt;li&gt;&lt;a href=&quot;<strong class="text-danger">[TwitterのURL]</strong>&quot; class=&quot;btn btn-round btn-twitter&quot;&gt;
&lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;&lt;span class=&quot;sr-only&quot;&gt;Twitter&lt;/span&gt;
&lt;/a&gt;&lt;/li&gt;</code></pre>