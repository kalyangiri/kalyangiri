<?php namespace Kalyan\CvManagement\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class CV_Management extends Controller
{
    public $implement = [    ];
    
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Kalyan.CvManagement', 'main-menu-item');
    }
}
