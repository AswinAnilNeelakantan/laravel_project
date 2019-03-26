<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Validator;

/**
 * Class Image
 * @package App\Models
 * @version March 20, 2019, 10:18 am UTC
 *
 * @property string image_url
 * @property integer category
 * @property integer type_id
 * @property integer image_type
 */
class Image extends Model
{
    use SoftDeletes;

    public $table = 'images';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'image_url',
        'type',
        'type_id',
        'image_type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'image_url' => 'string',
        'type' => 'integer',
        'type_id' => 'integer',
        'image_type' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image_url' => 'sometimes|nullable',
        'type' => 'required',
        'type_id' => 'required',
        'image_type' => 'required'
    ];

    public function type()
    {
        return $this->hasOne('App\Models\Category', 'id');
    }
}
