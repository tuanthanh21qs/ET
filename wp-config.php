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
define( 'AUTH_KEY',         'eBQl}^847^0y=jYbDQ>I&jjGzm ?P=.T9k))dL_jnR()mK}`:1hrgJ+)Y:HmJO/[' );
define( 'SECURE_AUTH_KEY',  'v5N1,t^T17&&@Lq]^QDcsap] u|4$Jun9/`j9Be;t:#tcLs/QMW;Vt(CSo&RxwX@' );
define( 'LOGGED_IN_KEY',    '-hp9^(R<13%;J)MY;q1[o7nUy}1$x%pmD`b@~(VC%*mnNC02?=!rso@%=@wNhEqA' );
define( 'NONCE_KEY',        'Q(lYx21^e_L=i5g=~4h,Qwze.Dme4pZvKo]TK|t|BG8~eB6e_d2_V}dW#Tw5+jQl' );
define( 'AUTH_SALT',        'G>J%Iw^?hMH&evd2&g,M.&9u~r>KZnqmPD9y<lC#BY&JzHE~;hzGYJT?#?89[R=J' );
define( 'SECURE_AUTH_SALT', ')pFGFC5U6og@tT@>aB)EIY^`s}t:HC*]$Z+Iuq=*@)=BTk?_fK@?<1)HRm|Yi=Yx' );
define( 'LOGGED_IN_SALT',   '*+)o?|PRLQk.aLZv]4@cZuE7forH4[-YwpP;buRC!yVf>>{wz#6WZ-|CCEej f+=' );
define( 'NONCE_SALT',       '6s[qtp%*$Z18}>7O@?n6>UIoAhh~Z{*`7/ILvZRYBxnX1#@7(;vd_z/@kc]7jGat' );

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
