<?php
/**
 * bootstrap
 *
 * Webページの呼出時、テーマを読み込む前に実行したいプログラムを書きたい場合には、ここに記述します。
 */

// カラー（白系:white 黒系:black）
define('RATIO32_HEAD_COLOR', 'white');
define('RATIO32_FOOT_COLOR', 'white');

// 日付フォーマット
define('RATIO32_DATE_FORMAT', 'Y-m-d');
define('RATIO32_TIME_FORMAT', 'H:i:s');
define('RATIO32_YEAR_ARCHIVE_FORMAT', 'Y年');
define('RATIO32_MONTH_ARCHIVE_FORMAT', 'Y年n月');


/**
 * baserCMS v3.0.7 では、ユーザーエージェント判定による、スマートフォンのオートリダイレクト機能が有効になっている場合
 * スマートフォンでウィジェットが表示できない不具合がある為、トップページ以外へのリクエストの場合、オートリダイレクト機能をオフに設定
 */
if(Configure::read('BcRequest.pureUrl') != '') {
	Configure::write('BcAgent.smartphone.autoRedirect', false);
}
