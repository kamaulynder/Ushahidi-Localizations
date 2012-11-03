<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2012-11-03 00:10+0000
// PO revision date:  2012-09-09 11:53+0000
$lang = array(
	'upgrade' => array(
		'between' => 'Datele introduse sunt invalide. Poate fi fie 0 pentru Nu, fie 1 pentru Da.',
	) ,
	'upgrade_automatic' => 'Upgrade automat',
	'upgrade_available' => 'Actualizări disponibile',
	'upgrade_continue_btn_text' => 'Continuă',
	'upgrade_db_btn_text' => 'Upgrade',
	'upgrade_db_text_1' => 'Deci, voi face upgrade la baza de date de la versiunea',
	'upgrade_db_text_2' => 'la ultima versiune a bazei de date',
	'upgrade_db_text_3' => 'Faceți click pe butonul "Upgrade" și relaxațivă cât timp se efectuează magia.',
	'upgrade_db_text_4' => 'Ohh, de asemenea, dacă vrei să faci backup la baza de date, bifează căsuța de mai jos și voi face asta pentru tine într-o secundă.',
	'upgrade_db_text_5' => 'Faceți un Backup la baza de date înainte de upgrade? (<strong style="color:#FF0000;">Foarte recomandat</strong>)',
	'upgrade_db_title' => 'Upgrade la baza de date Ushahidi',
	'upgrade_db_info' => 'Ushahidi a fost actualizat! Înainte să continui, trebuie să actualizezi baza de date cu cea mai nouă versiune (%s).',
	'upgrade_db_up_to_date' => 'Versiunea bazei de date este cea mai recentă.',
	'upgrade_failed' => 'Upgrade esuat la un anumit moment.',
	'upgrade_manual' => 'Upgrade manual',
	'upgrade_status' => 'Statul Ushahidi upgrade',
	'upgrade_text_1' => 'Instrucțiunile de mai jos detaliază cum se upgradează manual implementarea ta Usahahidi.',
	'upgrade_text_2' => '<dl><dt><strong>Descarcă</strong></dt>',
	'upgrade_text_3' => '<dd>- Descarcă cel mai recent build Ushahidi de la',
	'upgrade_text_4' => '<dt><strong>Backup</strong></dt><dd>- .htaccess, ./applications/config/config.php, ./applications/config/database.php and ./applications/config/auth.php files. </dd><dd>- În cazul în care ceva este greșit, se recomandă un backup total al implementării Ushahidi.</dd><dt><strong>Copiază fișierele</strong></dt><dd>- Extrage fișierele zip descărcate</dd><dd>- În funcție de sistemul de operare al serverului de web, utilizați tool-urile/mod-ul preferat (e.g. Telnet, FTP, SSH) de login la webserver și înlocuiți conținutul tuturor directoarelor cu cele mai noi din build-ul recent.</dd><dt><strong>Upgrade baza de date</strong></dt><dd>- Determină în primul rând versiunea schemei bazei de date prin aflarea valorii  <strong>db_version</strong> din tabelul de setări sau uită-te la informațiile de upgrade Ushahidi din partea de sus a acestei pagini. </dd><dd>- Dacă ești la versiunea 25, trebuie să upgradezi de la 25-26, 26-27, 27-28 și așa mai departe până la ultimul fișier SQL din directorul <strong>/sql</strong> .</dd><dd>- Folosind clientul bazei de date, upgradeaza baza de date prin executarea fișierului de upgrade x.sql adecvat.</dd></dl>',
	'upgrade_tables' => '<strong>Pasul 3:</strong> Uită-te în directorul <strong>sql</strong>. Execută manual fișierul upgrade<xx>-<xx>.sql pornind de la versiunea curentă a bazei de date instalate până la utimul fișer sql de upgrade.',
	'upgrade_text_5' => '<strong>Pasul 4:</strong> Click pe butonul <strong>"Continuă"</strong> pentru a upgrada tabelele necesare.',
	'upgrade_text_6' => 'Pentru upgrade automat, apasă pe butonul de mai jos.',
	'upgrade_title_text' => 'Folosiți Ushahidi v%s cu baza de date versiunea %d ce rulează pe %s',
	'upgrading' => 'Upgradaing',
	'upgrade_ftp_text' => 'Pentru a continua cu un upgrade simplu, următoarele informații sunt necesare serverului FTP pe care website-ul tău este găzduit.',
	'upgrade_ftp_hostname' => 'FTP Hostname: <span>Exemplu: "localhost"</span>',
	'upgrade_ftp_password' => 'Parola FTP:',
	'upgrade_ftp_username' => 'Nume utilizator FTP:',
	'upgrade_status_info' => 'Aveți ultima versiune de Ushahidi',
	'upgrade_status_info_2' => 'Nu este necesar să faci upgrade',
	'upgrade_db_version' => 'Versiunea bazei de date: %d',
	'upgrade_warning_software_version' => 'Atenție: Versiunea software din version.php și din baza de date nu corespund.',
	'upgrade_warning_db_version' => 'Atenție: Versiunea bazei de date din version.php și din baza de date nu corespund.',
	'upgrade_database' => 'Baza de date:',
	'ushahidi_release_version' => 'Ushahidi %s',
	'beta' => 'BETA!',
	'download' => 'Descarcă ultima versiune de ushahidi...',
	'log_file' => 'Fișierul jurnal',
	'successfully_downloaded' => 'Descărcat cu succes. Dezarhivează...',
	'failed_downloading' => 'Descărcarea a eșuat.',
	'successfully_unpacked' => 'Dezarhivat cu succez. Copiază fișierele...',
	'failed_unpacking' => 'Dezarhivarea a eșuat.',
	'successfully_copied' => 'Copiat cu succes. Upgradeaza baza de date...',
	'failed_copying' => 'Copierea fișierelor a eșuat.',
	'backup_success' => 'Backup bază de date și upgrade efectuat cu succes.',
	'backup_failed' => 'Realizarea unui back-up al bazei de date a eșuat.',
	'dbupgrade_success' => 'Upgrade bază de date efectuat cu succes.',
	'deleting_files' => 'Fișierele descărcate se șterg...',
	'upgrade_success' => 'UPGRADE EFECTUAT CU SUCCES. Vizualizează <a href="%s" target="_blank">Fișerul Jurnal</a>',
);
