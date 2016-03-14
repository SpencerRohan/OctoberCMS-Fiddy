<?php namespace Fiddy\Site\Models;

use Model;

/**
 * phone Model
 */
class Phone extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'fiddy_site_phones';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne          = [];
    public $hasMany         = [];
    public $belongsTo       = [];
    public $belongsToMany   = [];
    public $morphTo         = [
        'contactable' => []
        
    ];

    public $morphOne    = [];
    public $morphMany   = [];
    public $attachOne   = [];
    public $attachMany  = [];

}