<?php

/*
 * --------------------------------------------------
 * Here is the position to write your route rules.
 * --------------------------------------------------
 */

use muyomu\vessel\Vessel;

Vessel::registerWebRoute(array(
    "/"=>[
        "controller"=>"one",
        "method"=>"index"
    ]
));