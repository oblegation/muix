<?php

/*-------------------------------------------------------------------------------
 * Here is the entrance of this project.
 * ------------------------------------------------------------------------------
 */


/**
 * 引入自动加载文件
 */

use muyomu\vessel\Vessel;

require "../vendor/autoload.php";
require "../system/autoload.php";

Vessel::run();