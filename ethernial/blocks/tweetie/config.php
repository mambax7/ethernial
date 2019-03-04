<?php

$xoopsOption['nocommon'] = 1;
require dirname(__DIR__) . '/../../../mainfile.php';

define('XOOPS_CACHE_PATH', XOOPS_VAR_PATH . '/caches/xoops_cache');

include XOOPS_CACHE_PATH . '/tweetie.php';
