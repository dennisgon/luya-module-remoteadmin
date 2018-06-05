<?php

return [

// 1.0.0

    'model_id' => 'ID',
    'model_site_token' => 'Remote-Token',
    'model_site_url' => 'Adresse',
    'model_site_auth_is_enabled' => 'Authentifizierung',
    'model_site_auth_user' => 'Auth Benutzer',
    'model_site_auth_pass' => 'Auth Passwort',
    'model_site_off' => 'Aus',
    'model_site_on' => 'An',
    'status_index_heading' => 'Remote-Websites Übersicht',
    'status_index_intro' => 'Aktuelle LUYA Version ist <a href="https://packagist.org/packages/luyadev/luya-core" target="_blank"><strong>{version}</strong></a>, veröffentlicht am {date}.',
    'status_index_caching_info' => 'Die Remote-Daten werden für 15 Minuten im Cache gespeichert. Mit dem Cache-Reload-Button kannst du die Daten leeren.',
    'status_index_time_info' => '* Zeit: Gibt die Gesamtzeit des Requests innerhalb des Systems zurück und nicht nur die Dauer, um den Request bis zum Remote-Server zu übermitteln.',
    'status_index_error_text' => 'Wenn die Abfrage fehlerhaft war, könnten folgende Ursachen das Problem ausgelöst haben:',
    'status_index_error_1' => 'Die Website ist über eine HTTP-Authentifizierung gesichert, bitte gib die entsprechenden Login-Daten an.',
    'status_index_error_2' => 'Die Website existiert nicht mehr unter dieser URL oder es wurde ein falsches Protokoll angegeben (http/https).',
    'status_index_error_3' => 'Der eingetragene Remote-Token ist nicht korrekt oder entspricht nicht jenem aus der Konfiguration der Remote-Website.',
    'status_index_table_error' => 'Fehler beim Empfangen der Seitendaten.',
    'status_index_column_time' => 'Zeit',
    'status_index_column_transferexception' => 'Fehler übertragen',
    'status_index_column_onlineadmin' => 'Admins Online',
    
// 1.1.0

    'message_defaulttext' => 'Gute Tag\n\nWir haben am {{timestamp}} eine technische Aktualisierung Ihrer Website {{domain}} durchgeführt. Sollten Sie trotz unserer Tests Probleme feststellen, bitten wir Sie, uns diese zu melden.\n\nBeste Grüsse',
    'message_defaulttext_title' => 'System-Vorlage',
    'message_text_label' => 'E-Mail-Text',
    'message_sent_success' => 'Die E-Mail wurde erfolgreich an alle Empfänger verschickt',
    'message_modal_title' => 'E-Mail verschicken an {{messageModalData.safeUrl}}',
    'message_modal_recipients' => 'Empfänger: {{ messageModalData.recipient }}',
    'message_modal_submit_label' => 'E-Mail verschicken',
    'message_modal_history_recipients' => 'An: {{log.recipients}}',
    'package_modal_title' => 'Package-Details: {{packageModalData.safeUrl}}',
    'package_modal_column_package' => 'Package',
    'package_modal_column_installed' => 'Installierte Version',
    'package_modal_column_latest' => 'Letzte Version',
    'package_modal_column_released_time' => 'Veröffentlicht am',
    'package_modal_column_packagist_button' => 'Packagist-Infos',
    'composer_vendor_timestamp' => 'Zeitstempel Composer Vendor',
    'model_billing_product_name' => 'Name',
    'model_billing_product_month_cycle' => 'Monatszyklus',
    'model_billing_product_price' => 'Preis',
    'model_message_log_site_id' => 'Website',
    'model_message_log_timestamp' => 'Zeitstempel',
    'model_message_log_recipients' => 'Empfänger',
    'model_message_log_text' => 'E-Mail-Text',
    'model_message_template_title' => 'Name',
    'model_message_template_text' => 'E-Mail-Text',
    'model_message_template_is_default' => 'Standard E-Mail-Vorlage',
    'model_message_template_text_hint' => 'Der E-Mail-Text, der an die Empfänger verschickt wird. Markdown ist standardmässig aktiv. Du kannst im Text die Platzhalter {{timestamp}} und {{domain}} verwenden.',
    'model_site_recipient' => 'E-Mail-Empfänger',
    'model_site_last_message_timestamp' => 'Zeitstempel letzte E-Mail',
    'model_site_is_deleted' => 'Ist gelöscht',
    'model_site_billing_start_timestamp' => 'Anfang der Verrechnungsperiode',
    'model_site_status' => 'Status',
    'model_site_adminBillingProducts' => 'Produkt-Abonnements',
    'model_site_auto_update_message' => 'Auto-Versand E-Mail',
    'model_site_recipient_hint' => 'Mehrere Empfänger können mittels Komma getrennt werden.',
    'model_site_billing_start_timestamp_hint' => 'Falls Du die Verrechnungs-Übersicht nutzen möchtest, solltest Du den Anfangszeitpunkt der Verrechnungsperiode konfigurieren',
    'model_site_auto_update_message_hint' => 'Falls der Auto-Versand der E-Mail aktiviert und der Cronjob dafür eingerichtet wurde, wird die Remote-Administration die vorgegebene oder angepasste E-Mail an die konfigurierte Empfängerliste verschicken, sobald sich der Composer-Zeitstempel der Website verändert hat.',
    'model_site_status_1' => 'Produktion',
    'model_site_status_2' => 'Entwicklung',
    'model_site_status_3' => 'Pre-Produktion',
    'model_site_status_4' => 'Abgelaufen',
    'model_site_billing_product_billing_product_id' => 'Produkt',
    'model_site_billing_product_site_id' => 'Website',   
];
