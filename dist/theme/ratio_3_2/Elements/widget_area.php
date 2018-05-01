<?php
/**
 * 構成要素：ウィジェットエリア
 * Elements/widget_area.php
 * 
 * コアパッケージのキャッシュコントロール変更に伴う先行対応
 * 正式対応時点で当ファイルは不要となる
 * http://forum.basercms.net/modules/newbb/viewtopic.php?topic_id=3141&forum=6
 * 
 */
?>
<?php
/**
 * [PUBLISH] ウィジェットエリア
 *
 * $this->BcBaser->widgetArea('ウィジェットエリアNO') で呼び出す
 * 管理画面で設定されたウィジェットエリアNOは、 $widgetArea で参照できる
 */
if (Configure::read('BcRequest.isMaintenance') || empty($no)) {
	return;
}
if (!isset($subDir)) {
	$subDir = true;
}
?>


<div class="widget-area widget-area-<?php echo $no ?>">
	<?php $this->BcWidgetArea->show($no, ['subDir' => $subDir, 'cache' => false]) ?>
</div>
