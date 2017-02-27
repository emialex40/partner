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
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'j3?zjr/zB#K|}%Vub6~x/(pWH_^M _W*R1JK*lj$?a$5F~;T#K}[_8`Ut-@]5:(_');
define('SECURE_AUTH_KEY',  'bxU#>Vp;< 4K~<-V)$@[RV?%N84GLo.*bfR+F-;-Ug^[!5UMW6_mo6D00?z>#ILu');
define('LOGGED_IN_KEY',    '/Ca<][:Ck5TN5L4Fu./RsElKcu~-b$Q)KS(LF$u60-U|rRy-m=*]|RD%ygO27oS?');
define('NONCE_KEY',        't7*gviDzGE[k5wL?n(;NaFWQqF3#K/8_#&sRnE@1[ebR)28amtbHW/JPpy4h}9K*');
define('AUTH_SALT',        '07v+W/I#xH^h$][RIwLO5$e:!U9dCA=Po/ &_uI]XC#XIL2Btnnom/omf*H#5(^p');
define('SECURE_AUTH_SALT', '6G!QNc`2=pH_] >Wd~$4x]Sm)DM8$y+jKwH#nr2D[2|d]Hvco?vo9#7(wF;YwX#N');
define('LOGGED_IN_SALT',   '35~MG(S<u}cAg)sZMF>:Fk+0OVpVV7Qy1TPwDv,H1B/+PzCh@QDB8r4AiyteFC;(');
define('NONCE_SALT',       'iOKPhS~yH8wcc$_V]aEj;:uM:Yy/Hfz82Z]26$icK*^+0Zj^*yz~]?>ly.L{?VpQ');

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
