<?php

namespace App\Views\Handlers;

use Simplon\Frontend\Frontend;
use Simplon\Helper\SingletonTrait;

class SayView
{
    use SingletonTrait;

    /**
     * @param array $params
     *
     * @return string
     */
    protected function renderLayout(array $params)
    {
        return Frontend::renderTemplate('Layouts/BaseLayout', $params);
    }

    /**
     * @param array $params
     *
     * @return string
     */
    public function renderHello(array $params)
    {
        return $this->renderLayout([
            'content' => Frontend::renderTemplate('Say/helloTemplate', $params),
        ]);
    }
} 