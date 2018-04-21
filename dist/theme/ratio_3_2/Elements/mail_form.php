<?php
/**
 * 構成要素：メールフォーム全体
 * Elements/mail_form.php
 * 
 */

$prefix = '';
if (Configure::read('BcRequest.agent')) {
	$prefix = '/' . Configure::read('BcRequest.agentAlias');
}
?>

<script type="text/javascript">
$(function(){
  $(".form-submit").click(function(){
    var mode = $(this).attr('id').replace('BtnMessage', '');
    $("#MessageMode").val(mode);
    return true;
  });
});
</script>

<?php if (!$freezed): ?>
	<?php echo $this->Mailform->create('Message', array('class' => 'form-horizontal', 'url' => $prefix . '/' . $mailContent['MailContent']['name'] . '/confirm', 'type' => 'file')) ?>
<?php else: ?>
	<?php echo $this->Mailform->create('Message', array('class' => 'form-horizontal', 'url' => $prefix . '/' . $mailContent['MailContent']['name'] . '/submit')) ?>
<?php endif; ?>

<?php echo $this->Mailform->hidden('Message.mode') ?>

<?php $this->BcBaser->element('mail_input', array('blockStart' => 1)) ?>

<?php if ($mailContent['MailContent']['auth_captcha']): ?>
	<?php if (!$freezed): ?>
		<div class="auth-captcha clearfix">
			<?php $this->BcBaser->img($prefix . '/' . $mailContent['MailContent']['name'] . '/captcha', array('alt' => '認証画像', 'class' => 'auth-captcha-image') ); ?>
			<?php echo $this->Mailform->text('Message.auth_captcha', array( 'class' => 'form-control form-control-sm' ) ) ?><br>
			&nbsp;画像の文字を入力してください<br clear="all">
			<?php echo $this->Mailform->error( 'Message.auth_captcha', '画像と入力された文字が一致しません。もう一度入力してください。', array( 'class' => 'alert alert-danger') ); ?>
		</div>
	<?php else: ?>
		<?php echo $this->Mailform->hidden('Message.auth_captcha') ?>
	<?php endif ?> 
<?php endif ?>

<div class="submit">

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


	<?php if ($freezed): ?>
		<?php echo $this->Mailform->submit('書き直す', array('div' => false, 'class' => 'btn btn-default form-submit', 'id' => 'BtnMessageBack')) ?>
		<?php echo $this->Mailform->submit('送信する', array('div' => false, 'class' => 'btn btn-lg btn-primary form-submit', 'id' => 'BtnMessageSubmit')) ?> 
	<?php elseif ($this->action != 'submit'): ?>
		<?php echo $this->Mailform->submit('入力内容を確認', array('div' => false, 'class' => 'btn btn-lg btn-primary form-submit', 'id' => 'BtnMessageConfirm')) ?>
	<?php endif; ?>
<!-- /.submit --></div>

<?php echo $this->Mailform->end() ?>
