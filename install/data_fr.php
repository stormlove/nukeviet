<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 31/05/2010, 00:36
 */

if( ! defined( 'NV_MAINFILE' ) ) die( 'Stop!!!' );

$db->query( 'TRUNCATE TABLE ' . $db_config['prefix'] . '_' . $lang_data . '_modules' );
$sth = $db->prepare( 'INSERT INTO ' . $db_config['prefix'] . '_' . $lang_data . '_modules (title, module_file, module_data, module_upload, custom_title, admin_title, set_time, main_file, admin_file, theme, mobile, description, keywords, groups_view, weight, act, admins, rss, gid) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)' );
$sth->execute( array('about', 'about', 'page', 'about', 'À propos', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 1, 1, '', 1, 0) );
$sth->execute( array('news', 'news', 'news', 'news', 'News', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 2, 1, '', 1, 0) );
$sth->execute( array('users', 'users', 'users', 'users', 'Compte d&#039;utilisateur', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 3, 1, '', 0, 0) );
$sth->execute( array('contact', 'contact', 'contact', 'contact', 'Contact', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 4, 1, '', 0, 0) );
$sth->execute( array('statistics', 'statistics', 'statistics', 'statistics', 'Statistiques', '', NV_CURRENTTIME, 1, 1, '', '', '', 'online, statistics', '2', 5, 1, '', 0, 0) );
$sth->execute( array('voting', 'voting', 'voting', 'voting', 'Sondage', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 6, 1, '', 1, 0) );
$sth->execute( array('banners', 'banners', 'banners', 'banners', 'Publicité', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 7, 1, '', 0, 0) );
$sth->execute( array('seek', 'seek', 'seek', 'seek', 'Recherche', '', NV_CURRENTTIME, 1, 0, '', '', '', '', '6', 8, 1, '', 0, 0) );
$sth->execute( array('menu', 'menu', 'menu', 'menu', 'Menu Site', '', NV_CURRENTTIME, 0, 1, '', '', '', '', '6', 9, 1, '', 0, 0) );
$sth->execute( array('feeds', 'feeds', 'feeds', 'feeds', 'Rss Feeds', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 10, 1, '', 0, 0) );
$sth->execute( array('page', 'page', 'page', 'page', 'Page', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 11, 1, '', 1, 0) );
$sth->execute( array('comment', 'comment', 'comment', 'comment', 'Comment', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 12, 1, '', 0, 0) );
$sth->execute( array('siteterms', 'page', 'siteterms', 'siteterms', 'Conditions d\'utilisation', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 13, 1, '', 1, 0) );

$db->query( 'TRUNCATE TABLE ' . $db_config['prefix'] . '_' . $lang_data . '_modfuncs' );
$sth = $db->prepare( 'INSERT INTO ' . $db_config['prefix'] . '_' . $lang_data . '_modfuncs (func_id, func_name, alias, func_custom_name, in_module, show_func, in_submenu, subweight, setting) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)' );
$sth->execute( array(1, 'sitemap', 'sitemap', 'Sitemap', 'about', 0, 0, 0, '') );
$sth->execute( array(2, 'main', 'main', 'Main', 'about', 1, 0, 1, '') );
$sth->execute( array(3, 'sitemap', 'sitemap', 'Sitemap', 'news', 0, 0, 0, '') );
$sth->execute( array(5, 'content', 'content', 'Content', 'news', 1, 0, 1, '') );
$sth->execute( array(6, 'detail', 'detail', 'Detail', 'news', 1, 0, 2, '') );
$sth->execute( array(7, 'main', 'main', 'Main', 'news', 1, 0, 3, '') );
$sth->execute( array(9, 'print', 'print', 'Print', 'news', 0, 0, 0, '') );
$sth->execute( array(10, 'rating', 'rating', 'Rating', 'news', 0, 0, 0, '') );
$sth->execute( array(11, 'rss', 'rss', 'Rss', 'news', 0, 0, 0, '') );
$sth->execute( array(12, 'savefile', 'savefile', 'Savefile', 'news', 0, 0, 0, '') );
$sth->execute( array(13, 'search', 'search', 'Search', 'news', 1, 0, 4, '') );
$sth->execute( array(14, 'sendmail', 'sendmail', 'Sendmail', 'news', 0, 0, 0, '') );
$sth->execute( array(15, 'topic', 'topic', 'Topic', 'news', 1, 0, 5, '') );
$sth->execute( array(16, 'viewcat', 'viewcat', 'Viewcat', 'news', 1, 0, 6, '') );
$sth->execute( array(17, 'active', 'active', 'Active', 'users', 1, 0, 8, '') );
$sth->execute( array(18, 'changepass', 'changepass', 'Changer le mot de passe', 'users', 1, 1, 6, '') );
$sth->execute( array(19, 'editinfo', 'editinfo', 'Editinfo', 'users', 1, 0, 10, '') );
$sth->execute( array(20, 'login', 'login', 'Se connecter', 'users', 1, 1, 2, '') );
$sth->execute( array(21, 'logout', 'logout', 'Logout', 'users', 1, 1, 3, '') );
$sth->execute( array(22, 'lostactivelink', 'lostactivelink', 'Lostactivelink', 'users', 1, 0, 9, '') );
$sth->execute( array(23, 'lostpass', 'lostpass', 'Mot de passe oublié?', 'users', 1, 1, 5, '') );
$sth->execute( array(24, 'main', 'main', 'Main', 'users', 1, 0, 1, '') );
$sth->execute( array(25, 'openid', 'openid', 'Openid', 'users', 1, 1, 7, '') );
$sth->execute( array(26, 'register', 'register', 'S&#039;inscrire', 'users', 1, 1, 4, '') );
$sth->execute( array(27, 'main', 'main', 'Main', 'contact', 1, 0, 1, '') );
$sth->execute( array(28, 'allbots', 'allbots', 'Par Moteur de recherche', 'statistics', 1, 1, 6, '') );
$sth->execute( array(29, 'allbrowsers', 'allbrowsers', 'Par Navigateur', 'statistics', 1, 1, 4, '') );
$sth->execute( array(30, 'allcountries', 'allcountries', 'Par Pays', 'statistics', 1, 1, 3, '') );
$sth->execute( array(31, 'allos', 'allos', 'Par Système d&#039;exploitation', 'statistics', 1, 1, 5, '') );
$sth->execute( array(32, 'allreferers', 'allreferers', 'Par Site', 'statistics', 1, 1, 2, '') );
$sth->execute( array(33, 'main', 'main', 'Main', 'statistics', 1, 0, 1, '') );
$sth->execute( array(34, 'referer', 'referer', 'referer', 'statistics', 1, 0, 7, '') );
$sth->execute( array(35, 'main', 'main', 'Main', 'voting', 1, 0, 1, '') );
$sth->execute( array(36, 'addads', 'addads', 'Addads', 'banners', 1, 0, 1, '') );
$sth->execute( array(37, 'cledit', 'cledit', 'Cledit', 'banners', 0, 0, 0, '') );
$sth->execute( array(38, 'click', 'click', 'Click', 'banners', 0, 0, 0, '') );
$sth->execute( array(39, 'clientinfo', 'clientinfo', 'Clientinfo', 'banners', 1, 0, 2, '') );
$sth->execute( array(40, 'clinfo', 'clinfo', 'Clinfo', 'banners', 0, 0, 0, '') );
$sth->execute( array(41, 'logininfo', 'logininfo', 'Logininfo', 'banners', 0, 0, 0, '') );
$sth->execute( array(42, 'main', 'main', 'Main', 'banners', 1, 0, 3, '') );
$sth->execute( array(43, 'stats', 'stats', 'Stats', 'banners', 1, 0, 4, '') );
$sth->execute( array(44, 'viewmap', 'viewmap', 'Viewmap', 'banners', 0, 0, 0, '') );
$sth->execute( array(46, 'main', 'main', 'Main', 'seek', 1, 0, 1, '') );
$sth->execute( array(47, 'main', 'main', 'Main', 'feeds', 1, 0, 1, '') );
$sth->execute( array(48, 'regroups', 'regroups', 'Regroups', 'users', 1, 0, 11, '') );
$sth->execute( array(50, 'memberlist', 'memberlist', 'Liste des membres', 'users', 1, 1, 12, '') );
$sth->execute( array(51, 'groups', 'groups', 'Groups', 'news', 1, 0, 7, '') );
$sth->execute( array(52, 'tag', 'tag', 'Tag', 'news', 1, 0, 2, '') );
$sth->execute( array(53, 'main', 'main', 'Main', 'page', 1, 0, 1, '') );
$sth->execute( array(54, 'main', 'main', 'main', 'comment', 1, 0, 1, '') );
$sth->execute( array(55, 'post', 'post', 'post', 'comment', 1, 0, 2, '') );
$sth->execute( array(56, 'like', 'like', 'Like', 'comment', 1, 0, 3, '') );
$sth->execute( array(57, 'delete', 'delete', 'Delete', 'comment', 1, 0, 4, '') );
$sth->execute( array(58, 'avatar', 'avatar', 'Avatar', 'users', 1, 0, 13, '') );
$sth->execute( array(59, 'oauth', 'oauth', 'Oauth', 'users', 0, 0, 0, '') );
$sth->execute( array(60, 'sitemap', 'sitemap', 'Sitemap', 'page', 0, 0, 0, '') );
$sth->execute( array(61, 'rss', 'rss', 'Rss', 'page', 0, 0, 0, '') );
$sth->execute( array(62, 'rss', 'rss', 'Rss', 'about', 0, 0, 0, '') );
$sth->execute( array(63, 'changequestion', 'changequestion', 'Change Question', 'users', 1, 1, 14, '') );
$sth->execute( array(64, 'main', 'main', 'Main', 'siteterms', 1, 0, 1, '') );
$sth->execute( array(65, 'rss', 'rss', 'Rss', 'siteterms', 1, 0, 2, '') );
$sth->execute( array(66, 'sitemap', 'sitemap', 'Sitemap', 'siteterms', 0, 0, 0, ''));

$db->query( 'TRUNCATE TABLE ' . $db_config['prefix'] . '_' . $lang_data . '_modthemes' );
$sth = $db->prepare( 'INSERT INTO ' . $db_config['prefix'] . '_' . $lang_data . '_modthemes (func_id, layout, theme) VALUES  (?, ?, ?)' );
$sth->execute( array(0, 'left-body-right', 'default') );
$sth->execute( array(2, 'left-body-right', 'default') );
$sth->execute( array(5, 'left-body-right', 'default') );
$sth->execute( array(6, 'left-body-right', 'default') );
$sth->execute( array(7, 'left-body-right', 'default') );
$sth->execute( array(13, 'left-body-right', 'default') );
$sth->execute( array(15, 'left-body-right', 'default') );
$sth->execute( array(16, 'left-body-right', 'default') );
$sth->execute( array(17, 'left-body-right', 'default') );
$sth->execute( array(18, 'left-body-right', 'default') );
$sth->execute( array(20, 'left-body-right', 'default') );
$sth->execute( array(21, 'left-body-right', 'default') );
$sth->execute( array(22, 'left-body-right', 'default') );
$sth->execute( array(23, 'left-body-right', 'default') );
$sth->execute( array(24, 'left-body-right', 'default') );
$sth->execute( array(25, 'left-body-right', 'default') );
$sth->execute( array(19, 'left-body-right', 'default') );
$sth->execute( array(26, 'left-body-right', 'default') );
$sth->execute( array(27, 'left-body', 'default') );
$sth->execute( array(28, 'left-body', 'default') );
$sth->execute( array(29, 'left-body', 'default') );
$sth->execute( array(30, 'left-body', 'default') );
$sth->execute( array(31, 'left-body', 'default') );
$sth->execute( array(32, 'left-body', 'default') );
$sth->execute( array(33, 'left-body', 'default') );
$sth->execute( array(34, 'left-body', 'default') );
$sth->execute( array(36, 'left-body-right', 'default') );
$sth->execute( array(39, 'left-body-right', 'default') );
$sth->execute( array(42, 'left-body-right', 'default') );
$sth->execute( array(43, 'left-body-right', 'default') );
$sth->execute( array(46, 'left-body-right', 'default') );
$sth->execute( array(47, 'left-body-right', 'default') );
$sth->execute( array(48, 'left-body-right', 'default') );
$sth->execute( array(52, 'left-body-right', 'default') );
$sth->execute( array(53, 'body', 'default') );
$sth->execute( array(35, 'left-body-right', 'default') );
$sth->execute( array(50, 'left-body-right', 'default') );
$sth->execute( array(63, 'left-body-right', 'default') );
$sth->execute( array(64, 'left-body-right', 'default') );
$sth->execute( array(65, 'left-body-right', 'default') );

$sth->execute( array(0, 'body', 'mobile_default') );
$sth->execute( array(2, 'body', 'mobile_default') );
$sth->execute( array(5, 'body', 'mobile_default') );
$sth->execute( array(6, 'body', 'mobile_default') );
$sth->execute( array(7, 'body', 'mobile_default') );
$sth->execute( array(13, 'body', 'mobile_default') );
$sth->execute( array(15, 'body', 'mobile_default') );
$sth->execute( array(16, 'body', 'mobile_default') );
$sth->execute( array(17, 'body', 'mobile_default') );
$sth->execute( array(18, 'body', 'mobile_default') );
$sth->execute( array(19, 'body', 'mobile_default') );
$sth->execute( array(20, 'body', 'mobile_default') );
$sth->execute( array(21, 'body', 'mobile_default') );
$sth->execute( array(22, 'body', 'mobile_default') );
$sth->execute( array(23, 'body', 'mobile_default') );
$sth->execute( array(24, 'body', 'mobile_default') );
$sth->execute( array(25, 'body', 'mobile_default') );
$sth->execute( array(26, 'body', 'mobile_default') );
$sth->execute( array(27, 'body', 'mobile_default') );
$sth->execute( array(28, 'body', 'mobile_default') );
$sth->execute( array(29, 'body', 'mobile_default') );
$sth->execute( array(30, 'body', 'mobile_default') );
$sth->execute( array(31, 'body', 'mobile_default') );
$sth->execute( array(32, 'body', 'mobile_default') );
$sth->execute( array(33, 'body', 'mobile_default') );
$sth->execute( array(34, 'body', 'mobile_default') );
$sth->execute( array(36, 'body', 'mobile_default') );
$sth->execute( array(39, 'body', 'mobile_default') );
$sth->execute( array(42, 'body', 'mobile_default') );
$sth->execute( array(43, 'body', 'mobile_default') );
$sth->execute( array(46, 'body', 'mobile_default') );
$sth->execute( array(47, 'body', 'mobile_default') );
$sth->execute( array(48, 'body', 'mobile_default') );
$sth->execute( array(35, 'body', 'mobile_default') );
$sth->execute( array(50, 'body', 'mobile_default') );
$sth->execute( array(63, 'body', 'mobile_default') );
$sth->execute( array(64, 'body', 'mobile_default') );
$sth->execute( array(65, 'body', 'mobile_default') );

$db->query( 'TRUNCATE TABLE ' . $db_config['prefix'] . '_' . $lang_data . '_blocks_groups' );
$sth = $db->prepare( 'INSERT INTO ' . $db_config['prefix'] . '_' . $lang_data . '_blocks_groups (bid, theme, module, file_name, title, link, template, position, exp_time, active, groups_view, all_func, weight, config) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)' );
$sth->execute( array(1, 'default', 'news', 'global.block_category.php', 'Menu', '', '', '[LEFT]', 0, '1', '6', 1, 1, 'a:2:{s:5:"catid";i:0;s:12:"title_length";i:25;}') );
$sth->execute( array(2, 'default', 'statistics', 'global.counter_button.php', 'Online button', '', 'no_title', '[QR_CODE]', 0, '1', '6', 1, 2, '') );
$sth->execute( array(3, 'default', 'banners', 'global.banners.php', 'Publicité à côté', '', '', '[LEFT]', 0, '1', '6', 1, 3, 'a:1:{s:12:"idplanbanner";i:2;}') );
$sth->execute( array(4, 'default', 'about', 'global.about.php', 'À Propos', '', 'border', '[RIGHT]', 0, '1', '6', 1, 1, '') );
$sth->execute( array(5, 'default', 'users', 'global.user_button.php', 'Identification', '', 'no_title', '[PERSONALAREA]', 0, '1', '6', 1, 1, '') );
$sth->execute( array(6, 'default', 'voting', 'global.voting.php', 'Sondage', '', '', '[RIGHT]', 0, '1', '6', 1, 3, '') );
$sth->execute( array(7, 'default', 'news', 'module.block_headline.php', 'Hot news', '', 'no_title', '[TOP]', 0, '1', '6', 0, 1, 'a:3:{s:11:"showtooltip";i:1;s:16:"tooltip_position";s:6:"bottom";s:14:"tooltip_length";s:3:"150";}') );
$sth->execute( array(8, 'default', 'banners', 'global.banners.php', 'Publicité du centre', '', 'no_title', '[TOP]', 0, '1', '6', 1, 2, 'a:1:{s:12:"idplanbanner";i:1;}') );
$sth->execute( array(9, 'default', 'theme', 'global.company_info.php', 'Management Company', '', 'simple', '[COMPANY_INFO]', 0, '1', '6', 1, 1, 'a:11:{s:12:"company_name";s:51:"Vietnam Open Source Development Joint Stock Company";s:16:"company_sortname";s:12:"VINADES.,JSC";s:15:"company_regcode";s:0:"";s:16:"company_regplace";s:0:"";s:21:"company_licensenumber";s:0:"";s:22:"company_responsibility";s:0:"";s:15:"company_address";s:74:"Room 2004 - CT2 Nang Huong Building, 583 Nguyen Trai str., Ha Noi, VietNam";s:13:"company_phone";s:14:"+84-4-85872007";s:11:"company_fax";s:14:"+84-4-35500914";s:13:"company_email";s:18:"contact@vinades.vn";s:15:"company_website";s:17:"http://vinades.vn";}') );
$sth->execute( array(10, 'default', 'theme', 'global.QR_code.php', 'QR code', '', 'no_title', '[QR_CODE]', 0, '1', '6', 1, 1, 'a:3:{s:5:"level";s:1:"M";s:15:"pixel_per_point";i:4;s:11:"outer_frame";i:1;}') );
$sth->execute( array(11, 'default', 'contact', 'global.contact_form.php', 'Feedback', '', 'no_title', '[FOOTER_SITE]', 0, '1', '6', 1, 2, '') );
$sth->execute( array(17, 'default', 'theme', 'global.bootstrap.php', 'Menu Site', '', 'no_title', '[MENU_SITE]', 0, '1', '6', 1, 1, 'a:2:{s:6:"menuid";i:1;s:12:"title_length";i:20;}') );
$sth->execute( array(18, 'default', 'contact', 'global.contact_default.php', 'Contact Default', '', 'no_title', '[CONTACT_DEFAULT]', 0, '1', '6', 1, 1, '') );
$sth->execute( array(19, 'default', 'theme', 'global.copyright.php', 'Copyright', '', 'no_title', '[FOOTER_SITE]', 0, '1', '6', 1, 1, 'a:5:{s:12:"copyright_by";s:0:"";s:13:"copyright_url";s:0:"";s:9:"design_by";s:12:"VINADES.,JSC";s:10:"design_url";s:18:"http://vinades.vn/";s:13:"siteterms_url";s:'. ( 38 + strlen( NV_BASE_SITEURL ) ).':"' . NV_BASE_SITEURL . 'index.php?language=' . $lang_data . '&amp;nv=siteterms";}') );
$sth->execute( array(21, 'default', 'page', 'global.html.php', 'Social icon', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', '6', 1, 1, 'a:1:{s:11:"htmlcontent";s:310:"<ul><li><a href="#"><i class="fa fa-facebook">&nbsp;</i></a></li><li><a href="#"><i class="fa fa-google-plus">&nbsp;</i></a></li><li><a href="#"><i class="fa fa-youtube">&nbsp;</i></a></li><li><a href="#"><i class="fa fa-twitter">&nbsp;</i></a></li><li><a href="#"><i class="fa fa-rss">&nbsp;</i></a></li></ul>";}') );
$sth->execute( array(22, 'default', 'theme', 'global.menu_footer.php', 'Menu', '', 'simple', '[MENU_FOOTER]', 0, '1', '6', 1, 1, 'a:1:{s:14:"module_in_menu";a:8:{i:0;s:5:"about";i:1;s:4:"news";i:2;s:5:"users";i:3;s:7:"contact";i:4;s:6:"voting";i:5;s:7:"banners";i:6;s:4:"seek";i:7;s:5:"feeds";}}') );
$sth->execute( array(20, 'mobile_default', 'menu', 'global.metismenu.php', 'Menu Site', '', 'no_title', '[MENU_SITE]', 0, '1', '6', 1, 1, 'a:2:{s:6:"menuid";i:1;s:12:"title_length";i:0;}') );
$sth->execute( array(23, 'mobile_default', 'theme', 'global.copyright.php', 'Copyright', '', 'no_title', '[FOOTER_SITE]', 0, '1', '6', 1, 1, 'a:5:{s:12:"copyright_by";s:0:"";s:13:"copyright_url";s:0:"";s:9:"design_by";s:12:"VINADES.,JSC";s:10:"design_url";s:18:"http://vinades.vn/";s:13:"siteterms_url";s:35:"/index.php?language=fr&nv=siteterms";}') );
$sth->execute( array(25, 'mobile_default', 'users', 'global.user_button.php', 'Sign In', '', 'no_title', '[MENU_SITE]', 0, '1', '6', 1, 1, '') );
$sth->execute( array(26, 'mobile_default', 'theme', 'global.menu_footer.php', 'Catégories', '', 'primary', '[MENU_FOOTER]', 0, '1', '6', 1, 1, 'a:1:{s:14:"module_in_menu";a:9:{i:0;s:5:"about";i:1;s:4:"news";i:2;s:5:"users";i:3;s:7:"contact";i:4;s:6:"voting";i:5;s:7:"banners";i:6;s:4:"seek";i:7;s:5:"feeds";i:8;s:9:"siteterms";}}') );
$sth->execute( array(27, 'mobile_default', 'theme', 'global.company_info.php', 'Management Company', '', 'primary', '[COMPANY_INFO]', 0, '1', '6', 1, 1, 'a:11:{s:12:"company_name";s:51:"Vietnam Open Source Development Joint Stock Company";s:16:"company_sortname";s:12:"VINADES.,JSC";s:15:"company_regcode";s:0:"";s:16:"company_regplace";s:0:"";s:21:"company_licensenumber";s:0:"";s:22:"company_responsibility";s:0:"";s:15:"company_address";s:74:"Room 2004 - CT2 Nang Huong Building, 583 Nguyen Trai str., Ha Noi, VietNam";s:13:"company_phone";s:14:"+84-4-85872007";s:11:"company_fax";s:14:"+84-4-35500914";s:13:"company_email";s:18:"contact@vinades.vn";s:15:"company_website";s:17:"http://vinades.vn";}') );
$sth->execute( array(28, 'mobile_default', 'contact', 'global.contact_default.php', 'Contact Default', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', '6', 1, 1, '') );
$sth->execute( array(29, 'mobile_default', 'theme', 'global.social.php', 'Social icon', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', '6', 1, 3, 'a:4:{s:8:"facebook";s:32:"http://www.facebook.com/nukeviet";s:11:"google_plus";s:32:"https://www.google.com/+nukeviet";s:7:"youtube";s:37:"https://www.youtube.com/user/nukeviet";s:7:"twitter";s:28:"https://twitter.com/nukeviet";}') );
$sth->execute( array(30, 'mobile_default', 'theme', 'global.QR_code.php', 'QR code', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', '6', 1, 4, 'a:3:{s:5:"level";s:1:"L";s:15:"pixel_per_point";i:4;s:11:"outer_frame";i:1;}') );
$sth->execute( array(31, 'mobile_default', 'contact', 'global.contact_form.php', 'Feedback', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', '6', 1, 2, '') );

// Thiết lập Block
$db->query( 'TRUNCATE TABLE ' . $db_config['prefix'] . '_' . $lang_data . '_blocks_weight' );

$array_funcid = array();
$array_funcid_mod = array();
$array_weight_block = array();

$func_result = $db->query( 'SELECT func_id, func_name, in_module FROM ' . $db_config['prefix'] . '_' . $lang_data . '_modfuncs WHERE show_func = 1 ORDER BY in_module ASC, subweight ASC' );
while( list( $func_id_i, $func_name, $in_module ) = $func_result->fetch( 3 ) )
{
	$array_funcid[] = $func_id_i;
	$array_funcid_mod[$in_module][$func_name] = $func_id_i;
}

$func_result = $db->query( 'SELECT * FROM ' . $db_config['prefix'] . '_' . $lang_data . '_blocks_groups ORDER BY theme ASC, position ASC, weight ASC' );
while( $row = $func_result->fetch() )
{
	if( $row['all_func']==1 )
	{
		$array_funcid_i = $array_funcid;
	}
	else
	{
		$array_funcid_i = $array_funcid_mod[$row['module']];

		$xml = simplexml_load_file( NV_ROOTDIR . '/themes/' . $row['theme'] . '/config.ini' );
		$blocks = $xml->xpath( 'setblocks/block' );
		for( $i = 0, $count = sizeof( $blocks ); $i < $count; ++$i )
		{
			$rowini = (array)$blocks[$i];
			if( $rowini['module'] == $row['module'] AND $rowini['file_name'] == $row['file_name'] )
			{
				$array_funcid_i = array();
				if( ! is_array( $rowini['funcs'] ) )
				{
					$rowini['funcs'] = array( $rowini['funcs'] );
				}
				foreach( $rowini['funcs'] as $_funcs_list )
				{
					list( $mod, $func_list ) = explode( ':', $_funcs_list );
					$func_array = explode( ',', $func_list );
					foreach( $func_array as $_func )
					{
						if( isset( $array_funcid_mod[$row['module']][$_func] ))
						{
							$array_funcid_i[] = $array_funcid_mod[$row['module']][$_func];
						}
					}
				}
				break;
			}
		}
	}

	foreach( $array_funcid_i as $func_id )
	{
		if( isset($array_weight_block[$row['theme']][$row['position']][$func_id]) )
		{
			$weight = $array_weight_block[$row['theme']][$row['position']][$func_id] + 1;
		}
		else
		{
			$weight = 1;
		}
		$array_weight_block[$row['theme']][$row['position']][$func_id] = $weight;

		$db->query( 'INSERT INTO ' . $db_config['prefix'] . '_' . $lang_data . '_blocks_weight (bid, func_id, weight) VALUES (' . $row['bid'] . ', ' . $func_id . ', ' . $weight . ')' );
	}
}

$disable_site_content = 'Notre site est fermé temporairement pour la maintenance. Veuillez revenir plus tard. Merci!';
$site_description = 'Partager le succès, connectez passions';

$db->query( "UPDATE " . $db_config['prefix'] . "_config SET config_value = " . $db->quote( $site_description ) . " WHERE module = 'global' AND config_name = 'site_description' AND lang='fr'" );
$db->query( "UPDATE " . $db_config['prefix'] . "_config SET config_value = " . $db->quote( $disable_site_content ) . " WHERE module = 'global' AND config_name = 'disable_site_content' AND lang='fr'" );

$array_cron_name = array();
$array_cron_name['cron_online_expired_del'] = 'Supprimer les anciens registres du status en ligne dans la base de données';
$array_cron_name['cron_dump_autobackup'] = 'Sauvegarder automatique la base de données';
$array_cron_name['cron_auto_del_temp_download'] = 'Supprimer les fichiers temporaires du répertoire tmp';
$array_cron_name['cron_del_ip_logs'] = 'Supprimer les fichiers ip_logs expirés';
$array_cron_name['cron_auto_del_error_log'] = 'Supprimer les fichiers error_log expirés';
$array_cron_name['cron_auto_sendmail_error_log'] = 'Envoyer à l\'administrateur l\'e-mail des notifications d\'erreurs';
$array_cron_name['cron_ref_expired_del'] = 'Supprimer les referers expirés';
$array_cron_name['cron_siteDiagnostic_update'] = 'Mise à jour du site de diagnostic';
$array_cron_name['cron_auto_check_version'] = 'Vérifier la version NukeViet';
$array_cron_name['cron_notification_autodel'] = 'Supprimer vieille notification';

$result = $db->query( 'SELECT id, run_func FROM ' . $db_config['prefix'] . '_cronjobs ORDER BY id ASC' );
while( list( $id, $run_func ) = $result->fetch( 3 ) )
{
	$cron_name = ( isset( $array_cron_name[$run_func] ) ) ? $array_cron_name[$run_func] : $run_func;
	$db->query( "UPDATE " . $db_config['prefix'] . "_cronjobs SET " . $lang_data . "_cron_name = " . $db->quote( $cron_name ) . " WHERE id=" . $id );
}

$db->query( "UPDATE " . $db_config['prefix'] . "_config SET config_value = '" . $global_config['site_theme'] . "' WHERE lang = '" . $lang_data . "' AND module = 'global' AND config_name = 'site_theme'" );

$result = $db->query( "SELECT COUNT(*) FROM " . $db_config['prefix'] . "_" . $lang_data . "_modules where title='" . $global_config['site_home_module'] . "'" );
if( $result->fetchColumn() )
{
	$db->query( "UPDATE " . $db_config['prefix'] . "_config SET config_value = '" . $global_config['site_home_module'] . "' WHERE module = 'global' AND config_name = 'site_home_module' AND lang='" . $lang_data . "'" );
}