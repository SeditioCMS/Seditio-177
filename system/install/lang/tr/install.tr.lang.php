<?php

/* ====================
Seditio - Website engine
Copyright Neocrome & Seditio Team
http://www.seditiocms.com
[BEGIN_SED]
File=install.tr.lang.php
Version=177
Updated=2019-mart-08
Type=Core
Author=Neocrome
Description=Turkish installation lang file
[END_SED]
==================== */

$L['install_step0'] = "Dil kurulumunu seçin";
$L['install_step1'] = "Uygunluk";
$L['install_step2'] = "Yapılandırma dosyası";
$L['install_step3'] = "MySQL veritabanı";
$L['install_step4'] = "Eklentiler";
$L['install_step5'] = "Tamamlandı";

$L['install_language installation'] = "Dil yükleme";
$L['install_select_language installation'] = "Kurulum dilini seçin";
$L['install_title'] = "Seditio - Kurulum"; 
$L['install_build_config'] = "Yapılandırma dosyasını oluşturma ";
$L['install_looks_chmod'] = "Başarılı görünüyor, sessizce dosyayı salt okunur olarak CHMOD yapmaya çalışıyor...";
$L['install_setting_mysql'] = "SQL veritabanını ayarlama...";
$L['install_creating_mysql'] = "SQL tabloları oluşturma...";
$L['install_presettings'] = "Yapılandırma girişlerini önceden ayarlama...";
$L['install_adding_administrator'] = "Yönetici hesabı ekleme...";
$L['install_done'] = "Tamam.";
$L['install_contine_toplugins'] = "Eklentilere devam et";
$L['install_error_notwrite'] = "Hata, dosyayı yazamadı, lütfen bu dosyanın yazılabilir olduğunu kontrol edin.";
$L['install_now'] = "Şimdi kur";
$L['install_plugins'] = "Eklentiler";
$L['install_install'] = "Kurulum";
$L['install_optional_plugins'] = "Buradan eklentileri yükleyebilir ve yeni özellikler alabilirsiniz.<br /> İsteğe bağlı, \n
           ve bunları daha sonra istediğiniz zaman yönetim panelinden 'Eklentiler' sekmesinden değiştirebilirsiniz..<br /> \n
           Ne olduğunu tam olarak bilmiyorsanız, onay kutularını olduğu gibi bırakın.<br />";
$L['install_installing_plugins'] = "Eklentileri yükleme :";
$L['install_installed_plugins'] = "eklentiler yüklü (";
$L['install_display_log'] = "Günlüğü görüntüle";
$L['install_contine_homepage'] = "Ana sayfaya devam et";
$L['install_error'] = "Hata !";
$L['install_wrong_manual'] = "Bir şeyler yanlışmı gitti, manuel olarak ayarlamanız gerekecek, adımlar ayrıntılı <a href=\"https://www.seditiocms.com/seditio-kurulum-videolu-anlatim-m90.html\">burada</a>.";
$L['install_database_setup'] = "SQL veritabanı kurulumu :";
$L['install_database_hosturl'] = "Veritabanı Host URL'si :";
$L['install_always_localhost'] = "Neredeyse her zaman 'localhost'";
$L['install_database_user'] = "Veri tabanı kullanıcı adı :";
$L['install_see_yourhosting'] = "Bunun için hosting kontrol panelinize bakın";
$L['install_database_password'] = "Veritabanı şifresi :";
$L['install_database_name'] = "Veri tabanı ismi :";
$L['install_database_tableprefix'] = "Veritabanı tablosu öneki :";
$L['install_seditio_already'] = "Bu veritabanında başka bir Seditio yoksa, değişme";
$L['install_input_mode'] = "Metin alanları için giriş modu :";
$L['install_html_mode'] = "<strong>HTML</strong> (tavsiye edilen)<br /> \n
           Sayfalar, forumlardaki gönderiler ve özel iletiler için alınan metinler yerel olarak HTML kodu olarak işlenir.<br />\n
          Bir WYSIWYG HTML editörü otomatik olarak kurulacak.";
$L['install_bbcode_mode'] = "<strong>BBcode</strong><br />
          Sayfalar, forumlardaki yazılar ve özel mesajlar için kullanılan yazı metinleri ham metin ve [bbcode] etiketleri olarak işlenir.<br />\n
          Bir satır içi BBcode editörü otomatik olarak kurulacak.";
$L['install_skinandlang'] = "tema ve dil :";
$L['install_default_skin'] = "Varsayılan tema :<br />(Tema dosyaları klasörde saklanır /skins/...";
$L['install_default_lang'] = "Varsayılan dil :";
$L['install_admin_account'] = "Yönetici hesabı :";
$L['install_account_name'] = "Kullanıcı adı :";
$L['install_ownaccount_name'] = "Kendi kullanıcı adın";
$L['install_password'] = "Şifre :";
$L['install_least8chars'] = "En az 8 karakter";
$L['install_email'] = "Email :";
$L['install_doublecheck'] = "Çift kontrol, önemli!";
$L['install_country'] = "Ülke :";
$L['install_validate'] = "Onayla";
$L['install_auto_installer'] = "Bu Seditio'nun otomatik kurucusu (yapı ".$cfg['version'].")";
$L['install_create_configfile'] = "Yapılandırma dosyası oluşturacak <strong>".$cfg['config_file']."</strong>, \n
	         sonra MySQL veritabanınızdaki tabloları oluşturacak ve dolduracaksınız.<br /> \n
	         Bu aracı çalıştırmadan önce, hosting panelinizle veritabanını kendiniz oluşturmanız gerekir., \n
	         ve tüm PHP ve sistem dosyalarının web sunucunuza yüklenmesi gerekir.<br />&nbsp<br /> \n
	         Yükleme işlemi sırasında bir şeyler ters giderse, dosyayı silin <strong>".$cfg['config_file']."</strong> FTP istemcinizle ve web kök URL’sini tarayıcınızda yeniden açın..<br />&nbsp<br /> \n
	         Şimdi, CHMOD 0777 daha önce yazılabilir olmayan ve aşağıda listelenen herhangi bir klasörde, FTP istemcinizle yazma izni verin :<br />";
$L['install_folder'] = "Klasör";
$L['install_writable'] = "Yazılabilir";
$L['install_not_writable'] = "Yazılabilir değil";
$L['install_not_found'] = "Bulunamadı";
$L['install_file'] = "Dosya";
$L['install_found_writable'] = "Bulundu ve yazılabilir";
$L['install_found_notwritable'] = "Bulundu, Yazılabilir değil";
$L['install_notfound_folderwritable'] = "Bulunamadı, ve klasör yazılabilir, kalsör olmalı.";
$L['install_notfound_foldernotwritable'] = "Bulunamadı ve klasör yazılabilir değil";
$L['install_phpversion'] = "PHP versiyonu :";
$L['install_ok'] = "Ok";
$L['install_too_old'] = "Çok eski";
$L['install_mysql_extension'] = "MySQL uzantısı :";
$L['install_mysqli_extension'] = "MySQLi uzantısı :";
$L['install_mysql_connector'] = "MySQL konnektör sürücüsü :";
$L['install_mysql_preffered'] = "En çok tercih edilen MySQLi uzantısı";
$L['install_available'] = "Mevcut";
$L['install_missing'] = "Eksik ?";
$L['install_refresh'] = "Yenile";
$L['install_nextstep'] = "Sonraki adım";

?>