<?php namespace Fiddy\Site\Models;

use Model;

/**
 * Address Model
 */
class Address extends Model
{
    /**
     * Validation
     */
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'street'        => 'required',
        'city'          => 'required',
        'state'         => ['required','min:2', 'max:2'],
        'zip'           => ['required','max:10'],
        'restaurant'    => 'required',
    ];

    public $customMessages = [
        'street.required'   => "Please enter a Street Address",
        'city.required'     => "Please enter a City",
        'state.min'         => "Please enter a proper state abbreviation",
        'state.max'         => "Please enter a proper state abbreviation",
        'zip.required'      => "Zip Code is required",
        'zip.max'           => "Zip Code not valid",
        'restaurant'        => "Please choose a Restaurant to link address",
    ];

    public function getAddressAttribute() 
    {
        $address = $this;
        return $this->street.' '.$this->city.', '.$this->state.' '.$this->zip;

    }

    public function getEstablishmentAttribute() 
    {
        $restaurant = $this->restaurant;
        return $restaurant->name;

    }

    /**
     * @var string The database table used by the model.
     */
    public $table = 'fiddy_site_addresses';

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
    public $hasOne      = [];
    public $hasMany     = [];
    public $belongsTo   = [
        'restaurant' => 
            [ 
                'fiddy\site\models\restaurant',
                'table'         => 'fiddy_site_restaurants',
                'key'           => 'restaurant_id',
                'otherKey'      => 'id'
            ] 
    ];
    public $belongsToMany   = [];
    public $morphTo         = [];
    public $morphOne        = [];
    public $morphMany       = [];
    public $attachOne       = [];
    public $attachMany      = [];

}