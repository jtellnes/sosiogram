<?php

namespace Sosiogram;

use Illuminate\Database\Eloquent\Model;

class Context extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contexts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
