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
// Author:   Liya <wolfliya@mail2000.com.tw>                                 //                                                         //
//           Kévin Dunglas <kevin@votre-espace.com>                          //
//                                                                           //
// URL:      http://tw.xoops.org/                                            //
//           http://www.exploz.com/                                          //
//                                                                           //
// Project:  The XOOPS Project (https://www.xoops.org/)                       //
// ------------------------------------------------------------------------- //

require __DIR__ . '/header.php';
require_once XOOPS_ROOT_PATH . '/class/xoopsformloader.php';

if ('bar' == $_GET['type']) {
    $target = '_content';
} else {
    $target = '_blank';
}
?>
<!DOCTYPE html PUBLIC '//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?= $xoopsConfig['sitename'] ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?= XOOPS_URL ?>/xoops.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?= XOOPS_URL ?>/themes/<?= $xoopsConfig['theme_set'] ?>/style.css">
    <style type="text/css">
        html, body {
            font-size: 12px;
            margin: 0;
            padding: 0
        }

        img {
            border: none
        }
    </style>
</head>
<body>
<p style="text-align:center"><a href="<?= XOOPS_URL; ?>/" target="<?= $target; ?>"><img src="<?= XOOPS_URL; ?>/images/logo.gif" alt="<?= $xoopsConfig['sitename']; ?>"><br>
        <?= $xoopsConfig['sitename']; ?></a></p>
<?php
//(no list private forum)
$sql = 'SELECT forum_id ,forum_name FROM ' . $xoopsDB->prefix('bb_forums') . ' where forum_type = 0 order by forum_id';
$result = $xoopsDB->query($sql);
$theme_options = '';
while (list($forum_id, $forum_name) = $xoopsDB->fetchRow($result)) {
    $theme_options .= '<option value="' . $forum_id . '"';

    if ($_POST['forum_id'] == $forum_id) {
        $theme_options .= ' selected="selected"';
    }

    $theme_options .= '>' . $forum_name . '</option>';
}
if (!empty($theme_options)) {
    ?>
    <form action="forum.php" method="post">
        <select name="forum_id" onchange="submit();" size="1">
            <?= $theme_options ?>
        </select>
        <noscript><input type="submit" value="OK"></noscript>
    </form>
    <?php
}
$sql = 'SELECT t.topic_id, t.forum_id, t.subject FROM ' . $xoopsDB->prefix('bb_posts') . ' t, ' . $xoopsDB->prefix('bb_forums') . ' f WHERE f.forum_type <> 1 ';
if (!empty($_POST['forum_id'])) {
    $sql .= ' AND t.forum_id =' . (int)$_POST['forum_id'];
}
$sql .= ' and f.forum_id=t.forum_id ORDER BY t.post_time DESC';
$result = $xoopsDB->query($sql, 10, 0);
if (!$result) {
    echo 'An error as occured.';
} else {
    echo '<ul>';

    while (list($forum_id, $topic_id, $subject) = $xoopsDB->fetchRow($result)) {
        echo '<li><a href="' . XOOPS_URL . '/modules/xhnewbb/viewtopic.php?topic_id=' . $forum_id . '&forum=' . $topic_id . '" target="' . $target . '">' . $subject . '</a></li>' . "\n";
    }
}
?>
<address style="text-align:center;font-size:10px">Turbinado pelo <a href="http://www.exploz.com/modules/mydownloads/singlefile.php?cid=14&lid=23" target="<?= $target; ?>">Supports</a> - <a href="http://www.exploz.com/" target="<?= $target; ?>">ExploZ.Com</a></address>
</body>
</html>
