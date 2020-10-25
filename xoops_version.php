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

$modversion['name'] = _MI_SUPPORTS_NAME;
$modversion['version'] = 0.2;
$modversion['description'] = _MI_SUPPORTS_DESC;
$modversion['credits'] = 'The XOOPS Project<br><a href="http://tw.xoops.org/" target="_blank">http://tw.xoops.org/</a><br>Logo by Typhon4x';
$modversion['author'] = 'K&eacute;vin Dunglas - <a href="http://www.exploz.com" target="_blank">ExploZ.Com</a>';
$modversion['help'] = 'http://www.exploz.com/';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'images/supports_slogo.png';
$modversion['dirname'] = 'supports';

//Admin things
$modversion['hasAdmin'] = 0;
$modversion['adminmenu'] = '';

// Menu
$modversion['hasMain'] = 1;

// Templates
$modversion['templates'][1]['file'] = 'supports_main.html';
$modversion['templates'][1]['description'] = 'Main Page';

// Blocks
$modversion['blocks'][1]['file'] = 'supports.php';
$modversion['blocks'][1]['name'] = _MI_SUPPORTS_NAME;
$modversion['blocks'][1]['description'] = 'Shows news in MSN Messenger and the Mozilla SideBar';
$modversion['blocks'][1]['show_func'] = 'b_supports';
$modversion['blocks'][1]['template'] = 'supports_block.html';
