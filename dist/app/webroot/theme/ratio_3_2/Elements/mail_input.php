<?php
/**
 * 構成要素：メールフォーム入力欄
 * Elements/mail_form.php
 * 
 */

$group_field = null;
$iteration = 0;

if (!isset($blockEnd)) {
	$blockEnd = 0;
}

if (!empty($mailFields)) {

	foreach ($mailFields as $key => $record) {

		$field = $record['MailField'];
		$iteration++;
		if ($field['use_field'] && ($blockStart && $iteration >= $blockStart) && (!$blockEnd || $iteration <= $blockEnd)) {

			$next_key = $key + 1;
			$description = $field['description'];

			/* 項目名 */
			if ($group_field != $field['group_field'] || (!$group_field && !$field['group_field'])) {
				echo '<div class="form-group" id="RowMessage' . Inflector::camelize($record['MailField']['field_name']) . '"';
				if ($field['type'] == 'hidden') {
					echo ' style="display:none"';
				}
				echo '>' . "\n";
				echo '<div class="col-sm-3 control-label">';
				echo $this->Mailform->label("Message." . $field['field_name'] . "", $field['head']);
				if ($field['not_empty']) {
					echo '<span class="label label-danger size-xsm ml05">必須</span>';
				}
				echo '<!-- /.col-sm-3 control-label --></div>' . "\n";
				echo '<div class="col-sm-9">';
			}

			echo '<div class="control-body" id="FieldMessage' . Inflector::camelize($record['MailField']['field_name']) . '">';

			/* 入力欄 */
			if (!$freezed || $this->Mailform->value("Message." . $field['field_name']) !== '') {
				if( !empty( $field['before_attachment'] ) ) {
					echo '<span class="mail-before-attachment form-control-static mr05">' . $field['before_attachment'] . '</span>';
				}
			}
			
			if ($field['no_send'] && $freezed) {
				echo $this->Mailform->control('hidden', "Message." . $field['field_name'] . "", $this->Mailfield->getOptions($record), $this->Mailfield->getAttributes($record));
			} else {
				echo $this->Mailform->control($field['type'], "Message." . $field['field_name'] . "", $this->Mailfield->getOptions($record), $this->Mailfield->getAttributes($record));
			}
		
			if (!$freezed || $this->Mailform->value("Message." . $field['field_name']) !== '') {
				if( !empty( $field['after_attachment'] ) ) {
					echo '<span class="mail-after-attachment form-control-static ml05">' . $field['after_attachment'] . '</span>';
				}
			}

			if (!$freezed && $description) {
				echo '<span class="mail-description help-block">' . $description . '</span>';
			}

			if (!$freezed) {
				if( !empty( $field['attention'] ) ) {
					echo '<div class="mail-attention text-success">' . $field['attention'] . '</div>';
				}
			}
			if (!$field['group_valid']) {
				echo $this->Mailform->error( "Message." . $field['field_name'], null, array( 'class' => 'alert alert-danger' ) );
			}

			/* 説明欄 */
			if (($this->BcArray->last($mailFields, $key)) ||
				($field['group_field'] != $mailFields[$next_key]['MailField']['group_field']) ||
				(!$field['group_field'] && !$mailFields[$next_key]['MailField']['group_field']) ||
				($field['group_field'] != $mailFields[$next_key]['MailField']['group_field'] && $this->BcArray->first($mailFields, $key))) {

				if ($field['group_valid']) {
					if ($field['valid']) {
						echo $this->Mailform->error( "Message." . $field['group_field'], "この項目は必ずご入力ください。", array( 'class' => 'alert alert-danger' ) );
					}
					echo $this->Mailform->error( "Message." . $field['group_field'] . "_not_same", "入力内容が一致していません。", array( 'class' => 'alert alert-danger' ) );
					echo $this->Mailform->error( "Message." . $field['group_field'] . "_not_complate", "入力内容に不明な点があります。", array( 'class' => 'alert alert-danger' ) );
				}

				echo '<!-- /.control-body --></div>';
				echo '<!-- /.col-sm-9 --></div>' . "\n";
				echo '<!-- /.form-group --></div>' . "\n";
			} else {
				echo '<!-- /.form-group --></div>';
			}
			$group_field = $field['group_field'];
		}
	}
}