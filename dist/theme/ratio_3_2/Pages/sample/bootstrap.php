<!-- BaserPageTagBegin -->
<?php $this->BcBaser->setTitle('bootstrapのサンプル') ?>
<?php $this->BcBaser->setDescription('') ?>
<?php $this->BcBaser->setPageEditLink(24) ?>
<!-- BaserPageTagEnd -->

<p>CSSフレームワーク「bootstrap3」の、このテーマのデザインに対応しているパーツのサンプルです。<br />
詳しい利用方法は下記を参照ください。</p>

<ul>
<li><a href="http://getbootstrap.com/css/" target="_blank">http://getbootstrap.com/css/</a></li>
<li><a href="http://getbootstrap.com/components/" target="_blank">http://getbootstrap.com/components/</a></li>
</ul>

<p class="text-danger">対応していないパーツのデザインを変更する場合は、テーマファイルの /css/style.css に追記してください。</p>


<h2 class="h3">.page-header</h2>

<p>コンテンツヘッダに利用されています。下のラインにテーマのメインカラーが反映されます。</p>

<div class="page-header">
<h1>ページの見出しです<small>添え字です</small></h1>
</div>

<textarea class="form-control" rows="5" cols="100" readonly="readonly"><div class="page-header">
<h1>ページの見出しです<small>添え字です</small></h1>
</div></textarea>



<h2 class="h3">.btn</h2>

<p>default・primary・info・linkが対応しています。</p>

<p><strong>default:</strong> ボーダーにテーマのリンクカラーが反映されます。<br>
<strong>primary:</strong> 背景にテーマのリンクカラーが反映されます。<br>
<strong>info:</strong> 背景にテーマのメインカラーが反映されます。<br>
<strong>link:</strong> フォームボタンなどに使用すると、通常のリンクと同じ見た目になります。
</p>

<p><button class="btn btn-lg btn-default" type="button">Default</button><button class="btn btn-lg btn-primary" type="button">Primary</button><button class="btn btn-lg btn-success" type="button">Success</button><button class="btn btn-lg btn-info" type="button">Info</button><button class="btn btn-lg btn-warning" type="button">Warning</button><button class="btn btn-lg btn-danger" type="button">Danger</button><button class="btn btn-lg btn-link" type="button">Link</button></p>

<p><button class="btn btn-default" type="button">Default</button><button class="btn btn-primary" type="button">Primary</button><button class="btn btn-success" type="button">Success</button><button class="btn btn-info" type="button">Info</button><button class="btn btn-warning" type="button">Warning</button><button class="btn btn-danger" type="button">Danger</button><button class="btn btn-link" type="button">Link</button></p>

<p><button class="btn btn-sm btn-default" type="button">Default</button><button class="btn btn-sm btn-primary" type="button">Primary</button><button class="btn btn-sm btn-success" type="button">Success</button><button class="btn btn-sm btn-info" type="button">Info</button><button class="btn btn-sm btn-warning" type="button">Warning</button><button class="btn btn-sm btn-danger" type="button">Danger</button><button class="btn btn-sm btn-link" type="button">Link</button></p>

<textarea class="form-control" rows="5" cols="100" readonly="readonly"><p><button class="btn btn-lg btn-default" type="button">Default</button><button class="btn btn-lg btn-primary" type="button">Primary</button><button class="btn btn-lg btn-success" type="button">Success</button><button class="btn btn-lg btn-info" type="button">Info</button><button class="btn btn-lg btn-warning" type="button">Warning</button><button class="btn btn-lg btn-danger" type="button">Danger</button><button class="btn btn-lg btn-link" type="button">Link</button></p>

<p><button class="btn btn-default" type="button">Default</button><button class="btn btn-primary" type="button">Primary</button><button class="btn btn-success" type="button">Success</button><button class="btn btn-info" type="button">Info</button><button class="btn btn-warning" type="button">Warning</button><button class="btn btn-danger" type="button">Danger</button><button class="btn btn-link" type="button">Link</button></p>

<p><button class="btn btn-sm btn-default" type="button">Default</button><button class="btn btn-sm btn-primary" type="button">Primary</button><button class="btn btn-sm btn-success" type="button">Success</button><button class="btn btn-sm btn-info" type="button">Info</button><button class="btn btn-sm btn-warning" type="button">Warning</button><button class="btn btn-sm btn-danger" type="button">Danger</button><button class="btn btn-sm btn-link" type="button">Link</button></p></textarea>



<h2 class="h3">.label</h2>

<p>default・primary・infoが対応しています。</p>

<p>
<strong>default:</strong> ボーダーにテーマのリンクカラーが反映されます。<br>
<strong>primary:</strong> 背景にテーマのリンクカラーが反映されます。<br>
<strong>info:</strong> 背景にテーマのメインカラーが反映されます。
</p>

<p>
<span class="label label-default">Default</span>
　<span class="label label-primary">Prmary</span>
　<span class="label label-success">Success</span>
　<span class="label label-info">Info</span>
　<span class="label label-warning">Warning</span>
　<span class="label label-danger">Danger</span>
</p>

<textarea class="form-control" rows="5" cols="100" readonly="readonly"><p>
<span class="label label-default">Default</span>
　<span class="label label-primary">Prmary</span>
　<span class="label label-success">Success</span>
　<span class="label label-info">Info</span>
　<span class="label label-warning">Warning</span>
　<span class="label label-danger">Danger</span>
</p></textarea>



<h2 class="h3">.thumbnail</h2>

<div class="row"><div class="col-sm-6 col-sm-push-3">
<img class="thumbnail img-responsive" src="../theme/ratio_3_2/img/main_image_3.jpg" />
</div></div>

<textarea class="form-control" rows="5" cols="100" readonly="readonly"><img class="thumbnail img-responsive" src="画像のURL" /></textarea>

<div class="row"><div class="col-sm-6 col-sm-push-3">
<div class="thumbnail">
<img class="img-responsive" src="../theme/ratio_3_2/img/main_image_3.jpg" />
<div class="caption">
<p class="mb0">説明文です説明文です説明文です説明文です説明文です説明文です</p>
</div>
</div>
</div></div>

<textarea class="form-control" rows="5" cols="100" readonly="readonly"><div class="thumbnail">
<img class="img-responsive" src="画像のURL" />
<div class="caption">
<p class="mb0">説明文です説明文です説明文です説明文です説明文です説明文です</p>
</div>
</div>
</textarea>


<h2 class="h3">.alert</h2>

<p>フォームに利用されています。テーマのカラー設定は反映されません。別途スタイルを追加してください。</p>

<div class="alert alert-success"><strong>Well done!</strong> You successfully read this important alert message.</div>

<div class="alert alert-info"><strong>Heads up!</strong> This alert needs your attention, but it&#39;s not super important.</div>

<div class="alert alert-warning"><strong>Warning!</strong> Best check yo self, you&#39;re not looking too good.</div>

<div class="alert alert-danger"><strong>Oh snap!</strong> Change a few things up and try submitting again.</div>

<textarea class="form-control" rows="5" cols="100" readonly="readonly"><div class="alert alert-success"><strong>Well done!</strong> You successfully read this important alert message.</div>

<div class="alert alert-info"><strong>Heads up!</strong> This alert needs your attention, but it&#39;s not super important.</div>

<div class="alert alert-warning"><strong>Warning!</strong> Best check yo self, you&#39;re not looking too good.</div>

<div class="alert alert-danger"><strong>Oh snap!</strong> Change a few things up and try submitting again.</div></textarea>



<h2 class="h3">.well</h2>

<p>背景色にテーマのサブカラーが反映されます。</p>

<div class="well">
<p>吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪な種族であったそうだ。</p>
</div>

<textarea class="form-control" rows="5" cols="100" readonly="readonly"><div class="well">
<p>吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪な種族であったそうだ。</p>
</div></textarea>


<h2 class="h3">.table</h2>

<p>利用できますが、テーマのカラー設定は反映されません。別途スタイルを追加してください。</p>

<table class="table">
<caption>下線のみの表</caption>
<thead>
<tr>
<th>thead/th</th>
<th>thead/th</th>
<th>thead/th</th>
</tr>
</thead>
<tbody>
<tr>
<th>tbody/th</th>
<td>tbody/td</td>
<td>tbody/td</td>
</tr>
<tr>
<th>tbody/th</th>
<td>tbody/td</td>
<td>tbody/td</td>
</tr>
<tr>
<th>tbody/th</th>
<td>tbody/td</td>
<td>tbody/td</td>
</tr>
</tbody>
</table>

<table class="table table-borderd">
<caption>全体に罫線がある表</caption>
<thead>
<tr>
<th>thead/th</th>
<th>thead/th</th>
<th>thead/th</th>
</tr>
</thead>
<tbody>
<tr>
<th>tbody/th</th>
<td>tbody/td</td>
<td>tbody/td</td>
</tr>
<tr>
<th>tbody/th</th>
<td>tbody/td</td>
<td>tbody/td</td>
</tr>
<tr>
<th>tbody/th</th>
<td>tbody/td</td>
<td>tbody/td</td>
</tr>
</tbody>
</table>

<table class="table table-condensed">
<caption>ちょっとスリムな表</caption>
<thead>
<tr>
<th>thead/th</th>
<th>thead/th</th>
<th>thead/th</th>
</tr>
</thead>
<tbody>
<tr>
<th>tbody/th</th>
<td>tbody/td</td>
<td>tbody/td</td>
</tr>
<tr>
<th>tbody/th</th>
<td>tbody/td</td>
<td>tbody/td</td>
</tr>
<tr>
<th>tbody/th</th>
<td>tbody/td</td>
<td>tbody/td</td>
</tr>
</tbody>
</table>

<table class="table table-responsive">
<caption>レスポンシブ対応の表</caption>
<thead>
<tr>
<th>thead/th</th>
<th>thead/th</th>
<th>thead/th</th>
</tr>
</thead>
<tbody>
<tr>
<th>tbody/th</th>
<td>tbody/td</td>
<td>tbody/td</td>
</tr>
<tr>
<th>tbody/th</th>
<td>tbody/td</td>
<td>tbody/td</td>
</tr>
<tr>
<th>tbody/th</th>
<td>tbody/td</td>
<td>tbody/td</td>
</tr>
</tbody>
</table>