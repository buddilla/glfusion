<?php
###############################################################################
# turkish.php
# This is the turkish language page for the glFusion Static Page Plug-in!
#
# Copyright (C) 2003 ScriptEvi.com
# webmaster@scriptevi.com
# http://www.scriptevi.com
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
#
###############################################################################

if (!defined ('GVERSION')) {
    die ('This file can not be used on its own.');
}

global $LANG32;

###############################################################################
# Array Format:
# $LANGXX[YY]:  $LANG - variable name
#               XX    - file id number
#               YY    - phrase id number
###############################################################################

$LANG_STATIC = array(
    'newpage' => 'Yeni Sayfa',
    'adminhome' => 'Y�netim Sayfas�',
    'staticpages' => 'Statik Sayfalar',
    'staticpageeditor' => 'Statik Sayfa D�zenleyicisi',
    'writtenby' => 'Yazan',
    'date' => 'Son G�ncelleme',
    'title' => 'Ba�l�k',
    'content' => '��erik',
    'hits' => 'Hit',
    'staticpagelist' => 'Statik Sayfa Listesi',
    'url' => 'URL',
    'edit' => 'D�zenle',
    'lastupdated' => 'Son G�ncelleme',
    'pageformat' => 'Sayfa Format�',
    'leftrightblocks' => 'Sol & Sa� Bloklar',
    'blankpage' => 'Bo� Sayfa',
    'noblocks' => 'Bloklar Yok',
    'leftblocks' => 'Sol Bloklar',
    'addtomenu' => 'Men�ye Ekle',
    'label' => 'Etiket',
    'nopages' => 'Hen�z sistemde statik sayfalar yok',
    'save' => 'kaydet',
    'preview' => '�nizleme',
    'delete' => 'sil',
    'cancel' => 'vazge�',
    'access_denied' => 'Giri� Engellendi',
    'access_denied_msg' => 'Statik Sayfalar y�netim sayfalar�na yetkisiz giri� demesi yap�yorsunuz. Not: Bu sayfalara yetkisiz giri� denemelerinin hepsi kaydedilmektedir',
    'all_html_allowed' => 'B�t�n HTML kodlar� kullan�labilir',
    'results' => 'Statik Sayfalar Sonu�lar�',
    'author' => 'Yazar',
    'no_title_or_content' => 'En az�ndan <b>Ba�l�k</b> ve <b>��erik</b> b�l�mlerini doldurmal�s�n�z.',
    'no_such_page_anon' => 'L�tfen giri� yap�n..',
    'no_page_access_msg' => "Bu olabilir ��nk� giri� yapmad�n�z yada {$_CONF['site_name']} nin kay�tl� bir �yesi de�ilsiniz. {$_CONF['site_name']} nin t�m �yelik giri�lerini elde etmek i�in l�tfen <a href=\"{$_CONF['site_url']}/users.php?mode=new\"> yeni bir �ye olun</a>",
    'php_msg' => 'PHP: ',
    'php_warn' => 'Uyar�: �ayet bu se�ene�i kullan�rsan�z, sayfan�z PHP kodunda de�erlendirilir. Dikkatli kullan�n !!',
    'exit_msg' => '��k�� Tipi: ',
    'exit_info' => 'Giri� Mesaj� �stemeyi olanakl� k�lar. Normal g�venlik kontrol� ve mesaj� i�in i�areti kald�r�n.',
    'deny_msg' => 'Bu sayfaya giri� engellendi. Bu sayfa ta��nd� yada kald�r�ld� veya yeterli izniniz yok.',
    'stats_headline' => 'Top On Statik Sayfa',
    'stats_page_title' => 'Sayfa Ba�l���',
    'stats_hits' => 'Hit',
    'stats_no_hits' => 'It appears that there are no static pages on this site or no one has ever viewed them.',
    'id' => 'ID',
    'duplicate_id' => 'Bu statik sayfa i�in se�ti�iniz ID zaten kullan�l�yor. L�tfen ba�ka ID se�in.',
    'instructions' => 'Bir statik sayfay� d�zenlemek yada silmek isterseniz, a�a��daki sayfa numaras�na t�klay�n�z. Bir statik sayfay� g�r�nt�leme, g�rmek istedi�iniz sayfan�n ba�l���na t�kly�n�z. Yeni bir statik sayfa yaratmak i�in �stteki Yeni Sayfa linkine t�klay�n. [C] \'ye t�klayarak varolan sayfan�n bir kopyas�n� yarat�rs�n�z.',
    'centerblock' => 'Ortablok: ',
    'centerblock_msg' => '��aretlenirse, bu statik sayfa index sayfas�nda bir orta blokda g�r�nt�lenecektir.',
    'topic' => 'Konu: ',
    'position' => 'Pozisyon: ',
    'all_topics' => 'Hepsi',
    'no_topic' => 'Sadece Ana Sayfa',
    'position_top' => 'Sayfan�n �st�',
    'position_feat' => 'G�n�n Yaz�s�ndan Sonra',
    'position_bottom' => 'Sayfan�n Alt�',
    'position_entire' => 'Tam Sayfa',
    'position_nonews' => 'Only if No Other News',
    'head_centerblock' => 'Ortablok',
    'centerblock_no' => 'Yok',
    'centerblock_top' => '�st',
    'centerblock_feat' => 'G�n. Yaz�s�',
    'centerblock_bottom' => 'Alt',
    'centerblock_entire' => 'Tam Sayfa',
    'centerblock_nonews' => 'If No News',
    'inblock_msg' => 'In a block: ',
    'inblock_info' => 'Wrap Static Page in a block.',
    'title_edit' => 'Edit page',
    'title_copy' => 'Make a copy of this page',
    'title_display' => 'Display page',
    'select_php_none' => 'do not execute PHP',
    'select_php_return' => 'execute PHP (return)',
    'select_php_free' => 'execute PHP',
    'php_not_activated' => "The use of PHP in static pages is not activated. Please see the <a href=\"{$_CONF['site_url']}/docs/staticpages.html#php\">documentation</a> for details.",
    'printable_format' => 'Printable Format',
    'copy' => 'Copy',
    'limit_results' => 'Limit Results',
    'search' => 'Search',
    'submit' => 'Submit',
    'delete_confirm' => 'Are you sure you want to delete this page?',
    'allnhp_topics' => 'All Topics (No Homepage)'
);
###############################################################################
# autotag descriptions

$LANG_SP_AUTOTAG = array(
    'desc_staticpage' => 'Link: to a staticpage on this site; link_text defaults to staticpage title. usage: [staticpage:<i>page_id</i> {link_text}]',
    'desc_staticpage_content' => 'HTML: renders the content of a staticpage.  usage: [staticpage_content:<i>page_id</i>]'
);


$PLG_staticpages_MESSAGE19 = '';
$PLG_staticpages_MESSAGE20 = '';

// Messages for the plugin upgrade
$PLG_staticpages_MESSAGE3001 = 'Plugin upgrade not supported.';
$PLG_staticpages_MESSAGE3002 = $LANG32[9];

// Localization of the Admin Configuration UI
$LANG_configsections['staticpages'] = array(
    'label' => 'Static Pages',
    'title' => 'Static Pages Configuration'
);

$LANG_confignames['staticpages'] = array(
    'allow_php' => 'Allow PHP?',
    'sort_by' => 'Sort Centerblocks by',
    'sort_menu_by' => 'Sort Menu Entries by',
    'delete_pages' => 'Delete Pages with Owner?',
    'in_block' => 'Wrap Pages in Block?',
    'show_hits' => 'Show Hits?',
    'show_date' => 'Show Date?',
    'filter_html' => 'Filter HTML?',
    'censor' => 'Censor Content?',
    'default_permissions' => 'Page Default Permissions',
    'aftersave' => 'After Saving Page',
    'atom_max_items' => 'Max. Pages in Webservices Feed',
    'comment_code' => 'Comment Default',
    'include_search' => 'Site Search Default',
    'status_flag' => 'Default Page Mode'
);

$LANG_configsubgroups['staticpages'] = array(
    'sg_main' => 'Main Settings'
);

$LANG_fs['staticpages'] = array(
    'fs_main' => 'Static Pages Main Settings',
    'fs_permissions' => 'Default Permissions'
);

// Note: entries 0, 1, 9, and 12 are the same as in $LANG_configselects['Core']
$LANG_configselects['staticpages'] = array(
    0 => array('True' => 1, 'False' => 0),
    1 => array('True' => true, 'False' => false),
    2 => array('Date' => 'date', 'Page ID' => 'id', 'Title' => 'title'),
    3 => array('Date' => 'date', 'Page ID' => 'id', 'Title' => 'title', 'Label' => 'label'),
    9 => array('Forward to page' => 'item', 'Display List' => 'list', 'Display Home' => 'home', 'Display Admin' => 'admin'),
    12 => array('No access' => 0, 'Read-Only' => 2, 'Read-Write' => 3),
    13 => array('Enabled' => 1, 'Disabled' => 0),
    17 => array('Comments Enabled' => 0, 'Comments Disabled' => -1)
);

?>