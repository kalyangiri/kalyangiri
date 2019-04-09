<?php namespace Idnepal\Timeline;

use System\Classes\PluginBase;


class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return[
            'Idnepal\Timeline\Components\TimelineCompo' => 'timeline'
        ];
    }

    public function registerSettings()
    {
    }
}
