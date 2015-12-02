<!-- BaserPageTagBegin -->
<?php $this->BcBaser->setTitle('画面幅いっぱいに内容を表示する') ?>
<?php $this->BcBaser->setDescription('') ?>
<?php $this->BcBaser->setPageEditLink(34) ?>
<!-- BaserPageTagEnd -->

<p>このテーマは、ページ本文に幅の上限を設けています。<br />
帯状に背景色を変える、画像をいっぱいに表示する場合は、以下のようにカスタマイズすると制限を解除できます。</p>

<div class="alert alert-danger">HTML・CSSと、baserCMSのテーマ編集の知識が必要となります。</div>

<h2>すべてのページで解除する</h2>

<p>通常は、テーマファイル内の「<strong>Layout/default.php</strong>」が、基本レイアウトとして読み込まれています。<br />
このファイル名を「<strong>Layout/col1_full.php</strong>」と入れ替えると、すべてのページの制限が解除されます。</p>

<p>幅を制限すべき箇所は、都度&lt;div class=&quot;container&quot;&gt;〜&lt;/div&gt;を本文に記述してください。</p>

<h2>特定カテゴリーのみ解除する</h2>

<p>カテゴリーの作成時に、読み込むテンプレートで「<strong>col1_full</strong>」を選択すると、そのカテゴリー内のみ制限が解除されます。<br />
制限を設けたままで、サイドメニューがない「<strong>col1</strong>」というテンプレートも選択できます。</p>