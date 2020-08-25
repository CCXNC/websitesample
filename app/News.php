<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    // Table Name
    protected $table = 'news';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
