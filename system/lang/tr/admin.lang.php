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
File=system/core/admin/lang/tr/admin.lang.php
Version=177
Updated=2019-mart-08
Type=Lang
Author=Neocrome
Description=Admin panel
[END_SED]
==================== */

/* ====== Core ====== */

$L['core_main'] = "Ana Kurulum";
$L['core_parser'] = "Ayrıştırıcı"; 			
$L['core_rss'] = "RSS Besleme"; 			
$L['core_dic'] = "Dizinler ve Ekstra alanlar"; 			
$L['core_time'] = "Saat ve tarih";
$L['core_skin'] = "Temalar";
$L['core_lang'] = "Diller";
$L['core_menus'] = "Menü Alanları";
$L['core_comments'] = "Yorumlar";
$L['core_forums'] = "Forumlar";
$L['core_page'] = "Sayfalar";
$L['core_pfs'] = "Kişisel dosya alanı";
$L['core_gallery'] = "Galeri";
$L['core_plug'] = "Eklentiler";
$L['core_pm'] = "Özel mesajlar";
$L['core_polls'] = "Anketler";
$L['core_ratings'] = "Oylamalar";
$L['core_trash'] = "Çöp Kutusu";
$L['core_users'] = "Üyeler";
$L['core_meta'] = "HTML Meta";

/* ====== Upgrade ====== */

$L['upg_upgrade'] = "Yükselt";      
$L['upg_codeversion'] = "Kod sürümü";     
$L['upg_sqlversion'] = "SQL veritabanı sürümü";   
$L['upg_codeisnewer'] = "Kod, SQL sürümünden daha yeni.";    
$L['upg_codeisolder'] = "Kod, SQL sürümünden daha eski, bu sıra dışı ve desteklenmiyor.<br />Tüm dosyaları en yeni paketten yüklediğinizi kontrol etmelisiniz..";    
$L['upg_codeissame'] = "Kod ve SQL sürümleri eşleşiyor.";   
$L['upg_upgradenow'] = "Şu anda SQL veritabanını yükseltmeniz şiddetle tavsiye edilir, yükseltmek için buraya tıklayın !";  
$L['upg_upgradenotavail'] = "Bu sürüm numaraları için yükseltme yok.";     
$L['upg_manual'] = "Veritabanını el ile yükseltmeyi tercih ederseniz, SQL komut dosyaları klasörde /docs/upgrade/.";      
$L['upg_success'] = "Yükseltme başarılı oldu, devam etmek için buraya tıklayın...";     
$L['upg_failure'] = "Yükseltme başarısız oldu, devam etmek için burayı tıklayın...";     
$L['upg_force'] = "Bazı nedenlerden dolayı, SQL veritabanında yazılmış Seditio sürüm numarasının yanlış olması oluşabilir.. Aşağıda SQL sürüm numarasını zorlamak için bir düğme bulunmaktadır, bu sadece SQL veritabanını etiketleyecektir, başka bir değişiklik yapmayacaktır..<br />SQL sürüm numarasını zorla : ";

/* ====== General ====== */

$L['editdeleteentries'] = "Girişleri düzenleyin veya silin";
$L['viewdeleteentries'] = "Girişleri görüntüle veya sil";
$L['addnewentry'] = "Yeni giriş ekle";
$L['adm_purgeall'] = "Hepsini temizle";
$L['adm_listisempty'] = "Liste boş";
$L['adm_totalsize'] = "Toplam boyut";
$L['adm_showall'] = "Hepsini Göster v";
$L['adm_area'] = "Alan";
$L['adm_option'] = "Seçenek";
$L['adm_setby'] = "Set by";
$L['adm_more'] = "Daha fazla araç...";
$L['adm_from'] = "From";
$L['adm_to'] = "To";
$L['adm_confirm'] = "Onaylamak için bu düğmeye basın : ";
$L['adm_done'] = "Tamam";
$L['adm_failed'] = "Başarısız oldu";
$L['adm_warnings'] = "Uyarılar";
$L['adm_valqueue'] = "Doğrulama bekleniyor";
$L['adm_required'] = "(Gerekli)";
$L['adm_clicktoedit'] = "(Düzenlemek için tıkla)";
$L['adm_manage'] = "Yönet";  
$L['adm_pagemanager'] = "Sayfa yöneticisi";  

/* ====== Banlist ====== */

$L['adm_ipmask'] = "IP maskesi";
$L['adm_emailmask'] = "Email maskesi";
$L['adm_neverexpire'] = "Süresiz";
$L['adm_help_banlist'] = "IP maskeleri için örnekler :194.31.13.41 , 194.31.13.* , 194.31.*.* , 194.*.*.*<br />E-posta maskeleri için örnekler : @hotmail.com, @yahoo (Joker karakterler desteklenmiyor)<br />Tek bir giriş bir IP maskesi veya bir e-posta maskesi veya her ikisini içerebilir.<br />IP'ler görüntülenen her sayfa için filtrelenir ve yalnızca kullanıcı kaydındaki e-posta maskeleri.";

/* ====== Cache ====== */

$L['adm_internalcache'] = "Dahili önbellek";
$L['adm_help_cache'] = "Müsait değil";

/* ====== Configuration ====== */

$L['adm_help_config']= "Müsait değil";
$L['cfg_adminemail'] = array("Yönetici email", "Gerekli");
$L['cfg_maintitle'] = array("Site Başlığı", "Web sitesi için ana başlık gerekli");
$L['cfg_subtitle'] = array("Açıklama", "İsteğe bağlı, sitenin başlığından sonra gösterilecektir");
$L['cfg_mainurl'] = array("Site URL", "http://, ile başlamalı ve sponunda slash olmayacak !");
$L['cfg_clustermode'] = array("Sunucu kümesi", "Yük dengeli bir kurulumsa evet olarak ayarlayın.");			// New in v125
$L['cfg_hostip'] = array("Server IP", "Sunucunun IP'si, isteğe bağlı.");
$L['cfg_gzip'] = array("Gzip", "HTML çıktısının Gzip sıkıştırması");
$L['cfg_cache'] = array("Dahili önbellek", "Daha iyi performans için etkin tutun");
$L['cfg_devmode'] = array("Hata ayıklama modu", "Bunun aktif sitelerde etkin olmasına izin verme");
$L['cfg_doctypeid'] = array("Document Type", "&lt;!DOCTYPE> of the HTML layout");
$L['cfg_charset'] = array("HTML charset", "");
$L['cfg_cookiedomain'] = array("Çerezler için alan", "Varsayılan: boş");
$L['cfg_cookiepath'] = array("Çerezler için yol", "Varsayılan: boş");
$L['cfg_cookielifetime'] = array("Maksimum çerez ömrü", "Saniye cinsinden");
$L['cfg_metakeywords'] = array("HTML Meta anahtar kelimeleri (virgülle ayrılmış)", "Arama motorları");
$L['cfg_disablesysinfos'] = array("Sayfa oluşturma zamanını kapat", "footer.tpl");
$L['cfg_keepcrbottom'] = array("Telif hakkı bildirimini etikette saklayın {FOOTER_BOTTOMLINE}", "footer.tpl");
$L['cfg_showsqlstats'] = array("SQL sorgu istatistiklerini göster", "footer.tpl");
$L['cfg_shieldenabled'] = array("Kalkanı Etkinleştir", "Anti-spam ve hızlı vuruş");
$L['cfg_shieldtadjust'] = array("Kalkan zamanlayıcılarını ayarlama (in %)", "Ne kadar yüksek olursa, istenmeyen ataklar o kadar zorlaşır");
$L['cfg_shieldzhammer'] = array("Sonra anti-çekiç * hızlı vuruş", "Daha küçük, daha hızlı 3 dakika otomatik yasaklama olur");
$L['cfg_maintenance'] = array("Bakım Modu", "Sitede teknik çalışmalar yapılıyor."); 
$L['cfg_maintenancelevel'] = array("Kullanıcı Erişim Seviyesi", "Erişim kullanıcılarının seviyesini seçin"); 
$L['cfg_maintenancereason'] = array("Bakım sebebi", "Bakımın nedenini açıklayın"); 
$L['cfg_multihost'] = array("Multihost mode", "Birden fazla ana bilgisayarı etkinleştirmek için");  
$L['cfg_absurls'] = array("Mutlak URL (abs)", "Mutlak URL’nin kullanılmasını sağlar");  
$L['cfg_sefurls'] = array("SEF URL", "Sitedeki SEF URL'lerini etkinleştirmek için");  
$L['cfg_sefurls301'] = array("301 SEF URL’lerine yönlendirme", "Eski URL’den SEF URL’lerine 301 yönlendirmesini etkinleştir");  
$L['cfg_dateformat'] = array("Ana tarih maskesi", "Default: Y-m-d H:i");
$L['cfg_formatmonthday'] = array("Kısa tarih maskesi", "Default: m-d");
$L['cfg_formatyearmonthday'] = array("Orta tarih maskesi", "Default: Y-m-d");
$L['cfg_formatmonthdayhourmin'] = array("Forum tarih maskesi", "Default: m-d H:i");
$L['cfg_servertimezone'] = array("Sunucu saat dilimi", "Sunucunun ofset dengesi GMT+00");
$L['cfg_defaulttimezone'] = array("Varsayılan saat dilimi", "Konuklar ve yeni üyeler için -12 to +12");
$L['cfg_timedout'] = array("Rölanti gecikmesi, saniye cinsinden", "Bu gecikmeden sonra kullanıcı uzakta olarak görünür.");
$L['cfg_maxusersperpage'] = array("Kullanıcı listesindeki maksimum satır", "");
$L['cfg_regrequireadmin'] = array("Yöneticiler yeni hesapları doğrular", "");
$L['cfg_regnoactivation'] = array("Yeni kullanıcılar için e-posta kontrolünü atla", "\"Hayır\"güvenlik nedeniyle önerilir");
$L['cfg_useremailchange'] = array("Kullanıcıların e-posta adreslerini değiştirmelerine izin ver", "\"Hayır\" güvenlik nedeniyle önerilir");
$L['cfg_usertextimg'] = array("Kullanıcı imzasında resimlere ve HTML'ye izin ver", "\"Hayır\" güvenlik nedeniyle önerilir");
$L['cfg_av_maxsize'] = array("Avatar, maksimum dosya boyutu", "Default: 8000 bytes");
$L['cfg_av_maxx'] = array("Avatar, maksimum genişlik", "Default: 64 pixels");
$L['cfg_av_maxy'] = array("Avatar, maksimum yükseklik", "Default: 64 pixels");
$L['cfg_usertextmax'] = array("Kullanıcı imzası için maksimum uzunluk", "Default: 300 chars");
$L['cfg_sig_maxsize'] = array("İmza, maksimum dosya boyutu", "Default: 50000 bytes");
$L['cfg_sig_maxx'] = array("İmza, maksimum genişlik", "Default: 468 pixels");
$L['cfg_sig_maxy'] = array("İmza, maksimum yükseklik", "Default: 60 pixels");
$L['cfg_ph_maxsize'] = array("Fotoğraf, maksimum dosya boyutu", "Default: 8000 bytes");
$L['cfg_ph_maxx'] = array("Fotoğraf, maksimum genişlik", "Default: 96 pixels");
$L['cfg_ph_maxy'] = array("Fotoğraf, maksimum yükseklik", "Default: 96 pixels");
$L['cfg_maxrowsperpage'] = array("Listelerdeki maksimum satır", "");
$L['cfg_showpagesubcatgroup'] = array("Alt sayfalardaki grup sayfalarını göster", ""); 
$L['cfg_maxcommentsperpage'] = array("Sayfa başına maksimum yorum", ""); 
$L['cfg_commentsorder'] = array("Yorumlar için sıralama sırası", "ASC - yeni altta, DESC - yeni en üstte"); 
$L['cfg_maxtimeallowcomedit'] = array("Yorumları düzenlemeye izin verilen süre", "Dakikalar içinde 0 - düzenleme yapmak yasaksa"); 
$L['cfg_showcommentsonpage'] = array("Sayfalarda yorumları göster", "Varsayılan olarak sayfada yorum görüntülenir.");  
$L['cfg_maxcommentlenght'] = array("Bir yorumun maksimum uzunluğu", "Default: 2000 characters"); 
$L['cfg_countcomments'] = array("Yorumları say", "Simgenin yanında yorumların sayısını görüntüler");
$L['cfg_hideprivateforums'] = array("Özel forumları gizle", "");
$L['cfg_hottopictrigger'] = array("Konunun 'sıcak' olması için yazılar", "");
$L['cfg_maxtopicsperpage'] = array("Sayfa başına maksimum konu veya mesaj", "");
$L['cfg_antibumpforums'] = array("Hızlı vuruş önleyici koruma", "Aynı konudaki kullanıcıların arka arkaya iki kez mesaj göndermesini önler");
$L['cfg_pfsuserfolder'] = array("Klasör depolama modu", "Etkinleştirilirse, kullanıcı dosyalarını alt klasörlerde depolar /datas/users/USERID/... USERID'yi dosya adına hazırlamak yerine. SADECE sitenin İLK kurulumunda ayarlanmalıdır. Bir dosya bir PFS'ye yüklenir yüklenmez, bunu değiştirmek için çok geçtir.");
$L['cfg_th_amode'] = array("Küçük resimler üretimi", "");
$L['cfg_th_x'] = array("Küçük resimler, genişlik", "Default: 112 pixels");
$L['cfg_th_y'] = array("Küçük resimler, yükseklik", "Default: 84 pixel, recommended : Width x 0.75");
$L['cfg_th_border'] = array("Küçük resimler, kenarlık boyutu", "Default: 4 pixels");
$L['cfg_th_keepratio'] = array("Küçük resim, oranı koru ?", "");
$L['cfg_th_jpeg_quality'] = array("Küçük resimler, Jpeg kalitesi", "Default: 85");
$L['cfg_th_colorbg'] = array("Küçük resimler, kenarlık rengi", "Default: 000000, hex color code");
$L['cfg_th_colortext'] = array("Küçük resimler, metin rengi", "Default: FFFFFF, hex color code");
$L['cfg_th_rel'] = array("Küçük resim rel özelliği", "Default: sedthumb"); 
$L['cfg_th_dimpriority'] = array("Küçük resimler, yeniden boyutlandır", "Default: Width");      
$L['cfg_th_textsize'] = array("Thumbnails, size of the text", "");
$L['cfg_pfs_filemask'] = array("Zamana göre dosya isimleri", "Zamana göre dosya isimleri oluştur");  

$L['cfg_disable_gallery'] = array("Galeriyi devre dışı bırak", "");     	
$L['cfg_gallery_gcol'] = array("Galeriler için sütun sayısı", "Default : 4");    
$L['cfg_gallery_bcol'] = array("Resimler için sütun sayısı", "Default : 6");    	
$L['cfg_gallery_logofile'] = array("Png/jpeg/Gif tüm yeni PFS resimlerine eklenecek logo", "Devre dışı bırakmak için boş bırakın");    	
$L['cfg_gallery_logopos'] = array("Logonun PFS resimlerindeki konumu", "Default : Bottom left");    	
$L['cfg_gallery_logotrsp'] = array("Logo için birleştirme seviyesi in %", "Default : 50");    
$L['cfg_gallery_logojpegqual'] = array("Logo yerleştirildikten sonra son görüntünün kalitesi, eğer bir Jpeg ise", "Default : 90");    	
$L['cfg_gallery_imgmaxwidth'] = array("Görüntülenen bir resim için piksel cinsinden maksimum genişlik, daha büyükse, küçük boyutlu bir kopya işlenecektir", "");     	

$L['cfg_pm_maxsize'] = array("Mesajlar için maksimum uzunluk", "Default: 10000 chars");
$L['cfg_pm_allownotifications'] = array("PM bildirimlerine e-posta ile izin ver", "");
$L['cfg_disablehitstats'] = array("Vuruş istatistiklerini devre dışı bırak", "Yönlendirmeler ve günlük vuruş sayısı");
$L['cfg_disablereg'] = array("Kayıt işlemini devre dışı bırak", "Kullanıcıların yeni hesaplar kaydetmesini önle");
$L['cfg_disablewhosonline'] = array("Kimlerin çevrimiçi olduğunu devre dışı bırak", "Kalkanı açarsanız otomatik olarak etkinleştirilir");
$L['cfg_defaultcountry'] = array("Yeni kullanıcılar için varsayılan ülke", "2 harf ülke kodu");	
$L['cfg_forcedefaultskin'] = array("Tüm kullanıcıları için varsayılan tema", "");
$L['cfg_forcedefaultlang'] = array("Tüm kullanıcılar için varsayılan dil", "");
$L['cfg_separator'] = array("Genel ayırıcı", "Default:>");
$L['cfg_menu1'] = array("Menu slot #1<br />{PHP.cfg.menu1} tüm tpl dosyalarında", "");
$L['cfg_menu2'] = array("Menu slot #2<br />{PHP.cfg.menu2} tüm tpl dosyalarında", "");
$L['cfg_menu3'] = array("Menu slot #3<br />{PHP.cfg.menu3} tüm tpl dosyalarında", "");
$L['cfg_menu4'] = array("Menu slot #4<br />{PHP.cfg.menu4} tüm tpl dosyalarında", "");
$L['cfg_menu5'] = array("Menu slot #5<br />{PHP.cfg.menu5} tüm tpl dosyalarında", "");
$L['cfg_menu6'] = array("Menu slot #6<br />{PHP.cfg.menu6} tüm tpl dosyalarında", "");
$L['cfg_menu7'] = array("Menu slot #7<br />{PHP.cfg.menu7} tüm tpl dosyalarında", "");
$L['cfg_menu8'] = array("Menu slot #8<br />{PHP.cfg.menu8} tüm tpl dosyalarında", "");
$L['cfg_menu9'] = array("Menu slot #9<br />{PHP.cfg.menu9} tüm tpl dosyalarında", "");
$L['cfg_topline'] = array("Top line<br />{HEADER_TOPLINE} in header.tpl", "");
$L['cfg_banner'] = array("Banner<br />{HEADER_BANNER} in header.tpl", "");
$L['cfg_motd'] = array("Günün mesajı<br />{NEWS_MOTD} in index.tpl", "");
$L['cfg_bottomline'] = array("Bottom line<br />{FOOTER_BOTTOMLINE} in footer.tpl", "");
$L['cfg_freetext1'] = array("Serbest Metin Yuvası #1<br />{PHP.cfg.freetext1} tüm tpl dosyalarında", "");
$L['cfg_freetext2'] = array("Serbest Metin Yuvası #2<br />{PHP.cfg.freetext2} tüm tpl dosyalarında", "");
$L['cfg_freetext3'] = array("Serbest Metin Yuvası #3<br />{PHP.cfg.freetext3} tüm tpl dosyalarında", "");
$L['cfg_freetext4'] = array("Serbest Metin Yuvası #4<br />{PHP.cfg.freetext4} tüm tpl dosyalarında", "");
$L['cfg_freetext5'] = array("Serbest Metin Yuvası #5<br />{PHP.cfg.freetext5} tüm tpl dosyalarında", "");
$L['cfg_freetext6'] = array("Serbest Metin Yuvası #6<br />{PHP.cfg.freetext6} tüm tpl dosyalarında", "");
$L['cfg_freetext7'] = array("Serbest Metin Yuvası #7<br />{PHP.cfg.freetext7} tüm tpl dosyalarında", "");
$L['cfg_freetext8'] = array("Serbest Metin Yuvası #8<br />{PHP.cfg.freetext8} tüm tpl dosyalarında", "");
$L['cfg_freetext9'] = array("Serbest Metin Yuvası #9<br />{PHP.cfg.freetext9} tüm tpl dosyalarında", "");
$L['cfg_extra1title'] = array("Alan #1 (String), title", "");
$L['cfg_extra2title'] = array("Alan #2 (String), title", "");
$L['cfg_extra3title'] = array("Alan #3 (String), title", "");
$L['cfg_extra4title'] = array("Alan #4 (String), title", "");
$L['cfg_extra5title'] = array("Alan #5 (String), title", "");
$L['cfg_extra6title'] = array("Alan #6 (Select box), title", "");
$L['cfg_extra7title'] = array("Alan #7 (Select box), title", "");
$L['cfg_extra8title'] = array("Alan #8 (Select box), title", "");
$L['cfg_extra9title'] = array("Alan #9 (Long text), title", "");
$L['cfg_extra1tsetting'] = array("Bu alandaki maksimum karakter", "");
$L['cfg_extra2tsetting'] = array("Bu alandaki maksimum karakter", "");
$L['cfg_extra3tsetting'] = array("Bu alandaki maksimum karakter", "");
$L['cfg_extra4tsetting'] = array("Bu alandaki maksimum karakter", "");
$L['cfg_extra5tsetting'] = array("Bu alandaki maksimum karakter", "");
$L['cfg_extra6tsetting'] = array("Seçim kutusunun değerleri, virgülle ayırın", "");
$L['cfg_extra7tsetting'] = array("Seçim kutusunun değerleri, virgülle ayırın", "");
$L['cfg_extra8tsetting'] = array("Seçim kutusunun değerleri, virgülle ayırın", "");
$L['cfg_extra9tsetting'] = array("Metin için maksimum uzunluk", "");
$L['cfg_extra1uchange'] = array("Kullanıcı profilinde düzenlenebilir ?", "");
$L['cfg_extra2uchange'] = array("Kullanıcı profilinde düzenlenebilir ?", "");
$L['cfg_extra3uchange'] = array("Kullanıcı profilinde düzenlenebilir ?", "");
$L['cfg_extra4uchange'] = array("Kullanıcı profilinde düzenlenebilir ?", "");
$L['cfg_extra5uchange'] = array("Kullanıcı profilinde düzenlenebilir ?", "");
$L['cfg_extra6uchange'] = array("Kullanıcı profilinde düzenlenebilir ?", "");
$L['cfg_extra7uchange'] = array("Kullanıcı profilinde düzenlenebilir ?", "");
$L['cfg_extra8uchange'] = array("Kullanıcı profilinde düzenlenebilir ?", "");
$L['cfg_extra9uchange'] = array("Kullanıcı profilinde düzenlenebilir ?", "");
$L['cfg_disable_comments'] = array("Yorumları devre dışı bırak", "");
$L['cfg_disable_forums'] = array("Forumları devre dışı bırak", "");
$L['cfg_disable_pfs'] = array("PFS'yi devre dışı bırak", "");
$L['cfg_disable_polls'] = array("Anketleri devre dışı bırak", "");
$L['cfg_disable_pm'] = array("Özel mesajları devre dışı bırak", "");
$L['cfg_disable_ratings'] = array("Derecelendirmeleri devre dışı bırak", "");
$L['cfg_disable_page'] = array("Sayfaları devre dışı bırak", "");
$L['cfg_disable_plug'] = array("Eklentileri devre dışı bırak", "");
$L['cfg_trash_prunedelay'] = array("Çöp kutusundan öğeleri silin * gün (Sonsuza kadar saklamak için Sıfır)", ""); 	
$L['cfg_trash_comment'] = array("Yorumlar için çöp tenekesini kullanın", "");		
$L['cfg_trash_forum'] = array("Forumlar için çöp tenekesini kullanın", "");		
$L['cfg_trash_page'] = array("Sayfalar için çöp tenekesini kullanın", "");		
$L['cfg_trash_pm'] = array("Özel mesajlar için çöp tenekesini kullanın", "");		
$L['cfg_trash_user'] = array("Kullanıcılar için çöp tenekesini kullanın", "");

$L['cfg_parser_vid'] = array("Videolar için BB kodlarına izin ver", "");		
$L['cfg_parser_vid_autolink'] = array("URL’leri bilinen video sitelerine otomatik olarak bağla", "");						
$L['cfg_parsebbcodecom'] = array("Yorumlarda ve özel mesajlarda BBcode izin ver", "");
$L['cfg_parsebbcodepages'] = array("Sayfalarda BBcode izin ver", "");
$L['cfg_parsebbcodeusertext'] = array("Kullanıcı imzasında BBcode izin ver", "");
$L['cfg_parsebbcodeforums'] = array("Forumlarda BBcode izin ver", "");
$L['cfg_parsesmiliescom'] = array("İfadelerde ve özel mesajlarda izin ver", "");
$L['cfg_parsesmiliespages'] = array("Sayfalardaki ifadeleri izin ver", "");
$L['cfg_parsesmiliesusertext'] = array("Kullanıcı imzasında ifadeleri izin ver", "");
$L['cfg_parsesmiliesforums'] = array("Forumlarda ifadeleri izin ver", "");

$L['cfg_color_group'] = array("Kullanıcı grubunu renklendir", "Default: Hayır, daha iyi performans için");  

$L['cfg_ajax'] = array("Enable AJAX", ""); 
$L['cfg_enablemodal'] = array("Enable modal windows", ""); 

/* ====== HTML Meta ====== */

$L['cfg_defaulttitle'] = array("Varsayılan Başlık", "Mevcut seçenekler: {MAINTITLE}, {SUBTITLE}");
$L['cfg_listtitle'] = array("Listelerinin başlığı", "Mevcut seçenekler: {MAINTITLE}, {SUBTITLE}, {TITLE}");		
$L['cfg_pagetitle'] = array("Sayfaların başlığı", "Mevcut seçenekler: {MAINTITLE}, {SUBTITLE}, {TITLE}, {CATEGORY}");	
$L['cfg_forumstitle'] = array("Forumlar için başlık", "Mevcut seçenekler: {MAINTITLE}, {SUBTITLE}, {TITLE}");		
$L['cfg_userstitle'] = array("Üyeler için başlık", "Mevcut seçenekler: {MAINTITLE}, {SUBTITLE}, {TITLE}");		
$L['cfg_pmtitle'] = array("PM için başlık", "Mevcut seçenekler: {MAINTITLE}, {SUBTITLE}, {TITLE}");		
$L['cfg_gallerytitle'] = array("Galeri için başlık", "Mevcut seçenekler: {MAINTITLE}, {SUBTITLE}, {TITLE}");		
$L['cfg_pfstitle'] = array("PFS Başlığı", "Mevcut seçenekler: {MAINTITLE}, {SUBTITLE}, {TITLE}");		
$L['cfg_plugtitle'] = array("Eklentiler için başlık", "Mevcut seçenekler: {MAINTITLE}, {SUBTITLE}, {TITLE}");		

/* ====== Rss ====== */

$L['cfg_disable_rss'] = array("RSS yayınlarını devre dışı bırak", "");
$L['cfg_disable_rsspages'] = array("Sayfalar için RSS beslemesini devre dışı bırak", "");
$L['cfg_disable_rsscomments'] = array("Yorumlar için RSS beslemesini devre dışı bırak", "");
$L['cfg_disable_rssforums'] = array("Forumlar için RSS beslemesini devre dışı bırak", "");
$L['cfg_rss_timetolive'] = array("RSS beslemesi için zaman", "saniye");
$L['cfg_rss_defaultcode'] = array("Varsayılan RSS yayını", "kategori kodunu girin");
$L['cfg_rss_maxitems'] = array("RSS beslemesindeki maksimum satır sayısı", "");

$L['adm_help_config_rss'] = "RSS beslemelerini açmak için linkler: <br />rss.php (Varsayılan olarak, ayarlarda belirtilen haber kategorilerinin çıktısı) <br /> rss.php?m=pages&c=XX (XX - Kategori kodu, kategorinin son sayfaları) <br />rss.php?m=comments&id=XX (XX - ID sayfası, yorumlar sayfası) <br />rss.php?m=forums (Forumun tüm bölümlerinden en son yazılar) <br />rss.php?m=forums&s=XX (XX - ID bölüm, son gönderiler bölümü) <br />rss.php?m=forums&q=XX (XX - ID Konu, konudaki son yazılar) <br />rss.php?m=forums&s=XX&q=YY (XX - ID section, YY - ID topic)";

/* ====== Forums ====== */

$L['adm_diplaysignatures'] = "İmzaları göster";
$L['adm_enablebbcodes'] = "BB Kodlarını Etkinleştir";
$L['adm_enablesmilies'] = "İfadeleri etkinleştir";
$L['adm_enableprvtopics'] = "Özel konulara izin ver";
$L['adm_countposts'] = "Gönderileri say";
$L['adm_autoprune'] = "* Günden sonra konuları otomatik olarak kırp";
$L['adm_postcounters'] = "Sayaçları kontrol et";
$L['adm_help_forums'] = "Müsait değil";
$L['adm_forum_structure'] = "Forumların yapısı (kategoriler)";	
$L['adm_forum_structure_cat'] = "Forumların yapısı";	
$L['adm_help_forums_structure'] = "Müsait değil";	
$L['adm_defstate'] = "Varsayılan durum";	
$L['adm_defstate_0'] = "Katlanmış";	
$L['adm_defstate_1'] = "Katlanmamış";
$L['adm_parentcat'] = "Parent category";


/* ====== IP search ====== */

$L['adm_searchthisuser'] = "Bu IP'yi kullanıcı veritabanında arayın";
$L['adm_dnsrecord'] = "Bu adres için DNS kaydı";

/* ====== Smilies ====== */

$L['adm_help_smilies'] = "Müsait değil";

/* ====== Dictionary ====== */

$L['adm_dic_list'] = "Dizinler listesi";
$L['adm_dictionary'] = "Dizin";
$L['adm_dic_title'] = "Dizinin adı";
$L['adm_dic_code'] = "Dizinin kodu (fazladan alanın adı)";
$L['adm_dic_list'] = "Dizin listesi";
$L['adm_dic_term_list'] = "Terimlerin listesi";
$L['adm_dic_add'] = "Yeni dizin ekle";
$L['adm_dic_edit'] = "Dizini düzenle";
$L['adm_dic_add_term'] = "Yeni terim ekle";
$L['adm_dic_term_title'] = "Terimin Başlığı";
$L['adm_dic_term_value'] = "Terimin değeri";
$L['adm_dic_term_defval'] = "Varsayılan terim yap?";
$L['adm_dic_term_edit'] = "Dizinden terim düzenleme";
$L['adm_dic_children'] = "Çocuk dizini";

$L['adm_dic_mera'] = "Birim";
$L['adm_dic_values'] = "Dizin için değerlerin listesi";

$L['adm_dic_form_title'] = "Form öğesinin başlığı";
$L['adm_dic_form_desc'] = "Form öğesi için metin";
$L['adm_dic_form_size'] = "Metin alanının boyutu";
$L['adm_dic_form_maxsize'] = "Metin alanının maksimum boyutu";
$L['adm_dic_form_cols'] = "Metin alanının kodları";
$L['adm_dic_form_rows'] = "Metin alanının satırları";

$L['adm_dic_extra'] = "Ekstra alan";
$L['adm_dic_addextra'] = "Ekstra alan ekle";
$L['adm_dic_editextra'] = "Ekstra alanı düzenle";
$L['adm_dic_extra_location'] = "Tablonun adı";
$L['adm_dic_extra_type'] = "Veri alanı türü";
$L['adm_dic_extra_size'] = "Alan uzunluğu";

$L['adm_dic_comma_separat'] = "(virgülle ayrılmış değerler)";

/* ====== PFS ====== */

$L['adm_gd'] = "GD grafik kütüphanesi";
$L['adm_allpfs'] = "Tüm PFS";
$L['adm_allfiles'] = "Tüm dosyalar";
$L['adm_thumbnails'] = "Küçük Resimler";
$L['adm_orphandbentries'] = "Orphan DB girişleri";
$L['adm_orphanfiles'] = "Orphan Dosyalar";
$L['adm_delallthumbs'] = "Tüm küçük resimleri sil";
$L['adm_rebuildallthumbs']= "Tüm küçük resimleri silin ve yeniden oluşturun";
$L['adm_help_pfsthumbs'] = "Müsait değil";
$L['adm_help_check1'] = "Müsait değil";
$L['adm_help_check2'] = "Müsait değil";
$L['adm_help_pfsfiles'] = "Müsait değil";
$L['adm_help_allpfs'] = "Müsait değil";
$L['adm_nogd'] = "GD grafik kütüphanesi bu host tarafından desteklenmiyor, Seditio, PFS görüntüleri için küçük resimler oluşturamaz. Konfigürasyon paneline girmelisiniz, 'Kişisel Dosya Alanı' sekmesini ve Küçük Resimler oluşturmayı = 'Devre Dışı Bırak'.";

/* ====== Pages ====== */

$L['adm_structure'] = "Sayfaların yapısı (kategoriler)";
$L['adm_syspages'] = "'Sistem' kategorisini görüntüleyin";
$L['adm_help_page'] = "'Sistem' kategorisine ait sayfalar genel girişlerde görüntülenmiyor, tek tek sayfalar oluşturuyor.";
$L['adm_sortingorder'] = "Kategoriler için varsayılan bir sıralama düzeni ayarlayın";
$L['adm_fileyesno'] = "Dosya (evet / hayır)";
$L['adm_fileurl'] = "Dosya URL'si";
$L['adm_filesize'] = "Dosya boyutu";
$L['adm_filecount'] = "Dosya indirme sayısı";

$L['adm_tpl_mode'] = "Şablon modu";	
$L['adm_tpl_empty'] = "Varsayılan";	
$L['adm_tpl_forced'] = "İle aynı";	
$L['adm_tpl_parent'] = "Üst kategori ile aynı";	

$L['adm_enablecomments'] = "Yorumları Etkinleştir";   
$L['adm_enableratings'] = "Oylamayı Etkinleştir";    

/* ====== Polls ====== */

$L['adm_help_polls'] = "Yeni bir anket konusu oluşturduktan sonra, bu anket için seçenek (seçenek) eklemek için 'Düzenle'yi seçin.<br />'Sil' seçilen anketi, seçenekleri ve tüm ilgili oyları siler.<br />'Sıfırla' seçili ankete verilen tüm oyları siler. Anketin kendisini veya seçenekleri silmez.<br />'Bump' anket oluşturma tarihini geçerli tarihe değiştirecek ve anketi listenin başında “güncel” yapacak.";

/* ====== Statistics ====== */

$L['adm_phpver'] = "PHP motoru sürümü";
$L['adm_zendver'] = "Zend motor versiyonu";
$L['adm_interface'] = "Web sunucusu ve PHP arasındaki arayüz";
$L['adm_os'] = "İşletim sistemi";
$L['adm_clocks'] = "Saatler";
$L['adm_time1'] = "#1 : Ham sunucu zamanı";
$L['adm_time2'] = "#2 : Sunucu tarafından döndürülen GMT saati";
$L['adm_time3'] = "#3 : GMT zaman + sunucu ofseti (Seditio referansı)";
$L['adm_time4'] = "#4 : Yerel saatin, profilinden ayarlandı";
$L['adm_help_versions'] = "#3 saatin doğru ayarlanması için Sunucu saat dilimini ayarlayın.<br />Saat 4, profilinizdeki saat dilimi ayarına bağlıdır.<br />Seditio tarafından #1 ve #2 saatler dikkate alınmaz";
$L['adm_log'] = "Sistem log";
$L['adm_infos'] = "Bilgiler";
$L['adm_versiondclocks'] = "Sürümler ve saatler";
$L['adm_checkcoreskins'] = "Çekirdek dosya ve temaları kontrol edin";
$L['adm_checkcorenow'] = "Çekirdek dosyaları şimdi kontrol et !";
$L['adm_checkingcore'] = "Çekirdek dosyaları kontrol etme...";
$L['adm_checkskins'] = "Tüm dosyaların dış görünümde olup olmadığını kontrol edin";
$L['adm_checkskin'] = "Tema için TPL dosyalarını kontrol edin";
$L['adm_checkingskin'] = "Tema kontrol et...";
$L['adm_hits'] = "Hit";
$L['adm_check_ok'] = "Ok";
$L['adm_check_missing'] = "Eksik";
$L['adm_ref_lowhits'] = "Vuruşların 5'ten düşük olduğu girişleri temizle";
$L['adm_maxhits'] = "Maksimum isabet sayısına ulaşıldı %1\$s, %2\$s bu gün görüntülenen sayfalar."; 
$L['adm_byyear'] = "Yıla göre"; 		
$L['adm_bymonth'] = "Aya göre"; 	
$L['adm_byweek'] = "Haftaya göre"; 		

/* ====== Ratings ====== */

$L['adm_ratings_totalitems'] = "Toplam sayfa oylandı";
$L['adm_ratings_totalvotes'] = "Toplam oy";
$L['adm_help_ratings'] = "Bir derecelendirmeyi sıfırlamak için, sadece silin. İlk yeni oyla yeniden yaratılacak.";

/* ====== Trash can ====== */

$L['adm_help_trashcan'] = "Kullanıcılar ve moderatörler tarafından en son silinen öğeleri burada listeledik.<br />Bir forum konusunun geri yüklenmesinin, konuya ait tüm gönderileri de geri yükleyeceğini unutmayın..<br />Ve silinmiş bir konudaki bir gönderiyi geri yüklemek tüm konuyu (varsa) ve tüm alt gönderileri geri yükler.<br />&nbsp;<br />Sil: Öğeyi sonsuza kadar sil.<br />Düzeltme: Öğeyi tekrar veritabanına geri yükle."; 

/* ====== Users ====== */

$L['adm_defauth_members'] = "Üyeler için varsayılan haklar";
$L['adm_deflock_members'] = "Üyeler için maskeyi kilitle";
$L['adm_defauth_guests'] = "Konuklar için varsayılan haklar";
$L['adm_deflock_guests'] = "Konuklar için maske kilitleyin";
$L['adm_rightspergroup'] = "Grup başına hak";
$L['adm_copyrightsfrom'] = "Grupla aynı hakları ayarla";
$L['adm_maxsizesingle'] = "Tek bir dosya için PFS maksimum boyut (KB)";
$L['adm_maxsizeallpfs'] = "Tüm PFS dosyalarının maksimum boyutu (KB)";
$L['adm_rights_allow10'] = "İzin verildi";
$L['adm_rights_allow00'] = "Reddedildi";
$L['adm_rights_allow11'] = "Güvenlik nedeniyle izin verildi ve kilitlendi";
$L['adm_rights_allow01'] = "Güvenlik nedeniyle reddedildi ve kilitlendi";
$L['adm_color'] = "Grup için renk"; 

/* ====== Plugins ====== */

$L['adm_extplugins'] = "Genişletilmiş eklentiler";
$L['adm_present'] = "Mevcut";
$L['adm_missing'] = "Eksik";
$L['adm_paused'] = "Durduruldu";
$L['adm_running'] = "Çalışan";
$L['adm_partrunning'] = "Kısmen çalışan";
$L['adm_notinstalled'] = "Yüklü değil";

$L['adm_opt_installall'] = "Tümünü yükle";
$L['adm_opt_installall_explain'] = "Bu, eklentinin tüm parçalarını yükler veya sıfırlar.";
$L['adm_opt_uninstallall'] = "Tümünü kaldır";
$L['adm_opt_uninstallall_explain'] = "Bu, eklentinin tüm bölümlerini devre dışı bırakacak ancak dosyaları fiziksel olarak kaldırmayacak.";
$L['adm_opt_pauseall'] = "Hepsini durdur";
$L['adm_opt_pauseall_explain'] = "Bu, eklentinin tüm parçalarını duraklatır (devre dışı bırakır).";
$L['adm_opt_unpauseall'] = "Tümünü duraklat";
$L['adm_opt_unpauseall_explain'] = "Bu, eklentinin tüm parçalarını duraklatır (etkinleştirir).";

/* ====== Private messages ====== */

$L['adm_pm_totaldb'] = "Veritabanındaki özel mesajlar";
$L['adm_pm_totalsent'] = "Gönderilen özel mesajların toplamı";

?>
