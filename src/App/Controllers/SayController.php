<?php

namespace App\Controllers;

use App\Managers\Say\SayManager;
use App\Views\Handlers\SayView;

class SayController
{
    /**
     * @return string
     */
    public function hello()
    {
        $params = SayManager::getInstance()->getHello();

        return SayView::getInstance()->renderHello($params);
    }
} 