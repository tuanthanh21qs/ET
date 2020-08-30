<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'ET' );

/** Username của database */
define( 'DB_USER', 'ET' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'ET' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/]]lOIHs=!&=Dpk6IEaxmp$aCzzqfvY[noS=n=XK$grZ]6~sAFl[.lZVJ8pRVG<!' );
define( 'SECURE_AUTH_KEY',  '?}2Bab@T?Tnn-j`)~6`nx*b`u{}rNo@I=/x+*c~dVr,W Dq!l(B]_#zRrjIv [tz' );
define( 'LOGGED_IN_KEY',    'VWpCCQGk,hj1lD^FQXQk3rXY<plUnn6mr~Y`>kcM8WDMhQU#}uwtwIImJM?x^~n)' );
define( 'NONCE_KEY',        'Q=M:ype NBM55TA  gQI%/_27{!N6KNJVwc_J#}u=1~~$8EU#B0m:G6(EQ[km%`I' );
define( 'AUTH_SALT',        'JppUzg:i~Lk~Y0hf:[bnTK=nF76_E0w^A**I]].<]SoXt+1<Fc)X`k QR+[EdTu8' );
define( 'SECURE_AUTH_SALT', '))erSmC-icI3QFOALlU]b/HI<1|fi18pA3@z.(k</rPRC?KWQ8j-6#%R!^c!~eP2' );
define( 'LOGGED_IN_SALT',   ')EVnk)<9~wf7&zs(%PrUCzcXw2?6-VY8H)d|dL]-$@K`+P;qe >vu-rSg@Y-@Ndc' );
define( 'NONCE_SALT',       'oy] QvW@f5,(l{7mctfMZ0dGP%no#htqb=4dPSKsk1%?s?TOh}ci|P6DX2U)xD{,' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
