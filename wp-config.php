<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'partner');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' {5 @zxo^gpUrKC9{jq<?^+L6O@rufb,O15MWaP;{}:(.!`#Rp8eD#}6%Nh.hupj');
define('SECURE_AUTH_KEY',  'xG8SIA3#?`<#9.]0be4/W7JUnj=WZV~[9S@oNyu,%>poNcIq9Ji|8Rovg}Dd<Q>*');
define('LOGGED_IN_KEY',    't!=0hk([b_({?2LR)a)fUF2J|yc8@:OLsO&xUiuSMTCp^C !;*vMlbx|p;$e%rL~');
define('NONCE_KEY',        '=T1?~RH8*GC3=k=TLag7F,@- ?!$y#C!7X:32>rK;O7y%qR-;f%ZfwhYm-mMjUX-');
define('AUTH_SALT',        'Iarl<fU<uZzTu]$n[?>=EX|][#76xTk4Ju*V5Q2f^(z0R6ux&ge{|rL9:|M$qH0[');
define('SECURE_AUTH_SALT', 'q-rNCWWE;J=R8q] >,`Si&54ID(;G6=xM$:JZf75/~2 oUVyLCu@9*eiAW<WML^v');
define('LOGGED_IN_SALT',   '5BfLs9XY]#aWaksr6S4f35Iq4=[KaU+^Xu[svW#[~.k{>xX#!~#SEmcts.PqJX-,');
define('NONCE_SALT',       '-f~e=%W2V`)6q%&oO1lwld7/l}Q0u:845?0A0tWv>S#Rc_l!*}d_6[,W5+4r+(gd');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
