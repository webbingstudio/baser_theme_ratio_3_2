<?php
/**
 * 構成要素：メールフォーム全体
 * Elements/mail_form.php
 * 
 */

// ブラウザのヒストリーバック（戻るボタン）対応
$this->Mail->token();
?>

<script type="text/javascript">
	$(function(){
		$(".form-submit").click(function(){
			var mode = $(this).attr('id').replace('BtnMessage', '');
			$("#MailMessageMode").val(mode);
			return true;
		});
	});
</script>

<?php if (!$freezed): ?>
	<?php echo $this->Mailform->create('MailMessage', array('class' => 'form-horizontal', 'url' => $this->BcBaser->getContentsUrl(null, false, null, false) . 'confirm', 'type' => 'file')) ?>
<?php else: ?>
	<?php echo $this->Mailform->create('MailMessage', array('class' => 'form-horizontal', 'url' => $this->BcBaser->getContentsUrl(null, false, null, false)  . 'submit')) ?>
<?php endif; ?>

<?php $this->Mailform->unlockField('MailMessage.mode') ?>
<?php echo $this->Mailform->hidden('MailMessage.mode') ?>

<?php $this->BcBaser->element('mail_input', array('blockStart' => 1)) ?>

<?php if ($mailContent['MailContent']['auth_captcha']): ?>
	<?php if (!$freezed): ?>
		<div class="auth-captcha clearfix">
			<?php echo $this->Mailform->authCaptcha('MailMessage.auth_captcha') ?>
			<br />
			&nbsp;<?php echo __('画像の文字を入力してください') ?><br clear="all" />
			<?php echo $this->Mailform->error('MailMessage.auth_captcha', __('入力された文字が間違っています。入力をやり直してください。'), array( 'class' => 'alert alert-danger')); ?>
		</div>
	<?php else: ?>
		<?php echo $this->Mailform->hidden('MailMessage.auth_captcha') ?>
		<?php echo $this->Mailform->hidden('MailMessage.captcha_id') ?>
	<?php endif ?> 
<?php endif ?>

<div class="submit">

	<?php if ($freezed): ?>
		<?php echo $this->Mailform->submit(__('書き直す'), array('div' => false, 'class' => 'btn btn-default form-submit', 'id' => 'BtnMessageBack')) ?>
		<?php echo $this->Mailform->submit(__('送信する'), array('div' => false, 'class' => 'btn btn-lg btn-primary form-submit', 'id' => 'BtnMessageSubmit')) ?> 
	<?php else: ?>
		<?php echo $this->Mailform->submit(__('入力内容を確認'), array('div' => false, 'class' => 'btn btn-lg btn-primary form-submit', 'id' => 'BtnMessageConfirm')) ?>
	<?php endif; ?>

	<?php
		// リセットボタンは誤操作の原因となるため表示していません
		$WS_form_void = false;
		if ($WS_form_void === true):
	?>

	<?php if ($this->action == 'index'): ?>
		<input name="resetdata" value="取り消す" type="reset" class="btn btn-default">
	<?php endif; ?>

	<?php
		// リセットボタンは誤操作の原因となるため表示していません
		endif;
	?>
<!-- /.submit --></div>

<?php echo $this->Mailform->end() ?>
