<?php namespace Fiddy\Site\Models;

use Model;

/**
 * Image Model
 */
class Image extends Model
{
    
    /**
     * Validation
     */
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'description'   => ['unique:fiddy_site_images', 'max:50'],
        'href'          => 'required',
        'alt'           => 'max:30',
    ];

    public $customMessages = [
        'description.unique'    => "Description must be unique. That description is being used",
        'description.max'       => "Description must be under 50 characters",
        'href.required'         => "Media Selection is required",
        'alt.max'               => "Alt Tag must be under 30 characters",
    ];

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

    /**
     * 
     * @return null Echo image
     */
    public function getImageAttribute()
    {
        $image = $this;
        echo '<img src="http://oct-sandbox.dev/storage/app/media/'.$image->href.'" alt="'.$image->alt.'" width="100px"/>';
    }

    /**
     * @var array Relations
     */
    public $hasOne      = [];
    public $hasMany     = [
        'restaurants' => 
            [ 
                'fiddy\site\models\restaurants',
                'table'         => 'fiddy_site_restaurants',
                'key'           => 'logo_id',
                'otherKey'      => 'id'
            ] 
    ];
    public $belongsTo       = [];
    public $belongsToMany   = [];
    public $morphTo         = [];
    public $morphOne        = [];
    public $morphMany       = [];
    public $attachOne       = [];
    public $attachMany      = [];

}