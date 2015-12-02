<?php
/**
 * メールフォーム：送信メール全体
 * Emails/mail_default.php
 */

?>
========================================
お問い合わせを受け付けました
========================================

<?php if ($other['mode'] === 'user'): ?>
この度は、お問い合わせをいただき、ありがとうございます。 
下記の内容で受付をいたしました。
<?php elseif ($other['mode'] === 'admin'): ?>
<?php echo $mailConfig['site_name'] ?> へのお問い合わせを、下記の内容で受け付けました。
<?php endif; ?>
<?php if ($other['mode'] === 'admin'): ?>

【！】
当メールは、自動転送システムです。 
お問い合わせ先にも、確認メールが送信されています。できるだけ早くご対応ください。
<?php endif; ?>

----------------------------------------
お問い合わせ内容 
----------------------------------------

■ 受付日時

<?php echo $other['date'] ?> 
<?php echo $this->element('../Emails/text/mail_data') ?>



========================================

<?php if ($other['mode'] === 'user'): ?>
当メールは、自動返信となっております。
メールを確認次第、ご連絡をいたします。今しばらくお待ちください。

----------------------------------------
<?php endif; ?>

<?php echo $mailConfig['site_name']; ?>
 
<?php echo $mailConfig['site_url'] ?>
<?php echo $mailConfig['site_email']; ?>

<?php if ($mailConfig['site_tel']): ?>
Tel: <?php echo $mailConfig['site_tel']; ?><?php endif; ?>
<?php if ($mailConfig['site_fax']): ?>
FAX: <?php echo $mailConfig['site_fax']; ?>

<?php endif; ?>