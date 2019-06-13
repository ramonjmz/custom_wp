<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

if (file_exists('/home/advantur/public_html/mazzclean.com/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", '/home/advantur/public_html/mazzclean.com/wp-content/wflogs/');
	include_once '/home/advantur/public_html/mazzclean.com/wp-content/plugins/wordfence/waf/bootstrap.php';
}
?>