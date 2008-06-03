<?php
// +---------------------------------------------------------------------------+
// | Media Gallery Plugin 1.6                                                  |
// +---------------------------------------------------------------------------+
// | $Id::                                                                    $|
// +---------------------------------------------------------------------------+
// | Copyright (C) 2005-2008 by the following authors:                         |
// |                                                                           |
// | Mark R. Evans              - mark@gllabs.org                              |
// +---------------------------------------------------------------------------+
// |                                                                           |
// | This program is free software; you can redistribute it and/or             |
// | modify it under the terms of the GNU General Public License               |
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
// | GNU General Public License for more details.                              |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software Foundation,   |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.           |
// |                                                                           |
// +---------------------------------------------------------------------------+
//

require_once('../lib-common.php');

if (!function_exists('MG_usage')) {
    // The plugin is disabled
    $display = COM_siteHeader();
    $display .= COM_startBlock('Plugin disabled');
    $display .= '<br' . XHTML . '>The Media Gallery plugin is currently disabled.';
    $display .= COM_endBlock();
    $display .= COM_siteFooter(true);
    echo $display;
    exit;
}

if ( (!isset($_USER['uid']) || $_USER['uid'] < 2) && $_MG_CONF['loginrequired'] == 1 )  {
    $display = MG_siteHeader();
    $display .= COM_startBlock ($LANG_LOGIN[1], '',
              COM_getBlockTemplate ('_msg_block', 'header'));
    $login = new Template($_CONF['path_layout'] . 'submit');
    $login->set_file (array ('login'=>'submitloginrequired.thtml'));
    $login->set_var ('login_message', $LANG_LOGIN[2]);
    $login->set_var ('site_url', $_CONF['site_url']);
    $login->set_var ('lang_login', $LANG_LOGIN[3]);
    $login->set_var ('lang_newuser', $LANG_LOGIN[4]);
    $login->parse ('output', 'login');
    $display .= $login->finish ($login->get_var('output'));
    $display .= COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));
    $display .= COM_siteFooter();
    echo $display;
    exit;
}

/*
* Main Function
*/

$album_id    = COM_applyFilter($_GET['aid'],true);
$src         = COM_applyFilter($_GET['src']);
if ( isset($_GET['sort'])) {
    $sortOrder = COM_applyFilter($_GET['sort'],true);
} else {
    $sortOrder = 0;
}

if ( isset($_GET['f']) ) {
    $full = COM_applyFilter($_GET['f'],true);
} else {
    $full = 0;
}


if ( $src != 'disp' && $src != 'orig' ) {
    $src = 'disp';
}

if ( $MG_albums[$album_id]->full == 2 || $_MG_CONF['discard_original'] == 1 || ( $MG_albums[$album_id]->full == 1 && empty($_USER['username']))) {
    $src = 'disp';
    $noFullOption = 1;
} else {
    $noFullOption = 0;
}

$themeStyle = MG_getThemeCSS($album_id);
$display = MG_siteHeader(strip_tags($MG_albums[$album_id]->title));

$T = new Template( MG_getTemplatePath($album_id) );
$T->set_file (array(
    'page'  =>  'fslideshow.thtml',
    'empty' =>  'slideshow_empty.thtml'
));
$T->set_var('header', $LANG_MG00['plugin']);
$T->set_var('site_url',$_MG_CONF['site_url']);
$T->set_var('plugin','mediagallery');
$T->set_var('xhtml',XHTML);

if ($MG_albums[$album_id]->access == 0 ) {
    $display .= COM_startBlock ($LANG_ACCESS['accessdenied'], '',COM_getBlockTemplate ('_msg_block', 'header'))
                . '<br' . XHTML . '>' . $LANG_MG00['access_denied_msg']
                . COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));
    $display .= MG_siteFooter();
    echo $display;
    exit;
}

$album_title  = $MG_albums[$album_id]->title;
$album_desc   = $MG_albums[$album_id]->description;
$album_parent = $MG_albums[$album_id]->parent;

MG_usage('slideshow',$album_title,'','');

$birdseed = '<a href="' . $_CONF['site_url'] . '/index.php">' . $LANG_MG03['home'] . '</a> ' . $_MG_CONF['seperator'] . ' <a href="' . $_MG_CONF['site_url'] . '/index.php">' . $_MG_CONF['menulabel'] . '</a> ' . $MG_albums[$album_id]->getPath(1,$sortOrder,1);

switch ( $MG_albums[$album_id]->display_image_size ) {
    case 0 :
        $dImageWidth = 500;
        $dImageHeight = 375;
        break;
    case 1 :
        $dImageWidth = 600;
        $dImageHeight = 450;
        break;
    case 2 :
        $dImageWidth = 620;
        $dImageHeight = 465;
        break;
    case 3 :
        $dImageWidth = 720;
        $dImageHeight = 540;
        break;
    case 4 :
        $dImageWidth = 800;
        $dImageHeight = 600;
        break;
    case 5 :
        $dImageWidth = 912;
        $dImageHeight = 684;
        break;
    case 6 :
        $dImageWidth = 1024;
        $dImageHeight = 768;
        break;
    case 7 :
        $dImageWidth = 1152;
        $dImageHeight = 804;
        break;
    case 8 :
        $dImageWidth = 1280;
        $dImageHeight = 1024;
        break;
    case 9 :
        $dImageWidth = $_MG_CONF['custom_image_width'];
        $dImageHeight = $_MG_CONF['custom_image_height'];
        break;
    default :
        $dImageWidth  = 620;
        $dImageHeight = 465;
        break;
}

$T->set_var(array(
    'birdseed'              => $birdseed,
    'pagination'            => '<a href="' . $_MG_CONF['site_url'] . '/album.php?aid=' . $album_id . '&amp;page=1&amp;sort=' . $sortOrder . '">' . $LANG_MG03['return_to_album'] .'</a>',
    'slideshow'             => $_MG_CONF['site_url'] . '/slideshow.php?aid=' . $album_id . '&amp;f=' . ($full ? '0' : '1') . '&amp;sort=' . $sortOrder ,
    'slideshow_size'        => ($full ? $LANG_MG03['normal_size'] : $LANG_MG03['full_size']),
    'album_title'           => $album_title,
    'aid'                   => $album_id,
    'site_url'              => $_MG_CONF['site_url'],
    'home'                  => $LANG_MG03['home'],
    'return_to_album'       => $LANG_MG03['return_to_album'],
    'no_flash'              => $LANG_MG03['no_flash'],
    'src'                   => $src,
    'fullscreen'            => $noFullOption == 1 ? 'false' : 'true',
    'height'                => $dImageHeight,
    'width'                 => $dImageWidth,
));

$T->parse('output','page');

$display .= $T->finish($T->get_var('output'));
$display .= MG_siteFooter();

echo $display;
?>