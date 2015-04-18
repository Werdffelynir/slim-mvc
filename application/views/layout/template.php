<?php

use app\Layout;
/**
 * @var $url
 * @var $title
 */

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>

    <link rel="stylesheet" href="/css/grid.css"/>
    <link rel="stylesheet" href="/css/main.css"/>

    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>

</head>
<body>

    <div class="page">

        <div class="header">
            <div class="logo">Application Name</div>
        </div>

        <div class="navigate">
            <a href="/">Home</a>
            <a href="/structure">Structure</a>
            <a href="/documentation">Documentation</a>
            <a href="/download">Download</a>
            <a href="/example">Example</a>
            <a href="/contacts">Contacts</a>
            <a href="/login">Login</a>
        </div>

        <div class="content full clear">
            <?php Layout::output(); ?>
        </div>

        <div class="footer clear">
            Copyright © - 2015 SunLight, Inc. OL Werdffelynir. All rights reserved. <br>
            Was compiled per: <?php echo round(microtime(true) - START_TIMER, 4); ?> sec.
        </div>

    </div>

</body>
</html>