<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /**
     * Fields that can be mass assigned
     * @link https://laravel.com/docs/eloquent#mass-assignment
     *
     * @var string[]
     */
    protected $fillable = ['name'];
}
