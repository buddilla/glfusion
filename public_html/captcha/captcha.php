<?php
// +--------------------------------------------------------------------------+
// | CAPTCHA Plugin - glFusion CMS                                            |
// +--------------------------------------------------------------------------+
// | captcha.php                                                              |
// |                                                                          |
// | Displays the CAPTCHA block                                               |
// +--------------------------------------------------------------------------+
// | Copyright (C) 2002-2016 by the following authors:                        |
// |                                                                          |
// | Mark R. Evans          mark AT glfusion DOT org                          |
// |                                                                          |
// | Orignal Author of captcha.class.php                                      |
// |    Pascal Rehfeldt <Pascal@Pascal-Rehfeldt.com>                          |
// +--------------------------------------------------------------------------+
// |                                                                          |
// | This program is free software; you can redistribute it and/or            |
// | modify it under the terms of the GNU General Public License              |
// | as published by the Free Software Foundation; either version 2           |
// | of the License, or (at your option) any later version.                   |
// |                                                                          |
// | This program is distributed in the hope that it will be useful,          |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
// | GNU General Public License for more details.                             |
// |                                                                          |
// | You should have received a copy of the GNU General Public License        |
// | along with this program; if not, write to the Free Software Foundation,  |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.          |
// |                                                                          |
// +--------------------------------------------------------------------------+

require_once '../lib-common.php';

//Load the Class
require $_CONF['path'] . 'plugins/captcha/class/captcha.class.php';

// see if an existing session_id is passed
if (isset($_GET['csid']) ) {
    $csid = COM_applyFilter($_GET['csid']);
} else {
    die("Invalid session id");
}

//Create a CAPTCHA
$captcha = new captcha($csid);
?>