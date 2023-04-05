<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Document
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $path
 * @property $relevance
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Document extends Model
{
    
    static $rules = [
		'name' => 'required',
		'description' => 'required',
		'path' => 'required',
		'relevance' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description','path','relevance'];



}
