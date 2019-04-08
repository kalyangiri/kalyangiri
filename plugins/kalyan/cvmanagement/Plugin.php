<?php namespace Kalyan\CvManagement;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
	    return 
		    [
		    'Kalyan\Cvmanagement\Components\Cvcomponent'=>'cvitem']}

    public function registerSettings()
    {
    }
}
