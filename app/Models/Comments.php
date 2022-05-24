<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table =  'comments_tbl';

    protected $primaryKey = 'id';

    //restricting eloquent from managing timestamp
    public $timestamps = false;

    protected $fillable = [
        'com_name',
        'com_comments',
        'com_date'
    ];
}
