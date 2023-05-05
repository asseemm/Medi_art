<?php namespace RainLab\Blog\Models;

use Model;

/**
 * Model
 */
class ServicesModule extends Model
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
    public $table = 'rainlab_blog_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
