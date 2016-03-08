<?php namespace Fiddy\Site\Models;

use Model;

/**
 * Image Model
 */
class Image extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'fiddy_site_images';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    public function getImageAttribute()
    {
        $image = Image::find($this->id);
        echo '<img src="http://oct-sandbox.dev/storage/app/media/'.$image->href.'" alt="'.$image->alt.'" width="100px"/>';
    }

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'restaurants' => 
        [ 
            'fiddy\site\models\restaurants',
            'table' => 'fiddy_site_restaurants',
            'key' => 'id',
            'otherKey' => 'logo_id'
        ] 
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}