<?php namespace Idnepal\Timeline\Components;

use Cms\Classes\ComponentBase;
use Idnepal\Timeline\Models\Timeline;

class TimelineCompo extends ComponentBase
{
    public $timelines;
    public function componentDetails()
    {
        return [
            'name'        => 'Timeline Component',
            'description' => 'Timeline'
        ];
    }

    public function defineProperties()
    {
        return [
            'noOfRow' => [
                'title' => 'No of Row',
                'description' => 'no of row to display',
                'default' => '5',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Only numbers are allowed'
            ],
            'truncate' => [
                'title' => 'Truncate',
                'description' => 'display no of characters',
                'default' => '250',
            ]
            
        ];
    }

    public function onRun(){
        $this->timelines = $this->_loadtimeline();
    }

    public function _loadtimeline(){
        if($this->property('noOfRow') > 0){
            return Timeline::take($this->property('noOfRow'))->orderBy('date','asc')->get();
        }
    }
}
