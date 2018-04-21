<?php
/**
 * 構成要素：ページネーション
 * Elements/pagination/default.php
 * 
 * userge: $this->BcBaser->pagination()
 */

if( empty( $this->Paginator ) ) {
	return;
}
if( !isset( $modules ) ) {
	$modules = 8;
}
?>
<?php if( (int) $this->Paginator->counter( array( 'format' => '%pages%' ) ) > 1 ) : ?>
<nav class="serial-nav serial-nav-index">
	<p class="result"><?php echo $this->Paginator->counter( array( 'format' => '<strong>%page%</strong>ページ目 / %pages%ページ' ) ) ?></p>
	<?php
		$previous = $this->Paginator->prev('前のページ', null, null, array( 'class' => array( 'prev', 'prev disabled' ) ) );
		$previous = preg_replace( '/<span/', '<li', $previous );
		$previous = preg_replace( '/prev/', 'previous', $previous );

		$next = $this->Paginator->next('次のページ', null, null, array( 'class' => array( 'next', 'next disabled' ) ) );
		$next = preg_replace( '/<span/', '<li', $next );

		echo '<ul class="pager">' . $previous . $next . '</ul>';
	?>
</nav>
<?php endif; ?>
