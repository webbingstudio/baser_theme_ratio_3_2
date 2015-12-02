<?php
/**
 * メールフォーム確認ページ
 * 呼出箇所：メールフォーム
 */
if ($freezed) {
	$this->Mailform->freeze();
}

if( $freezed ){
	$form_class = 'baser-form baser-form-confirm';
} else {
	$form_class = 'baser-form  baser-form-input';
}
?>
<div class="<?php echo $form_class; ?>">

	<?php if ($freezed): ?>
		<h2 class="baser-form-title">入力内容の確認</h2>

		<div class="baser-form-description">
			<p>入力内容をご確認のうえ「送信する」ボタンを押してください。</p>
		<!-- /.baser-form-description --></div>
		<?php else: ?>
		<h2 class="baser-form-title mt0">入力フォーム</h2>
	<?php endif ?>

	<?php $this->BcBaser->flash() ?>
	<?php $this->BcBaser->element('mail_form') ?>

<!-- /.baser-form --></div>
