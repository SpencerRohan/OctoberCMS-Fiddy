<?php namespace Fiddy\Site\Models;

use Model;

/**
 * Restaurant Model
 */
class Restaurant extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'fiddy_site_restaurants';

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
        $logo = Image::find($this->logo_id);
        echo '<img src="http://oct-sandbox.dev/storage/app/media/'.$logo->href.'" alt="'.$logo->alt.'" width="100px"/>';
    }

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'logo' => 
        [ 
            'fiddy\site\models\image',
            'table'=>'fiddy_site_images',
            'key'=>'logo_id',
            'otherKey'=>'id'        
        ] 
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}