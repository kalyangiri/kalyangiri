<?php namespace Kalyan\CvManagement\Models;

use Model;

/**
 * Model
 */
class Cvkalyan extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'kalyan_cvmanagement_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    /**
     * Realation to the the database
     */
    public $attachOne = [
        'featured_image' => ['System\Models\File']
    ];
    public $attachMany = [];
}
