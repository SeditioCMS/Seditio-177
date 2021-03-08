<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome & Seditio Team
http://www.neocrome.net
http://www.seditiocms.com
[BEGIN_SED]
File=captcha.php
Version=177
Updated=2020-feb-06
Type=Core
Author=Neocrome
Description=Functions
[END_SED]
==================== */

define('SED_CODE', TRUE);

require('system/functions.php');

/*
require('datas/config.php');
require('system/common.php');
*/

$cfg['font_dir'] = "datas/fonts/";

$captcha_code = sed_generate_code();

sed_captcha_image($captcha_code);

?>
