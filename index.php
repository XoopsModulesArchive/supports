<?php

//  ------------------------------------------------------------------------ //
//                    _____            _      _____                          //
//                   | ____|_  ___ __ | | ___|__  /                          //
//                   |  _| \ \/ / '_ \| |/ _ \ / /                           //
//                   | |___ >  <| |_) | | (_) / /_                           //
//                   |_____/_/\_\ .__/|_|\___/____|                          //
//                              |_|                                          //
//                       http://www.exploz.com/                              //
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <https://www.xoops.org>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
// Author:   Kévin Dunglas <kevin@votre-espace.com>                          //
// URL:      http://www.exploz.com/                                          //
// Project:  The XOOPS Project (https://www.xoops.org/)                       //
// ------------------------------------------------------------------------- //

require __DIR__ . '/header.php';
$GLOBALS['xoopsOption']['template_main'] = 'supports_main.html';

// Include the page header
require XOOPS_ROOT_PATH . '/header.php';

$xoopsTpl->assign('sitename', $xoopsConfig['sitename']);
$xoopsTpl->assign('slogan', $xoopsConfig['slogan']);
$module_url = XOOPS_URL . '/modules/' . $xoopsModule->getVar('dirname');
$xoopsTpl->assign('module_url', $module_url);
$xoopsTpl->assign('msn', _SUPPORTS_MSN);
$xoopsTpl->assign('sidebar', _SUPPORTS_SIDEBAR);
$xoopsTpl->assign('install_msn1', _SUPPORTS_INSTALL_MSN1 . ' ' . $xoopsConfig['sitename'] . ' ' . _SUPPORTS_INSTALL_MSN2);
$xoopsTpl->assign('install_msn2', _SUPPORTS_INSTALL_MSN3);
$xoopsTpl->assign('install_msn3', _SUPPORTS_INSTALL_MSN4);
$xoopsTpl->assign('erreur_mozilla', _SUPPORTS_ERREUR_MOZILLA);
$xoopsTpl->assign('install_sidebar', _SUPPORTS_INSTALL_SIDEBAR);
$xoopsTpl->assign('active_sidebar1', _SUPPORTS_ACTIVE_SIDEBAR1);
$xoopsTpl->assign('active_sidebar2', _SUPPORTS_ACTIVE_SIDEBAR2);

// Include the page footer
require XOOPS_ROOT_PATH . '/footer.php';
