<?php

/* ====================
Seditio - Website engine
Copyright Neocrome & Seditio Team
https://www.seditiocms.com
-----------------------
Seditio language pack
Language : Turkish (code:tr)
Localization done by : Kaan
-----------------------
[BEGIN_SED]
File=system/lang/tr/message.lang.php
Version=177
Updated=2019-mart-08
Type=Lang
Author=Neocrome
Description=Language messages
[END_SED]
==================== */

$L['msg_Message'] = "Mesaj";
$L['msg_Error'] = "Hata";
$L['msg_Warning'] = "Uyarı";
$L['msg_Security'] = "Güvenlik";
$L['msg_System'] = "Sistem";

/* ======== Users ======== */

$L['msg100_0'] = "Kullanıcı oturum açmadı, profile erişim reddedildi";
$L['msg100_1'] = "Sadece kayıtlı ve giriş yapan kullanıcılar profilini görüntüleyebilir!";
$L['msg101_0'] = "Kullanıcı oturum açmamış";
$L['msg101_1'] = "Gerek yok, giriş yapmadınız.";
$L['msg102_0'] = "Kullanıcı çıkış yapmış";
$L['msg102_1'] = "Bitti, çıkış yaptınız.";
$L['msg104_0'] = "Kullanıcı giriş yaptı";
$L['msg104_1'] = "Tekrar hoşgeldiniz ".$usr['name'].", şimdi giriş yaptınız.";
$L['msg105_0'] = "Kayıt yapıldı (1. adım)";
$L['msg105_1'] = "Lütfen posta kutunuzu birkaç dakika içinde kontrol edin,<br />ve lütfen kayıt işlemini onaylayın<br />iletinin içindeki URL’yi tıklatarak ...<br />Aktif edene kadar, hesabınız kullanıcı listesinde 'Aktif Değil' olarak işaretlendi.";
$L['msg106_0'] = "Kayıt tamamlandı";
$L['msg106_1'] = "Hoş geldiniz, hesabınız şimdi geçerli ve etkin.<br />Artık şifrenizle giriş yapabilirsiniz.";
$L['msg109_0'] = "Kullanıcı silindi";
$L['msg109_1'] = "Tamamlandı, kullanıcı silindi.";
$L['msg113_0'] = "Profil güncellendi";
$L['msg113_1'] = "Tamamlandı, hesabınıza uygulanan değişiklikler.";
$L['msg117_0'] = "Kayıt devre dışı";
$L['msg117_1'] = "Yeni kullanıcılar için kayıt devre dışı.";
$L['msg118_0'] = "Kayıt yapıldı (1. adım)";
$L['msg118_1'] = "Hesabınız şu anda etkin değil,<br />giriş yapabilmeniz için site yöneticisinin etkinleştirmesi gerekir.<br />Bu gerçekleştiğinde başka bir e-posta alacaksınız.";
$L['msg151_0'] = "Giriş başarısız (yanlış ad veya şifre)";
$L['msg151_1'] = "Hata, sağladığınız kullanıcı adı veritabanında değil veya şifre eşleşmiyor!";
$L['msg152_0'] = "Giriş başarısız (hesap etkin değil)";
$L['msg152_1'] = "Hata, hesabınız kayıtlı, ancak henüz etkin değil.";
$L['msg153_0'] = "Giriş yapılamadı (kullanıcı yasaklandı)";
$L['msg153_1'] = "Hata, hesabınız yasaklandı.";
$L['msg157_0'] = "Yanlış doğrulama URL’si";
$L['msg157_1'] = "Bu doğrulama URL’si geçerli değil.";

/* ======== General ======== */

$L['msg300_0'] = "Yeni gönderi";
$L['msg300_1'] = "Tamam, bu öğe şimdi veritabanına kaydedildi.<br />Bir moderatör bunu en kısa sürede kontrol edecektir,<br />Teşekkürler !";
$L['msg301_0'] = "Yeni gönderi";
$L['msg301_1'] = "Tamam, bu öğe şimdi veritabanına kaydedildi.";
$L['msg302_0'] = "Kayıt silindi";
$L['msg302_1'] = "Tamam, kayıt veritabanından silindi.";
$L['msg303_0'] = "Veri girişi sırasında bir hata oluştu";
$L['msg303_1'] = "Bir hata oluştu, zorunlu alanlardan biri / birkaçı doldurulmadı veya hatalı dolduruldu.";

/* ======== Error Pages ======== */

$L['msg400_0'] = "Kötü Sözdizimi";
$L['msg400_1'] = "İsteğinizde kötü bir sözdizimi var";
$L['msg401_0'] = "Yetkisiz";
$L['msg401_1'] = "İstediğiniz URL, doğru bir kullanıcı adı ve şifre gerektiriyor.<br />Yanlış bir kullanıcı adı / şifre girdiniz veya tarayıcınız bu özelliği desteklemiyor.";
$L['msg403_0'] = "Yasak";
$L['msg403_1'] = "İstediğiniz URL'yi veya bağlantıyı alma izniniz yok..<br />Bunun bir hata olduğunu düşünüyorsanız lütfen yönlendiren sayfanın yöneticisine bildirin..";
$L['msg404_0'] = "Bulunamadı";
$L['msg404_1'] = "İstenen nesne veya URL bu sunucuda bulunamadı. <br />İzlediğiniz bağlantı güncel değil, yanlış veya sunucuya sayfaya erişmenize izin vermemesi talimatı verildi..";
$L['msg500_0'] = "İç Sunucu Hatası";
$L['msg500_1'] = "Sunucu bir iç hata veya yanlış yapılandırma ile karşılaştı ve isteğinizi yerine getiremedi. <br />Lütfen yöneticiyle görüşün ve hatanın oluştuğu zamanı ve hataya neden olmuş olabilecek her şeyi onlara bildirin..";

/* ======== Private messages ======== */

$L['msg502_0'] = "Özel mesaj gönderildi";
$L['msg502_1'] = "Tamam, özel mesajınız başarıyla gönderildi.<br />Click ";
$L['msg502_2'] = "buraya";
$L['msg502_3'] = " Özel mesajlara geri dönmek veya yeni bir PM göndermek için.";

/* ======== Forums ======== */

$L['msg602_0'] = "Bölüm kilitli";
$L['msg602_1'] = "Bu bölüm kilitlendi.";
$L['msg603_0'] = "Konu kilitlendi";
$L['msg603_1'] = "Bu konu kilitlendi.";

/* ======== System ======== */

$L['msg900_0'] = "Yapım halinde";
$L['msg900_1'] = "Sayfa henüz tamamlanmadı, lütfen daha sonra tekrar gelin.";
$L['msg904_0'] = "Yalnızca yöneticiler için sistem sayfaları";
$L['msg904_1'] = "Sistem sayfalarını seviyenize göre listeleyemezsiniz.";
$L['msg907_0'] = "Eklenti yüklü değil";
$L['msg907_1'] = "Bu eklentiyi yüklemeye çalışırken bir hata oluştu, dosyalar eksik ?";
$L['msg911_0'] = "Dil dosyası eksik";
$L['msg911_1'] = "Bu dil paketini kontrol etmeye çalışırken bir hata oluştu.";
$L['msg915_0'] = "Hata !";
$L['msg915_1'] = "En az 1 alan boş.";
$L['msg916_0'] = "Veritabanı güncellendi";
$L['msg916_1'] = "Tamam, veritabanı başarıyla güncellendi.<br />Etkilenen girişler : $num";
$L['msg917_0'] = "Veritabanı güncellendi";
$L['msg917_1'] = "Tamam, veritabanı başarıyla güncellendi.";
$L['msg930_0'] = "Erişim reddedildi";
$L['msg930_1'] = "Bunu yapmanıza izin verilmiyor.";
$L['msg940_0'] = "Bölüm devre dışı";
$L['msg940_1'] = "Web sitesinin bu bölümü devre dışı.";
$L['msg950_0'] = "Hata";
$L['msg950_1'] = "Bir hata oluştu, belki yanlış bir URL ?";

/* ======== Overall  ======== */

$L['msgredir'] = "Yönlendiriliyor...";

?>
