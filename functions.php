* Functions
 * Version 0.0.0.1
 * Author LLLgoyour( https://www.lllgoyour.club/ )
 * 2019/08/19
 **/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

define("THEME_NAME", "Castle");
define("CASTLE_VERSION", "0.3.2");

require_once("libs/setting.php");
require_once("libs/owo.php");


//设置时区
date_default_timezone_set("Asia/Shanghai"); /* 设置上海时区 */

/* 获取访问者的操作系统*/
function get