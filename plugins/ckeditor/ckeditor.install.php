<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome & Seditio Team
http://www.neocrome.net
http://www.seditiocms.com

[BEGIN_SED]
File=plugins/ckeditor/ckeditor.install.php
Version=177
Updated=2012-feb-23
Type=Plugin
Author=Neocrome
Description=
[END_SED]

==================== */

if (!defined('SED_CODE') || !defined('SED_ADMIN')) { die('Wrong URL.'); }

foreach($sed_groups as $k => $vx)
  {
  if ($vx['id']>3)
    {
    //$value = ($v['id']==5) ? 'Extended' : 'Default';    
    sed_config_add('plug', 'ckeditor', 99, 'ckeditor_grp'.$vx['id'], 'select', 'Default', 'Default,Micro,Basic,Extended,Full', "Global toolbar for the group '".$vx['title']);
    }
  }

  
?>