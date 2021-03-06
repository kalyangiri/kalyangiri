<?php namespace Idnepal\Timeline\Models;

use Model;

/**
 * Model
 */
class Timeline extends Model
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
    public $table = 'idnepal_timeline_timeline';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
