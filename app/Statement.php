<?php

namespace Sosiogram;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'statements';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['survey', 'context', 'by_user', 'ref_user'];
}
