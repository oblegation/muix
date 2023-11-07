<?php

/* --------------------------------------------------------------------
 * Here is the global config file.All config filed required by other
 * libraries should be written on this file.We hope that all library developer
 * and project makers should obey this rule.
 * --------------------------------------------------------------------
 */

use app\controller\Index;
use app\service\Test;
use muyomu\config\ConfigApi;
use muyomu\vessel\config\VesselConfigClass;
use muyomu\vessel\Vessel;

ConfigApi::configure(VesselConfigClass::class,array(
    "port"=>9090
));

Vessel::registerVessel(array(
    "one"=>[
        "class"=>Index::class,
        "builder"=>function():object{
            return new Index();
        }
    ],
    "two"=>[
        "class"=> Test::class,
        "builder"=>function(): Test{
            return new Test();
        }
    ]
));