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
define( 'DB_NAME', 'vapesession' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'vapesession' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'vapesession' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E^H,0S,<*S7t`!eu)n&(q<}Lf->HV;t6$(#EXL(deb^0j;GEE}qS_kOaO[Bo^576' );
define( 'SECURE_AUTH_KEY',  'XvX[X.AP_slpp&~M~+-R?DI~^Ta=/jLYkSx%u2B=,*>%xH!<I6Lu yt,.,?ejk9m' );
define( 'LOGGED_IN_KEY',    '^+l2yjd:Nk|rI8^=H-+,=osA]1pI@/sy$_g.gg6EBBD5w3OgX`L{.!/[XKozDL[e' );
define( 'NONCE_KEY',        ':XAy$;?ur&JUnC:,Y@&#}g6q1%0w`_)Rnu17yp#5+>O@bq8RJ!Q[4TXomzn8<Oy~' );
define( 'AUTH_SALT',        '#I6u!#m-$)OJ-rCO,t$O,K;)[P0>2hv5k>,iqqe{6b#@>#H^SYN&qw`[~P:3W+w.' );
define( 'SECURE_AUTH_SALT', 'jN%:-zWk IJv9;++3.4A??HJYFc7Q}xp|ylN!-qq5i2,;j2g+T-rpQ}_dC+D>jBA' );
define( 'LOGGED_IN_SALT',   'qio[f buYLp $c>jXb&K[r3[:Z_/RC?f?t>r<Z0kb/x<W+z@hbFCm#}cnsdsM=cL' );
define( 'NONCE_SALT',       'L(!}4 gt;aHnRis--Q-%-x7Y~>f1!]6nToC[0Z3owtnpn]tg*)?E{Y:S9?5=q8bF' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'mrlbr_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
