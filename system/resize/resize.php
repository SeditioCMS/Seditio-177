<?php

/* ====================
Seditio - Website engine
Copyright Neocrome & Seditio Team
http://www.neocrome.net
http://www.seditiocms.com
[BEGIN_SED]
File=resize/resize.php
Version=177
Updated=2020-dec-31
Type=Core
Author=Neocrome
Description=Pages
[END_SED]
==================== */

require_once('../system/functions.image.php');

$filename = $_GET['file'];
$token = $_GET['token'];
	
$resized_filename =  resize($filename);

if(is_readable($resized_filename))
{
	header('Content-type: image');
	print file_get_contents($resized_filename);
}

