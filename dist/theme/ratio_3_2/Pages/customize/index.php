<!-- BaserPageTagBegin -->
<?php $this->BcBaser->setTitle('見出しの上を詰める・段落の下を空ける') ?>
<?php $this->BcBaser->setDescription('') ?>
<?php $this->BcBaser->setPageEditLink(14) ?>
<!-- BaserPageTagEnd -->

<p>このテーマは、「見出し」を利用すると、上に空白ができます。<br />
このため、ページの先頭に見出しを作ると、大見出しとの間が空いてしまいます。</p>

<p>また、書いている文章の内容によっては、間を大きく開けたり、左を一文字分ずらしたくなることもあります。<br />
このテーマは、余白を調整するCSSクラスを設けています。</p>

<h2>見出しの上を詰める</h2>

<p>CKEditorを利用している場合は、「ソース」ボタンを押してHTMLソースコードを表示してください。<br />
見出し2であれば、以下のようになっているはずです。</p>

<pre>
<code>&lt;h2&gt;この見出しの上を詰めたい&lt;/h2&gt;</code></pre>

<p>これに、以下のとおりクラスを追加してください。強制的に上の余白をゼロにします。</p>

<pre>
<code>&lt;h2<strong class="text-danger"> class=&quot;mt0&quot;</strong>&gt;この見出しの上を詰めたい&lt;/h2&gt;</code></pre>

<h2>下を大きく開ける</h2>

<p>下を大きく開けたい段落を探してください。</p>

<pre>
<code>&lt;p&gt;この段落の下を空けたい&lt;/p&gt;</code></pre>

<p>これに、以下のとおりクラスを追加してください。この例では、約3行分の空白ができます。</p>

<pre>
<code>&lt;p<strong class="text-danger"> class=&quot;mt3&quot;</strong>&gt;この段落の下を空けたい&lt;/p&gt;</code></pre>

<p>数字は、05 / 1 / 15 / 2 / 25 / 3 ... と変更すると、0.5文字〜6文字まで調整できます。</p>

<pre>
<code>&lt;p<strong class="text-danger"> class=&quot;mt45&quot;</strong>&gt;下を4.5行分空けたい&lt;/p&gt;</code></pre>

<h2>左を一文字分ずらす</h2>

<p>左をずらしたい範囲を、&lt;div&gt;〜&lt;/div&gt;で囲んでください。</p>

<pre>
<code>&lt;div&gt;
&lt;p&gt;字下げしたい&lt;/p&gt;
&lt;p&gt;字下げしたい&lt;/p&gt;
&lt;p&gt;字下げしたい&lt;/p&gt;
&lt;/div&gt;</code></pre>

<p>これに、以下のとおりクラスを追加してください。</p>

<pre>
<code>&lt;div<strong class="text-danger"> class=&quot;pl1&quot;</strong>&gt;
&lt;p&gt;字下げしたい&lt;/p&gt;
&lt;p&gt;字下げしたい&lt;/p&gt;
&lt;p&gt;字下げしたい&lt;/p&gt;
&lt;/div&gt;</code></pre>

<div class="alert alert-danger">divタグはCKEditorでは見ることができないので、慎重に編集してください。<br />
また、左右余白は、大きくしすぎるとスマートフォンで読みにくくなってしまいます。</div>