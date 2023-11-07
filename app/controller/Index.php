<?php

namespace app\controller;

use app\service\Test;
use muyomu\vessel\framework\BaseController;
use muyomu\vessel\http\exception\FileNotFoundException;
use muyomu\vessel\ioc\annotation\AutoWired;

class Index extends BaseController
{
    #[AutoWired]
    private Test $two;

    /**
     * @throws FileNotFoundException
     */
    public function index():void
    {
        $this->response->doAudioResponse($this->two->show());
    }
}