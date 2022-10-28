<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'timber-wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rt~9%SggiPTwshx80V.LeKL|Jx5AbfX82Uy%AvzCk VL49[_-}?wcFgL@+KuYf(c' );
define( 'SECURE_AUTH_KEY',  'r/ 2&#sV)>x{F&w!~x:9>g.,SE(;Y>^;zYMM0TQXY*{qA+%Z`95!gOU@$?m dHjK' );
define( 'LOGGED_IN_KEY',    'C]CCbW+<zWWQv?I9W);=uWm,24@`6ihluI,F:zB|FlF/5NNaodmj1[}M)$%uCC*)' );
define( 'NONCE_KEY',        'i(C6JbCtcQi`#](j)708r+~4@*7OX~~Y4spE@Uk=X|c@DYm[`lxu5t@+gNvHYuIO' );
define( 'AUTH_SALT',        'h,dKnHO8vI]iFk-ea_fB6HZb?/#]iW f;lO2Y.{33znh-qA w7;bPejYD/V~mTR.' );
define( 'SECURE_AUTH_SALT', '6vQl}`X.L-9EVhV.`!`Uc.[e05G_..<B/<CYVR9]N&B(,/.!,,ovLgj |Wj5f|~p' );
define( 'LOGGED_IN_SALT',   '0ipub>ZdTQ(Sd8+*$lsD<CV6;tHQa(NSeROyL5/iUq)ir`0~:r3.:3`K=hF8x.^>' );
define( 'NONCE_SALT',       'o1.f(&2iRo<b[GIdg};0Z?eDrbI_fZ1NYJU>bJ:55WzXRa+`_rqDS~$]#5UzWU$Q' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
