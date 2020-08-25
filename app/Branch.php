<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    // Table Name
    protected $table = 'branches';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
