<?php
/**
 * form.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

return [

    // new user:
    'bank_name'                      => 'Name der Bank',
    'bank_balance'                   => 'Kontostand',
    'savings_balance'                => 'Savings balance',
    'credit_card_limit'              => 'Kreditkartenlimit',
    'automatch'                      => 'Match automatically',
    'skip'                           => 'Überspringen',
    'name'                           => 'Name',
    'active'                         => 'Aktiv',
    'amount_min'                     => 'Mindestbetrag',
    'amount_max'                     => 'Höchstbetrag',
    'match'                          => 'Matches on',
    'repeat_freq'                    => 'Repeats',
    'journal_currency_id'            => 'Währung',
    'journal_amount'                 => 'Amount',
    'journal_asset_source_account'   => 'Asset account (source)',
    'journal_source_account_name'    => 'Revenue account (source)',
    'journal_source_account_id'      => 'Asset account (source)',
    'account_from_id'                => 'From account',
    'account_to_id'                  => 'To account',
    'journal_destination_account_id' => 'Asset account (destination)',
    'asset_destination_account'      => 'Asset account (destination)',
    'asset_source_account'           => 'Asset account (source)',
    'journal_description'            => 'Description',
    'split_journal'                  => 'Split this transaction',
    'split_journal_explanation'      => 'Split this transaction in multiple parts',
    'currency'                       => 'Währung',
    'account_id'                     => 'Asset account',
    'budget_id'                      => 'Budget',
    'openingBalance'                 => 'Opening balance',
    'tagMode'                        => 'Tag mode',
    'tagPosition'                    => 'Tag location',
    'virtualBalance'                 => 'Virtual balance',
    'longitude_latitude'             => 'Location',
    'targetamount'                   => 'Target amount',
    'accountRole'                    => 'Account role',
    'openingBalanceDate'             => 'Opening balance date',
    'ccType'                         => 'Credit card payment plan',
    'ccMonthlyPaymentDate'           => 'Credit card monthly payment date',
    'piggy_bank_id'                  => 'Sparschwein',
    'returnHere'                     => 'Return here',
    'returnHereExplanation'          => 'After storing, return here to create another one.',
    'returnHereUpdateExplanation'    => 'After updating, return here.',
    'description'                    => 'Beschreibung',
    'expense_account'                => 'Expense account',
    'revenue_account'                => 'Revenue account',
    'amount'                         => 'Amount',
    'date'                           => 'Date',
    'interest_date'                  => 'Interest date',
    'book_date'                      => 'Buchungsdatum',
    'process_date'                   => 'Processing date',
    'category'                       => 'Kategorie',
    'tags'                           => 'Tags',
    'deletePermanently'              => 'Dauerhaft löschen',
    'cancel'                         => 'Abbrechen',
    'targetdate'                     => 'Target date',
    'tag'                            => 'Tag',
    'under'                          => 'Under',
    'symbol'                         => 'Zeichen',
    'code'                           => 'Code',
    'iban'                           => 'IBAN',
    'accountNumber'                  => 'Account number',
    'has_headers'                    => 'Headers',
    'date_format'                    => 'Date format',
    'specifix'                       => 'Bank- or file specific fixes',
    'attachments[]'                  => 'Anhänge',
    'store_new_withdrawal'           => 'Store new withdrawal',
    'store_new_deposit'              => 'Store new deposit',
    'store_new_transfer'             => 'Store new transfer',
    'add_new_withdrawal'             => 'Add a new withdrawal',
    'add_new_deposit'                => 'Add a new deposit',
    'add_new_transfer'               => 'Add a new transfer',
    'noPiggybank'                    => '(kein Sparschwein)',
    'title'                          => 'Titel',
    'notes'                          => 'Notizen',
    'filename'                       => 'Dateiname',
    'mime'                           => 'MIME-Typ',
    'size'                           => 'Größe',
    'trigger'                        => 'Trigger',
    'stop_processing'                => 'Stop processing',
    'start_date'                     => 'Start of range',
    'end_date'                       => 'End of range',
    'export_start_range'             => 'Start of export range',
    'export_end_range'               => 'End of export range',
    'export_format'                  => 'Dateiformat',
    'include_attachments'            => 'Include uploaded attachments',
    'include_config'                 => 'Include configuration file',
    'include_old_uploads'            => 'Include imported data',
    'accounts'                       => 'Export transactions from these accounts',
    'delete_account'                 => 'Delete account ":name"',
    'delete_bill'                    => 'Lösche Rechnung ":name"',
    'delete_budget'                  => 'Lösche Budget ":name"',
    'delete_category'                => 'Lösche Kategorie ":name"',
    'delete_currency'                => 'Lösche Währung ":name"',
    'delete_journal'                 => 'Delete transaction with description ":description"',
    'delete_attachment'              => 'Lösche Anhang ":name"',
    'delete_rule'                    => 'Delete rule ":title"',
    'delete_rule_group'              => 'Delete rule group ":title"',
    'attachment_areYouSure'          => 'Sind Sie sicher, dass Sie den Anhang ":name" löschen möchten?',
    'account_areYouSure'             => 'Sind Sie sicher, dass Sie das Konto ":name" löschen möchten?',
    'bill_areYouSure'                => 'Sind Sie sicher, dass Sie die Rechnung ":name" löschen möchten?',
    'rule_areYouSure'                => 'Are you sure you want to delete the rule titled ":title"?',
    'ruleGroup_areYouSure'           => 'Are you sure you want to delete the rule group titled ":title"?',
    'budget_areYouSure'              => 'Sind Sie sicher, dass Sie das Budget ":name" löschen möchten?',
    'category_areYouSure'            => 'Sind Sie sicher, dass Sie die Kategorie ":name" löschen möchten?',
    'currency_areYouSure'            => 'Sind Sie sicher, dass Sie die Währung ":name" löschen möchten?',
    'piggyBank_areYouSure'           => 'Sind Sie sicher, dass Sie das Sparschwein ":name" löschen möchten?',
    'journal_areYouSure'             => 'Are you sure you want to delete the transaction described ":description"?',
    'mass_journal_are_you_sure'      => 'Are you sure you want to delete these transactions?',
    'tag_areYouSure'                 => 'Sind Sie sicher, dass Sie den Tag ":name" löschen möchten?',
    'permDeleteWarning'              => 'Das Löschen von Dingen in Firefly ist dauerhaft und kann nicht rückgängig gemacht werden.',
    'mass_make_selection'            => 'Sie können das Löschen von Elementen verhinden, indem Sie die Checkbox entfernen.',
    'delete_all_permanently'         => 'Ausgewähltes dauerhaft löschen',
    'update_all_journals'            => 'Diese Transaktionen aktualisieren',
    'also_delete_transactions'       => 'The only transaction connected to this account will be deleted as well.|All :count transactions connected to this account will be deleted as well.',
    'also_delete_rules'              => 'The only rule connected to this rule group will be deleted as well.|All :count rules connected to this rule group will be deleted as well.',
    'also_delete_piggyBanks'         => 'The only piggy bank connected to this account will be deleted as well.|All :count piggy bank connected to this account will be deleted as well.',
    'bill_keep_transactions'         => 'The only transaction connected to this bill will not be deleted.|All :count transactions connected to this bill will spared deletion.',
    'budget_keep_transactions'       => 'The only transaction connected to this budget will not be deleted.|All :count transactions connected to this budget will spared deletion.',
    'category_keep_transactions'     => 'The only transaction connected to this category will not be deleted.|All :count transactions connected to this category will spared deletion.',
    'tag_keep_transactions'          => 'The only transaction connected to this tag will not be deleted.|All :count transactions connected to this tag will spared deletion.',

    // admin
    'domain'                         => 'Domain',
    'single_user_mode'               => 'Single user mode',

    // import
    'import_file'                    => 'Datei importieren',
    'configuration_file'             => 'Konfigurationsdatei',
    'import_file_type'               => 'Import file type',
    'csv_comma'                      => 'Ein Komma (,)',
    'csv_semicolon'                  => 'Ein Semikolon (;)',
    'csv_tab'                        => 'Ein Tab (unsichtbar)',
    'csv_delimiter'                  => 'CSV field delimiter',
    'csv_import_account'             => 'Default import account',
    'csv_config'                     => 'CSV import configuration',


    'due_date'           => 'Due date',
    'payment_date'       => 'Payment date',
    'internal_reference' => 'Internal reference',
];