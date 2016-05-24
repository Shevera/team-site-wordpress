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
define('DB_NAME', 'team-site-wordpress');

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
define('AUTH_KEY',         'Y&jyB7i*@+)^Q/y[Z/J_(4o]7ruh8,]8Do%$#hA@B>|CE4}DQdI<1}~|Bxu^mxk}');
define('SECURE_AUTH_KEY',  '[pEtJ^#^z%#=%{8jO=^d4P=42~$R$%L#A&YjRa5kZ95`/S1BDb@?>gM<BF@m|x]$');
define('LOGGED_IN_KEY',    'fBYv]41rMfaSLy8c)#U2FrQlu`>)2Vyx7<o=le9|hN#YeG#]kQalIR`J[hnPkLQ.');
define('NONCE_KEY',        '2[_X^SSK$ox%Q!+B~@/;l$$cQ$&84_?$`Vv8a]6yy@w2Ym%/xX]&TJ#>2LF:yn4i');
define('AUTH_SALT',        '!~UnSyib$iCc@sYS+RvkDF#)W.a*x*|[_nzL_Z*/CE5_/}#@;8F7[nad*D-.6 *8');
define('SECURE_AUTH_SALT', 'mSn){ G1q(<nF<3qwanEOMoWl|~mZQ W)S|3yy3:9>Jf2%;p>FvRP^(n@XiTG#^m');
define('LOGGED_IN_SALT',   'BoI.l9)Si:Tyo+mfttHP^Kg0K~[k/s4KR.![3ds9gN$*6MoK^S]VX%%Z(8{94EJQ');
define('NONCE_SALT',       'QO__rvr4JcScA.n_$4&Pe_c_,L(#5D9!;U+*$yzHwv,_Yt{O{uuH{ Z;rG^rwvI;');

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
