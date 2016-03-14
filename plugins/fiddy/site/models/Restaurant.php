<?php namespace Fiddy\Site\Models;

use Model;

/**
 * Restaurant Model
 */
class Restaurant extends Model
{
    /**
     * Validation
     */
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'name' => 'required',
    ];

    public $customMessages = [
        'name.required' => "Restaurant name is required"
    ];


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

    /**
     * 
     * @return null Echo image
     */
    public function getImageAttribute()
    {
        $logo = $this->logo;
        if ($logo):
        echo '<img src="http://oct-sandbox.dev/storage/app/media/'.$logo->href.'" alt="'.$logo->alt.'" width="50px"/>';
        endif;
    }

    public function getLocationsAttribute()
    {
        $addresses = $this->addresses;
        foreach ($addresses as $address):
            echo '<li>'.$address->address.'</li>';
        endforeach;
    }

    /**
     * @var array Relations
     */
    public $hasOne    = [];
    
    public $hasMany   = [
        'addresses' => 
            [ 
                'fiddy\site\models\address',
                'table'         => 'fiddy_site_addresses',
                'key'           => 'restaurant_id',
                'otherKey'      => 'id'
            ] 
    ];

    public $belongsTo = [
        'logo' => 
            [ 
                'fiddy\site\models\image',
                'table'         => 'fiddy_site_images',
                'key'           => 'logo_id',
                'otherKey'      => 'id'
            ] 
    ];
    
    public $belongsToMany   = [];
    public $morphTo         = [];
    public $morphOne        = [];
    public $morphMany       = ['phones' => ['Fiddy\Site\Models\Phone', 'name' => 'contactable']];
    public $attachOne       = [];
    public $attachMany      = [];

}