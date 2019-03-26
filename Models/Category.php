<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 * @package App\Models
 * @version March 20, 2019, 5:55 am UTC
 *
 * @property string category
 * @property string description
 * @property integer parent_category
 */
class Category extends Model
{
    use SoftDeletes;

    public $table = 'categories';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'category',
        'description',
        'parent_category'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'category' => 'string',
        'description' => 'string',
        'parent_category' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category' => 'required',
        'description' => 'required',
        'parent_category' => 'sometimes|nullable'
    ];

    public function parentcategory()
    {
        return $this->belongsTo('App\Models\Category', 'parent_category');
    }

    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }

}
