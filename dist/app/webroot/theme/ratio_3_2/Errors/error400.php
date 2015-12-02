<?php
/**
 * レイアウト：404エラーページ
 * Errors/error400.php
 */
?>
<div class="message well">
	<div class="message-contents">

		<p>お探しのアドレスには、コンテンツがありません。<br>
		移動、もしくは削除された可能性があります。</p>
		<p>お手数ですが、トップページから目的のコンテンツをお探しください。</p>

	<!-- /.message-contents --></div>

	<div class="message-footer text-center">
		<p class="mt3 mb0"><a href="<?php $this->BcBaser->url('/'); ?>" class="btn btn-lg btn-info"><?php echo $this->BcBaser->siteConfig['name'] ?> トップページ</a></p>
	<!-- /.message-footer --></div>
<!-- /.message well --></div>


<?php if (Configure::read('debug') > 0): ?>

<div class="alert alert-danger">
	<strong class="size-lg">デバッグモード</strong><br>
	<strong><?php echo __d('cake', 'Error'); ?>: </strong>
	<?php printf(
		__d('cake', 'The request sent to the address %s was invalid.'),
		"<strong>'{$url}'</strong>"
	); ?>
<!-- /.alert alert-danger --></div>

<?php
	/* /lib/Cake/View/Elements/exception_stack_trace.ctp */
	echo $this->element('exception_stack_trace');
?>
<?php endif; ?>