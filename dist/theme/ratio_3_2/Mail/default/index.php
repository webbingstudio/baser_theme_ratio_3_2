<?php
/**
 * メールフォーム
 * 呼出箇所：メールフォーム
 */
?>
<div class="baser-form baser-form-input">

	<?php if ($this->Mail->descriptionExists()): ?>
	<div class="baser-form-description">
		<?php $this->Mail->description() ?>
	<!-- /.baser-form-description --></div>
	<?php endif ?>

	<h2 class="baser-form-title">入力フォーム</h2>

	<?php $this->BcBaser->flash() ?>
	<?php $this->BcBaser->element('mail_form') ?>

<!-- /.baser-form --></div>