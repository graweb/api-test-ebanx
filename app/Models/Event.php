<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['account_id', 'type', 'amount'];
    public $timestamps = false;
}
