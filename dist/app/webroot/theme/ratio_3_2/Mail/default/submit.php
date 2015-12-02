<?php
/**
 * メールフォーム送信完了ページ
 * 呼出箇所：メールフォーム
 */
if (Configure::read('debug') == 0 && $mailContent['MailContent']['redirect_url']) {
	$this->Html->meta(array('http-equiv' => 'Refresh'), null, array('content' => '5;url=' . $mailContent['MailContent']['redirect_url'], 'inline' => false));
}
?>
<div class="baser-form baser-form-input">

	<h2 class="baser-form-title">送信完了</h2>

	<div class="baser-form-description">
		<p>お問い合わせいただき、ありがとうございました。<br>
		確認次第、ご連絡をいたします。今しばらくお待ちください。</p>
	<!-- /.baser-form-description --></div>

	<?php if (Configure::read('debug') == 0 && $mailContent['MailContent']['redirect_url']): ?>
	<div class="well">
		５秒後にトップページへ自動的に移動します。<br>
		<a href="<?php echo $mailContent['MailContent']['redirect_url']; ?>">しばらく待っても移動しない場合はこちら</a>
	</div>
	<?php endif; ?>

<!-- /.baser-form --></div>

