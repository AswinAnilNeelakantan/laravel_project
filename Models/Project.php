<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Project
 * @package App\Models
 * @version March 20, 2019, 5:51 am UTC
 *
 * @property string project_name
 * @property string project_desciption
 * @property integer category_id
 */
class Project extends Model
{
    use SoftDeletes;

    public $table = 'projects';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'project_name',
        'project_description',
        'category_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'project_name' => 'string',
        'project_description' => 'string',
        'category_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'project_name' => 'required',
        'project_description' => 'required',
        'category_id' => 'sometimes|nullable'
    ];


    public function category_id()
    {
        return $this->belongsto('App\Models\Category', 'category_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }



}
